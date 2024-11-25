@extends('layouts.app')
@section('content')
    <!-- Page Content-->
    <div class="container padding-bottom-3x padding-top-1x mb-3 soft-shadow bg-white">
        <div class="row">
            <!-- Poduct Gallery-->
            <div class="col-md-6">
                <div class="product-gallery">
                    <div class="gallery-wrapper">
                        @foreach($photos as $photo)
                            <div class="gallery-item @if($loop->first) active @endif ">
                                <a href="{{$photo->path}}" data-hash="photo{{$loop->iteration}}"
                                   data-size="1000x667"></a>
                            </div>
                        @endforeach

                    </div>
                    <div class="product-carousel owl-carousel">
                        @foreach($photos as $photo)
                            <div data-hash="photo{{$loop->iteration}}"><img src="{{$photo->path}}"
                                                                            alt="{{$product->name}}"></div>
                        @endforeach
                    </div>
                    <ul class="product-thumbnails">
                        @foreach($photos as $photo)
                            <li @if($loop->first) class="active"@endif>
                                <a href="#photo{{$loop->iteration}}">
                                    <img src="{{$photo->thumbnailPath}}" alt="{{$product->name}}">
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <!-- Product Info-->
            <div class="col-md-6 text-right pl-4">
                <div class="padding-top-2x mt-2 hidden-md-up"></div>
                <x-product-star :product="$product"/>
                <span class="text-muted align-middle">&nbsp;&nbsp;{{$product->rate}} | از {{$product->rates->count()}} بازدید مشتری</span>
                <h3 class="padding-top-1x text-normal font-orange">{{$product->name}}</h3>
                <span class="h4 d-block mb-3">
              &nbsp; {{$product->price}} تومان
			</span>
                <p style="text-align:justify">{{$product->short_description}}</p>

                <div class="padding-bottom-1x mb-2">
                    <span class="text-medium">برچسب‌ها :&nbsp;</span>
                    @foreach($product->tags as $tag)
                        <a class="navi-link"
                           href="{{route('tags.tag',$tag->title)}}">{{$tag->title}}</a>@if(!$loop->last)
                            ,
                        @endif
                    @endforeach
                </div>
                <div class="padding-bottom-1x mb-2">
                    <span class="text-medium">دسته‌بندی‌ها :&nbsp;</span>
                        <a class="navi-link"
                           href="{{route('categories.show',$product->category->slug)}}">{{$product->category->name}}</a>
                </div>
                <hr class="mb-3">
                <div class="d-flex flex-wrap justify-content-between">
                    <div class="entry-share mt-2 mb-2"><span class="text-muted">اشتراک گذاری:</span>
                        <div class="share-links">
                            @foreach($socialMedias as $socialMedia)
                                <a class="social-button shape-circle sb-{{$socialMedia->name}}"
                                   href="{{$socialMedia->address}}" data-toggle="tooltip"
                                   data-placement="top" title="{{$socialMedia->name}}"><i
                                        class="{{$socialMedia->icon}}"></i></a>
                            @endforeach
                        </div>
                    </div>
                    <div class="sp-buttons mt-2 mb-2">
                        <button class="btn btn-primary" data-toast data-toast-type="success"
                                data-toast-position="topRight" data-toast-icon="icon-circle-check"
                                data-toast-title=" محصول " data-toast-message="به سبد خرید اضافه شد"><i
                                class="icon-bag"></i> افزودن به سبد خرید
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Product Tabs-->
        <div class="row padding-top-2x mb-3">
            <div class="col-lg-12 offset-lg-1">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item"><a class="nav-link active" href="#description" data-toggle="tab" role="tab">
                            توضیحات </a></li>
                    <li class="nav-item"><a class="nav-link" href="#reviews" data-toggle="tab" role="tab">نظر
                            مخاطبان</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="description" role="tabpanel">
                        {!! $product->description !!}
                    </div>
                    <div class="tab-pane fade" id="reviews" role="tabpanel">
                        <!-- Review-->
                        <x-comments :comments="$product->comments()->with('User')->get()"/>

                        <!-- Review Form-->
                        <x-create-comment :product="$product"/>
                    </div>
                </div>
            </div>
        </div>
        <!-- Related Products Carousel-->
        <!-- Carousel-->
        <!-- Featured Products Carousel Slider -->
        <x-related-products :product="$product"/>
    </div>
@endsection
@section('modals')
    <!-- Photoswipe container-->
    <div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="pswp__bg"></div>
        <div class="pswp__scroll-wrap">
            <div class="pswp__container">
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
            </div>
            <div class="pswp__ui pswp__ui--hidden">
                <div class="pswp__top-bar">
                    <div class="pswp__counter"></div>
                    <button class="pswp__button pswp__button--close" title="بستن (Esc)"></button>
                    <button class="pswp__button pswp__button--share" title="اشتراک"></button>
                    <button class="pswp__button pswp__button--fs" title="تغییر وضعیت به تمام صفحه"></button>
                    <button class="pswp__button pswp__button--zoom" title="زوم جلو / عقب"></button>
                    <div class="pswp__preloader">
                        <div class="pswp__preloader__icn">
                            <div class="pswp__preloader__cut">
                                <div class="pswp__preloader__donut"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                    <div class="pswp__share-tooltip"></div>
                </div>
                <button class="pswp__button pswp__button--arrow--left" title="قبلی (جهت چپ)"></button>
                <button class="pswp__button pswp__button--arrow--right" title="بعدی (جهت راست)"></button>
                <div class="pswp__caption">
                    <div class="pswp__caption__center"></div>
                </div>
            </div>
        </div>
    </div>
@endsection
