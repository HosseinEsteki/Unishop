<?php

namespace App\View\Components;

use App\Http\Classes\Breadcrumbs as Crumbs;
use App\Http\Classes\ConvertToArray;
use App\Models\Page;
use App\Models\Product;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Breadcrumbs extends Component
{
    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $route = \Route::getCurrentRoute();
        $routeName = $route->getName();
        if ($routeName == 'products.show') {
            $isProductPage = true;
            /** @var Product $product */
            $product = $route->parameter('product');
            $categories = Crumbs::ProductBreadCrumbs($product);
            return view('components.breadcrumbs', compact('product', 'categories', 'isProductPage'));
        } else {
            $isProductPage = false;
            $page = Page::whereRoute($routeName)->first();
            $breadcrumbs = $page ? Crumbs::Breadcrumbs($page) : null;
            return view('components.breadcrumbs', compact('page', 'breadcrumbs', 'isProductPage'));
        }


    }
}
