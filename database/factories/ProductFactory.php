<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $productName = $this->faker->words(3, true);
        return [
            'name' => $productName,
            'slug' => $this->faker->slug,
            'short_description' => $this->faker->words(20, true),
            'description' => $this->faker->words(100, true),
            'amount' => random_int(1, 30),
            'price' => random_int(100, 10000),
            'created_at' => $this->faker->dateTime(),
            'updated_at' => $this->faker->dateTime()
        ];
    }
}
