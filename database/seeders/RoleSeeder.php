<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create(['id'=>1, 'name'=> 'admin', 'guard_name'=>'web',]);
        Role::create(['id'=>2, 'name'=> 'teacher', 'guard_name'=>'web',]);
    }
}
