<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Setting;
use Database\Seeders\Modules\AboutSeeder;
use Database\Seeders\Modules\ContactSeeder;
use Database\Seeders\Modules\MarketAddressSeeder;
use Database\Seeders\Settings\SiteAppSeeder;
use Database\Seeders\Settings\SocialMediaSeeder;
use Database\Seeders\Settings\TopBarSeeder;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Artisan;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->TruncateDatabase();
        $this->call([
            PhotoSeeder::class,
            TagSeeder::class,
            CategorySeeder::class,
            ProductSeeder::class,
            PropertySeeder::class,
            SocialMediaSeeder::class,
            TopBarSeeder::class,
            SettingSeeder::class,
            MenuSeeder::class,
            PageSeeder::class,
            SiteAppSeeder::class,
            AboutSeeder::class,
            ContactSeeder::class,
            MarketAddressSeeder::class
        ]);
    }

    private function TruncateDatabase(): void
    {
        Artisan::call('migrate:fresh');
    }
}
