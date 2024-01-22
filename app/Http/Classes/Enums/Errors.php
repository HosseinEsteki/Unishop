<?php

namespace App\Http\Classes\Enums;

enum Errors: string
{
    case OutOFProductAmount = "مقدار محصول مورد نظر فراتر از موجودی ماست";
}
