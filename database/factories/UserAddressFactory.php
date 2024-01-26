<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UserAddress>
 */
class UserAddressFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'phone_number' => $this->faker->phoneNumber(),
            'province' => $this->faker->city,
            'city' => $this->faker->city,
            'plaque' => $this->faker->numberBetween(1, 100),
            'postcode' => $this->faker->postcode,
            'address' => $this->faker->address
        ];
    }
}
