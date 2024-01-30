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
        $setting = Setting::where('name', $name)->first();
        if ($setting == null)
            return null;
        else
            return $setting->value;
    }
}
