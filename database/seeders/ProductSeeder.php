<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Photo;
use App\Models\Product;
use App\Models\ProductDetail;
use App\Models\Rate;
use App\Models\Tag;
use App\Models\User;
use App\Models\View;
use App\Models\WishList;
use Database\Factories\TagFactory;
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
        User::factory(10)->has(WishList::factory(random_int(1, 3)))->create();

        Product::factory(5)->has(ProductDetail::factory())->create();

        View::factory(20)->create();
        Rate::factory(20)->create();

        Tag::factory(20)->create();
        Photo::factory(30)->create();
        Category::factory(15)->create();
    }
}
