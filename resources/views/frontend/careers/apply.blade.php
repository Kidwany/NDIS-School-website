@extends('layouts.layouts')
@section('title', 'Home')
@section('customizedStyle')
    <!--begin::Page Vendors -->
    <!--end::Page Vendors -->
    <link href="{{asset('metronic/assets/vendors/base/vendors.bundle.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('metronic/assets/demo/default/base/style.bundle.css')}}" rel="stylesheet" type="text/css"/>
    <!--end::Base Styles -->
@endsection

@section('customizedScript')
    <!--begin::Base Scripts -->
    <script src="{{asset('metronic/assets/vendors/base/vendors.bundle.js')}}" type="text/javascript"></script>
    <script src="{{asset('metronic/assets/demo/default/base/scripts.bundle.js')}}" type="text/javascript"></script>
    <!--end::Base Scripts -->
    <!--begin::Page Resources -->
    <script src="{{asset('metronic/assets/demo/default/custom/crud/forms/widgets/dropzone.js')}}" type="text/javascript"></script>
    <!--end::Page Resources -->
@endsection

@section('content')
    @include('layouts.header')


    <div class="breadcrumb-area">
        <div class="breadcrumb-top default-overlay bg-img breadcrumb-overly-4 pt-100 pb-95" style="background-image:url({{asset('website/img/bg/login_bg.jpg')}});">
            <div class="container">
                <h2>Apply for Career</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore .</p>
            </div>
        </div>
        <div class="breadcrumb-bottom">
            <div class="container">
                <ul>
                    <li><a href="#">Home</a> <span><i class="fa fa-angle-double-right"></i>login</span></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="login-register-area pt-130 pb-130">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-md-12 ml-auto mr-auto">
                    <div class="login-register-wrapper">
                        <div class="login-register-tab-list nav">
                            <a class="active" data-toggle="tab" href="#lg1">
                                <h4> Enter your Information </h4>
                            </a>
                            {{--<a data-toggle="tab" href="#lg2">
                                <h4> register </h4>
                            </a>--}}
                        </div>
                        <div class="tab-content">
                            <div id="lg1" class="tab-pane active">
                                <div class="login-form-container">
                                    <div class="login-register-form">
                                        <form action="login" method="post">
                                            {{ csrf_field() }}
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <input type="text" name="user-name" placeholder="Enter your Name" required >
                                                </div>
                                                <div class="col-lg-6">
                                                    <input type="email" name="user-password" placeholder="Enter Your Email" required >
                                                </div>
                                                <div class="col-lg-6">
                                                    <input type="number" name="phone" placeholder="Enter Your Phone" required class="w-100">
                                                </div>
                                                <div class="col-lg-6">
                                                    <select name="position" class="form-control" style="font-size: 14px; height: 50px; border-radius: 0">
                                                        <option selected>Choose The Position You Applying For</option>
                                                        <option >Arabic Teacher</option>
                                                        <option >English Teacher</option>
                                                        <option >Math Teacher</option>
                                                        <option >Science Teacher</option>
                                                    </select>
                                                </div>

                                                <div class="col-lg-12">
                                                    <div class="m-dropzone dropzone" action="inc/api/dropzone/upload.php" id="m-dropzone-one">
                                                        <div class="m-dropzone__msg dz-message needsclick">
                                                            <h3 class="m-dropzone__msg-title">
                                                                Drop Your CV Here.
                                                            </h3>
                                                            <span class="m-dropzone__msg-desc">
														or open directory from your computer
													</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="button-box mt-15">
                                                <button class="default-btn" type="submit"><span>Login</span></button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div id="lg2" class="tab-pane">
                                <div class="login-form-container">
                                    <div class="login-register-form">
                                        <form action="#" method="post">
                                            <input type="text" name="user-name" placeholder="Username">
                                            <input type="password" name="user-password" placeholder="Password">
                                            <input name="user-email" placeholder="Email" type="email">
                                            <div class="button-box">
                                                <button class="default-btn" type="submit"><span>Register</span></button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="brand-logo-area pb-130">
        <div class="container">
            <div class="brand-logo-active owl-carousel">
                <div class="single-brand-logo">
                    <a href="#"><img src="{{asset('website')}}/img/brand-logo/1.png" alt=""></a>
                </div>
                <div class="single-brand-logo">
                    <a href="#"><img src="{{asset('website')}}/img/brand-logo/2.png" alt=""></a>
                </div>
                <div class="single-brand-logo">
                    <a href="#"><img src="{{asset('website')}}/img/brand-logo/3.png" alt=""></a>
                </div>
                <div class="single-brand-logo">
                    <a href="#"><img src="{{asset('website')}}/img/brand-logo/4.png" alt=""></a>
                </div>
                <div class="single-brand-logo">
                    <a href="#"><img src="{{asset('website')}}/img/brand-logo/5.png" alt=""></a>
                </div>
                <div class="single-brand-logo">
                    <a href="#"><img src="{{asset('website')}}/img/brand-logo/6.png" alt=""></a>
                </div>
                <div class="single-brand-logo">
                    <a href="#"><img src="{{asset('website')}}/img/brand-logo/2.png" alt=""></a>
                </div>
            </div>
        </div>
    </div>


    @include('layouts.footer')
@endsection
