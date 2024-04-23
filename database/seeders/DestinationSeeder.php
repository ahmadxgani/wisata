<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class DestinationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('destinations')->insert([
            'name' => 'Gunung Gede',
            'description' => 'wisata muncak gunung gede',
            'address' => 'lorem ipsum dolor sit amet',
            'photo_path' => 'gununggede.jpg',
            'category_id' => 1,
            'link' => 'https://google.com'
        ]);
    }
}
