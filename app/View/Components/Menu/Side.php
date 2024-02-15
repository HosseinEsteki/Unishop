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

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $categories = ConvertToArray::categoriesToArray(Category::all());
        $user = Auth::user();
        return view('components.menu.side', compact('categories', 'user'));
    }
}
