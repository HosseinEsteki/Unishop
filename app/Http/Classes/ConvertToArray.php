<?php

namespace App\Http\Classes;

use Illuminate\Database\Eloquent\Collection;

class ConvertToArray
{
    public static function categoriesToArray(Collection $categories): array
    {
        $newArray = [];
        $parents = $categories->where('parent', '=', null);
        $children = $categories->where('parent', '!=', null);
        foreach ($parents as $parent) {
            $newArray[] = [
                'id' => $parent->id,
                'name' => $parent->name,
                'address' => $parent->address,
                'photo_id' => $parent->photo_id,
                'items' => $children->where('parent', '=', $parent->id)->toArray()
            ];
        }
        return $newArray;
    }
}
