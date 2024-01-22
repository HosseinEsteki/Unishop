<?php

namespace Database\Factories;

use App\Http\Classes\Enums\CommentPointName;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CommentPoint>
 */
class CommentPointFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'point' => CommentPointName::cases()[random_int(0, 1)]->name,
            'description' => fake()->words(random_int(3, 15), true)
        ];
    }
}
