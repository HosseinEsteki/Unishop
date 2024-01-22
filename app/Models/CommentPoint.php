<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CommentPoint extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = [
        'comment_id',
        'point',
        'description'
    ];

    #region Relations
    public function comment(): BelongsTo
    {
        return $this->belongsTo(Comment::class);
    }
    #endregion
}
