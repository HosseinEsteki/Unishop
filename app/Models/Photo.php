<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    use HasFactory;

    protected $fillable = [
        'alt'
    ];

    #region Relations
    public function category()
    {
        return $this->hasOne(Category::class);
    }

    public function products()
    {
        return $this->belongsToMany(Product::class);
    }
    #endRegion
}
