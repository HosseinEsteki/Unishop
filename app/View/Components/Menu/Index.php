<?php

namespace App\View\Components\Menu;

use App\Http\Classes\ConvertToArray;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Index extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    private function makeMenu($menus): ?string
    {
        $menuString = null;
        foreach ($menus as $menu) {
            $hasItems = $menu['items'] != [];
            $isHead = $menu['parent'] == null;
            if ($isHead || !$hasItems)
                $menuString .= '<li>';
            else
                $menuString .= '<li class="has-children">';
            if ($menu['category_id']) {
                $href = route('categories.show', ['category' => $menu['category']['slug']]);
                $title = $menu['category']['name'];
            } else {
                $href = $menu['page_url'];
                $title = $menu['page_name'];
            }
            $menuString .= '<a href="' . $href . '"><span>' . $title . '</span></a>';
            if ($hasItems) {
                $menuString .= '<ul class="sub-menu">';
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
        $menus = ConvertToArray::menusToArray(\App\Models\Menu::with('category')->orderBy('priority')->get());
        $menuString = $this->makeMenu($menus);
        return view('components.menu.index', compact('menuString'));
    }
}
