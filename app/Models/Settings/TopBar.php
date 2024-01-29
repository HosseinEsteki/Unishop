<?php

namespace App\Models\Settings;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TopBar extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'type',
        'content',

    ];
    protected $attributes = [
        'priority' => 0,
        'link' => null,
        'icon' => null
    ];

    #region Attributes
    public function socialMedia(): Attribute
    {
        return Attribute::make(
            get: function () {
                $social = SocialMedia::where('name', $this->content)->first();
                return $social;
            }
        );
    }
}