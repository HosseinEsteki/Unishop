<?php

namespace App\Models;

use App\Http\Classes\Enums\Errors;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\Auth;
use function PHPUnit\Framework\isEmpty;

class Cart extends Model
{
    use HasFactory;

    protected $fillable = [
        'ip_address',
        'user_id',
        'product_id',
    ];
    protected $attributes = [
        'amount' => 1
    ];

    public static function getCurrentCarts(): Collection|Builder|null
    {
        $carts = self::where('ip_address', request()->ip());
        if ($userId = Auth::id())
            $carts = $carts->orWhere('user_id', $userId);
        if ($carts->count() > 0)
            $carts = $carts->get();

        return $carts;
    }

    public static function cartsPrice($carts)
    {
        if ($carts == null)
            return 0;
        $sum = 0;
        foreach ($carts as $cart) {
            $sum += $cart->product->price;
        }
        return $sum;
    }

    /**
     * Check if carts of current user null, fix it.
     * @return void
     */
    public static function sync(): void
    {
        $userId = Auth::user();
        if ($userId) {
            $carts = self::where('ip_address', request()->ip())->where('user_id', null)->get();
            foreach ($carts as $cart) {
                if (Cart::whereProductId($cart->product_id)->first() != null)
                    continue;
                $cart->user_id = $userId;
                $cart->save();
            }
        }
    }
    #region Bootable


    private function amountCheck($cart): bool|Cart
    {
        if (($c = Cart::where('user_id', $cart->user_id)->orWhere('ip_address', $cart->ip_address)->where('product_id', $cart->product_id)->first()) != null) {
            $c->amount += $cart->amount;
            if (Product::find($c->product_id)->amount < $c->amount) {
                session(['errors' => Errors::OutOFProductAmount]);
                return false;
            }
            return $c;
        }
        return true;
    }

    protected static function boot(): void
    {
//        TODO: Finaly It Should Be UnComment
        self::sync();
        //TODO: Check Working
        self::creating(function (Cart $cart) {
            if (!isEmpty($userId = Auth::id())) {
                $cart->user_id = $userId;
            }
            $cart->ip_address = request()->ip();
            $check = self::amountCheck($cart);
            if ($check === false) {
                return false;
            } elseif ($check === true) {
                parent::creating($cart);
                return true;
            } else {
                $check->update();
            }
            return true;
        });
        //TODO: set update about product numbers
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
