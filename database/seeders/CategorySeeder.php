<?php

namespace Database\Seeders;

use App\Http\Classes\Enums\DefaultPhoto;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tags = Tag::all()->pluck('id');
        $mainCategories = [
            [
                'name' => 'شیشه و بلور',
                'slug' => 'glass',
                'photo_id' => DefaultPhoto::Category
            ], [
                'name' => 'پلاستیک',
                'slug' => 'plastic',
                'photo_id' => DefaultPhoto::Category
            ], [
                'name' => 'قابلمه و ماهیتابه',
                'slug' => 'pot',
                'photo_id' => DefaultPhoto::Category
            ], [
                'name' => 'همه محصولات',
                'slug' => 'all',
                'photo_id' => DefaultPhoto::Category,
                'priority' => 0
            ]
        ];
        for ($i = 0; $i < count($mainCategories); $i++) {
            $category = Category::create($mainCategories[$i]);
            $category->tags()->sync($tags->random(3));
        }
        $categories = [
            [
                'parent' => 1,
                'name' => 'پارچ و لیوان',
                'slug' => 'parch',
                'photo_id' => DefaultPhoto::Category,
            ], [
                'parent' => 1,
                'name' => 'نیم لیوان',
                'slug' => 'estekan',
                'photo_id' => DefaultPhoto::Category,
            ], [
                'parent' => 1,
                'name' => 'ظرف غذا',
                'slug' => 'food-zarf',
                'photo_id' => DefaultPhoto::Category,
            ], [
                'parent' => 2,
                'name' => 'آینه حمام',
                'slug' => 'doosh',
                'photo_id' => DefaultPhoto::Category,
            ], [
                'parent' => 2,
                'name' => 'بهداشت منزل',
                'slug' => 'behdasht',
                'photo_id' => DefaultPhoto::Category,
            ], [
                'parent' => 2,
                'name' => 'مدیریت لباس ها',
                'slug' => 'dress',
                'photo_id' => DefaultPhoto::Category,
            ], [
                'parent' => 3,
                'name' => 'سرویس قابلمه',
                'slug' => 'service',
                'photo_id' => DefaultPhoto::Category,
            ], [
                'parent' => 3,
                'name' => 'چدن',
                'slug' => 'chodan',
                'photo_id' => DefaultPhoto::Category,
            ], [
                'parent' => 3,
                'name' => 'گرانیت',
                'slug' => 'granit',
                'photo_id' => DefaultPhoto::Category,
            ], [
                'parent' => 3,
                'name' => 'روحی',
                'slug' => 'roohi',
                'photo_id' => DefaultPhoto::Category,
            ], [
                'parent' => 3,
                'name' => 'قابلمه ماهیتابه تک',
                'slug' => 'tak',
                'photo_id' => DefaultPhoto::Category,
            ],
        ];
        for ($i = 0; $i < count($categories); $i++) {
            $category = Category::create($categories[$i]);
            $category->tags()->sync($tags->random(3));
        }
    }
}
