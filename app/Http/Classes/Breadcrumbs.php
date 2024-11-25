<?php

namespace App\Http\Classes;

use App\Models\Category;
use App\Models\Page;
use App\Models\Product;
use Illuminate\Database\Eloquent\Collection;

class Breadcrumbs
{
    public static function Breadcrumbs(Page $page): array
    {
        $pages = Page::all();
        $page = $page->toArray();
        return array_reverse(self::makeBreadcrumbs(self::makeTree($pages, $page)));
    }

    public static function ProductBreadCrumbs(Product $product): ?array
    {
        return array_reverse(self::CategoryBreadCrumbs($product->category));
    }

    private static function CategoryBreadCrumbs(Category $category, ?array $array = []): ?array
    {
        $array[] = $category;
        if ($category->parent == null) {
            return $array;
        } else {
            return self::CategoryBreadCrumbs(Category::find($category->parent), $array);
        }
    }

    private static function makeBreadcrumbs(array $collection, $items = [])
    {
        if (array_key_exists(0, $collection)) {
            if (array_key_exists('children', $collection[0])) {
                $collection = $collection[0]['children'];
                $items[] = [
                    'id' => $collection['id'],
                    'name' => $collection['name'],
                    'route' => $collection['route'],
                ];
                return self::makeBreadcrumbs($collection, $items);
            }
        }
        return $items;

    }

    private static function makeTree(Collection $collection, $page, $array = null): ?array
    {
        if ($page["parent"] == null)
            return $page;
        $parent = $collection->where('id', '=', $page["parent"])->first()->toArray();
        $holder = self::makeTree($collection, $parent, $array);
        $array[] = ['children' => $parent + $holder];
        return $array;
    }

}
