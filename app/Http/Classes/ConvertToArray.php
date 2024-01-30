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
                'slug' => $parent->address,
                'photo_id' => $parent->photo_id,
                'items' => $children->where('parent', '=', $parent->id)->except(['parent'])->toArray()
            ];
        }
        return $newArray;
    }

    public static function menusToArray(Collection $menus)
    {
        $newArray = [];
        $parents = $menus->where('parent', '=', null);
        $children = $menus->where('parent', '!=', null);
        foreach ($parents as $parent) {
            $newArray[] = [
                'id' => $parent->id,
                'priority' => $parent->priority,
                'category_id' => $parent->category_id,
                'category' => $parent->category,
                'page_name' => $parent->page_name,
                'page_url' => $parent->page_url,
                'items' => $children->where('parent', '=', $parent->id)->except(['parent'])->toArray()
            ];
        }
        return $newArray;
    }
}
