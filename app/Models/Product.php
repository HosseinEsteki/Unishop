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
//    Bootable

//    Attributes
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


    //Relations
    public function rates(): HasMany
    {
        return $this->hasMany(Rate::class);
    }
}
