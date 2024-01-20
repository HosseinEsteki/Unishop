<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\Rate;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Rate>
 */
class RateFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        Rate::preventLazyLoading();
        $productIds = Product::all('id');
        $userIds = User::all('id');
        $updated_at = $this->faker->dateTime;
        $created_at = $this->faker->dateTime($updated_at);
        return [
            'user_id' => $userIds->random(),
            'amount' => random_int(1, 5),
            'product_id' => $productIds->random(),
            'created_at' => $created_at,
            'updated_at' => $updated_at
        ];
    }
}
