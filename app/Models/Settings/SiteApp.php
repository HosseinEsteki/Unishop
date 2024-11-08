<?php

namespace App\Models\Settings;

use App\Models\Photo;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SiteApp extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'name',
        'link',
        'photo_id',
    ];
    protected $attributes = ['priority' => 0];

    public function image(): Attribute
    {
        return Attribute::make(function () {
            return $this->photo->getUrl('site-app');
        });
    }

    #Region Relations
    public function photo(): BelongsTo
    {
        return $this->belongsTo(Photo::class);
    }
    #endRegion
}
