<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name'=>'computer',
            'slug'=>'PC'
        ]);
        Category::create([
            'name'=>'phone',
            'slug'=>'phone'
        ]);
        Category::create([
            'name'=>'watch',
            'slug'=>'Watch'
        ]);
    }
}
