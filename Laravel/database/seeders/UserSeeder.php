<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => "Angelina Christy",
                'password' => bcrypt('password')
            ],
            [
                'name' => "Azizi Asadel",
                'password' => bcrypt('password')
            ],
            [
                'name' => "Marsha Lenathea",
                'password' => bcrypt('password')
            ],
            [
                'name' => "Shania Gracia",
                'password' => bcrypt('password')
            ],
            [
                'name' => "Yessica Tamara",
                'password' => bcrypt('password')
            ]
        ]);
    }
}
