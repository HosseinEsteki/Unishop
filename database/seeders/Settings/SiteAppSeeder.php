<?php

namespace Database\Seeders\Settings;

use App\Models\Photo;
use App\Models\Settings\SiteApp;
use Illuminate\Database\Seeder;

class SiteAppSeeder extends Seeder
{
    public function run(): void
    {
        $photoGoogleStore = Photo::create();
        $photoAppleStore = Photo::create();
        $photoWindowsStore = Photo::create();
        $markets = [
            [
                'name' => 'گوگل پلی',
                'priority' => 0,
                'link' => 'https://play.google.com/my-link',
                'photo_id' => $photoGoogleStore->id
            ], [
                'name' => 'اپل استور',
                'priority' => 1,
                'link' => 'https://store.apple.com/my-link',
                'photo_id' => $photoAppleStore->id
            ], [
                'name' => 'ویندوز استور',
                'priority' => 2,
                'link' => 'https://store.windows.com/my-link',
                'photo_id' => $photoWindowsStore->id
            ],
        ];
        SiteApp::insert($markets);
    }
}
