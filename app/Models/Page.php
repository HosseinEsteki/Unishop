<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'name',
        'route',
    ];
    protected $attributes = [
        'parent' => 1,
    ];

}
