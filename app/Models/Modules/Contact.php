<?php

namespace App\Models\Modules;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
        'title',
        'email',
        'phone',
        'response_at',
    ];
}
