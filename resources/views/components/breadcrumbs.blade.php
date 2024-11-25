@if($isProductPage)
    <div class="page-title">
        <div class="container">
            <div class="row">
                <div class="col-4">
                    <h1>{{$product->name}}</h1>
                </div>
                <div class="col-8">
                    <ul class="breadcrumbs">
                        <li><a href="{{route('home')}}"> خانه</a></li>
                        <li class="separator"></li>
                        @foreach($categories as $category)
                            <li><a href="{{route('categories.show',$category->slug)}}"> {{$category->name}}</a></li>
                            <li class="separator"></li>
                        @endforeach
                        <li>{{$product->name}}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@else
    <div class="page-title">
        <div class="container">
            <div class="row">
                <div class="col-4">
                    <h1>@if($page)
                            {{$page->name}}
                        @endif</h1>
                </div>
                <div class="col-8">
                    <ul class="breadcrumbs">
                        @if($breadcrumbs)
                            @foreach($breadcrumbs as $row)
                                <li><a href="{{route($row['route'])}}"> {{$row['name']}}</a></li>
                                <li class="separator"></li>
                            @endforeach
                            <li>{{$page['name']}}</li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endif
