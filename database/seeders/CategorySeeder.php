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
                'address' => 'glass',
                'photo_id' => DefaultPhoto::Category
            ], [
                'name' => 'پلاستیک',
                'address' => 'plastic',
                'photo_id' => DefaultPhoto::Category
            ], [
                'name' => 'قابلمه و ماهیتابه',
                'address' => 'pot',
                'photo_id' => DefaultPhoto::Category
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
                'address' => 'parch',
                'photo_id' => DefaultPhoto::Category,
            ], [
                'parent' => 1,
                'name' => 'نیم لیوان',
                'address' => 'estekan',
                'photo_id' => DefaultPhoto::Category,
            ], [
                'parent' => 1,
                'name' => 'ظرف غذا',
                'address' => 'food-zarf',
                'photo_id' => DefaultPhoto::Category,
            ], [
                'parent' => 2,
                'name' => 'آینه حمام',
                'address' => 'doosh',
                'photo_id' => DefaultPhoto::Category,
            ], [
                'parent' => 2,
                'name' => 'بهداشت منزل',
                'address' => 'behdasht',
                'photo_id' => DefaultPhoto::Category,
            ], [
                'parent' => 2,
                'name' => 'مدیریت لباس ها',
                'address' => 'dress',
                'photo_id' => DefaultPhoto::Category,
            ], [
                'parent' => 3,
                'name' => 'سرویس قابلمه',
                'address' => 'service',
                'photo_id' => DefaultPhoto::Category,
            ], [
                'parent' => 3,
                'name' => 'چدن',
                'address' => 'chodan',
                'photo_id' => DefaultPhoto::Category,
            ], [
                'parent' => 3,
                'name' => 'گرانیت',
                'address' => 'granit',
                'photo_id' => DefaultPhoto::Category,
            ], [
                'parent' => 3,
                'name' => 'روحی',
                'address' => 'roohi',
                'photo_id' => DefaultPhoto::Category,
            ], [
                'parent' => 3,
                'name' => 'قابلمه ماهیتابه تک',
                'address' => 'tak',
                'photo_id' => DefaultPhoto::Category,
            ],
        ];
        for ($i = 0; $i < count($categories); $i++) {
            $category = Category::create($categories[$i]);
            $category->tags()->sync($tags->random(3));
        }
    }
}
