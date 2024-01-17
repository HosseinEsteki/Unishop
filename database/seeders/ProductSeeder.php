<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Rate;
use App\Models\View;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $timestamp = ['created_at' => now(), 'updated_at' => now()];
        $p1 = Product::create([
                'title' => "محصول 1",
                'short_description' => "این اولین محصول ماست",
                'description' => "توضیحات اولین محصول",
                'address' => "p1",
            ] + $timestamp);
        Rate::insert(['user_id' => 1, 'amount' => 3, 'product_id' => $p1->id] + $timestamp);
        Rate::insert(['user_id' => 2, 'amount' => 2, 'product_id' => $p1->id] + $timestamp);
        Rate::insert(['user_id' => 3, 'amount' => 2, 'product_id' => $p1->id] + $timestamp);
        Rate::insert(['user_id' => 4, 'amount' => 4, 'product_id' => $p1->id] + $timestamp);
        Rate::insert(['user_id' => 5, 'amount' => 1, 'product_id' => $p1->id] + $timestamp);
        View::insert(['ip_address' => fake()->ipv4(), 'user_id' => 1, 'product_id' => $p1->id] + $timestamp);
        View::insert(['ip_address' => fake()->ipv4(), 'user_id' => 3, 'product_id' => $p1->id] + $timestamp);
        View::insert(['ip_address' => fake()->ipv4(), 'user_id' => 5, 'product_id' => $p1->id] + $timestamp);
        View::insert(['ip_address' => fake()->ipv4(), 'user_id' => 4, 'product_id' => $p1->id] + $timestamp);

    }
}
