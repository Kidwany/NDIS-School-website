@extends('layouts.layouts')
@section('title', 'School Life')
@section('content')
    @include('layouts.header')


    <div class="breadcrumb-area">
        <div class="breadcrumb-top default-overlay bg-img breadcrumb-overly-5 pt-100 pb-95" style="background-image:url({{asset('website/img/schoolLife/school-life.jpg')}});">
            <div class="container">
                <h2>School Life</h2>
                <p>We make sure that the School environment offers to each student, Happiness and well-being. .</p>
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



    <!-------- Lab, Zoo, Mosque ------>
    <div class="course-area bg-img pt-100 pb-10" style="background-color: white">
        <div class="container">
            <div class="section-title mb-75">
                <h2> <span>School</span> Facilities</h2>
                <p>When a flower doesn't bloom you fix the environment in which it grows, not the flower...
                    We have the option of hosting sessions outside the classrooms, such as the garden.
                    We have a Volleyball/Basketball ring, Football field, Tennis court and a Ballet room.
                    We have over 100 CCTV cameras installed on every corner, inside & outside the school, to maintain the maximum level of safety and security of our kids.
                    Our P.E sessions are really on the physical education level, by its means!
                    We provide Zumba classes, we provide Gymnastic sessions.
                    Our sports team is simply qualified to meet & maintain the Excellency level of our standards.
                </p>
            </div>

            <div class="course-slider-active nav-style-1 owl-carousel">
                <div class="single-course">
                    <div class="course-img">
                        <a href="#"><img class="animated" src="{{asset('website/img/schoolLife/science.jpg')}}" alt=""></a>
                    </div>
                    <div class="course-content">
                        <h4 class="text-center"><a href="#">Lab</a></h4>
                    </div>
                </div>

                <div class="single-course">
                    <div class="course-img">
                        <a href="#"><img class="animated" src="{{asset('website/img/schoolLife/zoo.jpg')}}" alt=""></a>
                    </div>
                    <div class="course-content">
                        <h4 class="text-center"><a href="#">Zoo</a></h4>
                    </div>
                </div>

                <div class="single-course">
                    <div class="course-img">
                        <a href="#"><img class="animated" src="{{asset('website/img')}}/course/course-1.jpg" alt=""></a>
                    </div>
                    <div class="course-content">
                        <h4 class="text-center"><a href="#">Mosque</a></h4>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!--------  Tennis, Bathrooms, Football ------>
    <div class="course-area bg-img pt-20 pb-10" style="background-color: white">
        <div class="container">
            <div class="course-slider-active nav-style-1 owl-carousel">

                <div class="single-course">
                    <div class="course-img">
                        <a href="#"><img class="animated" src="{{asset('website/img/schoolLife/tennis.png')}}" alt=""></a>
                    </div>
                    <div class="course-content">
                        <h4 class="text-center"><a href="#">Tennis</a></h4>
                    </div>
                </div>

                <div class="single-course">
                    <div class="course-img">
                        <a href="#"><img class="animated" src="{{asset('website/img/schoolLife/bathrooms.png')}}" alt=""></a>
                    </div>
                    <div class="course-content">
                        <h4 class="text-center"><a href="#">Bathrooms</a></h4>
                    </div>
                </div>

                <div class="single-course">
                    <div class="course-img">
                        <a href="#"><img class="animated" src="{{asset('website/img/schoolLife/football.jpg')}}" alt=""></a>
                    </div>
                    <div class="course-content">
                        <h4 class="text-center"><a href="#">Football</a></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-------- Classes, Library Play Ground, Clinic, Theater, Art ------>
    <div class="course-area bg-img pt-20 pb-10" style="background-color: white">
        <div class="container">
            <div class="course-slider-active nav-style-1 owl-carousel">
                <div class="single-course">
                    <div class="course-img">
                        <a href="#"><img class="animated" src="{{asset('website/img/schoolLife/class.jpg')}}" alt=""></a>
                    </div>
                    <div class="course-content">
                        <h4 class="text-center"><a href="#">Classes</a></h4>
                    </div>
                </div>

                <div class="single-course">
                    <div class="course-img">
                        <a href="#"><img class="animated" src="{{asset('website/img/schoolLife/library.jpg')}}" alt=""></a>
                    </div>
                    <div class="course-content">
                        <h4 class="text-center"><a href="#">Library</a></h4>
                    </div>
                </div>

                <div class="single-course">
                    <div class="course-img">
                        <a href="#"><img class="animated" src="{{asset('website/img/schoolLife/playground.jpg')}}" alt=""></a>
                    </div>
                    <div class="course-content">
                        <h4 class="text-center"><a href="#">Play Ground</a></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-------- Clinic, Theater, Art ------>
    <div class="course-area bg-img pt-20 pb-10" style="background-color: white">
        <div class="container">
            <div class="course-slider-active nav-style-1 owl-carousel">
                <div class="single-course">
                    <div class="course-img">
                        <a href="#"><img class="animated" src="{{asset('website/img')}}/course/course-1.jpg" alt=""></a>
                    </div>
                    <div class="course-content">
                        <h4 class="text-center"><a href="#">Clinic</a></h4>
                    </div>
                </div>
                <div class="single-course">
                    <div class="course-img">
                        <a href="#"><img class="animated" src="{{asset('website/img/schoolLife/theater.jpg')}}" alt=""></a>
                    </div>
                    <div class="course-content">
                        <h4 class="text-center"><a href="#">Theater</a></h4>
                    </div>
                </div>
                <div class="single-course">
                    <div class="course-img">
                        <a href="#"><img class="animated" src="{{asset('website/img/schoolLife/art.jpg')}}" alt=""></a>
                    </div>
                    <div class="course-content">
                        <h4 class="text-center"><a href="#">Art</a></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>









    @include('layouts.footer')
@endsection
