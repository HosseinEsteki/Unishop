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
        <hr>
    @endforeach
    <div class="text-center padding-top-3x mb-30">
        <h2>معرفی اعضای گروه</h2>
        <p class="text-muted">افراد پشت تجربه خرید عالی شما.</p>
    </div>
    <div class="row">
        <div class="col-md-3 col-sm-6 mb-30 text-center"><img
                class="d-block w-150 mx-auto img-thumbnail rounded-circle mb-2" src="img/team/01.jpg" alt="Team">
            <h6>سارا نعمتی</h6>
            <p class="text-muted mb-2">بنیانگذار، مدیر عامل شرکت</p>
            <div class="social-bar"><a class="social-button shape-circle sb-facebook" href="#" data-toggle="tooltip"
                                       data-placement="top" title="Facebook"><i class="socicon-facebook"></i></a><a
                    class="social-button shape-circle sb-twitter" href="#" data-toggle="tooltip" data-placement="top"
                    title="Twitter"><i class="socicon-twitter"></i></a><a
                    class="social-button shape-circle sb-google-plus" href="#" data-toggle="tooltip"
                    data-placement="top" title="Google +"><i class="socicon-googleplus"></i></a></div>
        </div>
        <div class="col-md-3 col-sm-6 mb-30 text-center"><img
                class="d-block w-150 mx-auto img-thumbnail rounded-circle mb-2" src="img/team/02.jpg" alt="Team">
            <h6>تیلور جکسون</h6>
            <p class="text-muted mb-2">مدیر مالی و حسابرسی</p>
            <div class="social-bar"><a class="social-button shape-circle sb-skype" href="#" data-toggle="tooltip"
                                       data-placement="top" title="Skype"><i class="socicon-skype"></i></a><a
                    class="social-button shape-circle sb-facebook" href="#" data-toggle="tooltip" data-placement="top"
                    title="Facebook"><i class="socicon-facebook"></i></a><a class="social-button shape-circle sb-paypal"
                                                                            href="#" data-toggle="tooltip"
                                                                            data-placement="top" title="PayPal"><i
                        class="socicon-paypal"></i></a></div>
        </div>
        <div class="col-md-3 col-sm-6 mb-30 text-center"><img
                class="d-block w-150 mx-auto img-thumbnail rounded-circle mb-2" src="img/team/03.jpg" alt="Team">
            <h6>علیرضا بهرامی</h6>
            <p class="text-muted mb-2">مدیر بازاریابی و توسعه</p>
            <div class="social-bar"><a class="social-button shape-circle sb-twitter" href="#" data-toggle="tooltip"
                                       data-placement="top" title="Twitter"><i class="socicon-twitter"></i></a><a
                    class="social-button shape-circle sb-google-plus" href="#" data-toggle="tooltip"
                    data-placement="top" title="Google +"><i class="socicon-googleplus"></i></a><a
                    class="social-button shape-circle sb-email" href="#" data-toggle="tooltip" data-placement="top"
                    title="Email"><i class="socicon-mail"></i></a></div>
        </div>
        <div class="col-md-3 col-sm-6 mb-30 text-center"><img
                class="d-block w-150 mx-auto img-thumbnail rounded-circle mb-2" src="img/team/04.jpg" alt="Team">
            <h6>مانا ضرابی پور</h6>
            <p class="text-muted mb-2">طراح و مستند سازی</p>
            <div class="social-bar"><a class="social-button shape-circle sb-behance" href="#" data-toggle="tooltip"
                                       data-placement="top" title="Behance"><i class="socicon-behance"></i></a><a
                    class="social-button shape-circle sb-dribbble" href="#" data-toggle="tooltip" data-placement="top"
                    title="Dribbble"><i class="socicon-dribbble"></i></a><a
                    class="social-button shape-circle sb-instagram" href="#" data-toggle="tooltip" data-placement="top"
                    title="Instagram"><i class="socicon-instagram"></i></a></div>
        </div>
    </div>
</div>
