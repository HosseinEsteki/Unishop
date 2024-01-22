<?php

namespace Database\Seeders;

use App\Models\Cart;
use App\Models\Category;
use App\Models\Comment;
use App\Models\CommentPoint;
use App\Models\Discount;
use App\Models\Order;
use App\Models\OrderProduct;
use App\Models\Photo;
use App\Models\Product;
use App\Models\ProductDetail;
use App\Models\Rate;
use App\Models\Tag;
use App\Models\User;
use App\Models\View;
use App\Models\WishList;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = Product::factory(10)->has(ProductDetail::factory())->create();

        User::factory(10)->
        has(Order::factory()->
        has(OrderProduct::factory(5)))->
        create();

        foreach ($products as $product) {
            Comment::factory(random_int(1, 5))->has(CommentPoint::factory(random_int(1, 5)))->create(['product_id' => $product->id]);
        }

        Discount::factory(5)->hasAttached([1, 2, 3], [], 'products')->create();

        View::factory(20)->create();
        Rate::factory(20)->create();

        Tag::factory(20)->create();
        Photo::factory(30)->create();
        Category::factory(15)->create();

        WishList::factory(30)->create();

        Cart::factory(10)->create();
    }
}
