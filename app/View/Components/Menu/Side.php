<?php

namespace App\View\Components\Menu;

use App\Http\Classes\ConvertToArray;
use App\Models\Category;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\Component;

class Side extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    private function makeMenu($categories)
    {
        $menuString = null;
        foreach ($categories as $category) {
            $href = route('categories.show', $category['slug']);
            $title = $category['name'];
            $items = $category['items'];
            $hasItems = $items != [];
            $class = $hasItems ? 'has-children' : null;
            $menuString .= '<li class="' . $class . '">';
            $menuString .= '<span>';
            $menuString .= '<a href="' . $href . '">' . $title . '</a>';
            if ($hasItems)
                $menuString .= '<span class="sub-menu-toggle"></span>';
            $menuString .= '</span>';
            if ($hasItems) {
                $menuString .= '<ul class="offcanvas-submenu">';
                $menuString .= $this->makeMenu($items);
                $menuString .= '</ul>';
            }
            $menuString .= '</li>';
        }
        return $menuString;

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $user = Auth::user();
        $categories = ConvertToArray::categoriesToArray(Category::all());
        $menuString = $this->makeMenu($categories);
        return view('components.menu.side', compact('menuString', 'user'));
    }
}
