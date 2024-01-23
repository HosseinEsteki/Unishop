<?php

namespace App\Models;

use App\Http\Classes\Enums\CommentStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'product_id',
        'user_id'
    ];
    protected $attributes = [
        'status' => "Pending"
    ];

    #region Relations
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }

    public function points(): HasMany
    {
        return $this->hasMany(CommentPoint::class);
    }
    #endregion
}
