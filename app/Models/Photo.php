<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Photo extends Model
{
    use HasFactory;

    protected $fillable = [
        'alt'
    ];

    #region functions
    public function getUrl(string $model)
    {
        //TODO: It Should Be Change
        $address = "/img/{$model}/{$this->id}.jpg";
        return $address;
    }
    #endregion

    #region Relations
    public function category(): HasOne
    {
        return $this->hasOne(Category::class);
    }

    public function products(): BelongsToMany
    {
        return $this->belongsToMany(Product::class);
    }
    #endRegion
}
