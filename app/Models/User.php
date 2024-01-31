<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Http\Classes\Enums\DefaultPhoto;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    protected $attributes = [
        'photo_id' => DefaultPhoto::Profile
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    #region Attributes
    public function profileImage(): Attribute
    {
        return Attribute::make(function () {
            return $this->photo->getUrl('user');
        });
    }

    public function cartsPrice(): Attribute
    {
        return Attribute::make(function () {
            $carts = $this->carts;
            $sum = 0;
            foreach ($carts as $cart) {
                $sum += $cart->product->price;
            }
            return $sum;
        });
    }
    #endregion

    #region Relations
    public function photo(): BelongsTo
    {
        return $this->belongsTo(Photo::class);
    }

    public function wishLists(): HasMany
    {
        return $this->hasMany(WishList::class);
    }

    public function orders(): HasMany
    {
        return $this->hasMany(Order::class);
    }

    public function comments(): HasMany
    {
        return $this->hasMany(User::class);
    }

    public function tickets(): HasMany
    {
        return $this->hasMany(Ticket::class);
    }

    /*
        public function ticketMessages(): HasMany
        {
            return $this->hasMany(TicketMessage::class);
        }
    */
    public function addresses(): HasMany
    {
        return $this->hasMany(UserAddress::class);
    }

    public function carts(): HasMany
    {
        return $this->hasMany(Cart::class);
    }

    #endregion
}
