<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Admin2',
                'username' => 'admin2',
                'email'=>'admin@live.com.mx',
                'role'=>'admin',
                'status'=>'active',
                'password'=>bcrypt('admin123'),
            ]
            ]);
    }
}
