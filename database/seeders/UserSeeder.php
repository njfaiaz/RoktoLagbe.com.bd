<?php

namespace Database\Seeders;

use App\Models\User;
use App\Enums\UserRole;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'Junayed Rahman Faiaz',
            'username' => 'Junayed-Rahman-Faiaz',
            'email' => 'admin@gmail.com',
            'role' => UserRole::SUPER_ADMIN->value,
            'password' => Hash::make('12345678'),
        ]);

        $users = ['Shifat', 'Sentu', 'Najmul Islam', 'Imran Huque', 'Tasmia Tanjum', 'Karima Akter', 'Khadija Islam', 'Ayan Islam', 'Monir Hossain'];

        foreach ($users as $user) {
            User::create([
                'name' => strtolower($user),
                'username' => User::generateUniqueUsername($user),
                'email' => strtolower($user) . '@gmail.com',
                'role' => UserRole::USER->value,
                'password' => Hash::make('password'),
                'remember_token' => Str::random(10),
            ]);
        }
    }
}
