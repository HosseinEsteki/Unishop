<?php

namespace App\View\Components;

use App\Http\Classes\ConvertToArray;
use App\Models\Menu;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Header extends Component
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
        $menus = ConvertToArray::menusToArray(Menu::with('category')->get());
        return view('components.header', compact('menus'));
    }
}
