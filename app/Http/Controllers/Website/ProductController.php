<?php

namespace App\Http\Controllers\Website;

use App\Http\Classes\Enums\Sorting;
use App\Http\Classes\Website\ProductsProcess;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\Settings\SocialMedia;
use Illuminate\Http\Request;
use Psr\Container\ContainerExceptionInterface;
use Psr\Container\NotFoundExceptionInterface;

class ProductController extends Controller
{
    private int $paginate = 3;

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $productsprocess = new ProductsProcess();
        $paginate = $this->paginate;
        $sorting = Sorting::cases();
        $products = new Product();
        $accordingTo = $categorySlug = null;
        try {
            list($accordingTo, $products) = $productsprocess->SortSetting($request);
        } catch (NotFoundExceptionInterface|ContainerExceptionInterface $e) {
        }
        try {
            list($categorySlug, $products) = $productsprocess->CategorySetting($request, $products);
        } catch (NotFoundExceptionInterface|ContainerExceptionInterface $e) {
        }

        list($products, $minPrice, $maxPrice, $priceFrom, $priceTo) = $productsprocess->PriceFilter($request, $products);
        $products = $productsprocess->Sort($accordingTo, $products)->paginate($paginate);
        return view('website.products', compact('products', 'sorting', 'paginate', 'minPrice', 'maxPrice', 'categorySlug', 'priceFrom', 'priceTo'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        $photos = $product->photos;
        $socialMedias = SocialMedia::all();
        return view('website.product', compact('product', 'photos', 'socialMedias'));
    }

}
