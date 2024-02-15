<!-- Off-Canvas Mobile Index-->
<div class="offcanvas-container" id="mobile-menu">
    <a class="account-link" href="@auth{{route('account.profile')}}@else #@endauth">
        @auth
            <div class="user-ava"><img src="{{$user->profileImage}}" alt="{{$user->name}}"></div>
            <div class="user-info">
                <h6 class="user-name">{{$user->name}}</h6><span class="text-sm text-white opacity-60">{{$user->orders()->count()}} خرید ثبت شده</span>
            </div>
        @endauth
    </a>
    <nav class="offcanvas-menu">
        <ul class="menu">
            {!! $menuString !!}
        </ul>
    </nav>
</div>
