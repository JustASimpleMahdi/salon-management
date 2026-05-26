<?php

namespace Database\Seeders;

use App\Models\User;
use App\RoleEnum;
use Illuminate\Database\Seeder;

class ManagerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'firstname' => 'یاسمن',
            'lastname' => 'شاکری',
            'national_code' => '1234567890',
            'username' => 'yasaman',
            'password' => '12345678',
            'phone' => '09353397248',
            'is_manager' => true,
        ]);
    }
}
