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
                'parent' => 1
            ], [
                'name' => 'تماس با ما',
                'route' => 'contact-us',
                'parent' => 1
            ], [
                'name' => 'محصولات',
                'route' => 'products.index',
                'parent' => 1
            ], [
                'name' => 'نمایش محصول',
                'route' => 'products.show',
                'parent' => 4
            ]
        ];

        Page::insert($pages);
    }
}
