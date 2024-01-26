<?php

namespace Database\Seeders;

use App\Models\Cart;
use App\Models\Category;
use App\Models\Comment;
use App\Models\CommentPoint;
use App\Models\Discount;
use App\Models\Faq;
use App\Models\Order;
use App\Models\OrderProduct;
use App\Models\Photo;
use App\Models\Product;
use App\Models\ProductDetail;
use App\Models\Rate;
use App\Models\Tag;
use App\Models\Ticket;
use App\Models\TicketMessage;
use App\Models\User;
use App\Models\UserAddress;
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
        $tags = Tag::factory(30)->create();
        $products = Product::factory(10)->
        has(ProductDetail::factory())->
        hasAttached($tags->random(5))->
        hasAttached(Photo::factory(2))->
        create();

        User::factory(10)->
        has(UserAddress::factory(), 'addresses')->
        has(Order::factory()->
        has(OrderProduct::factory(5), 'products'))->
        create();


        foreach ($products as $product) {
            Comment::factory(random_int(1, 5))->
            has(CommentPoint::factory(random_int(1, 5)), 'points')->
            create(['product_id' => $product->id]);
        }

        Discount::factory(5)->
        hasAttached([1, 2, 3], [], 'products')->
        create();

        View::factory(20)->create();
        Rate::factory(20)->create();

        Category::factory(15)
            ->has(Photo::factory(1))
            ->hasAttached($tags->random(3))
            ->create();

        WishList::factory(30)->create();

        Cart::factory(10)->create();

        Faq::factory(20)->create();

        Ticket::factory(1)->has(TicketMessage::factory(5)->set('user_id', 2), 'messages')->create(['user_id' => 2, 'order_id' => Order::all('id')->random()]);
    }
}
