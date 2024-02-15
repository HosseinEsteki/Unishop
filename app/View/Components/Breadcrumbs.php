<?php

namespace App\View\Components;

use App\Http\Classes\Breadcrumbs as Crumbs;
use App\Http\Classes\ConvertToArray;
use App\Models\Page;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Breadcrumbs extends Component
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
        $route = \Route::getCurrentRoute()->getName();
        $page = Page::whereRoute($route)->first();
        $breadcrumbs = $page ? Crumbs::Breadcrumbs($page) : null;
        return view('components.breadcrumbs', compact('page', 'breadcrumbs'));
    }
}
