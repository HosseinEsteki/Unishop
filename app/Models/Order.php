<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
        'phone_number',
        'postcode',
        'address',
        'status'
    ];

    #region Relations
    public function products(): HasMany
    {
        return $this->hasMany(OrderProduct::class);
    }

    public function tickets(): HasMany
    {
        return $this->hasMany(Ticket::class);
    }
    #endregion
}
