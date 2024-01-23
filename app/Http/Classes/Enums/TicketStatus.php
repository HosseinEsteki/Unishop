<?php

namespace App\Http\Classes\Enums;

enum TicketStatus: string
{
    case Open = 'باز';
    case Close = 'بسته';
}
