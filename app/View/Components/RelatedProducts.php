<?php

namespace App\View\Components;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\View\Component;

class RelatedProducts extends Component
{
    public Collection $products;

    public function __construct(Product $product)
    {

        $this->products = $product->category->products()->whereNot('id', $product->id)->get();
    }

    public function render(): View
    {
        return view('components.related-products');
    }
}
