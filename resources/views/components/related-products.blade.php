<section class=" pr-2 pl-2 pt-2 pb-2 rounded-5 soft-shadow mb-2" style="background:#fff">
    <h6 class="text-right border-title mb-3">محصولات مرتبط</h6>
    <div class="owl-carousel"
         data-owl-carousel="{ &quot;nav&quot;: true, &quot;dots&quot;: true, &quot;margin&quot;: 10, &quot;responsive&quot;: {&quot;0&quot;:{&quot;items&quot;:1},&quot;576&quot;:{&quot;items&quot;:2},&quot;768&quot;:{&quot;items&quot;:3},&quot;991&quot;:{&quot;items&quot;:4},&quot;1200&quot;:{&quot;items&quot;:4}},&quot;autoplay&quot;: true, &quot;autoplayTimeout&quot;: 4000 ,&quot;loop&quot;: true }">
        @foreach($products as $product)
            <div class="grid-item">
                <div class="product-card">
                    <x-product-star/>
                    <a class="product-thumb mt-3" href="{{route('products.show',$product->slug)}}"><img
                            src="{{$product->photo->thumbnail_path}}"
                            alt="{{$product->name}}"></a>
                    <h3 class="product-title"><a
                            href="{{route('products.show',$product->slug)}}"> {{$product->name}}</a></h3>
                    <h4 class="product-price">
                        {{$product->price}}
                        <span> تومان </span>
                    </h4>
                    <div class="product-buttons">
                        <button class="btn btn-outline-primary btn-sm" data-toast data-toast-type="success"
                                data-toast-position="topRight" data-toast-icon="icon-circle-check"
                                data-toast-title=" محصول " data-toast-message="با موفقیت به سبد اضافه شد !">افزودن به
                            سبد
                        </button>
                    </div>
                </div>
            </div>
        @endforeach
        <!-- Product-->

    </div>
</section>
