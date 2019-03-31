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



    <!-------- Lab, Zoo, ICT, Playgrounds ------>
    <div class="course-area bg-img pt-100 pb-10" style="background-color: white">
        <div class="container">

            <div class="course-slider-active nav-style-1 owl-carousel">
                <div class="single-course">
                    <div class="course-img">
                        <a href="#"><img class="animated" src="{{asset('website/img/schoolLife/science.jpg')}}" alt=""></a>
                    </div>
                    <div class="course-content">
                        <h4 class="text-center"><a href="#">4 Science Labs</a></h4>
                    </div>
                </div>

                <div class="single-course">
                    <div class="course-img">
                        <a href="#"><img class="animated" src="{{asset('website/img/schoolLife/mini-zoo.jpg')}}" alt=""></a>
                    </div>
                    <div class="course-content">
                        <h4 class="text-center"><a href="#">Mini Zoo</a></h4>
                    </div>
                </div>

                <div class="single-course">
                    <div class="course-img">
                        <a href="#"><img class="animated" src="{{asset('website/img/schoolLife/ict.jpg')}}" alt=""></a>
                    </div>
                    <div class="course-content">
                        <h4 class="text-center"><a href="#">ICT Labs</a></h4>
                    </div>
                </div>


                <div class="single-course">
                    <div class="course-img">
                        <a href="#"><img class="animated" src="{{asset('website/img/schoolLife/tennis.png')}}" alt=""></a>
                    </div>
                    <div class="course-content">
                        <h4 class="text-center"><a href="#">Playgrounds For (Football, Volley ball, Tennis)</a></h4>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!--------  , Bathrooms, Football, class room activities, staff rooms ------>
    <div class="course-area bg-img pt-20 pb-10" style="background-color: white">
        <div class="container">
            <div class="course-slider-active nav-style-1 owl-carousel">

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

                <div class="single-course">
                    <div class="course-img">
                        <a href="#"><img class="animated" src="{{asset('website/img/schoolLife/activities-classroom.jpg')}}" alt=""></a>
                    </div>
                    <div class="course-content">
                        <h4 class="text-center"><a href="#">Classrooms For Activities</a></h4>
                    </div>
                </div>

                <div class="single-course">
                    <div class="course-img">
                        <a href="#"><img class="animated" src="{{asset('website/img/schoolLife/staff-room.jpg')}}" alt=""></a>
                    </div>
                    <div class="course-content">
                        <h4 class="text-center"><a href="#">Staff Rooms</a></h4>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-------- Kids Area, Library Play Ground, Gardens ------>
    <div class="course-area bg-img pt-20 pb-10" style="background-color: white">
        <div class="container">
            <div class="course-slider-active nav-style-1 owl-carousel">
                <div class="single-course">
                    <div class="course-img">
                        <a href="#"><img class="animated" src="{{asset('website/img/schoolLife/kidsarea.jpg')}}" alt=""></a>
                    </div>
                    <div class="course-content">
                        <h4 class="text-center"><a href="#">Kids Area</a></h4>
                    </div>
                </div>

                <div class="single-course">
                    <div class="course-img">
                        <a href="#"><img class="animated" src="{{asset('website/img/schoolLife/library.jpg')}}" alt=""></a>
                    </div>
                    <div class="course-content">
                        <h4 class="text-center"><a href="#">Libraries</a></h4>
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

                <div class="single-course">
                    <div class="course-img">
                        <a href="#"><img class="animated" src="{{asset('website/img/schoolLife/gardens.jpg')}}" alt=""></a>
                    </div>
                    <div class="course-content">
                        <h4 class="text-center"><a href="#">Gardens</a></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
{{--
    <!-------- Management Offices, Kids Area ------>
    <div class="course-area bg-img pt-20 pb-10" style="background-color: white">
        <div class="container">
            <div class="course-slider-active nav-style-1 owl-carousel">
                <div class="single-course">
                    <div class="course-img">
                        <a href="#"><img class="animated" src="{{asset('website/img/schoolLife/class.jpg')}}" alt=""></a>
                    </div>
                    <div class="course-content">
                        <h4 class="text-center"><a href="#">Management Offices,</a></h4>
                    </div>
                </div>

                <div class="single-course">
                    <div class="course-img">
                        <a href="#"><img class="animated" src="{{asset('website/img/schoolLife/library.jpg')}}" alt=""></a>
                    </div>
                    <div class="course-content">
                        <h4 class="text-center"><a href="#">Kids Area</a></h4>
                    </div>
                </div>

            </div>
        </div>
    </div>--}}









    @include('layouts.footer')
@endsection
