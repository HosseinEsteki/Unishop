<?php

namespace Database\Seeders\Modules;

use App\Models\Modules\MarketAddress;
use Illuminate\Database\Seeder;

class MarketAddressSeeder extends Seeder
{
    public function run(): void
    {
        MarketAddress::insert([
            [
                'address' => 'اصفهان - نواب صفوی - یونی شاپ',
                'phone' => '0912345678',
                'email' => 'esfahan@unishop.ir',
            ], [
                'address' => 'کرمان - نواب صفوی - یونی شاپ',
                'phone' => '0912345678',
                'email' => 'kerman@unishop.ir',
            ], [
                'address' => 'یزد - نواب صفوی - یونی شاپ',
                'phone' => '0912345678',
                'email' => 'yazd@unishop.ir',
            ],
        ]);
    }
}
