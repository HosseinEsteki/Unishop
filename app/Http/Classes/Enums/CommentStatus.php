<?php

namespace App\Http\Classes\Enums;
enum CommentStatus: string
{
    case Pending = 'در انتظار پذیرش';
    case Accepted = 'پذیرفته شده';
    case Denied = 'رد شده';
}
