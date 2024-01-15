<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Rate extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'user_id',
        'amount'
    ];

//    Bootable
    protected static function boot()
    {
        parent::boot();
        parent::creating(function ($rate) {
            $rate->user_id = Auth::id();
        });
    }
}
