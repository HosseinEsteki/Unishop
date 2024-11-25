<?php

namespace App\View\Components;

use App\Http\Classes\ConvertToArray;
use App\Models\Category;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ListCategories extends Component
{
    private static ?string $categorySlug;
    public array $categories;

    public function __construct(?string $categorySlug)
    {
        self::$categorySlug = $categorySlug;
        $this->categories = ConvertToArray::categoriesToArray(Category::all());
    }

    public function render(): View
    {
        $categorySlug = self::$categorySlug;
        return view('components.list-categories', compact('categorySlug'));
    }

    public static function buildCategoryItems($categories): View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $categorySlug = self::$categorySlug;
        return \view('components.list-categories', compact('categories', 'categorySlug'));
    }
}
