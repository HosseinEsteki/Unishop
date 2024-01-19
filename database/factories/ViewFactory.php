<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\View>
 */
class ViewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $productIds = Product::all('id');
        $updated_at = $this->faker->dateTime;
        $created_at = $this->faker->dateTime($updated_at);
        $userIds = User::all('id');
//        var_dump($productIds);
        return [
            'ip_address' => $this->faker->ipv4(),
            'user_id' => $userIds->random(),
            'product_id' => $productIds->random(),
            'created_at' => $created_at,
            'updated_at' => $updated_at
        ];
    }
}
