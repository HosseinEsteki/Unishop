<?php

namespace App\Models;

use App\Http\Classes\Enums\DefaultPhoto;
use App\Models\Scopes\PriorityScope;
use Illuminate\Database\Eloquent\Attributes\ScopedBy;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

#[ScopedBy(PriorityScope::class)]
class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
    ];
    protected $attributes = [
        'parent' => null,
        'photo_id' => DefaultPhoto::Category,
        'priority' => 1
    ];

    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class);
    }

    public function products(): HasMany
    {
        return $this->hasMany(Product::class);
    }

    public function photo(): BelongsTo
    {
        return $this->belongsTo(Photo::class);
    }
}
