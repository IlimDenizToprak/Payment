<?php

namespace App\Services;
use App\Models\CardInfoes;

class PayCellService
{
    public function payment_process($user)
    {
        $card_infoes = CardInfoes::where('user_id', '=', $user->id)->first();

        $card_name = $card_infoes->card_name;
        $card_number = $card_infoes->card_number;
        $card_exp_month = $card_infoes->exp_month;
        $card_exp_year = $card_infoes->exp_year;
        $card_cvv_code = $card_infoes->cvv_code;

        //BU KART BİLGİLERİ İLE PAYCELL'E İSTEKTE BULUNDUĞUMUZU VARSAYIYORUM VE 1'DEN 100'E KADAR RASTGELE SAYI TUTUYORUZ.
        //EĞER GELEN SAYI 20'DEN KÜÇÜKSE BAŞARISIZ, 20'DEN BÜYÜKSE BAŞARILI OLDUĞUNU VARSAYIYORUZ.

        $random = rand(0, 100);

        if ($random <= 20) {
            $payment_status = 0;
        } elseif ($random > 20) {
            $payment_status = 1;
        }

        return $payment_status;
    }
}
