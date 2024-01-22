<?php

namespace App\Http\Classes\Enums;
enum OrderStatus: string
{
    case Pended = 'پرداخت';
    case Processing = 'در حال آماده سازی';
    case Sent = 'ارسال شده';
    case delivered = 'تحویل داده شده';
}
