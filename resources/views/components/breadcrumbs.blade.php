<div class="page-title">
    <div class="container">
        <div class="row">
            <div class="col-4">
            <h1>{{$page->name}}</h1>
        </div>
            <div class="col-8">
            <ul class="breadcrumbs">
                @foreach($breadcrumbs as $row)
                    <li><a href="{{route($row['route'])}}"> {{$row['name']}}</a></li>
                    <li class="separator"></li>
                @endforeach
                <li>{{$page['name']}}</li>
            </ul>
        </div>
        </div>
    </div>
</div>
