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
        $p1 = Product::create([
            'title' => "محصول 1",
            'short_description' => "این اولین محصول ماست",
            'description' => "توضیحات اولین محصول",
            'address' => "p1",
        ]);
        $p1->rates()->create(['user_id' => 1, 'amount' => 3]);
        $p1->rates()->create(['user_id' => 2, 'amount' => 2]);
        $p1->rates()->create(['user_id' => 3, 'amount' => 2]);
        $p1->rates()->create(['user_id' => 4, 'amount' => 4]);
        $p1->rates()->create(['user_id' => 5, 'amount' => 1]);
//        $p2=Product::create([
//            'title'=>"",
//            'short_description'=>"",
//            'description'=>"",
//            'address'=>"",
//        ]);
    }
}
