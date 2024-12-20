<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\Component;

class Cart extends Component
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
        $user = Auth::user();
        $carts = \App\Models\Cart::getCurrentCarts();
        $cartsPrice = \App\Models\Cart::cartsPrice($carts);
        return view('components.cart', compact('user', 'carts', 'cartsPrice'));
    }
}
