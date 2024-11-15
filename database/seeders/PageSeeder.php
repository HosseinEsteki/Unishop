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
            'parent' => 2
        ]);
        $pages = [
            [
                'name' => 'درباره ما',
                'route' => 'about-us',
                'parent' => 3
            ], [
                'name' => 'تماس با ما',
                'route' => 'contact-us',
                'parent' => null
            ], [
                'name' => 'محصولات',
                'route' => 'products.index',
                'parent' => '3'
            ], [
                'name' => 'نمایش محصول',
                'route' => 'products.show',
                'parent' => 6
            ]
        ];

        Page::insert($pages);
    }
}
