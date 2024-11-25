<?php

namespace App\Http\Classes\Enums;

enum Sorting: string
{
    case relate = 'مرتبط‌ترین';
    case view = 'پربازدیدترین';
    case new = 'جدیدترین';
    case sell = 'پرفروش‌ترین';
    case poor = 'ارزان‌ترین';
    case expensive = 'گران‌ترین';
}
