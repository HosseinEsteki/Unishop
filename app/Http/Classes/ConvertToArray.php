<?php

namespace App\Http\Classes;

use Illuminate\Database\Eloquent\Collection;

class ConvertToArray
{
    public static function categoriesToArray(Collection $categories): ?array
    {
        return self::ConvertBase($categories);
    }

    public static function menusToArray(Collection $menus): ?array
    {
        return self::ConvertBase($menus);
    }
    private static function ConvertBase(Collection $collection, int $parent = null): ?array
    {
        $items = $collection->where('parent', '=', $parent);
        $arr = [];
        foreach ($items as $item) {
            $id = $item->id;
            $arr[] = [
                    'items' => self::ConvertBase($collection, $id)
                ]
                + $collection->where('id', '=', $id)->first()->toArray();
        }
        return $arr;
    }
}
