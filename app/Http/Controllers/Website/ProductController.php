<?php

namespace App\Http\Controllers\Website;

use App\Http\Classes\EnumConvert;
use App\Http\Classes\Enums\PhotoPath;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Settings\SocialMedia;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
//        return EnumConvert::ToCollection(PhotoPath::cases());
        $photos = $product->photos;
        $socialMedias = SocialMedia::all();
        return view('website.product', compact('product', 'photos', 'socialMedias'));
    }

}
