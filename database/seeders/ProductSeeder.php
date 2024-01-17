<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Rate;
use App\Models\View;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::factory(5)->create();
        View::factory(20)->create();
        Rate::factory(20)->create();
    }
}
