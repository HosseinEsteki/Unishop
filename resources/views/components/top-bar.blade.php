<!-- Top bar-->
@if($topBars->count()>0)
    <div class="topbar">
        <div class="topbar-column">
            @foreach($topBars as $topBar)
                @if($topBar->type=='Social')
                    <a class="social-button sb-{{$topBar->socialMedia->name}} shape-none sb-dark"
                       href="{{$topBar->socialMedia->address}}">
                        <i class="{{$topBar->socialMedia->icon}}"></i>&nbsp;
                    </a>
                @else
                    <a class="hidden-md-down"
                       href="{{$topBar->link}}">
                        <i class="{{$topBar->icon}}"></i>&nbsp;{{$topBar->content}}
                    </a>
                @endif
            @endforeach

        </div>
        <div class="topbar-column"></div>
    </div>
@endif
