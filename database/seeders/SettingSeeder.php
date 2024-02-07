<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Setting::truncate();
        $settings = [
            [
                'name' => 'logoAddress',
                'value' => '/unishop-theme/img/logo/logo.png'
            ], [
                'name' => 'storeName',
                'value' => 'یونی شاپ'
            ], [
                'name' => 'owner',
                'value' => 'حسین استکی'
            ], [
                'name' => 'phone',
                'value' => '09369783378'
            ], [
                'name' => 'mail',
                'value' => 'hosseinesteki77@gmail.com'
            ], [
                'name' => 'creator url',
                'value' => 'https://hosseinesteki.ir'
            ], [
                'name' => 'creator description',
                'value' => 'توسعه توسط حسین استکی'
            ], [
                'name' => '',
                'value' => ''
            ], [
                'name' => '',
                'value' => ''
            ], [

            ]
        ];

        Setting::insert($settings);
    }
}
