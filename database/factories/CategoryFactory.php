<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Photo;
use App\Models\Tag;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $photoId = Photo::all('id')->random();
        $updated_at = $this->faker->dateTime;
        $created_at = $this->faker->dateTime($updated_at);
        return [
            'name' => $this->faker->word(),
            'address' => $this->faker->slug,
            'photo_id' => $photoId,
            'created_at' => $created_at,
            'updated_at' => $updated_at
        ];
    }
}
