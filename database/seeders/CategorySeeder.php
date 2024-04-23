<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [['name' => 'pegunungan'], ['name' => 'pantai'], ['name' => 'curug']];
        
        DB::table('categories')->insert(['name' => 'pegunungan']);
    }
}
