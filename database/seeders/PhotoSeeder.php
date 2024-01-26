<?php

namespace Database\Seeders;

use App\Models\Photo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PhotoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Photo::insert([
            [
                'alt' => 'avatar'
            ], [
                'alt' => 'product'
            ], [
                'alt' => 'category'
            ]
        ]);
    }
}
