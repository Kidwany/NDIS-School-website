@extends('layouts.layouts')
@section('title', 'Contact')
@section('content')
    @include('layouts.header')


    <div class="breadcrumb-area">
        <div class="breadcrumb-top default-overlay bg-img breadcrumb-overly-5 pt-100 pb-95" style="background-image:url({{asset('website/img/bg/contact_bg.jpg')}});">
            <div class="container">
                <h2>Contact Us</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore .</p>
            </div>
        </div>
        <div class="breadcrumb-bottom">
            <div class="container">
                <ul>
                    <li><a href="#">Home</a> <span><i class="fa fa-angle-double-right"></i>Contact Us</span></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="contact-area pt-130 pb-130">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="contact-map mr-70">
                        <div id="map">
                            <div class="mapouter">
                                <div class="gmap_canvas">
                                    <iframe width="100%" height="100%" id="gmap_canvas" src="https://maps.google.com/maps?q=New%20Discovery%20International%20school&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                                    <a href="https://www.crocothemes.net"></a>
                                </div>
                                <style>
                                    .mapouter
                                    {
                                        text-align:right;
                                        height:100%;
                                        width:100%;
                                    }
                                    .gmap_canvas
                                    {
                                        overflow:hidden;
                                        background:none!important;
                                        height:100%;
                                        width:100%;
                                    }
                                </style>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5">


                    <div class="contact-form">
                        <div class="contact-title mb-45">
                            <h2>Stay <span>Connected</span></h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipis do eiusmod tempor indunt ut labore et dolore magna aliqua.</p>
                        </div>

                        @include('layouts.messages')

                        <form method="post" action="{{url('/contact-form')}}">

                            {{csrf_field()}}

                            <input name="name" placeholder="Name*" type="text" class="form-control" required style="height: 50px"value="{{old('name')}}">
                            <input name="email" placeholder="Email*" type="email" class="form-control" required style="height: 50px"value="{{old('email')}}">
                            <input name="subject" placeholder="Subject*" type="text" class="form-control" style="height: 50px"value="{{old('subject')}}">
                            <textarea name="message" placeholder="Message" class="form-control" rows="5" required style="resize: none">{{old('message')}}</textarea>
                            <button class="submit btn-style" type="submit">SEND MESSAGE</button>

                        </form>
{{--
                        <p class="form-messege"></p>
--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="contact-info-area bg-img pt-180 pb-140 default-overlay" style="background-image:url({{asset('website/img/bg/conatct_midle_banner.jpg')}});">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="single-contact-info mb-30 text-center">
                        <div class="contact-info-icon">
                            <span><i class="fa fa-location-arrow"></i></span>
                        </div>
                        <p>Saqqara EL-Seyahe Road, El-Mariouteyra, <br>El-Haram, Giza (after Madina Academy).</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="single-contact-info mb-30 text-center">
                        <div class="contact-info-icon">
                            <span><i class="fa fa-phone"></i></span>
                        </div>
                        <div class="contact-info-phn">
                            <div class="info-phn-title">
                                <span>Phone : </span>
                            </div>
                            <div class="info-phn-number">
                                <p>01023344443</p>
                                <p>01023355553</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="single-contact-info mb-30 text-center">
                        <div class="contact-info-icon">
                            <span><i class="fa fa-envelope"></i></span>
                        </div>
                        <a href="#">info@ndbischool.com</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--<div class="brand-logo-area pt-130 pb-130">
        <div class="container">
            <div class="brand-logo-active owl-carousel">
                <div class="single-brand-logo">
                    <a href="#"><img src="assets/img/brand-logo/1.png" alt=""></a>
                </div>
                <div class="single-brand-logo">
                    <a href="#"><img src="assets/img/brand-logo/2.png" alt=""></a>
                </div>
                <div class="single-brand-logo">
                    <a href="#"><img src="assets/img/brand-logo/3.png" alt=""></a>
                </div>
                <div class="single-brand-logo">
                    <a href="#"><img src="assets/img/brand-logo/4.png" alt=""></a>
                </div>
                <div class="single-brand-logo">
                    <a href="#"><img src="assets/img/brand-logo/5.png" alt=""></a>
                </div>
                <div class="single-brand-logo">
                    <a href="#"><img src="assets/img/brand-logo/6.png" alt=""></a>
                </div>
                <div class="single-brand-logo">
                    <a href="#"><img src="assets/img/brand-logo/2.png" alt=""></a>
                </div>
            </div>
        </div>
    </div>--}}


    @include('layouts.footer')
@endsection
