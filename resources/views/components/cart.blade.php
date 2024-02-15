<div class="cart"><a href="{{route('cart.index')}}"></a><i class="icon-bag"></i><span
        class="count">{{$carts->count()}}</span><span
        class="subtotal">{{$cartsPrice}} تومان</span>
    <div class="toolbar-dropdown">
        @if($carts) @endif
        @foreach($carts as $cart)
            @php
                $product=$cart->product;
                $pageAddress=route('products.show',['product'=>$cart->product->slug])
            @endphp
            <div class="dropdown-product-item">
                            <span class="dropdown-product-remove">
                                <i class="icon-cross"></i>
                            </span>

                <a class="dropdown-product-thumb" href="{{$pageAddress}}">
                    <img src="{{$product->photo}}" alt="Product">
                </a>
                <div class="dropdown-product-info">
                    <a class="dropdown-product-title"
                       href="{{$pageAddress}}">{{$product->name}}</a>
                    <span class="dropdown-product-details">{{$product->price}} تومان</span>
                    <span class="dropdown-product-details"> - {{$cart->amount}}</span>
                </div>
            </div>
        @endforeach
        <div class="toolbar-dropdown-group">
            <div class="column"><a class="btn btn-sm btn-block btn-secondary"
                                   href="{{route('cart.index')}}">نمایش
                    سبد</a></div>
            <div class="column"><a class="btn btn-sm btn-block btn-success"
                                   href="{{route('account.orders.create')}}">تسویه</a></div>
        </div>
    </div>
</div>
