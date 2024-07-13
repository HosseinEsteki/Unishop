<?php

namespace Database\Seeders\Modules;

use App\Models\Modules\Contact;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    public function run(): void
    {
        Contact::insert([
            [
                'title' => 'سرویس‌های مشتری',
                'email' => 'costomers@unishop.ir',
                'phone' => '09123456789',
                'response_at' => '3 روز کاری'
            ], [
                'title' => 'پشتیبانی فنی',
                'email' => 'support@unishop.ir',
                'phone' => '09123456789',
                'response_at' => '5 روز کاری'
            ],
        ]);
    }
}
