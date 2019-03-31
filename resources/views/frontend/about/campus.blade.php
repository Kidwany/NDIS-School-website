@extends('layouts.layouts')
@section('title', 'School Campus')
@section('customizedStyle')
    <!--begin::Page Vendors -->
    <!--end::Page Vendors -->
    <link href="{{asset('website/css/pages/about.css')}}" rel="stylesheet" type="text/css"/>
    <!--end::Base Styles -->
@endsection
@section('content')
    @include('layouts.header')


    <div class="breadcrumb-area">
        <div class="breadcrumb-top default-overlay bg-img breadcrumb-overly-5 pt-100 pb-95" style="background-image:url({{asset('website/img/schoolLife/school-life.jpg')}});">
            <div class="container">
                <h2>School Campus</h2>
                <p>
                    NDIS was granted recognition from the General Authority of Educational Buildings to start from
                    FS/KG to Y/G 12 with a total of 56 classrooms. The area of each is 45 m2.
                </p>
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


    <div class="container">

        <!--===================================Features Details ================================================-->
        <div class="row about-features d-flex flex-row justify-content-center mt-5 mb-50">

            <!------------Time Commitment ----------->
            <div class="col-md-3 col-sm-6">
                <div class="about-feature d-flex flex-column justify-content-between">
                    <div class="feature-img-container">
                        <img src="{{asset('website/img/about/capacity.png')}}" style="width: 120px; margin-bottom: 30px">
                    </div>
                    <p class="mb-20" style="font-weight: 500; font-size: 16px">Significant Environment</p>
                    <p class="main-font-size dark-grey ">
                        Besides, the capacity of each class is 19 students, which gives a significant meaning
                        to the educational environment.
                    </p>
                </div>
            </div>

            <!------------Time Commitment ----------->
            <div class="col-md-3 col-sm-6">
                <div class="about-feature d-flex flex-column justify-content-between">
                    <div class="feature-img-container">
                        <img src="{{asset('website/img/about/campus.png')}}" style="width: 120px; margin-bottom: 30px">
                    </div>
                    <p class="mb-20" style="font-weight: 500; font-size: 16px">Huge Area</p>
                    <p class="main-font-size dark-grey ">
                        The total area of the school project amounts to 7,000 m2 and the school premises
                        accuracy 2,500 m2 and the remaining area include:
                    </p>
                </div>
            </div>

            <!------------Time Commitment ----------->
            <div class="col-md-3 col-sm-6">
                <div class="about-feature d-flex flex-column justify-content-between">
                    <div class="feature-img-container">
                        <img src="{{asset('website/img/about/ac.png')}}" style="width: 120px; margin-bottom: 30px">
                    </div>
                    <p class="mb-20" style="font-weight: 500; font-size: 16px">Air Conditioned Classes</p>
                    <p class="main-font-size dark-grey ">
                        All classes are air-conditioned and are provided with smart interactive boards.
                    </p>
                </div>
            </div>

            <!------------Time Commitment ----------->
            <div class="col-md-3 col-sm-6">
                <div class="about-feature d-flex flex-column justify-content-between">
                    <div class="feature-img-container">
                        <img src="{{asset('website/img/about/online-education.png')}}" style="width: 120px; margin-bottom: 30px">
                    </div>
                    <p class="mb-20" style="font-weight: 500; font-size: 16px">Online Education</p>
                    <p class="main-font-size dark-grey ">
                        On line educational material complements the learning process. Teachers apply students-centered methodology.
                    </p>
                </div>
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

    {{--<!-------- Management Offices, Kids Area ------>
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
