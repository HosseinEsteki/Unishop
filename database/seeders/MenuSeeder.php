<?php

namespace Database\Seeders;

use App\Http\Classes\ConvertToArray;
use App\Models\Category;
use App\Models\Menu;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = ConvertToArray::categoriesToArray(Category::all());
        $menus1 = [];
        $parentCounter = 1;
        foreach ($categories as $category) {
            $menu = [
                'parent' => null,
                'priority' => $parentCounter,
                'category_id' => $category['id'],
            ];
            $model = Menu::create($menu);
            $counter = 1;
            $menus = [];
            foreach ($category['items'] as $item) {
                $menus[] = [
                    'parent' => $model->id,
                    'priority' => $counter,
                    'category_id' => $item['id'],
                ];
                $counter++;
            }
            Menu::insert($menus);
        }
        $menus2[] = [
            'priority' => 4,
            'page_name' => 'درباره ما',
            'page_url' => '/about-us'
        ];
        $menus2[] = [
            'priority' => 5,
            'page_name' => 'تماس با ما',
            'page_url' => '/contact-us'
        ];

        Menu::insert($menus2);
    }
}
