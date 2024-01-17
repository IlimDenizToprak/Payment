<?php

namespace App\Helpers;

use App\Helpers\SaveLog;
use App\Models\User;

class SendSms
{
    public static function send_message($failed_user_id, $ip)
    {
        $user = User::find($failed_user_id);
        $post = '{"auth":{"username":"hq.15667","password":"2vsi5m"},"MsgType":"Turkey", "DataCoding":"Standart","Originator":"Ankara SMS","Message":"Sayın üyemiz, ödeme işleminin başarısız olmasından dolayı hesabınız PASİF hale getirilmiştir.","To":["'.$user->phone.'"]}';

        $url = curl_init('panel.ankaratoplusms.com/jsonapi/Submit');
        curl_setopt($url, CURLOPT_POSTFIELDS, $post);
        curl_setopt($url, CURLOPT_CUSTOMREQUEST, 'POST');
        curl_setopt($url, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($url, CURLOPT_HTTPHEADER, ['Content-Type: application/json', 'Content-Length: ' . strlen($post)]);
        $result = curl_exec($url);
        $result = json_decode($result);

        print_r($result);

        SaveLog::save_log('Send Sms', 'Informational Message Has Been Sent. Number: '.$user->phone.'', 'Success', $ip, $failed_user_id);
    }
}
