<!-- Off-Canvas Category Menu-->
<div class="offcanvas-container" id="shop-categories">
    @auth
        <a class="account-link" href="{{route('account.profile')}}">
            <div class="user-ava"><img src="{{$user->profilePhoto}}" alt="{{$user->name}}"></div>
            <div class="user-info">
                <h6 class="user-name">محمد شجاع</h6><span class="text-sm text-white opacity-60">290 خرید ثبت شده</span>
            </div>
        </a>
    @endauth
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
