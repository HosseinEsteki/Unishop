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
    <x-menu/>
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
                <x-cart/>
            </div>
        </div>
    </div>
</header>
