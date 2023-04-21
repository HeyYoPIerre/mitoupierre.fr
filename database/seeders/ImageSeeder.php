<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('images')->insert([
            'filepath' => 'Archive-2.jpg',
            'alt' => ''
        ]);
        DB::table('images')->insert([
            'filepath' => 'Archive-8.jpg',
            'alt' => ''
        ]);
        DB::table('images')->insert([
            'filepath' => 'Archive-11.jpg',
            'alt' => ''
        ]);
        DB::table('images')->insert([
            'filepath' => 'Archive-14.jpg',
            'alt' => ''
        ]);
        DB::table('images')->insert([
            'filepath' => 'Archive-26-x.jpg',
            'alt' => ''
        ]);
        DB::table('images')->insert([
            'filepath' => 'Archive-33.jpg',
            'alt' => ''
        ]);
        DB::table('images')->insert([
            'filepath' => 'Archive-42.jpg',
            'alt' => ''
        ]);
        DB::table('images')->insert([
            'filepath' => 'Archive-46.jpg',
            'alt' => ''
        ]);
        DB::table('images')->insert([
            'filepath' => 'Archive-47.jpg',
            'alt' => ''
        ]);
    }
}
