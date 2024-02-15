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
        $page = Page::whereRoute($route)->first('name');

        $pageName = $page ? Page::whereRoute($route)->first('name')->name : null;
        return view('components.title', compact('pageName'));
    }
}
