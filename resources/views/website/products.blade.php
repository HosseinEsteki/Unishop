@extends('layouts.app')
@section('content')
    <!-- Page Content-->
    <div class="container padding-bottom-3x mb-1">
        <div class="row">
            <!-- Products-->
            <div class="col-xl-9 col-lg-8 order-lg-2">
                <!-- Shop Toolbar-->
                <section class="shop-toolbar pb-2 pt-2  mb-2 soft-shadow bg-white">
                    <div class="column pr-2 pl-2">
                        <div class="shop-sorting text-right">
                            <label for="sorting">ترتیب نمایش با : </label>
                            <form action="{{route('products.index')}}" id="sortingForm" style="display: contents">
                                <select class="form-control" id="sorting" name="sorting" onchange="submitForm()">
                                    @foreach($sorting as $sort)
                                        <option value="{{$sort->name}}"
                                                @if($sort->name==session('accordingTo')) selected @endif>{{$sort->value}}</option>
                                    @endforeach
                                </select>&nbsp;
                            </form>
                            @if($products->count()==0)
                                <span class="text-muted"> درحال نمایش :&nbsp;</span><span>محصولی موجود نیست</span>
                            @else
                                @php
                                    $page=request()->get('page',1);
                                    $fromProduct=($page-1)*$paginate+1;
                                    $toProduct=$fromProduct+$products->count()-1;
                                @endphp
                                <span class="text-muted"> درحال نمایش :&nbsp;</span><span>{{$fromProduct}} - {{$toProduct}} محصول</span>
                            @endif

                        </div>
                    </div>

                </section>
                <!-- Products Grid-->
                <section class="isotope-grid cols-3 pt-2 mb-2 soft-shadow bg-white">
                    <div class="gutter-sizer"></div>
                    <div class="grid-sizer"></div>
                    @foreach($products as $product)
                        <!-- Product-->
                        <div class="grid-item border-grid">
                            <div class="product-card">
                                <x-product-star :product="$product"/>
                                <a class="product-thumb mt-3" href="{{route('products.show',$product->slug)}}">
                                    <img src="{{$product->photo->thumbnail_path}}" alt="{{$product->name}}"></a>
                                <h3 class="product-title"><a
                                        href="{{route('products.show',$product->slug)}}">{{$product->name}}</a></h3>
                                <h4 class="product-price">
                                    {{$product->price}} تومان
                                </h4>
                                <div class="product-buttons">
                                    <x-modules.wishlist :product="$product"/>
                                    <button class="btn btn-outline-primary btn-sm" data-toast data-toast-type="success"
                                            data-toast-position="topRight" data-toast-icon="icon-circle-check"
                                            data-toast-title=" محصول " data-toast-message="با موفقیت به سبد اضافه شد !">
                                        افزودن به سبد
                                    </button>
                                </div>
                            </div>
                        </div>
                    @endforeach


                </section>
                <!-- Pagination-->
                {{$products->links('pagination.unishop')}}
            </div>
            <!-- Sidebar-->
            <div class="col-xl-3 col-lg-4 order-lg-1">
                <aside class="sidebar">
                    <div class="padding-top-2x hidden-lg-up"></div>
                    <!-- Widget Price Range-->
                    @if($maxPrice!=$minPrice)
                        <section class="widget widget-categories widget-border pt-2 pb-3 mb-2 bg-white soft-shadow">
                            <h3 class="widget-title">محدوده قیمت</h3>
                            <form class="price-range-slider" method="GET" action="{{ route('products.index') }}"
                                  data-start-min="{{$priceFrom}}"
                                  data-start-max="{{$priceTo}}" data-min="{{$minPrice}}" data-max="{{$maxPrice}}"
                                  data-step="100">
                                <div class="ui-range-slider"></div>
                                <footer class="ui-range-slider-footer">
                                    <div class="col-md-12 pb-3">
                                        <div class="ui-range-values">
                                            <div class="ui-range-value-min"> از <span></span>
                                                <input type="hidden" name="min_price"> تومان
                                            </div>&nbsp; تا &nbsp;
                                            <div class="ui-range-value-max"><span></span>
                                                <input type="hidden" name="max_price">تومان
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 text-left">
                                        <button class="btn btn-outline-primary btn-sm" type="submit">فیلتر قیمت</button>
                                    </div>
                                </footer>
                            </form>
                        </section>
                    @endif
                    <!-- Widget Categories-->
                    <section class="widget widget-categories widget-border pt-2 pb-3 mb-2 bg-white soft-shadow">
                        <h3 class="widget-title">دسته بندی های فروشگاه</h3>
                        <x-list-categories :category-slug="$categorySlug"/>
                    </section>
                    <!-- Widget Brand Filter-->
                    <section class="widget widget-border pt-2 pb-3 mb-2 bg-white soft-shadow">
                        <h3 class="widget-title">فیلتر بر اساس برندها</h3>
                        <label class="custom-control custom-checkbox d-block">
                            <input class="custom-control-input" type="checkbox">
                            <span class="custom-control-indicator"></span>
                            <span class="custom-control-description">آدیداس &nbsp;
						<span class="text-muted">(254)</span></span>
                        </label>
                        <label class="custom-control custom-checkbox d-block">
                            <input class="custom-control-input" type="checkbox">
                            <span class="custom-control-indicator"></span>
                            <span class="custom-control-description">نایک &nbsp;
						<span class="text-muted">(254)</span></span>
                        </label>
                        <label class="custom-control custom-checkbox d-block">
                            <input class="custom-control-input" type="checkbox">
                            <span class="custom-control-indicator"></span>
                            <span class="custom-control-description">سنشاکو &nbsp;
						<span class="text-muted">(254)</span></span>
                        </label>
                        <label class="custom-control custom-checkbox d-block">
                            <input class="custom-control-input" type="checkbox">
                            <span class="custom-control-indicator"></span>
                            <span class="custom-control-description">بلک بری &nbsp;
						<span class="text-muted">(254)</span></span>
                        </label>
                        <label class="custom-control custom-checkbox d-block">
                            <input class="custom-control-input" type="checkbox">
                            <span class="custom-control-indicator"></span>
                            <span class="custom-control-description">کلوین کلین &nbsp;
						<span class="text-muted">(254)</span></span>
                        </label>
                    </section>
                    <!-- Widget Size Filter-->
                    <section class="widget widget-border pt-2 pb-3 mb-2 bg-white soft-shadow">
                        <h3 class="widget-title">فیلتر بر اساس اندازه</h3>
                        <label class="custom-control custom-checkbox d-block">
                            <input class="custom-control-input" type="checkbox">
                            <span class="custom-control-indicator"></span>
                            <span class="custom-control-description">بسیار بزرگ  &nbsp;
						<span class="text-muted">(208)</span>
				  </span>
                        </label>
                        <label class="custom-control custom-checkbox d-block">
                            <input class="custom-control-input" type="checkbox">
                            <span class="custom-control-indicator"></span>
                            <span class="custom-control-description"> بزرگ  &nbsp;
						<span class="text-muted">(311)</span>
				  </span>
                        </label>
                        <label class="custom-control custom-checkbox d-block">
                            <input class="custom-control-input" type="checkbox">
                            <span class="custom-control-indicator"></span>
                            <span class="custom-control-description">متوسط  &nbsp;
						<span class="text-muted">(485)</span>
				  </span>
                        </label>
                        <label class="custom-control custom-checkbox d-block">
                            <input class="custom-control-input" type="checkbox">
                            <span class="custom-control-indicator"></span>
                            <span class="custom-control-description">کوچک  &nbsp;
						<span class="text-muted">(213)</span>
				  </span>
                        </label>
                    </section>
                    <!-- Promo Banner-->
                    <section class="promo-box" style="background-image: url(img/banners/02.jpg);">
                        <!-- Choose between .overlay-dark (#000) or .overlay-light (#fff) with default opacity of 50%. You can overrride default color and opacity values via 'style' attribute.--><span
                            class="overlay-dark" style="opacity: .45;"></span>
                        <div class="promo-box-content text-center padding-top-3x padding-bottom-2x">
                            <h4 class="text-light text-thin text-shadow">پوشاک جدید با</h4>
                            <h3 class="text-bold text-light text-shadow">تخفیف ویژه</h3><a
                                class="btn btn-sm btn-primary" href="#">همین حالا خرید کنید</a>
                        </div>
                    </section>
                </aside>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        function submitForm() {
            document.getElementById('sortingForm').submit();
        }
    </script>
@endsection
