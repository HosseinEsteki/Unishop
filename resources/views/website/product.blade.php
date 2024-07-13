@extends('layouts.app')
@section('content')
    <!-- Page Content-->
    <div class="container padding-bottom-3x padding-top-1x mb-3 soft-shadow bg-white">
        <div class="row">
            <!-- Poduct Gallery-->
            <div class="col-md-6">
                <div class="product-gallery"><span class="product-badge text-danger">30% تخفیف</span>
                    <div class="gallery-wrapper">{{public_path('products/a.jpg')}}
                        <div class="gallery-item active"><a href="img/shop/single/6.jpg" data-hash="one"
                                                            data-size="1000x667"></a></div>
                        <div class="gallery-item"><a href="img/shop/single/7.jpg" data-hash="two"
                                                     data-size="1000x667"></a></div>
                        <div class="gallery-item"><a href="img/shop/single/8.jpg" data-hash="three"
                                                     data-size="1000x667"></a></div>
                        <div class="gallery-item"><a href="img/shop/single/9.jpg" data-hash="four"
                                                     data-size="1000x667"></a></div>
                        <div class="gallery-item"><a href="img/shop/single/10.jpg" data-hash="five"
                                                     data-size="1000x667"></a></div>
                    </div>
                    <div class="product-carousel owl-carousel">
                        <div data-hash="one"><img src="img/shop/single/6.jpg" alt="Product"></div>
                        <div data-hash="two"><img src="img/shop/single/7.jpg" alt="Product"></div>
                        <div data-hash="three"><img src="img/shop/single/8.jpg" alt="Product"></div>
                        <div data-hash="four"><img src="img/shop/single/9.jpg" alt="Product"></div>
                        <div data-hash="five"><img src="img/shop/single/10.jpg" alt="Product"></div>
                    </div>
                    <ul class="product-thumbnails">
                        <li class="active"><a href="#one"><img src="img/shop/single/th01.jpg" alt="Product"></a></li>
                        <li><a href="#two"><img src="img/shop/single/th02.jpg" alt="Product"></a></li>
                        <li><a href="#three"><img src="img/shop/single/th03.jpg" alt="Product"></a></li>
                        <li><a href="#four"><img src="img/shop/single/th04.jpg" alt="Product"></a></li>
                        <li><a href="#five"><img src="img/shop/single/th05.jpg" alt="Product"></a></li>
                    </ul>
                </div>
            </div>
            <!-- Product Info-->
            <div class="col-md-6 text-right pl-4">
                <div class="padding-top-2x mt-2 hidden-md-up"></div>
                <div class="rating-stars">
                    <i class="icon-star filled"></i>
                    <i class="icon-star filled"></i>
                    <i class="icon-star filled"></i>
                    <i class="icon-star filled"></i>
                    <i class="icon-star"></i>
                </div>
                <span class="text-muted align-middle">&nbsp;&nbsp;4.2 | از 3 بازدید مشتری</span>
                <h3 class="padding-top-1x text-normal font-orange">هندزفری بی سیم شارژی چند زمانه اتوماتیک</h3>
                <span class="h4 d-block mb-3">
              <del class="text-muted text-normal">68.00</del>&nbsp; 47.60 تومان
			</span>
                <p style="text-align:justify">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با استفاده از
                    طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط
                    فعلی تکنولوژی مورد نیاز، و کاربردفراوان جامعه و متخصصان را می طلبد، تا با نرم افزارها شناخت بیشتری
                    را برای طراحان رایانه ای علی الخصوص طراحان خلاقی، و فرهنگ پیشرو در زبان فارسی ایجاد کرد، دچینی
                    دستاوردهای اصلی، و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.</p>
                <div class="row margin-top-1x pt-3 pb-3 mb-3"
                     style="background-color:#e6e6e6;border: solid 1px #dad9d9;">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="size">سایز مردانه</label>
                            <select class="form-control" id="size">
                                <option>انتخاب سایز</option>
                                <option>11.5</option>
                                <option>11</option>
                                <option>10.5</option>
                                <option>10</option>
                                <option>9.5</option>
                                <option>9</option>
                                <option>8.5</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <div class="form-group">
                            <label for="color">انتخاب رنگ</label>
                            <select class="form-control" id="color">
                                <option>سفید / قرمز /آبی</option>
                                <option>سیاه / پرتغالی /سفید</option>
                                <option>خاکستری / قهوه ای سفید</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="quantity">کیفیت ساخت</label>
                            <select class="form-control" id="quantity">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="pt-1 mb-2"><span class="text-medium">SKU:</span> #21457832</div>
                <div class="padding-bottom-1x mb-2">
                    <span class="text-medium">دسته های محصول :&nbsp;</span>
                    <a class="navi-link" href="#">کفش مردانه,</a>
                    <a class="navi-link" href="#"> کوهنوردی ,</a>
                    <a class="navi-link" href="#"> کفشهای ورزشی</a>
                </div>
                <hr class="mb-3">
                <div class="d-flex flex-wrap justify-content-between">
                    <div class="entry-share mt-2 mb-2"><span class="text-muted">اشتراک گذاری:</span>
                        <div class="share-links">
                            <a class="social-button shape-circle sb-facebook" href="#" data-toggle="tooltip"
                               data-placement="top" title="فیسبوک"><i class="socicon-facebook"></i></a>
                            <a class="social-button shape-circle sb-twitter" href="#" data-toggle="tooltip"
                               data-placement="top" title="توییتر"><i class="socicon-twitter"></i></a>
                            <a class="social-button shape-circle sb-instagram" href="#" data-toggle="tooltip"
                               data-placement="top" title="اینستاگرام"><i class="socicon-instagram"></i></a>
                            <a class="social-button shape-circle sb-google-plus" href="#" data-toggle="tooltip"
                               data-placement="top" title="گوگل +"><i class="socicon-googleplus"></i></a>
                        </div>
                    </div>
                    <div class="sp-buttons mt-2 mb-2">
                        <button class="btn btn-outline-secondary btn-sm btn-wishlist" data-toggle="tooltip"
                                title="علاقه مندی"><i class="icon-heart"></i></button>
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
                    <li class="nav-item"><a class="nav-link" href="#reviews" data-toggle="tab" role="tab">دیدگاه شما</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="description" role="tabpanel">
                        <p style="text-align:justify">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ، و با
                            استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم
                            است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی
                            می باشد، کتابهای زیادی در شصت و سه درصد گذشته حال و آینده، شناخت فراوان جامعه و متخصصان را
                            می طلبد، تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی، و
                            فرهنگ پیشرو در زبان فارسی ایجاد کرد، در این صورت می توان امید داشت که تمام و دشواری موجود در
                            ارائه راهکارها، و شرایط سخت تایپ به پایان رسد و زمان مورد نیاز شامل حروفچینی دستاوردهای
                            اصلی، و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.</p>
                        <p class="mb-30" style="text-align:justify">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از
                            صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و
                            سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع با هدف بهبود
                            ابزارهای کاربردی می باشد، کتابهای زیادی در شصت و سه درصد گذشته حال و آینده، شناخت فراوان
                            جامعه و متخصصان را می طلبد، تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی
                            الخصوص طراحان خلاقی، و فرهنگ پیشرو در زبان فارسی ایجاد کرد، در این صورت می توان امید داشت که
                            تمام و دشواری موجود در ارائه راهکارها، و شرایط سخت تایپ به پایان رسد و زمان مورد نیاز شامل
                            حروفچینی دستاوردهای اصلی، و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده
                            قرار گیرد.</p>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="img/shop/single/iphon.mp4"
                                    allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="reviews" role="tabpanel">
                        <!-- Review-->
                        <div class="comment">
                            <div class="comment-author-ava"><img src="img/reviews/01.jpg" alt="Review author"></div>
                            <div class="comment-body">
                                <div class="comment-header d-flex flex-wrap justify-content-between">
                                    <h4 class="comment-title">قیمت مناسب در مقابل کیفیت محصول</h4>
                                    <div class="mb-2">
                                        <div class="rating-stars"><i class="icon-star filled"></i><i
                                                class="icon-star filled"></i><i class="icon-star filled"></i><i
                                                class="icon-star"></i><i class="icon-star"></i>
                                        </div>
                                    </div>
                                </div>
                                <p class="comment-text text-right">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت
                                    چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و
                                    سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع</p>
                                <div class="comment-footer"><span class="comment-meta">رسول احمدی</span> | <span
                                        class="comment-meta">دوشنبه 27 فروردین 97</span></div>
                                <!-- Replay Review-->
                                <div class="comment margin-top-2x">
                                    <div class="comment-author-ava"><img src="img/reviews/02.jpg" alt="Review author">
                                    </div>
                                    <div class="comment-body">
                                        <div class="comment-header d-flex flex-wrap justify-content-between">
                                            <h4 class="comment-title">دیدگاه پاسخ به نظر دیگران</h4>
                                            <div class="mb-2">
                                                <div class="rating-stars"><i class="icon-star filled"></i><i
                                                        class="icon-star filled"></i><i class="icon-star filled"></i><i
                                                        class="icon-star filled"></i><i class="icon-star filled"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="comment-text text-right">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم
                                            از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه
                                            و مجله در ستون و سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد
                                            نیاز، و کاربردهای متنوع</p>
                                        <div class="comment-footer"><span class="comment-meta">نازنین بیاتی</span> |
                                            <span class="comment-meta">دوشنبه 27 فروردین 97</span></div>

                                        <!-- Replay Review-->
                                        <div class="comment margin-top-2x">
                                            <div class="comment-author-ava"><img src="img/reviews/02.jpg"
                                                                                 alt="Review author"></div>
                                            <div class="comment-body">
                                                <div class="comment-header d-flex flex-wrap justify-content-between">
                                                    <h4 class="comment-title">پاسخ چند عمقی به نظرات</h4>
                                                    <div class="mb-2">
                                                        <div class="rating-stars"><i class="icon-star filled"></i><i
                                                                class="icon-star filled"></i><i
                                                                class="icon-star filled"></i><i
                                                                class="icon-star filled"></i><i
                                                                class="icon-star filled"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <p class="comment-text text-right">لورم ایپسوم متن ساختگی با تولید سادگی
                                                    نامفهوم از صنعت چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و
                                                    متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است، و برای
                                                    شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع</p>
                                                <div class="comment-footer"><span
                                                        class="comment-meta">نازنین بیاتی</span> | <span
                                                        class="comment-meta">دوشنبه 27 فروردین 97</span></div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>

                        <!-- Review-->
                        <div class="comment">
                            <div class="comment-author-ava"><img src="img/reviews/02.jpg" alt="Review author"></div>
                            <div class="comment-body">
                                <div class="comment-header d-flex flex-wrap justify-content-between">
                                    <h4 class="comment-title">همسر من این محصول را دوست دارد . . .</h4>
                                    <div class="mb-2">
                                        <div class="rating-stars"><i class="icon-star filled"></i><i
                                                class="icon-star filled"></i><i class="icon-star filled"></i><i
                                                class="icon-star filled"></i><i class="icon-star filled"></i>
                                        </div>
                                    </div>
                                </div>
                                <p class="comment-text text-right">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت
                                    چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و
                                    سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع</p>
                                <div class="comment-footer"><span class="comment-meta">نازنین بیاتی</span> | <span
                                        class="comment-meta">دوشنبه 27 فروردین 97</span></div>
                            </div>
                        </div>

                        <!-- Review-->
                        <div class="comment">
                            <div class="comment-author-ava"><img src="img/reviews/03.jpg" alt="Review author"></div>
                            <div class="comment-body">
                                <div class="comment-header d-flex flex-wrap justify-content-between">
                                    <h4 class="comment-title">سال حمایت از کالای ایرانی . . .</h4>
                                    <div class="mb-2">
                                        <div class="rating-stars"><i class="icon-star filled"></i><i
                                                class="icon-star filled"></i><i class="icon-star filled"></i><i
                                                class="icon-star filled"></i><i class="icon-star"></i>
                                        </div>
                                    </div>
                                </div>
                                <p class="comment-text text-right">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت
                                    چاپ، و با استفاده از طراحان گرافیک است، چاپگرها و متون بلکه روزنامه و مجله در ستون و
                                    سطرآنچنان که لازم است، و برای شرایط فعلی تکنولوژی مورد نیاز، و کاربردهای متنوع.</p>
                                <div class="comment-footer"><span class="comment-meta">آرمین رحمانی</span> | <span
                                        class="comment-meta">دوشنبه 27 فروردین 97</span></div>
                            </div>
                        </div>

                        <!-- Review Form-->
                        <h5 class="mb-30 padding-top-1x text-right">افزودن دیدگاه جدید</h5>
                        <form class="row" method="post">
                            <div class="col-sm-6">
                                <div class="form-group text-right">
                                    <label for="review_name">نام شما</label>
                                    <input class="form-control form-control-rounded" type="text" id="review_name"
                                           required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group text-right">
                                    <label for="review_email">آدرس ایمیل</label>
                                    <input class="form-control form-control-rounded" type="email" id="review_email"
                                           required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group text-right">
                                    <label for="review_subject">عنوان</label>
                                    <input class="form-control form-control-rounded" type="text" id="review_subject"
                                           required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group text-right">
                                    <label for="review_rating">امتیاز</label>
                                    <select class="form-control form-control-rounded" id="review_rating">
                                        <option>5 ستاره</option>
                                        <option>4 ستاره</option>
                                        <option>3 ستاره</option>
                                        <option>2 ستاره</option>
                                        <option>1 ستاره</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group text-right">
                                    <label for="review_text">متن دیدگاه </label>
                                    <textarea class="form-control form-control-rounded" id="review_text" rows="8"
                                              required></textarea>
                                </div>
                            </div>
                            <div class="col-12 text-right">
                                <button class="btn btn-outline-primary" type="submit">ارسال دیدگاه</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Related Products Carousel-->
        <!-- Carousel-->
        <!-- Featured Products Carousel Slider -->
        <section class=" pr-2 pl-2 pt-2 pb-2 rounded-5 soft-shadow mb-2" style="background:#fff">
            <h6 class="text-right border-title mb-3">محصولاتی که ممکن است شما بپسندید</h6>
            <div class="owl-carousel"
                 data-owl-carousel="{ &quot;nav&quot;: true, &quot;dots&quot;: true, &quot;margin&quot;: 10, &quot;responsive&quot;: {&quot;0&quot;:{&quot;items&quot;:1},&quot;576&quot;:{&quot;items&quot;:2},&quot;768&quot;:{&quot;items&quot;:3},&quot;991&quot;:{&quot;items&quot;:4},&quot;1200&quot;:{&quot;items&quot;:4}},&quot;autoplay&quot;: true, &quot;autoplayTimeout&quot;: 4000 ,&quot;loop&quot;: true }">
                <!-- Product-->
                <div class="grid-item">
                    <div class="product-card">
                        <div class="rating-stars">
                            <i class="icon-star filled"></i>
                            <i class="icon-star filled"></i>
                            <i class="icon-star filled"></i>
                            <i class="icon-star "></i>
                            <i class="icon-star "></i>
                        </div>
                        <div class="product-badge text-danger">22%</div>
                        <a class="product-thumb mt-3" href="shop-single.html"><img src="img/shop/products/36.jpg"
                                                                                   alt="Product"></a>
                        <h3 class="product-title"><a href="shop-single.html">کفش زنانه مجلسی</a></h3>
                        <h4 class="product-price">
                            <del>99.99</del>
                            49.99
                            <span> تومان </span>
                        </h4>
                        <div class="product-buttons">
                            <button class="btn btn-outline-secondary btn-sm btn-wishlist" data-toggle="tooltip"
                                    title="علاقه مندی"><i class="icon-heart"></i></button>
                            <button class="btn btn-outline-primary btn-sm" data-toast data-toast-type="success"
                                    data-toast-position="topRight" data-toast-icon="icon-circle-check"
                                    data-toast-title=" محصول " data-toast-message="با موفقیت به سبد اضافه شد !">افزودن
                                به سبد
                            </button>
                        </div>
                    </div>
                </div>
                <!-- Product-->
                <div class="grid-item">
                    <div class="product-card">
                        <div class="rating-stars">
                            <i class="icon-star filled"></i>
                            <i class="icon-star filled"></i>
                            <i class="icon-star filled"></i>
                            <i class="icon-star filled"></i>
                            <i class="icon-star "></i>
                        </div>
                        <a class="product-thumb mt-3" href="shop-single.html"><img src="img/shop/products/37.jpg"
                                                                                   alt="Product"></a>
                        <h3 class="product-title"><a href="shop-single.html">عینک ری بن مدل لامبورگینی</a></h3>
                        <h4 class="product-price">
                            <del>134000</del>
                            110000
                            <span> تومان </span>
                        </h4>
                        <div class="product-buttons">
                            <button class="btn btn-outline-secondary btn-sm btn-wishlist" data-toggle="tooltip"
                                    title="علاقه مندی"><i class="icon-heart"></i></button>
                            <button class="btn btn-outline-primary btn-sm" data-toast data-toast-type="success"
                                    data-toast-position="topRight" data-toast-icon="icon-circle-check"
                                    data-toast-title=" محصول " data-toast-message="با موفقیت به سبد اضافه شد !">افزودن
                                به سبد
                            </button>
                        </div>
                    </div>
                </div>
                <!-- Product-->
                <div class="grid-item">
                    <div class="product-card">
                        <div class="rating-stars">
                            <i class="icon-star filled"></i>
                            <i class="icon-star filled"></i>
                            <i class="icon-star filled"></i>
                            <i class="icon-star "></i>
                            <i class="icon-star "></i>
                        </div>
                        <a class="product-thumb mt-3" href="shop-single.html"><img src="img/shop/products/38.jpg"
                                                                                   alt="Product"></a>
                        <h3 class="product-title"><a href="shop-single.html">کلاه شاپوی مردانه طرح تابستانی</a></h3>
                        <h4 class="product-price">
                            <del>99.99</del>
                            49.99
                            <span> تومان </span>
                        </h4>
                        <div class="product-buttons">
                            <button class="btn btn-outline-secondary btn-sm btn-wishlist" data-toggle="tooltip"
                                    title="علاقه مندی"><i class="icon-heart"></i></button>
                            <button class="btn btn-outline-primary btn-sm" data-toast data-toast-type="success"
                                    data-toast-position="topRight" data-toast-icon="icon-circle-check"
                                    data-toast-title=" محصول " data-toast-message="با موفقیت به سبد اضافه شد !">افزودن
                                به سبد
                            </button>
                        </div>
                    </div>
                </div>
                <!-- Product-->
                <div class="grid-item">
                    <div class="product-card">
                        <div class="rating-stars">
                            <i class="icon-star filled"></i>
                            <i class="icon-star filled"></i>
                            <i class="icon-star filled"></i>
                            <i class="icon-star filled"></i>
                            <i class="icon-star filled"></i>
                        </div>
                        <a class="product-thumb mt-3" href="shop-single.html"><img src="img/shop/products/39.jpg"
                                                                                   alt="Product"></a>
                        <h3 class="product-title"><a href="shop-single.html">کفش ورزشی شنساکو طرح مشکی - سفید</a></h3>
                        <h4 class="product-price">
                            135000
                            <span> تومان </span>
                        </h4>
                        <div class="product-buttons">
                            <button class="btn btn-outline-secondary btn-sm btn-wishlist" data-toggle="tooltip"
                                    title="علاقه مندی"><i class="icon-heart"></i></button>
                            <button class="btn btn-outline-primary btn-sm" data-toast data-toast-type="success"
                                    data-toast-position="topRight" data-toast-icon="icon-circle-check"
                                    data-toast-title=" محصول " data-toast-message="با موفقیت به سبد اضافه شد !">افزودن
                                به سبد
                            </button>
                        </div>
                    </div>
                </div>
                <!-- Product-->
                <div class="grid-item">
                    <div class="product-card">
                        <div class="rating-stars">
                            <i class="icon-star filled"></i>
                            <i class="icon-star filled"></i>
                            <i class="icon-star filled"></i>
                            <i class="icon-star "></i>
                            <i class="icon-star "></i>
                        </div>
                        <a class="product-thumb mt-3" href="shop-single.html"><img src="img/shop/products/40.jpg"
                                                                                   alt="Product"></a>
                        <h3 class="product-title"><a href="shop-single.html">دستنبد فلزی با بند چرمی قفل شونده</a></h3>
                        <h4 class="product-price">
                            <del>99.99</del>
                            49.99
                            <span> تومان </span>
                        </h4>
                        <div class="product-buttons">
                            <button class="btn btn-outline-secondary btn-sm btn-wishlist" data-toggle="tooltip"
                                    title="علاقه مندی"><i class="icon-heart"></i></button>
                            <button class="btn btn-outline-primary btn-sm" data-toast data-toast-type="success"
                                    data-toast-position="topRight" data-toast-icon="icon-circle-check"
                                    data-toast-title=" محصول " data-toast-message="با موفقیت به سبد اضافه شد !">افزودن
                                به سبد
                            </button>
                        </div>
                    </div>
                </div>
                <!-- Product-->
                <div class="grid-item">
                    <div class="product-card">
                        <div class="product-badge text-danger">50%</div>
                        <div class="rating-stars">
                            <i class="icon-star filled"></i>
                            <i class="icon-star filled"></i>
                            <i class="icon-star filled"></i>
                            <i class="icon-star "></i>
                            <i class="icon-star "></i>
                        </div>
                        <a class="product-thumb mt-3" href="shop-single.html"><img src="img/shop/products/33.jpg"
                                                                                   alt="Product"></a>
                        <h3 class="product-title"><a href="shop-single.html">کفش ورزشی آدیداس با کفه سفید و سبز</a></h3>
                        <h4 class="product-price">
                            <del>99.99</del>
                            49.99
                            <span> تومان </span>
                        </h4>
                        <div class="product-buttons">
                            <button class="btn btn-outline-secondary btn-sm btn-wishlist" data-toggle="tooltip"
                                    title="علاقه مندی"><i class="icon-heart"></i></button>
                            <button class="btn btn-outline-primary btn-sm" data-toast data-toast-type="success"
                                    data-toast-position="topRight" data-toast-icon="icon-circle-check"
                                    data-toast-title=" محصول " data-toast-message="با موفقیت به سبد اضافه شد !">افزودن
                                به سبد
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
