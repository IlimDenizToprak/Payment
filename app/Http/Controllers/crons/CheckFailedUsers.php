<?php

namespace App\Http\Controllers\crons;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Logs;
use App\Models\CardInfoes;
use App\Models\FailedTransactions;
use App\Helpers\SaveLog;
use App\Helpers\SendSms;
use App\Services\PayCellService;

class CheckFailedUsers extends Controller
{
    public function index()
    {
        $ip = $_SERVER['REMOTE_ADDR'];

        $now = Carbon::now();
        $oneHourLater = $now->addHour(1);

        $failed_users = FailedTransactions::where('failed_try', '<', 3)->get();

        foreach ($failed_users as $failed_user) {
            $user = User::find($failed_user->user_id);

            $service = app(PaycellService::class)->payment_process($user);

            if ($service == 1) {
                $user = User::find($user->id);

                $user->start_date = $oneHourLater;
                $user->end_date = $user->start_date->addMonth();
                $user->status = 1;
                $user->update();

                SaveLog::save_log('Payment Transaction', 'Payment Transaction Was Completed Successfully', 'Success', $ip, $user->id);
            } elseif ($service == 0) {
                $failed_user_update = FailedTransactions::find($failed_user->id);

                $failed_user_update->last_try_date = $now;
                $failed_user_update->failed_try = $failed_user->failed_try + 1;
                $failed_user_update->update();

                $find_failed_user = User::find($failed_user_update->user_id);

                SaveLog::save_log('Payment Transaction', 'Payment Transaction Failed, Number Of Attempts Increased', 'Error', $ip, $find_failed_user->id);

                if ($failed_user_update->failed_try == 3) {
                    $find_user = User::where('id', '=', $failed_user_update->user_id)->first();
                    $find_user->status = 0;
                    $find_user->update();

                    SaveLog::save_log('Change Account Status', 'The Account Has Been Deactivated Due To Non-Payment.', 'Error', $ip, $find_failed_user->id);
                    SendSms::send_message($failed_user->id, $ip);

                    $failed_user_delete = FailedTransactions::find($failed_user->id);
                    $failed_user_delete->delete();

                    SaveLog::save_log('Delete Failed Users Info', 'Failed User Information Deletion', 'Success', $ip, $find_failed_user->id);
                }
            }
        }
    }
}
