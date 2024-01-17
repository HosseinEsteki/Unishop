<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Rate extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'user_id',
        'amount'
    ];

    #region Bootable
    protected static function boot()
    {
        parent::creating(function ($rate) {
            $rate->user_id = Auth::id();
        });
        parent::boot();
    }
    #endregion
    #region Relations
    public function products()
    {
        return $this->belongsTo(Product::class);
    }
    #endregion

}
