<nav class="pagination bg-white soft-shadow">
    <div class="column text-right hidden-xs-down pr-2">
        <a class="btn btn-outline-secondary btn-sm @if($paginator->onFirstPage()) disabled @endif"
           href="@if($paginator->onFirstPage())# @else {{$paginator->previousPageUrl()}} @endif">
            قبلی
            &nbsp;<i class="icon-arrow-right"></i>
        </a>
    </div>
    <div class="column text-center">
        <ul class="pages">
            @foreach($elements as $element)
                @if (is_string($element))
                    <li class="disabled"><a href="#">{{$element}}</a></li>
                @endif
                @if(is_array($element))
                    @foreach($element as $page =>$url)
                        @if($page==$paginator->currentPage())
                            <li class="active"><a href="#">{{$page}}</a></li>
                        @else
                            <li><a href="{{$url}}">{{$page}}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach
        </ul>
    </div>
    <div class="column text-left hidden-xs-down pl-2">
        @if($paginator->hasMorePages())
            <a class="btn btn-outline-secondary btn-sm" href="{{$paginator->nextPageUrl()}}">
                بعدی &nbsp;
                <i class="icon-arrow-left"></i>
            </a>
        @else
            <a class="btn btn-outline-secondary btn-sm disabled" href="#">
                بعدی &nbsp;
                <i class="icon-arrow-left"></i>
            </a>
        @endif

    </div>
</nav>
