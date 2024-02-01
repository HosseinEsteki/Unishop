<?php

namespace App\View\Components;

use App\Models\Page;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Title extends Component
{
    public function render(): View
    {
        $route = \Route::getCurrentRoute()->getName();
        $pageName = Page::whereRoute($route)->first('name')->name;
        return view('components.title', compact('pageName'));
    }
}
