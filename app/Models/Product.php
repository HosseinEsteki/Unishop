<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\Auth;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'short_description',
        'description',
        'address'
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

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    public function photos()
    {
        return $this->hasMany(Photo::class);
    }
    #endregion
}
