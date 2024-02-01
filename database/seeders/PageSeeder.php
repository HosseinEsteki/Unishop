<?php

namespace Database\Seeders;

use App\Models\Page;
use Illuminate\Database\Seeder;

class PageSeeder extends Seeder
{
    public function run(): void
    {
        $pages = [
            [
                'name' => 'خانه',
                'route' => 'home',
                'parent' => null
            ], [
                'name' => 'درباره ما',
                'route' => 'about-us',
            ], [
                'name' => 'تماس با ما',
                'route' => 'contact-us',
            ]
        ];

        Page::insert($pages);
    }
}
