<div {{ $attributes->class(['account']) }}><a href="{{route('dashboard.orders.index')}}"></a><i class="icon-head"></i>
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
            <li><a href="{{route('dashboard.profile')}}">مشخصات من</a></li>
            <li><a href="{{route('dashboard.orders.index')}}">لیست سفارشات</a></li>
            <li><a href="{{route('dashboard.wishlist.index')}}">علاقه مندیها</a></li>
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
