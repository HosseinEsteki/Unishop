<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
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
                $average = $rates->average();
                return $average;
            },
        );
    }

    public function photo(): Attribute
    {
        return Attribute::make(function () {
            return $this->photos->first()->getUrl('product');
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
    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Category::class);
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

    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class);
    }
    #endregion
}
