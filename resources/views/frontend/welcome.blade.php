@extends('layouts.layouts')
@section('title', 'Home')
@section('content')
    @include('layouts.header')


    <!------ Slider Section ------>
    <div class="slider-area">
        <div class="slider-active owl-carousel">

            <div class="single-slider slider-height-1 bg-img" style="background-image:url({{asset('website/img/slider/slide-3.jpg')}});">
                <div class="container">
                    <div class="row d-flex flex-row justify-content-end">
                        <div class="col-lg-6 col-md-7 col-12 col-sm-12">
                            <div class="slider-content slider-animated-1 pt-230">
                                <h1 class="animated">NEW DISCOVERY INTERNATIONAL SCHOOL</h1>
                                <p class="animated">Where each Child is a New Success Story. </p>
                                <div class="slider-btn">
                                    <a class="animated default-btn btn-green-color" href="{{url('/school-life')}}">School Life</a>
                                    <a class="animated default-btn btn-white-color" href="{{url('/academics')}}">Academics</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{--<div class="slider-single-img slider-animated-1">
                        <img class="animated" src="{{asset('website/img')}}/slider/single-slide-1.png" alt="">
                    </div>--}}
                </div>
            </div>

{{--
            <div class="single-slider slider-height-1 bg-img" style="background-image:url({{asset('website/img/slider/slider-bg.jpg')}});">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-9 col-md-7 col-12 col-sm-12">
                            <div class="slider-content slider-animated-1 pt-230">
                                <h1 class="animated">NEW DISCOVERY INTERNATIONAL SCHOOL</h1>
                                <p class="animated">Where each Child is a New Success Story.</p>
                                <div class="slider-btn">
                                    <a class="animated default-btn btn-green-color" href="{{url('/about')}}">ABOUT US</a>
                                    <a class="animated default-btn btn-white-color" href="{{url('contact')}}">CONTACT US</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    --}}
{{--<div class="slider-single-img slider-animated-1">
                        <img class="animated" src="{{asset('website/img/slider/mini-slider.jpg')}}" alt="">
                    </div>--}}{{--

                </div>
            </div>
--}}


            <div class="single-slider slider-height-1 bg-img" style="background-image:url({{asset('website/img/slider/slider-2.jpg')}});">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-9 col-md-7 col-12 col-sm-12">
                            <div class="slider-content slider-animated-1 pt-230">
                                <h1 class="animated">Applied Learning</h1>
                                <p class="animated">Learning with passion is our aim. <br> We encourage our students to discover the information not to learn it.</p>
                                <div class="slider-btn">
                                    <a class="animated default-btn btn-green-color" href="{{url('/school-life')}}">School Life</a>
                                    <a class="animated default-btn btn-white-color" href="{{url('/academics')}}">Academics</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{--<div class="slider-single-img slider-animated-1">
                        <img class="animated" src="{{asset('website/img')}}/slider/single-slide-1.png" alt="">
                    </div>--}}
                </div>
            </div>


        </div>
    </div>

    <!------ Choose Us ------>
    <div class="choose-us section-padding-1">
        <div class="container-fluid">
            <div class="row no-gutters choose-negative-mrg">
                <div class="col-lg-3 col-md-6">
                    <div class="single-choose-us choose-bg-light-blue">
                        <div class="choose-img">
                            <img class="animated" src="{{asset('website/img/home/challenge.png')}}" alt="">
                        </div>
                        <div class="choose-content">
                            <h3>Challenging Academic Curriculum</h3>
                            <p>Every child has different type of intelligence. Our Curriculum is designed to challenge their mentality and build their Capacities.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-choose-us choose-bg-yellow">
                        <div class="choose-img">
                            <img class="animated" src="{{asset('website/img/home/accreditation.png')}}" alt="">
                        </div>
                        <div class="choose-content">
                            <h3>Accreditation.</h3>
                            <p>The School is accredited by Virginia College for the American Section, Cambridge for the British one and ESLESCA for Mathematics.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-choose-us choose-bg-blue">
                        <div class="choose-img">
                            <img class="animated" src="{{asset('website/img/home/decsion.png')}}" alt="">
                        </div>
                        <div class="choose-content">
                            <h3>Personality Building.</h3>
                            <p>We care about our students’ Behavior and Personality because each one of them is unique.
                                Discovering their personality and developing it is a sacred mission that define our philosophy.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-choose-us choose-bg-green">
                        <div class="choose-img">
                            <img class="animated" src="{{asset('website/img/home/sport.png')}}" alt="">
                        </div>
                        <div class="choose-content">
                            <h3>Physical Development.</h3>
                            <p>If they know how to play, they will know how to grow.
                                Our aim is to guide them while playing to strengthen their muscles increase their wellness.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{{--

    <!------ About Section ------>
    <div class="about-us pt-130 pb-130">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="about-content">
                        <div class="section-title section-title-green mb-30">
                            <h2>About <span>Us</span></h2>
                            <p>tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip </p>
                        </div>
                        <p>eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim ven  iam, quis nostrud exer citation ullamco laboris nisi ut perspiciatis unde omnis iste natus error sit voluptate.</p>
                        <div class="about-btn mt-45">
                            <a class="default-btn" href="about-us.html">ABOUT US</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="about-img default-overlay">
                        <img src="{{asset('website/img')}}/banner/banner-1.jpg" alt="">
                        <a class="video-btn video-popup" href="{{asset('website/img')}}/icon-img/Car rent.mp4">
                            <img class="animated" src="{{asset('website/img')}}/icon-img/video.png" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
--}}

    <!-- campus-area-start -->
    <div class="campus-area">
        <div class="container">
            <div class="inner-campus">
                <div class="campus">
                    <div class="row">

                        <div class="col-md-6 p-0">
                            <div class="campus-video-wrapper ptb-180" style="background-image:url({{asset('website/img/slider/mini-slider.jpg')}})" >
                                <div class="campus-text text-center">
                                    <div class="campus-icon">
                                        <a class="video-popup" href="{{asset('website/img/slider/ndis.mp4')}}"><i class="fa fa-play"></i></a>
                                    </div>
                                    <h4>Take a Video Tour of Our Campus</h4>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 p-0">
                            <div class="tab-wrapper" style="height: 100%">
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
                                                <p style="text-align: justify">The real success of nations is concealed in discovering and empowering the innate abilities of younger generations through innovation and quality learning to be able to cope with the challenges of the 21st century worldwide.</p>
                                                <a href="{{url('/about')}}">read more</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="profile">
                                        <div class="campus-wrapper">
                                            <div class="campus-content">
                                                <p style="text-align: justify">We are keen to deliver to society highly qualified graduates by applying the latest technologies and applied learning approaches. </p>
                                                <p style="text-align: justify">Due care is given to moral development and character building as well as involving parents positively to be partner of their kids’ educational journey.</p>
                                                <a href="{{url('/about')}}">read more</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="messages">
                                        <div class="campus-wrapper">
                                            <div class="campus-content">
                                                <p style="text-align: justify">We believe that the first years of life are the most influential in establishing good habits and basic learning skills.  We are working to help all children to prepare for the future and enable them to develop their capabilities as successful learners, confident individuals and responsible citizens. <br> Indeed, play is a fundamental part of childhood. Therefor our children’s learning is promoted successfully by activities specially planned and adapted to meet or extend their individual learning needs.
                                                    <br>NDIS is a place for happy healthy children.
                                                </p>
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


    <!-- Reviews -->

    <div class="achievement-area pt-130 pb-115">
        <div class="container">
            <div class="section-title mb-75">
                <h2>Our <span>Achievement</span></h2>
                <p>Our achievments, in our philosophy, is always measured by our students' happiness and well-being.  <br> NDIS Parents' testimonials are our Certificate of success.  </p>
            </div>
           {{-- <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                    <div class="single-count mb-30 count-one">
                        <div class="count-img">
                            <img src="{{asset('website/img')}}/icon-img/achieve-1.png" alt="">
                        </div>
                        <div class="count-content">
                            <h2 class="count">890</h2>
                            <span>STUDENTS</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                    <div class="single-count mb-30 count-two">
                        <div class="count-img">
                            <img src="{{asset('website/img')}}/icon-img/achieve-2.png" alt="">
                        </div>
                        <div class="count-content">
                            <h2 class="count">670</h2>
                            <span>GRADUATE</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-3 col-md-6 col-sm-6">
                    <div class="single-count mb-30 count-three">
                        <div class="count-img">
                            <img src="{{asset('website/img')}}/icon-img/achieve-3.png" alt="">
                        </div>
                        <div class="count-content">
                            <h2 class="count">160</h2>
                            <span>AWARD WINNING</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6">
                    <div class="single-count mb-30 count-four">
                        <div class="count-img">
                            <img src="{{asset('website/img')}}/icon-img/achieve-4.png" alt="">
                        </div>
                        <div class="count-content">
                            <h2 class="count">200</h2>
                            <span>FACULTIES</span>
                        </div>
                    </div>
                </div>
            </div>--}}
            <div class="testimonial-slider-wrap mt-45">
                <div class="testimonial-text-slider">
                    <div class="testi-content-wrap">
                        <div class="testi-big-img">
                            <img alt="" src="{{asset('website/img/reviews/event-3.jpg')}}" style="object-position: center center; object-fit: cover">
                        </div>
                        <div class="row no-gutters">
                            <div class="ml-auto col-lg-6 col-md-12">
                                <div class="testi-content bg-img default-overlay" style="background-image:url({{asset('website/img/bg/testi.png')}});">
                                    <div class="quote-style quote-left">
                                        <i class="fa fa-quote-left"></i>
                                    </div>
                                    <p>My experience in NDIS till now is unforgettable, my little lilly enjoy her school day in a way that i never imagined. <br>What matters for me is her smile and this school never failed me to draw it on her face.  </p>
                                    <div class="testi-info">
                                        <h5>Amina Darwish</h5>
                                        <span>Lilly's Mom</span>
                                    </div>
                                    <div class="quote-style quote-right">
                                        <i class="fa fa-quote-right"></i>
                                    </div>
                                    <div class="testi-arrow">
                                        <img alt="" src="{{asset('website/img')}}/icon-img/testi-icon.png">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testi-content-wrap">
                        <div class="testi-big-img">
                            <img alt="" src="{{asset('website/img')}}/testimonial/testi-b3.jpg">
                        </div>
                        <div class="row no-gutters">
                            <div class="ml-auto col-lg-6 col-md-12">
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
                                        <img alt="" src="{{asset('website/img')}}/icon-img/testi-icon.png">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testi-content-wrap">
                        <div class="testi-big-img">
                            <img alt="" src="{{asset('website/img')}}/testimonial/testi-b2.jpg">
                        </div>
                        <div class="row no-gutters">
                            <div class="ml-auto col-lg-6 col-md-12">
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
                                        <img alt="" src="{{asset('website/img')}}/icon-img/testi-icon.png">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testi-content-wrap">
                        <div class="testi-big-img">
                            <img alt="" src="{{asset('website/img')}}/testimonial/testi-b2.jpg">
                        </div>
                        <div class="row no-gutters">
                            <div class="ml-auto col-lg-6 col-md-12">
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
                                        <img alt="" src="{{asset('website/img')}}/icon-img/testi-icon.png">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{--<div class="testimonial-image-slider">
                    <div class="sin-testi-image">
                        <img src="{{asset('website/img')}}/testimonial/testi-s2.jpg" alt="">
                    </div>
                    <div class="sin-testi-image">
                        <img src="{{asset('website/img')}}/testimonial/testi-s1.jpg" alt="">
                    </div>
                    <div class="sin-testi-image">
                        <img src="{{asset('website/img')}}/testimonial/testi-s3.jpg" alt="">
                    </div>
                    <div class="sin-testi-image">
                        <img src="{{asset('website/img')}}/testimonial/testi-s3.jpg" alt="">
                    </div>
                </div>--}}
            </div>
            <div class="testimonial-text-img">
                <img alt="" src="{{asset('website/img')}}/icon-img/testi-text.png">
            </div>
        </div>
    </div>


    <!-- Events -->
    <div class="event-area bg-img default-overlay pt-130 pb-130" style="background-image:url({{asset('website/img/bg/fees_bg.jpg')}});">
        <div class="container">
            <div class="section-title mb-75">
                <h2><span>Our</span> Event</h2>
                <p> Events are not a side activity, it is a main duty. <br> NDIS' Philosophy aim to give students a real life memories not just education. </p>
            </div>

            <div class="event-active owl-carousel nav-style-1">

                @if($events)
                    @foreach($events as $event)
                        <div class="single-event event-white-bg">
                            <div class="event-img">
                                <a href="{{url('event/details/' . $event->EVID)}}"><img src="{{asset($event->image)}}" alt=""></a>
                                <div class="event-date-wrap">
                                    <span class="event-date">{{$event->date->format('d')}}th</span>
                                    <span>{{$event->date->format('M')}}</span>
                                </div>
                            </div>
                            <div class="event-content">
                                <h3><a href="{{url('event/details/' . $event->EVID)}}">{{$event->title}}</a></h3>
                                <p>{{str_limit($event->content, 60, '...')}}</p>
                                <div class="event-meta-wrap">
                                    <div class="event-meta">
                                        <i class="fa fa-location-arrow"></i>
                                        <span>{{$event->location}}</span>
                                    </div>
                                    <div class="event-meta">
                                        <i class="fa fa-clock-o"></i>
                                        <span>{{$event->date->format('g:i A')}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif


            </div>
        </div>
    </div>


    <div class="brand-logo-area pb-130 mt-80">
        <div class="container">
            <div class="brand-logo-active owl-carousel">
                <div class="single-brand-logo">
                    <a href="#"><img src="{{asset('website/img/brand-logo/1.png')}}" alt=""></a>
                </div>
                <div class="single-brand-logo">
                    <a href="#"><img src="{{asset('website/img/brand-logo/2.png')}}" alt=""></a>
                </div>
                <div class="single-brand-logo">
                    <a href="#"><img src="{{asset('website/img/brand-logo/3.png')}}" alt=""></a>
                </div>
                <div class="single-brand-logo">
                    <a href="#"><img src="{{asset('website/img/brand-logo/4.png')}}" alt=""></a>
                </div>
                <div class="single-brand-logo">
                    <a href="#"><img src="{{asset('website/img/brand-logo/5.png')}}" alt=""></a>
                </div>
                <div class="single-brand-logo">
                    <a href="#"><img src="{{asset('website/img/brand-logo/6.png')}}" alt=""></a>
                </div>
                <div class="single-brand-logo">
                    <a href="#"><img src="{{asset('website/img/brand-logo/2.png')}}" alt=""></a>
                </div>
            </div>
        </div>
    </div>
    {{--<!------ Course Section ------>
    <div class="course-area bg-img pt-130 pb-10" style="background-image:url({{asset('website/img/bg/bg-1.jpg')}});">
        <div class="container">
            <div class="section-title mb-75">
                <h2> <span>Our</span> Courses</h2>
                <p>tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim <br>veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip </p>
            </div>
            <div class="course-slider-active nav-style-1 owl-carousel">
                <div class="single-course">
                    <div class="course-img">
                        <a href="course-details.html"><img class="animated" src="{{asset('website/img')}}/course/course-1.jpg" alt=""></a>
                        <span>Addmission Going On</span>
                    </div>
                    <div class="course-content">
                        <h4><a href="course-details.html">Apparel Manufacturing</a></h4>
                        <p>magna aliqua. Ut enim ad minim veniam, nisi ut aliquiptempor incid.</p>
                    </div>
                    <div class="course-position-content">
                        <div class="credit-duration-wrap">
                            <div class="sin-credit-duration">
                                <i class="fa fa-diamond"></i>
                                <span>Credits : 125</span>
                            </div>
                            <div class="sin-credit-duration">
                                <i class="fa fa-clock-o"></i>
                                <span>Duration : 4yrs</span>
                            </div>
                        </div>
                        <div class="course-btn">
                            <a class="default-btn" href="#">APPLY NOW</a>
                        </div>
                    </div>
                </div>
                <div class="single-course">
                    <div class="course-img">
                        <a href="course-details.html"><img class="animated" src="{{asset('website/img')}}/course/course-2.jpg" alt=""></a>
                    </div>
                    <div class="course-content">
                        <h4><a href="course-details.html">Grphic Design & Multimedia</a></h4>
                        <p>magna aliqua. Ut enim ad minim veniam, nisi ut aliquiptempor incid.</p>
                    </div>
                    <div class="course-position-content">
                        <div class="credit-duration-wrap">
                            <div class="sin-credit-duration">
                                <i class="fa fa-diamond"></i>
                                <span>Credits : 125</span>
                            </div>
                            <div class="sin-credit-duration">
                                <i class="fa fa-clock-o"></i>
                                <span>Duration : 4yrs</span>
                            </div>
                        </div>
                        <div class="course-btn">
                            <a class="default-btn" href="#">APPLY NOW</a>
                        </div>
                    </div>
                </div>
                <div class="single-course">
                    <div class="course-img">
                        <a href="course-details.html"><img class="animated" src="{{asset('website/img')}}/course/course-3.jpg" alt=""></a>
                    </div>
                    <div class="course-content">
                        <h4><a href="course-details.html">Computer Engineering</a></h4>
                        <p>magna aliqua. Ut enim ad minim veniam, nisi ut aliquiptempor incid.</p>
                    </div>
                    <div class="course-position-content">
                        <div class="credit-duration-wrap">
                            <div class="sin-credit-duration">
                                <i class="fa fa-diamond"></i>
                                <span>Credits : 125</span>
                            </div>
                            <div class="sin-credit-duration">
                                <i class="fa fa-clock-o"></i>
                                <span>Duration : 4yrs</span>
                            </div>
                        </div>
                        <div class="course-btn">
                            <a class="default-btn" href="#">APPLY NOW</a>
                        </div>
                    </div>
                </div>
                <div class="single-course">
                    <div class="course-img">
                        <a href="course-details.html"><img class="animated" src="{{asset('website/img')}}/course/course-4.jpg" alt=""></a>
                        <span>Post Graduation Course</span>
                    </div>
                    <div class="course-content">
                        <h4><a href="course-details.html">Fashion & Technology</a></h4>
                        <p>magna aliqua. Ut enim ad minim veniam, nisi ut aliquiptempor incid.</p>
                    </div>
                    <div class="course-position-content">
                        <div class="credit-duration-wrap">
                            <div class="sin-credit-duration">
                                <i class="fa fa-diamond"></i>
                                <span>Credits : 125</span>
                            </div>
                            <div class="sin-credit-duration">
                                <i class="fa fa-clock-o"></i>
                                <span>Duration : 4yrs</span>
                            </div>
                        </div>
                        <div class="course-btn">
                            <a class="default-btn" href="#">APPLY NOW</a>
                        </div>
                    </div>
                </div>
                <div class="single-course">
                    <div class="course-img">
                        <a href="course-details.html"><img class="animated" src="{{asset('website/img')}}/course/course-2.jpg" alt=""></a>
                    </div>
                    <div class="course-content">
                        <h4><a href="course-details.html">Apparel Manufacturing</a></h4>
                        <p>magna aliqua. Ut enim ad minim veniam, nisi ut aliquiptempor incid.</p>
                    </div>
                    <div class="course-position-content">
                        <div class="credit-duration-wrap">
                            <div class="sin-credit-duration">
                                <i class="fa fa-diamond"></i>
                                <span>Credits : 125</span>
                            </div>
                            <div class="sin-credit-duration">
                                <i class="fa fa-clock-o"></i>
                                <span>Duration : 4yrs</span>
                            </div>
                        </div>
                        <div class="course-btn">
                            <a class="default-btn" href="#">APPLY NOW</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!------ Achievement Section ------>
    <div class="achievement-area pt-130 pb-115">
        <div class="container">
            <div class="section-title mb-75">
                <h2>Our <span>Achievement</span></h2>
                <p>tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim <br>veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip </p>
            </div>
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                    <div class="single-count mb-30 count-one">
                        <div class="count-img">
                            <img src="{{asset('website/img')}}/icon-img/achieve-1.png" alt="">
                        </div>
                        <div class="count-content">
                            <h2 class="count">890</h2>
                            <span>STUDENTS</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                    <div class="single-count mb-30 count-two">
                        <div class="count-img">
                            <img src="{{asset('website/img')}}/icon-img/achieve-2.png" alt="">
                        </div>
                        <div class="count-content">
                            <h2 class="count">670</h2>
                            <span>GRADUATE</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-3 col-md-6 col-sm-6">
                    <div class="single-count mb-30 count-three">
                        <div class="count-img">
                            <img src="{{asset('website/img')}}/icon-img/achieve-3.png" alt="">
                        </div>
                        <div class="count-content">
                            <h2 class="count">160</h2>
                            <span>AWARD WINNING</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6">
                    <div class="single-count mb-30 count-four">
                        <div class="count-img">
                            <img src="{{asset('website/img')}}/icon-img/achieve-4.png" alt="">
                        </div>
                        <div class="count-content">
                            <h2 class="count">200</h2>
                            <span>FACULTIES</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="testimonial-slider-wrap mt-45">
                <div class="testimonial-text-slider">
                    <div class="testi-content-wrap">
                        <div class="testi-big-img">
                            <img alt="" src="{{asset('website/img')}}/testimonial/testi-b1.jpg">
                        </div>
                        <div class="row no-gutters">
                            <div class="ml-auto col-lg-6 col-md-12">
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
                                        <img alt="" src="{{asset('website/img')}}/icon-img/testi-icon.png">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testi-content-wrap">
                        <div class="testi-big-img">
                            <img alt="" src="{{asset('website/img')}}/testimonial/testi-b3.jpg">
                        </div>
                        <div class="row no-gutters">
                            <div class="ml-auto col-lg-6 col-md-12">
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
                                        <img alt="" src="{{asset('website/img')}}/icon-img/testi-icon.png">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testi-content-wrap">
                        <div class="testi-big-img">
                            <img alt="" src="{{asset('website/img')}}/testimonial/testi-b2.jpg">
                        </div>
                        <div class="row no-gutters">
                            <div class="ml-auto col-lg-6 col-md-12">
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
                                        <img alt="" src="{{asset('website/img')}}/icon-img/testi-icon.png">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testi-content-wrap">
                        <div class="testi-big-img">
                            <img alt="" src="{{asset('website/img')}}/testimonial/testi-b2.jpg">
                        </div>
                        <div class="row no-gutters">
                            <div class="ml-auto col-lg-6 col-md-12">
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
                                        <img alt="" src="{{asset('website/img')}}/icon-img/testi-icon.png">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testimonial-image-slider">
                    <div class="sin-testi-image">
                        <img src="{{asset('website/img')}}/testimonial/testi-s2.jpg" alt="">
                    </div>
                    <div class="sin-testi-image">
                        <img src="{{asset('website/img')}}/testimonial/testi-s1.jpg" alt="">
                    </div>
                    <div class="sin-testi-image">
                        <img src="{{asset('website/img')}}/testimonial/testi-s3.jpg" alt="">
                    </div>
                    <div class="sin-testi-image">
                        <img src="{{asset('website/img')}}/testimonial/testi-s3.jpg" alt="">
                    </div>
                </div>
            </div>
            <div class="testimonial-text-img">
                <img alt="" src="{{asset('website/img')}}/icon-img/testi-text.png">
            </div>
        </div>
    </div>

    <!------ Register Section ------>
    <div class="register-area bg-img pt-130 pb-130" style="background-image:url({{asset('website/img/bg/bg-2.jpg')}});">
        <div class="container">
            <div class="section-title-2 mb-75 white-text">
                <h2>Register <span>Now</span></h2>
                <p>Winter Admission Is Going On. We are announcing  Special discount for winter batch 2019.</p>
            </div>
            <div class="register-wrap">
                <div id="register-3" class="mouse-bg">
                    <div class="winter-banner">
                        <img src="{{asset('website/img')}}/banner/regi-1.png" alt="">
                        <div class="winter-content">
                            <span>WINTER </span>
                            <h3>2019</h3>
                            <span>ADMISSION </span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-10 col-md-8">
                        <div class="register-form">
                            <h4>Get A free Registration</h4>
                            <form>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="contact-form-style mb-20">
                                            <input name="name" placeholder="First Name" type="text">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="contact-form-style mb-20">
                                            <input name="name" placeholder="Last Name" type="text">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="contact-form-style mb-20">
                                            <input name="name" placeholder="Phone" type="text">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="contact-form-style mb-20">
                                            <input name="name" placeholder="Email" type="text">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="contact-form-style">
                                            <textarea name="message" placeholder="Message"></textarea>
                                            <button class="submit default-btn" type="submit">SUBMIT NOW</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="register-1" class="mouse-bg"></div>
        <div id="register-2" class="mouse-bg"></div>
    </div>

    <!------ Teacher Section ------>
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
                            <img src="{{asset('website/img')}}/teacher/teacher-1.jpg" alt="">
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
                            <img src="{{asset('website/img')}}/teacher/teacher-2.jpg" alt="">
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
                            <img src="{{asset('website/img')}}/teacher/teacher-3.jpg" alt="">
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
                            <img src="{{asset('website/img')}}/teacher/teacher-4.jpg" alt="">
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
                            <img src="{{asset('website/img')}}/teacher/teacher-5.jpg" alt="">
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

    <!------ Event-Area Section ------>
    <div class="event-area bg-img default-overlay pt-130 pb-130" style="background-image:url({{asset('website/img/bg/bg-3.jpg')}});">
        <div class="container">
            <div class="section-title mb-75">
                <h2><span>Our</span> Event</h2>
                <p>tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim <br>veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip </p>
            </div>
            <div class="event-active owl-carousel nav-style-1">
                <div class="single-event event-white-bg">
                    <div class="event-img">
                        <a href="event-details.html"><img src="{{asset('website/img')}}/event/event-1.jpg" alt=""></a>
                        <div class="event-date-wrap">
                            <span class="event-date">1st</span>
                            <span>Dec</span>
                        </div>
                    </div>
                    <div class="event-content">
                        <h3><a href="event-details.html">Aempor incididunt ut labore ejam.</a></h3>
                        <p>Pvolupttem accusantium doloremque laudantium, totam erspiciatis unde omnis iste natus error .</p>
                        <div class="event-meta-wrap">
                            <div class="event-meta">
                                <i class="fa fa-location-arrow"></i>
                                <span>Mascot Plaza ,Uttara</span>
                            </div>
                            <div class="event-meta">
                                <i class="fa fa-clock-o"></i>
                                <span>11:00 am</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-event event-white-bg">
                    <div class="event-img">
                        <a href="event-details.html"><img src="{{asset('website/img')}}/event/event-2.jpg" alt=""></a>
                        <div class="event-date-wrap">
                            <span class="event-date">10th</span>
                            <span>Dec</span>
                        </div>
                    </div>
                    <div class="event-content">
                        <h3><a href="event-details.html">Global Conference on Business.</a></h3>
                        <p>Pvolupttem accusantium doloremque laudantium, totam erspiciatis unde omnis iste natus error .</p>
                        <div class="event-meta-wrap">
                            <div class="event-meta">
                                <i class="fa fa-location-arrow"></i>
                                <span>Shubastu ,Dadda</span>
                            </div>
                            <div class="event-meta">
                                <i class="fa fa-clock-o"></i>
                                <span>08:30 am</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-event event-white-bg">
                    <div class="event-img">
                        <a href="event-details.html"><img src="{{asset('website/img')}}/event/event-3.jpg" alt=""></a>
                        <div class="event-date-wrap">
                            <span class="event-date">1st</span>
                            <span>Dec</span>
                        </div>
                    </div>
                    <div class="event-content">
                        <h3><a href="event-details.html">Academic Conference Maui.</a></h3>
                        <p>Pvolupttem accusantium doloremque laudantium, totam erspiciatis unde omnis iste natus error .</p>
                        <div class="event-meta-wrap">
                            <div class="event-meta">
                                <i class="fa fa-location-arrow"></i>
                                <span>Banasree ,Rampura</span>
                            </div>
                            <div class="event-meta">
                                <i class="fa fa-clock-o"></i>
                                <span>10:00 am</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-event event-white-bg">
                    <div class="event-img">
                        <a href="event-details.html"><img src="{{asset('website/img')}}/event/event-2.jpg" alt=""></a>
                        <div class="event-date-wrap">
                            <span class="event-date">1st</span>
                            <span>Dec</span>
                        </div>
                    </div>
                    <div class="event-content">
                        <h3><a href="event-details.html">Social Sciences & Education.</a></h3>
                        <p>Pvolupttem accusantium doloremque laudantium, totam erspiciatis unde omnis iste natus error .</p>
                        <div class="event-meta-wrap">
                            <div class="event-meta">
                                <i class="fa fa-location-arrow"></i>
                                <span>Shubastu ,Badda</span>
                            </div>
                            <div class="event-meta">
                                <i class="fa fa-clock-o"></i>
                                <span>10:30 am</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!------ Blog Section ------>
    <div class="blog-area pt-130 pb-100">
        <div class="container">
            <div class="section-title mb-75">
                <h2>Our <span>Newsfeed</span></h2>
                <p>tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim <br>veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip </p>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="single-blog mb-30">
                        <div class="blog-img">
                            <a href="blog-details.html"><img src="{{asset('website/img')}}/blog/blog-1.jpg" alt=""></a>
                        </div>
                        <div class="blog-content-wrap">
                            <span>Education</span>
                            <div class="blog-content">
                                <h4><a href="blog-details.html">Testing is a great thing.</a></h4>
                                <p>doloremque laudan tium, totam ersps uns iste natus</p>
                                <div class="blog-meta">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-user"></i> Adrin Azra</a></li>
                                        <li><a href="#"><i class="fa fa-comments-o"></i> 15</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="blog-date">
                                <a href="#"><i class="fa fa-calendar-o"></i> Jun, 24th 2018</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-blog mb-30">
                        <div class="blog-img">
                            <a href="blog-details.html"><img src="{{asset('website/img')}}/blog/blog-2.jpg" alt=""></a>
                        </div>
                        <div class="blog-content-wrap">
                            <span>Education</span>
                            <div class="blog-content">
                                <h4><a href="blog-details.html">A variation of the ordinary.</a></h4>
                                <p>doloremque laudan tium, totam ersps uns iste natus</p>
                                <div class="blog-meta">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-user"></i> Tayeb Jon</a></li>
                                        <li><a href="#"><i class="fa fa-comments-o"></i> 12</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="blog-date">
                                <a href="#"><i class="fa fa-calendar-o"></i> Feb, 18th 2017</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-blog mb-30">
                        <div class="blog-img">
                            <a href="blog-details.html"><img src="{{asset('website/img')}}/blog/blog-3.jpg" alt=""></a>
                        </div>
                        <div class="blog-content-wrap">
                            <span>Education</span>
                            <div class="blog-content">
                                <h4><a href="blog-details.html">In publishing and graphic.</a></h4>
                                <p>doloremque laudan tium, totam ersps uns iste natus</p>
                                <div class="blog-meta">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-user"></i> Rifat Al</a></li>
                                        <li><a href="#"><i class="fa fa-comments-o"></i> 20</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="blog-date">
                                <a href="#"><i class="fa fa-calendar-o"></i> Oct, 14th 2018</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single-blog mb-30">
                        <div class="blog-img">
                            <a href="blog-details.html"><img src="{{asset('website/img')}}/blog/blog-4.jpg" alt=""></a>
                        </div>
                        <div class="blog-content-wrap">
                            <span>Education</span>
                            <div class="blog-content">
                                <h4><a href="blog-details.html">Learn English in ease.</a></h4>
                                <p>doloremque laudan tium, totam ersps uns iste natus</p>
                                <div class="blog-meta">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-user"></i>Md Tamim</a></li>
                                        <li><a href="#"><i class="fa fa-comments-o"></i> 08</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="blog-date">
                                <a href="#"><i class="fa fa-calendar-o"></i> Jun, 21th 2017</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>--}}

    
    @include('layouts.footer')
@endsection
