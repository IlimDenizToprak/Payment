<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = [
            ['name' => 'İlim Deniz Toprak', 'email' => 'ilim@gmail.com', 'phone' => '5554443322', 'email_verified_at' => null, 'password' => '$2y$10$ed.UDEeeXdJN9IvWl2MrNetLvcf4z5I6bGUl2r7ZskikTohYLS/qO', 'remember_token' => null, 'status' => 1, 'start_date' => '2024-01-15 15:00:00', 'end_date' => '2024-02-15 14:00:00'],
            ['name' => 'Handan Türkoğlu', 'email' => 'handan@gmail.com', 'phone' => '5554443322', 'email_verified_at' => null, 'password' => '$2y$10$ed.UDEeeXdJN9IvWl2MrNetLvcf4z5I6bGUl2r7ZskikTohYLS/qO', 'remember_token' => null, 'status' => 1, 'start_date' => '2024-01-15 15:00:00', 'end_date' => '2024-02-15 14:00:00'],
            ['name' => 'Bayram Uluad', 'email' => 'bayram@gmail.com', 'phone' => '5554443322', 'email_verified_at' => null, 'password' => '$2y$10$ed.UDEeeXdJN9IvWl2MrNetLvcf4z5I6bGUl2r7ZskikTohYLS/qO', 'remember_token' => null, 'status' => 1, 'start_date' => '2024-01-15 15:00:00', 'end_date' => '2024-02-15 14:00:00'],
            ['name' => 'Gökhan Beltekin', 'email' => 'gokhan@gmail.com', 'phone' => '5554443322', 'email_verified_at' => null, 'password' => '$2y$10$ed.UDEeeXdJN9IvWl2MrNetLvcf4z5I6bGUl2r7ZskikTohYLS/qO', 'remember_token' => null, 'status' => 1, 'start_date' => '2024-01-15 15:00:00', 'end_date' => '2024-02-15 14:00:00']
        ];

        foreach ($user as $userData) {
            User::firstorcreate($userData);
        }
    }
}
