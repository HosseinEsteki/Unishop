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
        $settings = [
            [
                'name' => 'logoAddress',
                'value' => '/unishop-theme/img/logo/logo.png'
            ], [
                'name' => 'storeName',
                'value' => 'یونی شاپ'
            ],
        ];

        Setting::insert($settings);
    }
}
