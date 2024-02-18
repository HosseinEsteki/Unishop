<?php

namespace Database\Seeders\Modules;

use App\Http\Classes\Enums\Modules\LinkType;
use App\Models\Modules\About;
use App\Models\Photo;
use App\Models\Product;
use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    public function run(): void
    {
        $records = [
            [
                'priority' => 1,
                'title' => 'جستجو، انتخاب، خرید آنلاین.',
                'photo_id' => Photo::create()->id,
                'content' => 'تنها کاری که باید انجام بدی زدن اون کلیک لعنتیه. پس اینهمه سر زدن اون کلید دست دست نکن. بجنب کار داریم.',
                'link_type' => LinkType::Link->name,
                'link_name' => 'مشاهده محصولات',
                'link_address' => route('products.index')
            ], [
                'priority' => 3,
                'title' => 'تحویل سریع در سراسر جهان.',
                'photo_id' => Photo::create()->id,
                'content' => 'برای ما آسیا و اروپا نداره. هرجا بخوای و به هر نحوی که بخوای ما میتونیم سفارشات شما رو ارسال کنیم حتی اگه دورترین نقطه توی آفریقا باشین.',
                'link_type' => LinkType::Link->name,
                'link_name' => 'مشاهده محصولات',
                'link_address' => route('products.index')
            ], [
                'priority' => 4,
                'photo_id' => Photo::create()->id,
                'title' => 'فروش آفلاین لوازم خانگی.',
                'content' => 'لوازم خانگی اعم از شیشه و بلور، لوازم پلاستیکی و همچنین قابلمه و ماهیتابه در این فروشگاه قابل عرضه میباشد. برای راحتی کار شما دوست عزیز میتوانید هر لحظه سفارش خود را ثبت کنید.',
                'link_type' => LinkType::Link->name,
                'link_name' => 'مشاهده محصولات',
                'link_address' => route('products.index')
            ]
        ];
        About::insert($records);
        About::insert([
            'priority' => 2,
            'photo_id' => Photo::create()->id,
            'title' => 'مانند فروشگاههای بزرگ ، شبیه یک اپلیکشن موبایل خرید کنید',
            'content' => 'کلبه در سه پلتفرم ویندوز، اندروید و IOS دارای اپلیکیشن های متفاوت است. شما میتوانید با مراجعه به این اپلیکیشن ها از امکانات متفاوت ما استفاده نمایید.',
            'link_type' => LinkType::Applications->name,
        ]);
    }
}
