<div class="container padding-bottom-2x padding-top-2x mb-2 ">
    @foreach($abouts as $about)
        @if($loop->odd)
            <div class="row align-items-center padding-bottom-2x">
                <div class="col-md-5">
                    <img class="d-block w-270 m-auto" src="{{$about->photoAddress}}" alt="{{$about->title}}">
                </div>
                <div class="col-md-7 text-md-left text-center">
                    <div class="mt-30 hidden-md-up"></div>
                    <h3 class="text-right">{{$about->title}}</h3>
                    <p style="text-align:justify">{{$about->content}}</p>
                    @if($about->link_type==\App\Http\Classes\Enums\Modules\LinkType::Link->name)
                        <a class="text-medium text-decoration-none"
                           href="{{$about->link_address}}">{{$about->link_name}}
                            <i class="icon-arrow-left"></i>
                        </a>
                    @else
                        @foreach($siteApps as $siteApp)
                            <a class="market-button" style="background-image: url('{{$siteApp->image}}')"
                               href="{{$siteApp->link}}">
                                <span class="mb-subtitle">دانلود از مارکت</span>
                                <span class="mb-title">{{$siteApp->name}}</span>
                            </a>
                        @endforeach
                    @endif
                </div>
            </div>
        @else
            <div class="row align-items-center padding-top-2x padding-bottom-2x">
                <div class="col-md-5 order-md-2">
                    <img class="d-block w-270 m-auto" src="{{$about->photoAddress}}" alt="{{$about->title}}">
                </div>
                <div class="col-md-7 order-md-1 text-md-left text-center">
                    <div class="mt-30 hidden-md-up"></div>
                    <h3 class="text-right">{{$about->title}}</h3>
                    <p style="text-align:justify">{{$about->content}}</p>
                    @if($about->link_type==\App\Http\Classes\Enums\Modules\LinkType::Link->name)
                        <a class="text-medium text-decoration-none"
                           href="{{$about->link_address}}">{{$about->link_name}}
                            <i class="icon-arrow-left"></i>
                        </a>
                    @else
                        @foreach($siteApps as $siteApp)
                            <a class="market-button" style="background-image: url('{{$siteApp->image}}')"
                               href="{{$siteApp->link}}">
                                <span class="mb-subtitle">دانلود از مارکت</span>
                                <span class="mb-title">{{$siteApp->name}}</span>
                            </a>
                        @endforeach
                    @endif
                </div>
            </div>
        @endif
            @if(!$loop->last)
                <hr>
            @endif
    @endforeach
</div>
