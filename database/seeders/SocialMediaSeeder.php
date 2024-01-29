<?php

namespace Database\Seeders;

use App\Models\Settings\SocialMedia;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SocialMediaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $items = [
            [
                'name' => 'facebook',
                'address' => 'https://facebook.com/esi',
                'icon' => 'socicon-facebook'
            ], [
                'name' => 'twitter',
                'address' => 'https://twitter.com/esi',
                'icon' => 'socicon-twitter'
            ], [
                'name' => 'instagram',
                'address' => 'https://instagram.com/esi',
                'icon' => 'socicon-instagram'
            ], [
                'name' => 'telegram',
                'address' => 'https://telegram.com/esi',
                'icon' => 'socicon-telegram'
            ]
        ];
        SocialMedia::insert($items);
    }
}
