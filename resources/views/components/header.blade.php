<!-- Remove "navbar-sticky" class to make navigation bar scrollable with the page.-->
<header class="navbar navbar-sticky">
    <!-- Search-->
    <form class="site-search" method="get" action="{{route('search')}}">
        <input type="text" name="site_search" placeholder="عبارت مورد جستجو را تایپ کنید . . .">
        <div class="search-tools"><span class="clear-search hidden-xs-down">پاک کردن</span><span class="close-search"><i
                    class="icon-cross"></i></span></div>
    </form>
    <div class="site-branding">
        <div class="inner">
            <!-- Off-Canvas Toggle (#shop-categories)--><a class="offcanvas-toggle cats-toggle" href="#shop-categories"
                                                           data-toggle="offcanvas"></a>
            <!-- Off-Canvas Toggle (#mobile-menu)--><a class="offcanvas-toggle menu-toggle " href="#mobile-menu"
                                                       data-toggle="offcanvas"></a>
            <!-- Site Logo--><a class="site-logo" href="/"><img src="{{Setting::getValue('logoAddress')}}"
                                                                alt="{{Setting::getValue('storeName')}}"></a>
        </div>
    </div>
    <!-- Main Navigation-->
    <nav class="site-menu">
        <ul>
            @foreach($menus as $menu)
                <li>
                    @if($menu['category_id'])
                        <a href="{{route('categories.show',['category'=>$menu['category']['slug']])}}"><span>{{$menu['category']['name']}}</span></a>
                    @else
                        <a href="{{$menu['page_url']}}"><span>{{$menu['page_name']}}</span></a>
                    @endif
                    @if($menu['items'])
                        <ul class="sub-menu">
                            @foreach($menu['items'] as $item)
                                <li class="@if($item['items'])has-children @endif">
                                    @if($item['category_id'])
                                        <a href="{{route('categories.show',['category'=>$item['category']['slug']])}}"><span>{{$item['category']['name']}}</span></a>
                                    @else
                                        <a href="{{$item['page_url']}}"><span>{{$item['page_name']}}</span></a>
                                    @endif
                                    @if($item['items'])
                                        <ul class="sub-menu">
                                            @foreach($item['items'] as $child) @endforeach
                                            <li>
                                                @if($child['category_id'])
                                                    <a href="{{route('categories.show',['category'=>$child['category']['slug']])}}">{{$child['category']['name']}}</a>
                                                @else
                                                    <a href="{{$child['page_url']}}"><span>{{$child['page_name']}}</span></a>
                                                @endif
                                            </li>
                                        </ul>
                                    @endif
                                </li>
                            @endforeach
                        </ul>
                    @endif
                </li>
            @endforeach
        </ul>
    </nav>
    <!-- Toolbar-->
    <div class="toolbar">
        <div class="inner">
            <div class="tools">
                <div class="search"><i class="icon-search"></i></div>
                <div class="account"><a href="{{route('account.orders.index')}}"></a><i class="icon-head"></i>
                    <ul class="toolbar-dropdown">
                        @auth
                            <li class="sub-menu-user">
                                <div class="user-ava"><img src="{{$user->profileImage}}"
                                                           alt="{{$user->name}}">
                                </div>
                                <div class="user-info">
                                    <h6 class="user-name">{{$user->name}}</h6><span
                                        class="text-xs text-muted">{{$user->orders->count()}} خرید ثبت شده</span>
                                </div>
                            </li>
                            <li><a href="{{route('account.profile')}}">مشخصات من</a></li>
                            <li><a href="{{route('account.orders.index')}}">لیست سفارشات</a></li>
                            <li><a href="{{route('account.wishlist.index')}}">علاقه مندیها</a></li>
                            <li class="sub-menu-separator"></li>
                        @else
                            <li><a href="#" data-toggle="modal" data-target="#modalLogin"><i class="icon-unlock"></i>جعبه
                                    ورود</a></li>
                        @endauth
                        @auth
                            <li><a href="{{route('logout')}}"> <i class="icon-unlock"></i>خروج</a></li>
                        @endauth
                    </ul>
                </div>
                <div class="cart"><a href="{{route('cart.index')}}"></a><i class="icon-bag"></i><span
                        class="count">{{$user->carts->count()}}</span><span
                        class="subtotal">{{$user->cartsPrice}} تومان</span>
                    <div class="toolbar-dropdown">
                        @foreach($user->carts as $cart)
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
            </div>
        </div>
    </div>
</header>
