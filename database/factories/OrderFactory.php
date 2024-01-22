<?php

namespace Database\Factories;

use App\Http\Classes\Enums\OrderStatus;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $status = OrderStatus::cases()[random_int(1, 3)];
        return [
            'status' => $status->name
        ];
    }
}
