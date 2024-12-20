<?php

namespace Database\Factories;

use App\Http\Classes\Enums\PhotoPath;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Photo>
 */
class PhotoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'alt' => $this->faker->words(random_int(1, 3), true),
            'model' => PhotoPath::Product->name
        ];
    }
}
