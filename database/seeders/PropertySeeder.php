<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Property;
use Illuminate\Database\Seeder;

class PropertySeeder extends Seeder
{
    public function run(): void
    {
        $properties = Property::factory(10)->create();
        $products = Product::all();
        foreach ($products as $product) {
            $propertyCount = fake()->numberBetween(0, $properties->count());
            $propertiesProduct = $properties->random($propertyCount);
            foreach ($propertiesProduct as $property) {
                $product->properties()->attach($property, ['descriptions' => fake()->text(40)]);
            }
        }
    }
}
