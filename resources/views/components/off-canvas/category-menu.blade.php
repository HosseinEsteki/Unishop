<!-- Off-Canvas Category Menu-->
<div class="offcanvas-container" id="shop-categories">
    <a class="account-link" href="account-orders.html">
        <div class="user-ava"><img src="/unishop-theme/img/account/user-ava-md.jpg" alt="Daniel Adams"></div>
        <div class="user-info">
            <h6 class="user-name">محمد شجاع</h6><span class="text-sm text-white opacity-60">290 خرید ثبت شده</span>
        </div>
    </a>
    <nav class="offcanvas-menu">
        <ul class="menu">
            @foreach($categories as $category)
                <li class="@isset($category['items']) has-children @endisset"><span><a
                            href="#">{{$category['name']}}</a><span class="sub-menu-toggle"></span></span>
                    @isset($category['items'])
                        <ul class="offcanvas-submenu">
                            @foreach($category['items'] as $item)
                                <li><a href="#">{{$item['name']}}</a></li>
                            @endforeach
                        </ul>
                    @endisset
                </li>
            @endforeach
        </ul>
    </nav>
</div>
