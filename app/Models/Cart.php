<?php

namespace App\Models;

use App\Http\Classes\Enums\Errors;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\Auth;

class Cart extends Model
{
    use HasFactory;

    protected $primaryKey = ['user_id', 'product_id'];
    public $incrementing = false;
    protected $fillable = [
        'user_id',
        'product_id',
    ];
    protected $attributes = [
        'amount' => 1
    ];

    #region Bootable
    protected static function boot(): void
    {
        parent::creating(function (Cart $cart) {
//            $cart->user_id=Auth::id();
            if (($c = Cart::where('user_id', $cart->user_id)->where('product_id', $cart->product_id)->first()) != null) {
                $c->amount += $cart->amount;
                if (Product::find($c->product_id)->amount < $c->amount) {
                    \session(['errors' => Errors::OutOFProductAmount]);
                    return false;
                }
                $c->update();
                return false;
            }
            return true;
        });
        parent::boot();
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
