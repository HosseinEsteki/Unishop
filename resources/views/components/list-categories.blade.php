<ul>
    @foreach($categories as $category)
        @if($category['items']!=[])
            <li class=" has-children expanded">
                <a href="#">
                    {{$category['name']}}
                </a>
                {!! \App\View\Components\ListCategories::buildCategoryItems($category['items']) !!}

            </li>
        @else
            <li>
                <a href="{{route('products.index',['category'=>$category['slug']])}}"
                   @if($categorySlug==$category['slug']) class="active" @endif>
                    {{$category['name']}}
                </a>
            </li>
        @endif
    @endforeach
</ul>
