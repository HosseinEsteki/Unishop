<?php

namespace App\Models\Modules;

use App\Models\Photo;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class About extends Model
{
    protected $table = 'about_modules';

    protected $fillable = [
        'priority',
        'title',
        'content',
        'link_type',
        'link_name',
        'link_address',
    ];

    protected function photoAddress(): Attribute
    {
        return Attribute::make(
            get: fn() => $this->photo->getUrl('modules/about')
        );
    }

    protected function photo(): BelongsTo
    {
        return $this->belongsTo(Photo::class);
    }
}
