<?php

namespace App\View\Components\OffCanvas;

use App\Http\Classes\CategoryConvert;
use App\Models\Category;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CategoryMenu extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $categories = CategoryConvert::categoriesToArray(Category::all());
        return view('components.off-canvas.category-menu', compact('categories'));
    }
}
