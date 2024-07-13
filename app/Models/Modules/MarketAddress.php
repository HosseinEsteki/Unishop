<?php

namespace App\Models\Modules;

use Illuminate\Database\Eloquent\Model;

class MarketAddress extends Model
{
    protected $fillable = [
        'address',
        'phone',
        'email',
    ];
}
