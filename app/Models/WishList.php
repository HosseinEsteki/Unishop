<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\Auth;

class WishList extends Model
{
    use HasFactory;

    protected $primaryKey = ['user_id', 'product_id'];
    public $incrementing = false;
    protected $fillable = [
        'user_id',
        'product_id'
    ];

    #region Boot
    protected static function boot(): void
    {
        parent::creating(function (Wishlist $wishList) {
            if (WishList::where('user_id', $wishList->user_id)->where('product_id', $wishList->product_id)->count() > 0) {
                return false;
            }
//            $wishList->user_id=Auth::id();
            return true;
        });
    }
    #endregion
    #region Relations
    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    #endregion
}
