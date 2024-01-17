<?php

namespace App\Helpers;

use App\Models\Logs;

class SaveLog
{
    public static function save_log($process_name, $process_description, $proccess_status, $id, $user_id)
    {
        $log = new Logs();
        $log->process_name = $process_name;
        $log->process_description = $process_description;
        $log->proccess_status = $proccess_status;
        $log->process_ip = $id;
        $log->user_id = $user_id;
        $log->save();
    }
}
