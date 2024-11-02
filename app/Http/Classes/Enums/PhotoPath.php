<?php

namespace App\Http\Classes\Enums;

enum PhotoPath: string
{
    case Product = '/images/products/';
    case Category = '/images/categories/';
    case User = '/images/users/';
    case Theme = '/images/theme/';
}
