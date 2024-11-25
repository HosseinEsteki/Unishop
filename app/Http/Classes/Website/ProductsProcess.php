<?php

namespace App\Http\Classes\Website;

use App\Http\Classes\Enums\Sorting;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Psr\Container\ContainerExceptionInterface;
use Psr\Container\NotFoundExceptionInterface;

class ProductsProcess
{
    /**
     * @param string|null $accordingTo
     * @param Product $products
     * @return Product|Builder|\Illuminate\Database\Query\Builder
     */
    public function Sort(?string $accordingTo, Product $products): Builder|Product|\Illuminate\Database\Query\Builder
    {
        $productIds = $products->pluck('id');
        switch ($accordingTo) {
            case Sorting::relate->name:
                break;
            case Sorting::view->name:
                $products = $products->withCount('views')->orderByDesc('views_count');
                break;
            case Sorting::new->name:
                $products = $products->orderByDesc('id');
                break;
            case Sorting::sell->name:
                $products = $products->withCount('sells')->orderByDesc('sells_count');
                break;
            case Sorting::poor->name:
                $products = $products->orderBy('price');
                break;
            case Sorting::expensive->name:
                $products = $products->orderByDesc('price');
                break;
        }
        return $products;
    }

    /**
     * @param Request $request
     * @return array
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     */
    public function SortSetting(Request $request): array
    {
        if ($request->sorting != null)
            session(['accordingTo' => $request->sorting]);
        $accordingTo = session()->get('accordingTo', Sorting::relate->name);
        $products = new Product();
        return array($accordingTo, $products);
    }

    /**
     * @param Request $request
     * @param Product $products
     * @return array
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     */
    public function CategorySetting(Request $request, Product $products): array
    {
        $categorySlug = $request->category ? $request->category : session()->get('category', null);

        if ($categorySlug != null) {
            session()->put('category', $categorySlug);
            if ($categorySlug == 'all')
                $products = new Product();
            else {
                $category = Category::where('slug', $categorySlug)->first();
                $products = $category->products();
            }
        }
        return array($categorySlug, $products);
    }


    /**
     * @param Request $request
     * @param Product $products
     * @return array
     */
    public function PriceFilter(Request $request, mixed $products): array
    {
        $price = $products->orderBy('price')->get();
        if ($price->count() == 0) {
            $minPrice = $maxPrice = 0;
        } else {
            $minPrice = $price[0]->price;
            $maxPrice = $price[$price->count() - 1]->price;
        }
        $priceFrom = $request->min_price ? $request->min_price : $minPrice;
        $priceTo = $request->max_price ? $request->max_price : $maxPrice;
        $products = $products->whereBetween('price', [$priceFrom, $priceTo]);
        return array($products, $minPrice, $maxPrice, $priceFrom, $priceTo);
    }

}
