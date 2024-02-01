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
                <x-account-tab/>
                <x-cart/>
            </div>
        </div>
    </div>
</header>
