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
                'parent' => null
            ], [
                'name' => 'تماس با ما',
                'route' => 'contact-us',
                'parent' => null
            ]
        ];
        Page::insert($pages);
    }
}
