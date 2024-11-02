<?php

namespace App\View\Components;

use App\Models\Product;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\View\Component;

class RelatedProducts extends Component
{
    public Collection $products;

    public function __construct(Product $product)
    {
        //TODO: باید این رو بهینه تر کنیم
        $category = $product->categories[0];
        $this->products = $category->products->whereNotIn('id', $product->id);
    }

    public function render(): View
    {
        return view('components.related-products');
    }
}
