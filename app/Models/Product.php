<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Support\Facades\Auth;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'name',
        'slug',
        'short_description',
        'description',
        'price',
        'amount'
    ];

    #region Attributes
    protected function rate(): Attribute
    {
        return Attribute::make(
            get: function () {
                $rates = $this->rates->pluck('amount');
                return $rates->average();
            },
        );
    }

    public function photo(): Attribute
    {
        return Attribute::make(function () {
            return $this->photos->first();
        });
    }
    #endregion
    #region Relations
    public function rates(): HasMany
    {
        return $this->hasMany(Rate::class);
    }

    public function views(): HasMany
    {
        return $this->hasMany(View::class);
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class);
    }

    public function photos(): BelongsToMany
    {
        return $this->belongsToMany(Photo::class);
    }

    public function wishLists(): HasMany
    {
        return $this->hasMany(WishList::class);
    }

    public function discounts(): BelongsToMany
    {
        return $this->belongsToMany(Discount::class);
    }

    public function sells(): HasMany
    {
        return $this->hasMany(Sell::class);
    }

    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class);
    }

    public function properties(): BelongsToMany
    {
        return $this->belongsToMany(Property::class)->withPivot('descriptions')->withTimestamps();
    }
    #endregion
}
