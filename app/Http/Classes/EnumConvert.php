<?php

namespace App\Http\Classes;

class EnumConvert
{
    public static function NamesToArray($enum): array
    {
        $array = collect();
        foreach ($enum as $item) {
            $array->add($item->name);
        }
        return $array->all();
    }

    public static function ValuesToArray($enum): array
    {
        $array = collect();
        foreach ($enum as $item) {
            $array->add($item->value);
        }
        return $array->all();
    }
}
