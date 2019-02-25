@extends('layouts.layouts')
@section('title', 'About')
@section('content')
    @include('layouts.header')

    <div class="breadcrumb-area">
        <div class="breadcrumb-top default-overlay bg-img pt-100 pb-95" style="background-image:url({{asset('website/img/about/about_banner.jpg')}});">
            <div class="container">
                <h2>About Us</h2>
                <p>We are the first International School that offers both accredited American and British Curriculums in reasonable costs.</p>
            </div>
        </div>
        <div class="breadcrumb-bottom">
            <div class="container">
                <ul>
                    <li><a href="#">Home</a> <span><i class="fa fa-angle-double-right"></i> About Page</span></li>
                </ul>
            </div>
        </div>
    </div>

    <style>
        .single-about-chose-us .about-choose-img
        {
            height: 50px;
        }

        .single-about-chose-us .about-choose-img img
        {
            height: 100%;
        }
    </style>

    <!------ Choose Us ------>
    <div class="choose-area bg-img pt-90" style="background-image:url({{asset('website/img/bg/about_bg.jpg')}});">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="about-chose-us pt-120">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="single-about-chose-us mb-95">
                                    <div class="about-choose-img">
                                        <img src="{{asset('website/img/about/challenge_blue.png')}}" alt="">
                                    </div>
                                    <div class="about-choose-content text-light-blue">
                                        <h3>Academically Challenging</h3>
                                        <p>A program of instruction in English leading to nationally and internationally-recognized qualifications.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="single-about-chose-us mb-95 about-negative-mrg">
                                    <div class="about-choose-img">
                                        <img src="{{asset('website/img/about/security_yellow.png')}}" alt="">
                                    </div>
                                    <div class="about-choose-content text-yellow">
                                        <h3>Secure Environment </h3>
                                        <p>Students are encouraged to develop a love of learning and to internalize learning as lifelong practiced.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="single-about-chose-us mb-95">
                                    <div class="about-choose-img">
                                        <img src="{{asset('website/img/about/decsion_blue.png')}}" alt="">
                                    </div>
                                    <div class="about-choose-content text-blue">
                                        <h3>Decision-Making</h3>
                                        <p>In implementing the policies of the Board, The director will give due consideration to the views of staff.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="single-about-chose-us mb-95 about-negative-mrg">
                                    <div class="about-choose-img">
                                        <img src="{{asset('website/img/about/american_green.png')}}" alt="">
                                    </div>
                                    <div class="about-choose-content text-green">
                                        <h3>American Curriculums</h3>
                                        <p>NDIS is licensed as an American and British curriculum school by the Egyptian Ministry of Education.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="about-img">
                        <img src="{{asset('website/')}}img/banner/about.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--<!------ Choose Us ------>
    <div class="video-area bg-img pt-270 pb-270" style="background-image:url({{asset('website/img/banner/video.jpg')}});">
        <div class="video-btn-2">
            <a class="video-popup" href="https://www.youtube.com/watch?v=sv5hK4crIRc">
                <img class="animated" src="{{asset('website/')}}img/icon-img/viddeo-btn.png" alt="">
            </a>
        </div>
    </div>
    <!------ Choose Us ------>
    <div class="teacher-area pt-130 pb-100">
        <div class="container">
            <div class="section-title mb-75">
                <h2>Best <span>Teacher</span></h2>
                <p>tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim <br>veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip </p>
            </div>
            <div class="custom-row">
                <div class="custom-col-5">
                    <div class="single-teacher mb-30">
                        <div class="teacher-img">
                            <img src="{{asset('website/')}}img/teacher/teacher-1.jpg" alt="">
                        </div>
                        <div class="teacher-content-visible">
                            <h4>Robi Khan</h4>
                            <h5>Lecturer</h5>
                        </div>
                        <div class="teacher-content-wrap">
                            <div class="teacher-content">
                                <h4>Fawd Khan</h4>
                                <h5>Lecturer</h5>
                                <p>Tempor incididunt magna aliqua.</p>
                                <div class="teacher-social">
                                    <ul>
                                        <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a class="youtube-play" href="#"><i class="fa fa-youtube-play"></i></a></li>
                                        <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a class="google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="custom-col-5">
                    <div class="single-teacher mb-30">
                        <div class="teacher-img">
                            <img src="{{asset('website/')}}img/teacher/teacher-2.jpg" alt="">
                        </div>
                        <div class="teacher-content-visible">
                            <h4>Jui Khan</h4>
                            <h5>Lecturer</h5>
                        </div>
                        <div class="teacher-content-wrap">
                            <div class="teacher-content">
                                <h4>Fawd Khan</h4>
                                <h5>Lecturer</h5>
                                <p>Tempor incididunt magna aliqua.</p>
                                <div class="teacher-social">
                                    <ul>
                                        <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a class="youtube-play" href="#"><i class="fa fa-youtube-play"></i></a></li>
                                        <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a class="google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="custom-col-5">
                    <div class="single-teacher mb-30">
                        <div class="teacher-img">
                            <img src="{{asset('website/')}}img/teacher/teacher-3.jpg" alt="">
                        </div>
                        <div class="teacher-content-visible">
                            <h4>Fawd Khan</h4>
                            <h5>Lecturer</h5>
                        </div>
                        <div class="teacher-content-wrap">
                            <div class="teacher-content">
                                <h4>Fawd Khan</h4>
                                <h5>Lecturer</h5>
                                <p>Tempor incididunt magna aliqua.</p>
                                <div class="teacher-social">
                                    <ul>
                                        <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a class="youtube-play" href="#"><i class="fa fa-youtube-play"></i></a></li>
                                        <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a class="google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="custom-col-5">
                    <div class="single-teacher mb-30">
                        <div class="teacher-img">
                            <img src="{{asset('website/')}}img/teacher/teacher-4.jpg" alt="">
                        </div>
                        <div class="teacher-content-visible">
                            <h4>Fawd Khan</h4>
                            <h5>Lecturer</h5>
                        </div>
                        <div class="teacher-content-wrap">
                            <div class="teacher-content">
                                <h4>Fawd Khan</h4>
                                <h5>Lecturer</h5>
                                <p>Tempor incididunt magna aliqua.</p>
                                <div class="teacher-social">
                                    <ul>
                                        <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a class="youtube-play" href="#"><i class="fa fa-youtube-play"></i></a></li>
                                        <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a class="google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="custom-col-5">
                    <div class="single-teacher mb-30">
                        <div class="teacher-img">
                            <img src="{{asset('website/')}}img/teacher/teacher-5.jpg" alt="">
                        </div>
                        <div class="teacher-content-visible">
                            <h4>Jui Khan</h4>
                            <h5>Lecturer</h5>
                        </div>
                        <div class="teacher-content-wrap">
                            <div class="teacher-content">
                                <h4>Fawd Khan</h4>
                                <h5>Lecturer</h5>
                                <p>Tempor incididunt magna aliqua.</p>
                                <div class="teacher-social">
                                    <ul>
                                        <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a class="youtube-play" href="#"><i class="fa fa-youtube-play"></i></a></li>
                                        <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a class="google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!------ Choose Us ------>
    <div class="fun-fact-area bg-img pt-130 pb-100" style="background-image:url({{asset('website/img/bg/bg-6.jpg')}});">
        <div class="container">
            <div class="section-title-3 section-shape-hm2-2 white-text text-center mb-100">
                <h2><span>Fun</span> Fact</h2>
                <p>tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, <br> quis nostrud exercitation ullamco laboris nisi ut aliquip </p>
            </div>
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                    <div class="single-count mb-30 count-one count-white">
                        <div class="count-img">
                            <img src="{{asset('website/')}}img/icon-img/funfact-1.png" alt="">
                        </div>
                        <div class="count-content">
                            <h2 class="count">160</h2>
                            <span>AWARD WINNING</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                    <div class="single-count mb-30 count-two count-white">
                        <div class="count-img">
                            <img src="{{asset('website/')}}img/icon-img/funfact-2.png" alt="">
                        </div>
                        <div class="count-content">
                            <h2 class="count">200</h2>
                            <span>GRADUATE</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-3 col-md-6 col-sm-6">
                    <div class="single-count mb-30 count-three count-white">
                        <div class="count-img">
                            <img src="{{asset('website/')}}img/icon-img/funfact-1.png" alt="">
                        </div>
                        <div class="count-content">
                            <h2 class="count">160</h2>
                            <span>AWARD WINNING</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6">
                    <div class="single-count mb-30 count-four count-white">
                        <div class="count-img">
                            <img src="{{asset('website/')}}img/icon-img/funfact-2.png" alt="">
                        </div>
                        <div class="count-content">
                            <h2 class="count">200</h2>
                            <span>FACULTIES</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!------ Choose Us ------>
    <div class="achievement-area pt-130 pb-115">
        <div class="container">
            <div class="section-title mb-75">
                <h2>What <span>People Say</span></h2>
                <p>tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim <br>veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip </p>
            </div>
            <div class="testimonial-slider-wrap mt-45">
                <div class="testimonial-text-slider">
                    <div class="testi-content-wrap">
                        <div class="testi-big-img">
                            <img alt="" src="{{asset('website/')}}img/testimonial/testi-b1.jpg">
                        </div>
                        <div class="row no-gutters">
                            <div class="ml-auto col-lg-6 col-md-6">
                                <div class="testi-content bg-img default-overlay" style="background-image:url({{asset('website/img/bg/testi.png')}});">
                                    <div class="quote-style quote-left">
                                        <i class="fa fa-quote-left"></i>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, conse ctetur adipi sicing elit, sed do eiusm od tempor incidi dunt ut labore et dolore magna aliqua. Ut enim  fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit </p>
                                    <div class="testi-info">
                                        <h5>AYESHA HOQUE</h5>
                                        <span>Students Of AMMT Department</span>
                                    </div>
                                    <div class="quote-style quote-right">
                                        <i class="fa fa-quote-right"></i>
                                    </div>
                                    <div class="testi-arrow">
                                        <img alt="" src="{{asset('website/')}}img/icon-img/testi-icon.png">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testi-content-wrap">
                        <div class="testi-big-img">
                            <img alt="" src="{{asset('website/')}}img/testimonial/testi-b3.jpg">
                        </div>
                        <div class="row no-gutters">
                            <div class="ml-auto col-lg-6 col-md-6">
                                <div class="testi-content bg-img default-overlay" style="background-image:url({{asset('website/img/bg/testi.png')}});">
                                    <div class="quote-style quote-left">
                                        <i class="fa fa-quote-left"></i>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, conse ctetur adipi sicing elit, sed do eiusm od tempor incidi dunt ut labore et dolore magna aliqua. Ut enim  fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis</p>
                                    <div class="testi-info">
                                        <h5>Tayeb Rayed</h5>
                                        <span>Students Of AMMT Department</span>
                                    </div>
                                    <div class="quote-style quote-right">
                                        <i class="fa fa-quote-right"></i>
                                    </div>
                                    <div class="testi-arrow">
                                        <img alt="" src="{{asset('website/')}}img/icon-img/testi-icon.png">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testi-content-wrap">
                        <div class="testi-big-img">
                            <img alt="" src="{{asset('website/')}}img/testimonial/testi-b2.jpg">
                        </div>
                        <div class="row no-gutters">
                            <div class="ml-auto col-lg-6 col-md-6">
                                <div class="testi-content bg-img default-overlay" style="background-image:url({{asset('website/img/bg/testi.png')}});">
                                    <div class="quote-style quote-left">
                                        <i class="fa fa-quote-left"></i>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, conse ctetur adipi sicing elit, sed do eiusm od tempor incidi dunt ut labore et dolore magna aliqua. Ut enim  fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui. Sed ut perspiciatis unde omnis iste natus error sit </p>
                                    <div class="testi-info">
                                        <h5>Robiul siddikee</h5>
                                        <span>Students Of AMMT Department</span>
                                    </div>
                                    <div class="quote-style quote-right">
                                        <i class="fa fa-quote-right"></i>
                                    </div>
                                    <div class="testi-arrow">
                                        <img alt="" src="{{asset('website/')}}img/icon-img/testi-icon.png">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testi-content-wrap">
                        <div class="testi-big-img">
                            <img alt="" src="{{asset('website/')}}img/testimonial/testi-b2.jpg">
                        </div>
                        <div class="row no-gutters">
                            <div class="ml-auto col-lg-6 col-md-6">
                                <div class="testi-content bg-img default-overlay" style="background-image:url({{asset('website/img/bg/testi.png')}});">
                                    <div class="quote-style quote-left">
                                        <i class="fa fa-quote-left"></i>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, conse ctetur adipi sicing elit, sed do eiusm od tempor incidi dunt ut labore et dolore magna aliqua. Ut enim  fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit </p>
                                    <div class="testi-info">
                                        <h5>Modhu Dada</h5>
                                        <span>Students Of AMMT Department</span>
                                    </div>
                                    <div class="quote-style quote-right">
                                        <i class="fa fa-quote-right"></i>
                                    </div>
                                    <div class="testi-arrow">
                                        <img alt="" src="{{asset('website/')}}img/icon-img/testi-icon.png">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testimonial-image-slider">
                    <div class="sin-testi-image">
                        <img src="{{asset('website/')}}img/testimonial/testi-s2.jpg" alt="">
                    </div>
                    <div class="sin-testi-image">
                        <img src="{{asset('website/')}}img/testimonial/testi-s1.jpg" alt="">
                    </div>
                    <div class="sin-testi-image">
                        <img src="{{asset('website/')}}img/testimonial/testi-s3.jpg" alt="">
                    </div>
                    <div class="sin-testi-image">
                        <img src="{{asset('website/')}}img/testimonial/testi-s3.jpg" alt="">
                    </div>
                </div>
            </div>
            <div class="testimonial-text-img">
                <img alt="" src="{{asset('website/')}}img/icon-img/testi-text.png">
            </div>
        </div>
    </div>
    <!------ Choose Us ------>
    <div class="brand-logo-area pb-130">
        <div class="container">
            <div class="brand-logo-active owl-carousel">
                <div class="single-brand-logo">
                    <a href="#"><img src="{{asset('website/')}}img/brand-logo/1.png" alt=""></a>
                </div>
                <div class="single-brand-logo">
                    <a href="#"><img src="{{asset('website/')}}img/brand-logo/2.png" alt=""></a>
                </div>
                <div class="single-brand-logo">
                    <a href="#"><img src="{{asset('website/')}}img/brand-logo/3.png" alt=""></a>
                </div>
                <div class="single-brand-logo">
                    <a href="#"><img src="{{asset('website/')}}img/brand-logo/4.png" alt=""></a>
                </div>
                <div class="single-brand-logo">
                    <a href="#"><img src="{{asset('website/')}}img/brand-logo/5.png" alt=""></a>
                </div>
                <div class="single-brand-logo">
                    <a href="#"><img src="{{asset('website/')}}img/brand-logo/6.png" alt=""></a>
                </div>
                <div class="single-brand-logo">
                    <a href="#"><img src="{{asset('website/')}}img/brand-logo/2.png" alt=""></a>
                </div>
            </div>
        </div>
    </div>--}}

    <!------ wHO WE ARE ------>

    <!------ Aim Section ------>
    <div class="about-us pt-130 pb-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="about-content">
                        <div class="section-title section-title-green mb-30">
                            <h2>Who We <span>Are ?</span></h2>
                            <p class="aims">
                                NDIS is licensed as an American and British curriculums school
                                by the Egyptian Ministry of Education, Cambridge, Edexcel and AIAA.
                                The task of school is offering students a general education leading
                                to both Egyptian and International qualifications.
                                In particular it serves the educational needs of students and promotes international understanding.
                            </p>
                            <p>
                                The goal of New Discovery International School is to provide an excellent education to students,
                                based on International Baccalaureate programme and philosophy. The school is dedicated to intercultural
                                understanding and development of the individual talents of young people.
                            </p>

                        </div>
                        {{--<div class="about-btn mt-45">
                            <a class="default-btn" href="about-us.html">ABOUT US</a>
                        </div>--}}
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="about-img default-overlay">
                        <img src="{{asset('website/img/about/who_we_are.jpg')}}" alt="">
                        {{--<a class="video-btn video-popup" href="https://www.youtube.com/watch?v=sv5hK4crIRc">
                            <img class="animated" src="{{asset('website/img')}}/icon-img/video.png" alt="">
                        </a>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- campus-area-start -->
    <div class="campus-area pt-130">
        <div class="container">
            <div class="inner-campus">
                <div class="campus">
                    <div class="row">

                        <div class="col-md-6 p-0">
                            <div class="campus-video-wrapper ptb-180" style="background-image:url({{asset('website/img/slider/mini-slider.jpg')}})" >
                                <div class="campus-text text-center">
                                    <div class="campus-icon">
                                        <a class="video-popup" href="https://www.youtube.com/watch?v=5IfKTuUH0HU"><i class="fa fa-play"></i></a>
                                    </div>
                                    <h4>Take a Video Tour of Our Campus</h4>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 p-0">
                            <div class="tab-wrapper">
                                <ul class="nav nav-pills mb-3 campus-tab" id="pills-tab" role="tablist">
                                    <li role="presentation" class="active">
                                        <a href="#home" aria-controls="home" role="tab" data-toggle="tab">
                                            <div class="campus-info">
                                                <h4>Our Vision</h4>
                                            </div>
                                        </a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#profile" aria-controls="home" role="tab" data-toggle="tab">
                                            <div class="campus-list">
                                                <div class="campus-info">
                                                    <h4>Mission</h4>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#messages" aria-controls="home" role="tab" data-toggle="tab">
                                            <div class="campus-list">
                                                <div class="campus-info">
                                                    <h4>Philosophy</h4>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>

                                <div class="tab-content" id="pills-tabContent">
                                    <div role="tabpanel" class="tab-pane active" id="home">
                                        <div class="campus-wrapper">
                                            <div class="campus-content">
                                                <p>The real success of nations is discovering and empowering the innate abilities of younger generations throught innovation and quality learning to cope withe the challenges of the 21st century worldwide  </p>
                                                <p>The task of the school is offering students a general education leading to both Egyptian and international qualifications.</p>
                                                <a href="{{url('/about')}}">read more</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="profile">
                                        <div class="campus-wrapper">
                                            <div class="campus-content">
                                                <p>We are keen to deliver to society highly qualified graduates through applied learning with advanced technology.    </p>
                                                <p>Due care is given to moral development and character building as well as involving parents positively to complement the educational journey of their sons and daughters.</p>
                                                <a href="{{url('/about')}}">read more</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="messages">
                                        <div class="campus-wrapper">
                                            <div class="campus-content">
                                                <p>NDIS and staff share the philosophy that a aschool must be a place for successful experiences. </p>
                                                <p>Even though learning styles and abilities are different, all children can be successful in many endeavors.</p>
                                                <p>Teachers who individualize instruction to meet the student's further enhance the youngster's abilities to be successful in learning.</p>
                                                <a href="{{url('/about')}}">read more</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                {{--<div>
                                    <!-- Nav tabs -->
                                    <ul class="campus-tab" role="tablist">
                                        <li role="presentation" class="active">
                                            <a href="#home" aria-controls="home" role="tab" data-toggle="tab">
                                                <div class="campus-info">
                                                    <h4>about us</h4>
                                                </div>
                                            </a>
                                        </li>
                                        <li role="presentation">
                                            <a href="#profile" aria-controls="home" role="tab" data-toggle="tab">
                                                <div class="campus-list">
                                                    <div class="campus-info">
                                                        <h4>mission</h4>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li role="presentation">
                                            <a href="#messages" aria-controls="home" role="tab" data-toggle="tab">
                                                <div class="campus-list">
                                                    <div class="campus-info">
                                                        <h4>vision</h4>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane active" id="home">
                                        <div class="campus-wrapper">
                                            <div class="campus-content">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipising elit, naised do eiusmod tempor incididunba t ut laboraliqua. </p>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipising elit, naised do eiusmod tempor incididuLorem ipsum dolor siconsectetur adipisicing elit, sed do eiusmod tempor idunt ut labore et dolore magna aliqua. Ut enim ad minim.  </p>
                                                <a href="about.html">read more</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="profile">
                                        <div class="campus-wrapper">
                                            <div class="campus-content">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipising elit, naised do eiusmod tempor incididunba t ut laboraliqua. </p>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipising elit, naised do eiusmod tempor incididuLorem siconsectetur adipisicing elit, sed do eiusmod tempor idunt ut labore et dolore magna aliqua. Ut enim ad minim.  </p>
                                                <a href="about.html">read more</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="messages">
                                        <div class="campus-wrapper">
                                            <div class="campus-content">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipising elit, naised do eiusmod tempor incididunba t ut laboraliqua. </p>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipising elit, eiusmod tempor incididuLorem ipsum dolor siconsectetur adipisicing elit, sed do eiusmod tempor idunt ut labore et dolore magna aliqua. Ut enim ad minim.  </p>
                                                <a href="#">read more</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>--}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- campus-area-end -->


    @include('layouts.footer')
@endsection
