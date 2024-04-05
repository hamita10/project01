<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $params = [
            'name' => 'hemita',
            'email' => 'hemita@gmail.com',
            'phone_no' => '9876543219',
            'age' => '20',
            'address' => 'surat',
            'password' => Hash::make('123456'),
        ];

        $admin = User::Create($params);
        $admin->assignRole('admin');
    }
}
