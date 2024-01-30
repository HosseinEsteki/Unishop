<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'value'
    ];

    public static function getValue(string $name)
    {
        if (Setting::where('name', $name)->first() == null)
            return null;
        else
            return Setting::where('name', 'store_name')->first()->value;
    }
}
