<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
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
    protected $primaryKey = ['user_id', 'product_id'];
    public $incrementing = false;

    #region Bootable
    protected static function boot(): void
    {
        parent::creating(function ($rate) {
            if (Rate::where('user_id', $rate->user_id)->where('product_id', $rate->product_id)->count() > 0)
                return false;
//            $rate->user_id = Auth::id();
            return true;
        });
        parent::boot();
    }
    #endregion
    #region Relations
    public function products(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
    #endregion

}
