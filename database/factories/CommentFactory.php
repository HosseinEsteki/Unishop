<?php

namespace Database\Factories;

use App\Http\Classes\Enums\CommentStatus;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $userIds = User::all('id');
        return [
            'title' => $this->faker->words(3, true),
            'description' => $this->faker->text,
            'user_id' => $userIds->random(),
            'status' => CommentStatus::cases()[random_int(0, 2)]
        ];
    }
}
