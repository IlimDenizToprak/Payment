<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CardInfoes;

class CardInfoesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cards = [
            ['user_id' => 1, 'card_name' => 'İlim Deniz Toprak', 'card_number' => '1111222233334444', 'exp_month' => '01', 'exp_year' => '28', 'cvv_code' => '555'],
            ['user_id' => 2, 'card_name' => 'Handan Türkoğlu', 'card_number' => '1111222233334444', 'exp_month' => '01', 'exp_year' => '28', 'cvv_code' => '555'],
            ['user_id' => 3, 'card_name' => 'Bayram Uluad', 'card_number' => '1111222233334444', 'exp_month' => '01', 'exp_year' => '28', 'cvv_code' => '555'],
            ['user_id' => 4, 'card_name' => 'Gökhan Beltekin', 'card_number' => '1111222233334444', 'exp_month' => '01', 'exp_year' => '28', 'cvv_code' => '555'],
        ];

        foreach ($cards as $cardsData) {
            CardInfoes::firstorcreate($cardsData);
        }
    }
}
