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
use App\Services\PayCellService;

class CheckMinute extends Controller
{
    public function index()
    {
        $ip = $_SERVER['REMOTE_ADDR'];

        $now = Carbon::now();
        $oneHourLater = $now->addHour(1);

        $finduser = User::where('end_date', '<=', $oneHourLater)
                    ->whereNotIn('id', FailedTransactions::pluck('user_id'))
                    ->get();

        foreach ($finduser as $user) {
            $service = app(PaycellService::class)->payment_process($user);

            if ($service == 1) {
                $user = User::find($user->id);

                $user->start_date = $now;
                $user->end_date = $user->start_date->addMonth();
                $user->status = 1;
                $user->update();

                SaveLog::save_log('Payment Transaction', 'Payment Transaction Was Completed Successfully', 'Success', $ip, $user->id);
            } elseif ($service == 0) {
                $save_to_failed = new FailedTransactions();

                $save_to_failed->user_id = $user->id;
                $save_to_failed->last_try_date = $now;
                $save_to_failed->failed_try = 1;
                $save_to_failed->save();

                SaveLog::save_log('Payment Transaction', 'Payment Transaction Failed', 'Error', $ip, $user->id);
            }
        }
    }
}
