<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'title'=>'elite sadasds',
            'price'=>19.03,
            'quantity'=>3,
            'category_id'=>1,
            'brand_id'=>1,
            'description'=>'nothing to describe',

        ]);
        Product::create([
            'title'=>'elite dsadas',
            'price'=>122.03,
            'quantity'=>5,
            'category_id'=>2,
            'brand_id'=>3,
            'description'=>'nothing to describe',

        ]);
    }
}
