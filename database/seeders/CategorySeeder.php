<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['name' => 'pegunungan'],
            ['name' => 'pantai'],
            ['name' => 'pemandian'],
            ['name' => 'outbound']
        ];
        
        foreach ($categories as &$category) {
            Category::create($category);
        }
    }
}
