<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Product>
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
            'category_id' => $this->faker->numberBetween(1, 10),
            'slug' => $this->faker->slug,
            'short_description' => $this->faker->words(20, true),
            'description' => $this->faker->words(100, true),
            'amount' => $this->faker->numberBetween(1, 30),
            'price' => $this->faker->numberBetween(100, 10000),
            'created_at' => $this->faker->dateTime(),
            'updated_at' => $this->faker->dateTime()
        ];
    }
}
