<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <x-title/>
    <!-- SEO Meta Tags-->
    <meta name="description" content="Unishop - Universal E-Commerce Template">
    <meta name="keywords"
          content="shop, e-commerce, modern, flat style, responsive, online store, business, mobile, blog, bootstrap 4, html5, css3, jquery, js, gallery, slider, touch, creative, clean">
    <meta name="author" content="Rokaux">
    <!-- Mobile Specific Meta Tag-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <!-- Favicon and Apple Icons-->
    <link rel="stylesheet" href={{url('unishop-theme/css/app.css')}}>
    <!-- Vendor Styles including: Bootstrap, Font Icons, Plugins, etc.-->
    <link rel="stylesheet" media="screen" href={{url('unishop-theme/css/vendor.min.css')}}>
    <!-- Main Template Styles-->
    <link id="mainStyles" rel="stylesheet" media="screen" href={{url('unishop-theme/css/styles.css')}}>
    <link id="mainStyles" rel="stylesheet" media="screen" href="{{url('unishop-theme/css/rtl.css')}}">
    <link rel="stylesheet" href="{{url('unishop-theme/css/fancy-slider/style.css')}}">
    @yield('links')
    <!-- Modernizr-->
    <script src={{url('unishop-theme/js/modernizr.min.js')}}></script>
</head>
<!-- Body-->
<body>
@include('layouts.partials.modals')
<x-menu.side/>
<x-menu.mobile/>
<x-top-bar/>
<!-- Navbar-->
<x-header/>
<!-- Off-Canvas Wrapper-->
<div class="offcanvas-wrapper bg-dark bg-white">
    <!-- Page Title-->
    <x-breadcrumbs></x-breadcrumbs>
    <!-- Page Content-->
    <div class="container padding-bottom-2x padding-top-2x mb-2 ">
        @yield('content')
    </div>
    <x-footer/>
</div>
@yield('modals')
<!-- Back To Top Button--><a class="scroll-to-top-btn" href="#"><i class="icon-arrow-up"></i></a>
<!-- Backdrop-->
<div class="site-backdrop"></div>
<!-- JavaScript (jQuery) libraries, plugins and custom scripts-->
<script src="/unishop-theme/js/vendor.min.js"></script>
<script src="/unishop-theme/js/scripts.min.js"></script>
<script src="/unishop-theme/js/fancy-slider/index.js"></script>
@yield('scripts')
</body>
</html>
