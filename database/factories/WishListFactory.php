<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\WishList;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<WishList>
 */
class WishListFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $products = Product::all('id')->pluck('id');
        $users = Product::all('id')->pluck('id');
        return [
            'product_id' => $products->random(),
            'user_id' => $users->random()
        ];
    }
}
