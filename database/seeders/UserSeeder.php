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
            'name' => 'pierre mitou',
            'email' => 'pierre.mitou1@gmail.com',
            'password' => '$2y$10$ZlIIKyjKwDtaD9lovaJ.7uWrg0TjKWR27a3gi5bP0X319BZ/UZ7w2'

        ]);
    }
}
