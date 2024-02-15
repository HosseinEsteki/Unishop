<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Laravel\SerializableClosure\UnsignedSerializableClosure;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cart>
 */
class CartFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $userIds = User::all('id');
        $product = Product::all()->random();
        return [
            'ip_address' => $this->faker->ipv4,
            'user_id' => $userIds->random(),
            'product_id' => $product->id,
            'amount' => $product->amount
        ];
    }
}
