<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProductDetail extends Model
{
    use HasFactory;

    protected $primaryKey = 'product_id';
    public $incrementing = false;
    protected $fillable = [
        'price',
        'amount'
    ];


    #region Relations
    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
    #endregion

}
