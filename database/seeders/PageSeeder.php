<?php

namespace Database\Seeders;

use App\Models\Page;
use Illuminate\Database\Seeder;

class PageSeeder extends Seeder
{
    public function run(): void
    {
        Page::insert([
            'name' => 'خانه',
            'route' => 'home',
            'parent' => null
        ]);
        $pages = [
            [
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
