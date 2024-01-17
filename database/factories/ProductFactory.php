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
//        dd(now()->toDateTimeLocalString());
        return [
            'title' => $this->faker->words(3, true),
            'short_description' => $this->faker->words(20, true),
            'description' => $this->faker->words(100, true),
            'address' => $this->faker->slug,
            'created_at' => $this->faker->dateTime(),
            'updated_at' => $this->faker->dateTime()
        ];
    }
}
