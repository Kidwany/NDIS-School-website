<!DOCTYPE html>
<html lang="{{app()->getLocale()}}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>NDIS - @yield('title')</title>

    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
    <script>
        WebFont.load({
            google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    </script>

    <!--end::Web font -->
    <!--begin::Base Styles -->
    @yield('datatablesStyle')
    <!--begin::Page Vendors -->
    <link href="{{asset('metronic/assets/vendors/custom/fullcalendar/fullcalendar.bundle.css')}}" rel="stylesheet" type="text/css" />
    <!--end::Page Vendors -->
    <link href="{{asset('metronic/assets/vendors/base/vendors.bundle.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('metronic/assets/demo/default/base/style.bundle.css')}}" rel="stylesheet" type="text/css" />
    <!--end::Base Styles -->
{{--
    <link rel="shortcut icon" href="{{asset('metronic/assets/demo/default/media/img/logo/favicon.ico')}}" />
--}}

    <link rel="icon" href="{{asset('img')}}">
{{--<link rel="stylesheet" href="{{asset('website/css/libs/reset-min.css')}}" type="text/css">--}}

<!-- CSS ============================================ -->
</head>
<body>


<div id="app">
    <main class="py-4" style="padding-top: 0 !important; padding-bottom: 0 !important;">
        <!-- begin:: Page -->
        <div class="m-grid m-grid--hor m-grid--root m-page">
            <!-- BEGIN: Header -->
        @include('dashboard.layouts.header')
        <!-- END: Header -->
            <!-- begin::Body -->
            <div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body" style="min-height: 83vh">
                <!-- BEGIN: Left Aside -->
            @include('dashboard.layouts.sideMenu')
            <!-- END: Left Aside -->
            <!-- BEGIN: Content --->
            @yield('content')
            <!-- END: Content ----->
            </div>
            <!-- end:: Body -->
            <!-- begin::Footer -->
{{--
        @include('dashboard.layouts.footer')
--}}
        <!-- end::Footer -->
        </div>
        <!-- end:: Page -->

        <!-- begin::Quick Sidebar -->
        @include('dashboard.layouts.quickSideMenu')
        <!-- end::Quick Sidebar -->

        <!-- begin::Scroll Top -->
        <div id="m_scroll_top" class="m-scroll-top">
            <i class="la la-arrow-up"></i>
        </div>
        <!-- end::Scroll Top -->		    <!-- begin::Quick Nav -->
        <ul class="m-nav-sticky" style="margin-top: 30px;">
            <!--
                <li class="m-nav-sticky__item" data-toggle="m-tooltip" title="Showcase" data-placement="left">
                    <a href="">
                        <i class="la la-eye"></i>
                    </a>
                </li>
                <li class="m-nav-sticky__item" data-toggle="m-tooltip" title="Pre-sale Chat" data-placement="left">
                    <a href="" >
                        <i class="la la-comments-o"></i>
                    </a>
                </li>
                -->
            <li class="m-nav-sticky__item" data-toggle="m-tooltip" title="Purchase" data-placement="left">
                <a href="https://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes" target="_blank">
                    <i class="la la-cart-arrow-down"></i>
                </a>
            </li>
            <li class="m-nav-sticky__item" data-toggle="m-tooltip" title="Documentation" data-placement="left">
                <a href="https://keenthemes.com/metronic/documentation.html" target="_blank">
                    <i class="la la-code-fork"></i>
                </a>
            </li>
            <li class="m-nav-sticky__item" data-toggle="m-tooltip" title="Support" data-placement="left">
                <a href="https://keenthemes.com/forums/forum/support/metronic5/" target="_blank">
                    <i class="la la-life-ring"></i>
                </a>
            </li>
        </ul>
        <!-- begin::Quick Nav -->
        <!--begin::Base Scripts -->
    </main>
</div>



<!-- JS ============================================ -->
<!-- Scripts -->
{{--
<script src="{{ asset('js/app.js') }}" defer></script>
--}}
<!-- begin::Quick Nav -->
<!--begin::Base Scripts -->
<script src="{{asset('metronic/assets/vendors/base/vendors.bundle.js')}}" type="text/javascript"></script>
<script src="{{asset('metronic/assets/demo/default/base/scripts.bundle.js')}}" type="text/javascript"></script>

@yield('datatablesScripts');

<!--end::Base Scripts -->
<!--begin::Page Vendors -->
<script src="{{asset('metronic/assets/vendors/custom/fullcalendar/fullcalendar.bundle.js')}}" type="text/javascript"></script>
<!--end::Page Vendors -->
<!--begin::Page Snippets -->
<script src="{{asset('metronic/assets/app/js/dashboard.js')}}" type="text/javascript"></script>
<!--end::Page Snippets -->





</body>
</html>
