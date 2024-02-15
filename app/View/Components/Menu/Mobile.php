<?php

namespace App\View\Components\Menu;

use App\Http\Classes\ConvertToArray;
use App\Models\Category;
use Closure;
use http\Client\Curl\User;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use function PHPUnit\Framework\isEmpty;

class Mobile extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    public function makeMenu($menus, $menuString = null)
    {
        foreach ($menus as $menu) {
            $hasItems = $menu['items'] != [];
            $class = $hasItems ? 'has-children' : null;
            $menuString .= '<li class="' . $class . '">';
            $menuString .= '<span>';
            if (isset($menu['category_id'])) {
                $href = $hasItems ? '#' : route('categories.show', ['category' => $menu['category']['slug']]);
                $title = $menu['category']['name'];
            } else {
                $href = $hasItems ? '#' : $menu['page_url'];
                $title = $menu['page_name'];
            }
            $menuString .= '<a href="' . $href . '">' . $title . '</a>';
            if ($hasItems)
                $menuString .= '<span class="sub-menu-toggle"></span>';
            $menuString .= '</span>';
            if ($hasItems) {
                $menuString .= '<ul class="offcanvas-submenu">';
                $menuString .= $this->makeMenu($menu['items']);
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
        $user = \Auth::user();
        $menus = ConvertToArray::menusToArray(\App\Models\Menu::with('category')->orderBy('priority')->get());
        $menuString = $this->makeMenu($menus);
        return view('components.menu.mobile', compact('user', 'menuString'));
    }
}
