<footer class="site-footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <!-- Contact Info-->
                <section class="widget widget-light-skin">
                    <h3 class="widget-title">ارتباط با ما</h3>
                    @if(Setting::getValue('phone'))
                        <p class="text-white">تلفن :
                            <a class="navi-link-light"
                               href="tel:{{Setting::getValue('phone')}}">{{Setting::getValue('phone')}}</a>
                        </p>
                    @endif
                    @if(Setting::getValue('mail'))
                        <p class="text-white">
                            ایمیل : <a class="navi-link-light"
                                       href="mailto:{{Setting::getValue('mail')}}"> {{Setting::getValue('mail')}}</a>
                        </p>
                    @endif
                    @if(Setting::getValue(('developer url'))) @endif
                    <p class="text-white">وبسایت :
                        <a class="navi-link-light"
                           href="{{Setting::getValue(('developer url'))}}">{{Setting::getValue(('developer url'))}}</a>
                    </p>
                    @if(Setting::getValue('developer description'))
                        <p>
                            <a class="navi-link-light"
                               href="{{Setting::getValue('developer url')}}">{{Setting::getValue('developer description')}}</a>
                        </p>
                    @endif
                    @foreach($socialMedias as $socialMedia)
                        <a class="social-button shape-circle sb-{{$socialMedia->name}} sb-light-skin"
                           href="{{$socialMedia->address}}"><i
                                class="{{$socialMedia->icon}}"></i></a>
                    @endforeach
                </section>
            </div>
            @if($siteApps->count()>0)
                <div class="col-lg-3 col-md-6">
                    <!-- Mobile App Buttons-->

                    <section class="widget widget-light-skin">
                        <h3 class="widget-title">دکمه‌های مارکت موبایل</h3>
                        @foreach($siteApps as $siteApp)
                            <a class="market-button mb-light-skin" style='background-image: url("{{$siteApp->image}}")'
                               href="{{$siteApp->link}}">
                                <span class="mb-subtitle">دانلود از مارکت</span>
                                <span class="mb-title">{{$siteApp->name}}</span>
                            </a>
                        @endforeach
                    </section>
                </div>
            @endif

            <div class="col-lg-3 col-md-6">
                <!-- Account / Shipping Info-->
                <section class="widget widget-links widget-light-skin">
                    <h3 class="widget-title">مشخصات حساب و دسترسی شما</h3>
                    <ul>
                        <li><a href="{{route('account.profile')}}">پروفایل من</a></li>
                        <li><a href="{{route('account.orders.index')}}">سفارشات من</a></li>
                        <li><a href="{{route('transportation')}}">درباره حمل و نقل</a></li>
                    </ul>
                </section>
            </div>
        </div>
        <hr class="hr-light mt-2 margin-bottom-2x">
        <div class="row">
            <div class="col-md-7 padding-bottom-1x">
                <!-- Payment Methods-->
                <div class="margin-bottom-1x" style="max-width: 615px;"><img
                        src="{{Setting::getValue('payment methods')}}"
                        alt="Payment Methods">
                </div>
            </div>
            <div class="col-md-5 padding-bottom-1x">
                <div class="margin-top-1x hidden-md-up"></div>
                <!--Subscription-->
                <form class="subscribe-form" action="{{route('subscribe.store')}}" method="post" target="_blank"
                      novalidate>
                    @csrf
                    <div class="clearfix">
                        <div class="input-group input-light">
                            <input class="form-control" type="email" name="EMAIL"
                                   placeholder="ایمیل خود را وارد کنید ..."><span class="input-group-addon"><i
                                    class="icon-mail"></i></span>
                        </div>

                        <button class="btn btn-primary" type="submit"><i class="icon-check"></i></button>
                    </div>
                    <span class="form-text text-sm text-white opacity-50 text-right">برای عضویت در خبرنامه , دریافت تخفیف ها , آخرین اخبار ، و فروش های ویژه </span>
                </form>
            </div>
        </div>
        <!-- Copyright-->
        <p class="footer-copyright text-right">© کلیه حقوق محفوظ است, ایجاد شده توسط &nbsp;<i
                class="icon-heart text-danger"></i><a href="{{Setting::getValue('developer url')}}"
                                                      target="_blank"> {{Setting::getValue('developer')}}</a>
        </p>
    </div>
</footer>
