@extends('layouts.layouts')
@section('title', 'Events')
@section('content')
    @include('layouts.header')
    <div class="breadcrumb-area">
        <div class="breadcrumb-top default-overlay bg-img pt-100 pb-95" style="background-image:url({{asset('website/img/about/about_banner.jpg')}});">
            <div class="container">
                <h2>{{$event->title}}</h2>
                <p>{{str_limit($event->content, 60, '...')}}</p>
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



    <div class="event-details-area pt-130 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-xl-9 col-lg-8">
                    <div class="event-left-wrap mr-40">
                        <div class="event-description">
                            <div class="description-date-social mb-45">
                                <div class="description-date-time">
                                    <div class="description-date">
                                        <span class="event-date">{{$event->date->format('d')}}th</span>
                                        <span>{{$event->date->format('M')}}</span>
                                    </div>
                                    <div class="description-meta-wrap">
                                        <div class="description-meta">
                                            <i class="fa fa-location-arrow"></i>
                                            <span>{{$event->location}}</span>
                                        </div>
                                        <div class="description-meta">
                                            <i class="fa fa-clock-o"></i>
                                            <span>{{$event->date->format('g:i A')}}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="description-social-wrap">
                                    <div class="description-social">
                                        {{--<ul>
                                            <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a class="instagram" href="#"><i class="fa fa-instagram"></i></a></li>
                                            <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a class="google" href="#"><i class="fa fa-google-plus"></i></a></li>
                                        </ul>--}}
                                    </div>
                                    <div class="description-btn">
                                        {{--<a href="#"><i class="fa fa-share-alt"></i></a>--}}
                                    </div>
                                </div>
                            </div>
                            <img src="{{asset($event->image)}}" alt="">
                            <h3>{{$event->title}}</h3>
                            <p>{{$event->content}}</p>



                            {{--<div class="event-gallery text-center mt-40">
                                <div class="event-gallery-active nav-style-3 owl-carousel">
                                    <img src="{{asset('website/img/event/christmas-1.jpg')}}" alt="">
                                    <img src="{{asset('website/img/event/christmas-2.jpg')}}" alt="">
                                    <img src="{{asset('website/img/event/christmas-3.jpg')}}" alt="">
                                    <img src="{{asset('website/img/event/christmas-4.jpg')}}" alt="">
                                </div>
                                <h4>View Our Event Gallery</h4>
                            </div>--}}
{{--
                            <div class="seat-book-wrap bg-img mt-80 " style="background-image:url(assets/img/event/seat-book.jpg);">
                                <div class="seat-book-title text-center">
                                    <h3>Book Your Seat Now</h3>
                                    <p> natus error sit voluptatem accu antium dolorem laudantium, totam rem aperiam, eaque entore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                                </div>
                                <div class="seat-book-form">
                                    <form>
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6">
                                                <input placeholder="Name" type="text">
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <input placeholder="Email" type="email">
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <input name="name" placeholder="Date" type="text">
                                            </div>
                                            <div class="col-lg-6 col-md-6">
                                                <input placeholder="Time" type="text">
                                            </div>
                                            <div class="col-lg-12">
                                                <textarea placeholder="Message"></textarea>
                                                <button class="seat-book-btn" type="submit">BOOK NOW</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
--}}
                            {{--<div class="location-area mt-80">
                                <div id="location"></div>
                            </div>--}}
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4">
                    <div class="sidebar-style">
                        {{--<div class="sidebar-search mb-40">
                            <div class="sidebar-title mb-40">
                                <h4>Search</h4>
                            </div>
                            <form>
                                <input type="text" placeholder="Search">
                                <button><i class="fa fa-search"></i></button>
                            </form>
                        </div>--}}
                        <div class="sidebar-about mb-40">
                            <div class="sidebar-title mb-15">
                                <h4>About Us</h4>
                            </div>
                            <p>
                                NDIS is licensed as an American and British curriculums school by the Egyptian Ministry of
                                Education, Cambridge, Edexcel and AIAA.
                                The task of school is offering students a general education leading to both Egyptian
                                and International qualifications. In particular it serves the educational needs of students and promotes international understanding.
                            </p>
                            <a href="#"><img src="assets/img/banner/banner-4.jpg" alt=""></a>
                            <div class="sidebar-social">
                                <ul>
                                    {{--<li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>--}}
                                    {{--<li><a class="youtube" href="#"><i class="fa fa-youtube-play"></i></a></li>--}}
                                    {{--<li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>--}}
                                    {{--<li><a class="google" href="#"><i class="fa fa-google-plus"></i></a></li>--}}
                                </ul>
                            </div>
                        </div>
                        {{--<div class="sidebar-recent-post mb-35">
                            <div class="sidebar-title mb-40">
                                <h4>Recent Post</h4>
                            </div>
                            <div class="recent-post-wrap">
                                <div class="single-recent-post">
                                    <div class="recent-post-img">
                                        <a href="#"><img src="assets/img/blog/recent-post-1.jpg" alt=""></a>
                                    </div>
                                    <div class="recent-post-content">
                                        <h5><a href="#">Blog title will be here.</a></h5>
                                        <span>Blog Category</span>
                                        <p>Datat non proident qui offici.hafw adec qart.</p>
                                    </div>
                                </div>
                                <div class="single-recent-post">
                                    <div class="recent-post-img">
                                        <a href="#"><img src="assets/img/blog/recent-post-2.jpg" alt=""></a>
                                    </div>
                                    <div class="recent-post-content">
                                        <h5><a href="#">Blog title will be here.</a></h5>
                                        <span>Blog Category</span>
                                        <p>Datat non proident qui offici.hafw adec qart.</p>
                                    </div>
                                </div>
                            </div>
                        </div>--}}
                        {{--<div class="sidebar-category mb-40">
                            <div class="sidebar-title mb-40">
                                <h4>Course Category</h4>
                            </div>
                            <div class="category-list">
                                <ul>
                                    <li><a href="#">MBA <span>04</span></a></li>
                                    <li><a href="#">Graduate <span>08</span></a></li>
                                    <li><a href="#">Under Graduate <span>04</span></a></li>
                                    <li><a href="#">BBA <span>06</span></a></li>
                                    <li><a href="#">Engineering <span>04</span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="sidebar-recent-course-wrap mb-40">
                            <div class="sidebar-title mb-40">
                                <h4>Recent Courses</h4>
                            </div>
                            <div class="sidebar-recent-course">
                                <div class="sin-sidebar-recent-course">
                                    <div class="sidebar-recent-course-img">
                                        <a href="#"><img src="assets/img/blog/recent-post-1.jpg" alt=""></a>
                                    </div>
                                    <div class="sidebar-recent-course-content">
                                        <h4><a href="#">Course Title</a></h4>
                                        <ul>
                                            <li>Credits : 125</li>
                                            <li class="duration-color">Duration : 4yrs</li>
                                        </ul>
                                        <p>Datat non proident qui offici.hafw adec qart.</p>
                                    </div>
                                </div>
                                <div class="sin-sidebar-recent-course">
                                    <div class="sidebar-recent-course-img">
                                        <a href="#"><img src="assets/img/blog/recent-post-2.jpg" alt=""></a>
                                    </div>
                                    <div class="sidebar-recent-course-content">
                                        <h4><a href="#">Course Title</a></h4>
                                        <ul>
                                            <li>Credits : 125</li>
                                            <li class="duration-color">Duration : 4yrs</li>
                                        </ul>
                                        <p>Datat non proident qui offici.hafw adec qart.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="sidebar-tag-wrap">
                            <div class="sidebar-title mb-40">
                                <h4>Tag</h4>
                            </div>
                            <div class="sidebar-tag">
                                <ul>
                                    <li><a href="#">Loremsite</a></li>
                                    <li><a href="#">Loreipsum</a></li>
                                    <li><a href="#">Dolar</a></li>
                                    <li><a href="#">Site ament dollar</a></li>
                                    <li><a href="#">Loremsite</a></li>
                                    <li><a href="#">Dummy Text</a></li>
                                </ul>
                            </div>
                        </div>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>




    {{--<div class="course-area bg-img pt-60 pb-10">
        <div class="container">
            <div class="section-title mb-75">
                <h2> <span>Event</span> Gallery</h2>
            </div>
            <div class="course-slider-active nav-style-1 owl-carousel">
                <div class="single-course">
                    <div class="course-img">
                        <a href="#"><img class="animated" src="{{asset('website/img/event/christmas-1.png')}}" alt=""></a>
                    </div>
                </div>
                <div class="single-course">
                    <div class="course-img">
                        <a href="#"><img class="animated" src="{{asset('website/img/event/christmas-2.png')}}" alt=""></a>
                    </div>
                </div>
                <div class="single-course">
                    <div class="course-img">
                        <a href="#"><img class="animated" src="{{asset('website/img/event/christmas-1.png')}}" alt=""></a>
                    </div>
                </div>
                <div class="single-course">
                    <div class="course-img">
                        <a href="#"><img class="animated" src="{{asset('website/img/event/christmas-1.png')}}" alt=""></a>
                    </div>
                </div>

            </div>
        </div>
    </div>
--}}


    @include('layouts.footer')
@endsection
