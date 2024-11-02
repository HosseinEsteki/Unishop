<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Tag;
use Illuminate\Routing\Router;
use Illuminate\Support\ServiceProvider;

class StoreServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(Router $router): void
    {
        $router->bind('category', function ($slug) {
            return Category::where('slug', $slug)->first();
        });
        $router->bind('product', function ($slug) {
            return Product::where('slug', $slug)->first();
        });
        $router->bind('tag', function ($title) {
            return Tag::where('title', $title)->first();
        });
    }
}
