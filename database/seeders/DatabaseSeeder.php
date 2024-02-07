<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Setting;
use Database\Seeders\Settings\MarketMobileSeeder;
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
            ProductSeeder::class,
            CategorySeeder::class,
            SocialMediaSeeder::class,
            TopBarSeeder::class,
            SettingSeeder::class,
            MenuSeeder::class,
            PageSeeder::class,
            MarketMobileSeeder::class,

        ]);
    }

    private function TruncateDatabase(): void
    {
        Artisan::call('migrate:fresh');
    }
}
