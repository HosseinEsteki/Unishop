<?php

namespace Database\Seeders;

use App\Http\Classes\Enums\TopBarType;
use App\Models\Settings\TopBar;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TopBarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $items = [
            [
                'title' => 'قوانین و مقررات',
                'type' => TopBarType::Page->name,
                'link' => 'http://kolbe.ir/rules',
                'icon' => 'icon-map',
                'content' => 'قوانین و مقررات فروشگاه',
            ], [
                'title' => 'هزینه ارسال',
                'type' => TopBarType::Page->name,
                'link' => 'http://kolbe.ir/send',
                'icon' => 'icon-heart',
                'content' => 'محاسبه هزینه ارسال',
            ], [
                'title' => 'درباره ما',
                'type' => TopBarType::Page->name,
                'link' => 'http://kolbe.ir/about-us',
                'icon' => 'icon-mail',
                'content' => 'درباره ما',
            ], [
                'title' => 'تماس با ما',
                'type' => TopBarType::Page->name,
                'link' => 'http://kolbe.ir/contact-us',
                'icon' => 'icon-bell',
                'content' => 'تماس با ما',
            ],
        ];
        $socials = [
            [
                'title' => 'آدرس فیس بوک',
                'type' => TopBarType::Social->name,
                'content' => 'facebook'
            ], [
                'title' => 'آدرس توییتر',
                'type' => TopBarType::Social->name,
                'content' => 'twitter'
            ], [
                'title' => 'آدرس اینستا',
                'type' => TopBarType::Social->name,
                'content' => 'instagram'
            ], [
                'title' => 'آدرس تلگرام',
                'type' => TopBarType::Social->name,
                'content' => 'telegram'
            ],
        ];
        TopBar::insert($items);
        TopBar::insert($socials);
    }
}
