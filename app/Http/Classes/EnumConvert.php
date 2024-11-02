<?php

namespace App\Http\Classes;

use App\Http\Classes\Enums\CommentStatus;
use Illuminate\Validation\Rules\Enum;

class EnumConvert
{
    public static function NamesToCollection($enum): \Illuminate\Support\Collection
    {
        $array = collect();
        foreach ($enum as $item) {
            $array->add($item->name);
        }
        return $array;
    }

    public static function ValuesToCollection($enum): \Illuminate\Support\Collection
    {
        $array = collect();
        foreach ($enum as $item) {
            $array->add($item->value);
        }
        return $array;
    }

    public static function ToCollection($enum): \Illuminate\Support\Collection
    {
        return collect(['names' => self::NamesToCollection($enum), 'values' => self::ValuesToCollection($enum)]);
    }


}
