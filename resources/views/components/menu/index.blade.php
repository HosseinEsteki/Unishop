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
