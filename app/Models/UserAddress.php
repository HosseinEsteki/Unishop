<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserAddress extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'phone_number',
        'province',
        'city',
        'plaque',
        'postcode',
        'address'
    ];
}
