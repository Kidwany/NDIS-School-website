@extends('layouts.layouts')
@section('title', 'Home')
@section('content')
    @include('layouts.header')


    <div class="breadcrumb-area">
        <div class="breadcrumb-top default-overlay bg-img breadcrumb-overly-5 pt-100 pb-95" style="background-image:url({{asset('website/img/schoolLife/school-life.jpg')}});">
            <div class="container">
                <h2>School Life</h2>
                <p>Our facility offers all that a young child needs to explore and learn. We have four outdoor areas for children. .</p>
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



    <!-------- Lab, Zoo, Mosque, Tennis ------>
    <div class="course-area bg-img pt-100 pb-10" style="background-color: white">
        <div class="container">
            <div class="section-title mb-75">
                <h2> <span>School</span> Facilities</h2>
                <p>tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim <br>veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip </p>
            </div>
            <div class="course-slider-active nav-style-1 owl-carousel">
                <div class="single-course">
                    <div class="course-img">
                        <a href="#"><img class="animated" src="{{asset('website/img/schoolLife/lab.jpg')}}" alt=""></a>
                    </div>
                    <div class="course-content">
                        <h4><a href="#">Lab</a></h4>
                        <p>magna aliqua. Ut enim ad minim veniam, nisi ut aliquiptempor incid.</p>
                    </div>
                </div>
                <div class="single-course">
                    <div class="course-img">
                        <a href="#"><img class="animated" src="{{asset('website/img/schoolLife/mini_zoo.png')}}" alt=""></a>
                    </div>
                    <div class="course-content">
                        <h4><a href="#">Zoo</a></h4>
                        <p>magna aliqua. Ut enim ad minim veniam, nisi ut aliquiptempor incid.</p>
                    </div>
                </div>
                <div class="single-course">
                    <div class="course-img">
                        <a href="#"><img class="animated" src="{{asset('website/img')}}/course/course-1.jpg" alt=""></a>
                    </div>
                    <div class="course-content">
                        <h4><a href="#">Mosque</a></h4>
                        <p>magna aliqua. Ut enim ad minim veniam, nisi ut aliquiptempor incid.</p>
                    </div>
                </div>
                <div class="single-course">
                    <div class="course-img">
                        <a href="#"><img class="animated" src="{{asset('website/img/schoolLife/tennis.png')}}" alt=""></a>
                    </div>
                    <div class="course-content">
                        <h4><a href="#">Tennis</a></h4>
                        <p>magna aliqua. Ut enim ad minim veniam, nisi ut aliquiptempor incid.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-------- Bathrooms, Football, Classes, Library ------>
    <div class="course-area bg-img pt-20 pb-10" style="background-color: white">
        <div class="container">
            <div class="course-slider-active nav-style-1 owl-carousel">
                <div class="single-course">
                    <div class="course-img">
                        <a href="#"><img class="animated" src="{{asset('website/img/schoolLife/bathrooms.png')}}" alt=""></a>
                    </div>
                    <div class="course-content">
                        <h4><a href="#">Bathrooms</a></h4>
                        <p>magna aliqua. Ut enim ad minim veniam, nisi ut aliquiptempor incid.</p>
                    </div>
                </div>
                <div class="single-course">
                    <div class="course-img">
                        <a href="#"><img class="animated" src="{{asset('website/img/schoolLife/football.jpg')}}" alt=""></a>
                    </div>
                    <div class="course-content">
                        <h4><a href="#">Football</a></h4>
                        <p>magna aliqua. Ut enim ad minim veniam, nisi ut aliquiptempor incid.</p>
                    </div>
                </div>
                <div class="single-course">
                    <div class="course-img">
                        <a href="#"><img class="animated" src="{{asset('website/img/schoolLife/class.jpg')}}" alt=""></a>
                    </div>
                    <div class="course-content">
                        <h4><a href="#">Classes</a></h4>
                        <p>magna aliqua. Ut enim ad minim veniam, nisi ut aliquiptempor incid.</p>
                    </div>
                </div>
                <div class="single-course">
                    <div class="course-img">
                        <a href="#"><img class="animated" src="{{asset('website/img/schoolLife/library.png')}}" alt=""></a>
                    </div>
                    <div class="course-content">
                        <h4><a href="#">Library</a></h4>
                        <p>magna aliqua. Ut enim ad minim veniam, nisi ut aliquiptempor incid.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-------- Play Ground, Clinic, Theater, Art ------>
    <div class="course-area bg-img pt-20 pb-10" style="background-color: white">
        <div class="container">
            <div class="course-slider-active nav-style-1 owl-carousel">
                <div class="single-course">
                    <div class="course-img">
                        <a href="#"><img class="animated" src="{{asset('website/img/schoolLife/playground.jpg')}}" alt=""></a>
                    </div>
                    <div class="course-content">
                        <h4><a href="#">Play Ground</a></h4>
                        <p>magna aliqua. Ut enim ad minim veniam, nisi ut aliquiptempor incid.</p>
                    </div>
                </div>
                <div class="single-course">
                    <div class="course-img">
                        <a href="#"><img class="animated" src="{{asset('website/img')}}/course/course-1.jpg" alt=""></a>
                    </div>
                    <div class="course-content">
                        <h4><a href="#">Clinic</a></h4>
                        <p>magna aliqua. Ut enim ad minim veniam, nisi ut aliquiptempor incid.</p>
                    </div>
                </div>
                <div class="single-course">
                    <div class="course-img">
                        <a href="#"><img class="animated" src="{{asset('website/img/schoolLife/theater.png')}}" alt=""></a>
                    </div>
                    <div class="course-content">
                        <h4><a href="#">Theater</a></h4>
                        <p>magna aliqua. Ut enim ad minim veniam, nisi ut aliquiptempor incid.</p>
                    </div>
                </div>
                <div class="single-course">
                    <div class="course-img">
                        <a href="#"><img class="animated" src="{{asset('website/img/schoolLife/art.jpg')}}" alt=""></a>
                    </div>
                    <div class="course-content">
                        <h4><a href="#">Art</a></h4>
                        <p>magna aliqua. Ut enim ad minim veniam, nisi ut aliquiptempor incid.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    @include('layouts.footer')
@endsection
