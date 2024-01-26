<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\WishList;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

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
            ProductSeeder::class
        ]);
    }

    private function TruncateDatabase(): void
    {
        Artisan::call('migrate:fresh');
    }
}
