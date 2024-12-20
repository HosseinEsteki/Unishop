<?php

namespace App\View\Components;

use App\Models\Product;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class CreateComment extends Component
{
    public function __construct(public Product $product)
    {
    }

    public function render(): View
    {
        return view('components.create-comment');
    }
}
