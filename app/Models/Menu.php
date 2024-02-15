<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Menu extends Model
{
    protected $fillable = [
    ];
    protected $attributes = [
        'parent' => null,
        'priority' => 0,
        'category_id' => null,
        'page_name' => null,
        'page_url' => null
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}
