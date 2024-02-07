<footer class="site-footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <!-- Contact Info-->
                <section class="widget widget-light-skin">
                    <h3 class="widget-title">ارتباط با ما</h3>
                    <p class="text-white">تلفن ({{Setting::getValue('owner')}} ) : <a class="navi-link-light"
                                                                                      href="tel:{{Setting::getValue('phone')}}">{{Setting::getValue('phone')}}</a>
                    </p>
                    <p class="text-white">ایمیل : <a class="navi-link-light"
                                                     href="mailto:{{Setting::getValue('mail')}}"> {{Setting::getValue('mail')}}</a>
                    </p>
                    <p class="text-white">وبسایت : <a class="navi-link-light"
                                                      href="{{Setting::getValue(('creator url'))}}">{{Setting::getValue(('creator url'))}}</a>
                    </p>
                    <p><a class="navi-link-light"
                          href="{{Setting::getValue('creator url')}}">{{Setting::getValue('creator description')}}</a>
                    </p>
                    @foreach($socialMedias as $socialMedia)
                        <a class="social-button shape-circle sb-{{$socialMedia->name}} sb-light-skin"
                           href="{{$socialMedia->address}}"><i
                                class="{{$socialMedia->icon}}"></i></a>
                    @endforeach
                </section>
            </div>
            <div class="col-lg-3 col-md-6">
                <!-- Mobile App Buttons-->
                <section class="widget widget-light-skin">
                    <h3 class="widget-title">دکمه‌های مارکت موبایل</h3>
                    <a class="market-button apple-button mb-light-skin" href="#">
                        <span class="mb-subtitle">دانلود از مارکت</span>
                        <span class="mb-title">اپ استور</span>
                    </a>
                    <a class="market-button google-button mb-light-skin" href="#">
                        <span class="mb-subtitle">دانلود از مارکت</span>
                        <span class="mb-title">گوگل پلی</span></a>
                    <a class="market-button windows-button mb-light-skin" href="#">
                        <span class="mb-subtitle">دانلود از مارکت</span>
                        <span class="mb-title">ویندوز استور</span>
                    </a>
                </section>
            </div>
            <div class="col-lg-3 col-md-6">
                <!-- About Us-->
                <section class="widget widget-links widget-light-skin">
                    <h3 class="widget-title">درباره ما</h3>
                    <ul>
                        <li><a href="#">حرفه و مهارت</a></li>
                        <li><a href="moderniz.ir">درباره مدرنیزز</a></li>
                        <li><a href="#">بیشتر بدانید</a></li>
                        <li><a href="#">خدمات و سرویسها</a></li>
                        <li><a href="#">وبلاگ گروه</a></li>
                        <li><a href="#">مزایای استفاده از این قالب</a></li>
                    </ul>
                </section>
            </div>
            <div class="col-lg-3 col-md-6">
                <!-- Account / Shipping Info-->
                <section class="widget widget-links widget-light-skin">
                    <h3 class="widget-title">مشخصات حساب و دسترسی شما</h3>
                    <ul>
                        <li><a href="account-profile.html">پروفایل شما</a></li>
                        <li><a href="account-profile.html">قیمت و حمل و نقل</a></li>
                        <li><a href="account-profile.html">بازپرداخت و جایگزینی</a></li>
                        <li><a href="account-profile.html">مالیات</a></li>
                        <li><a href="account-address.html">اطلاعات تحویل</a></li>
                        <li><a href="account-profile.html">برنامه های وابسته</a></li>
                    </ul>
                </section>
            </div>
        </div>
        <hr class="hr-light mt-2 margin-bottom-2x">
        <div class="row">
            <div class="col-md-7 padding-bottom-1x">
                <!-- Payment Methods-->
                <div class="margin-bottom-1x" style="max-width: 615px;"><img
                        src="/unishop-theme/img/payment_methods.png"
                        alt="Payment Methods">
                </div>
            </div>
            <div class="col-md-5 padding-bottom-1x">
                <div class="margin-top-1x hidden-md-up"></div>
                <!--Subscription-->
                <form class="subscribe-form" action="http://moderniz.ir" method="post" target="_blank" novalidate>
                    <div class="clearfix">
                        <div class="input-group input-light">
                            <input class="form-control" type="email" name="EMAIL"
                                   placeholder="ایمیل خود را وارد کنید ..."><span class="input-group-addon"><i
                                    class="icon-mail"></i></span>
                        </div>
                        <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                        <div style="position: absolute; left: -5000px;" aria-hidden="true">
                            <input type="text" name="b_c7103e2c981361a6639545bd5_1194bb7544" tabindex="-1">
                        </div>
                        <button class="btn btn-primary" type="submit"><i class="icon-check"></i></button>
                    </div>
                    <span class="form-text text-sm text-white opacity-50 text-right">برای عضویت در خبرنامه , دریافت تخفیف ها , آخرین اخبار ، و فروش های ویژه </span>
                </form>
            </div>
        </div>
        <!-- Copyright-->
        <p class="footer-copyright text-right">© کلیه حقوق محفوظ است , ایجاد شده توسط &nbsp;<i
                class="icon-heart text-danger"></i><a href="http://moderniz.ir/" target="_blank"> &nbsp;محمد شجاع</a>
        </p>
    </div>
</footer>
