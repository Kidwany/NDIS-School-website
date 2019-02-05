@extends('layouts.layouts')
@section('title', 'Fees Guide')


@section('content')
    @include('layouts.header')

    <div class="breadcrumb-area">

        <div class="breadcrumb-top default-overlay bg-img breadcrumb-overly-5 pt-100 pb-95" style="background-image:url({{asset('website/img/bg/contact_bg.jpg')}});">
            <div class="container">
                <h2>Fees Guide</h2>
                <p>Our School Fees are broken down by Pre-F, FS1, FS2-Y6, Y7-Y9, Y10-Y11 and Y12-Y13. They are made from several factors outlined below. </p>
            </div>
        </div>

        <div class="breadcrumb-bottom">
            <div class="container">
                <ul>
                    <li><a href="#">Home</a> <span><i class="fa fa-angle-double-right"></i>Fees Guide</span></li>
                </ul>
            </div>
        </div>

    </div>


    <!------ Additional Section ------>
    <div class="achievement-area pt-60 pb-20">
        <div class="container">
            <div class="section-title">
                <h3 class="font-weight-bold" style="font-size: 30px;  margin-bottom: 20px">School year 2019/2020   <span style="color: #00a651">Offer</span></h3>
                <p style="margin-bottom: 0">Single Student Locked discount <span style="color: #0ac766; font-size: 18px;">10%</span> on Basic learning fees</p>
                <p style="margin-bottom: 0">Older Siblings Locked discount  <span style="color: #0ac766; font-size: 18px;">15%</span> on Basic learning fees</p>
                <p style="margin-bottom: 0">NO annual increase on basic fees.</p>
                <p style="margin-bottom: 0">Locked discount till graduation.</p>
                <p style="margin-bottom: 0">No registration fees.</p>

            </div>
        </div>
    </div>

    <!------ Course Section ------>
    <div class="course-area bg-img pt-130 pb-10" style="background-image:url({{asset('website/img/bg/fees_bg.jpg')}});">
        <div class="container">
            <div class="section-title mb-75">
                <h2> <span>Basic</span> Fees</h2>
                <p>Our School Fees are broken down by Pre-F, FS1, FS2-Y6, Y7-Y9, Y10-Y11 and Y12-Y13. <br> They are made from several factors outlined below. </p>
            </div>
            <div class="course-slider-active nav-style-1 owl-carousel">
                <div class="single-course">
                    <div class="course-img">
                        <a href="#">
                            <img class="animated" src="{{asset('website/img/fees/course-1.jpg')}}" alt=""></a>
                        <span>Early Years</span>
                    </div>
                    <div class="course-content">
                        <h4><a href="#">Pre-F</a></h4>
                        <p style="font-size: 16px">The Basic Fees is <span class="font-weight-bold">23,000 L.E</span></p>
                    </div>
                    {{--<div class="course-position-content">
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
                    </div>--}}
                </div>
                <div class="single-course">
                    <div class="course-img">
                        <a href="#">
                            <img class="animated" src="{{asset('website/img/fees/course-2.jpg')}}" alt=""></a>
                        <span>Junior School</span>
                    </div>
                    <div class="course-content">
                        <h4><a href="#">FS1/FS2</a></h4>
                        <p style="font-size: 16px">The Basic Fees is <span class="font-weight-bold">45,000 L.E</span></p>
                    </div>
                    {{--<div class="course-position-content">
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
                    </div>--}}
                </div>
                <div class="single-course">
                    <div class="course-img">
                        <a href="#">
                            <img class="animated" src="{{asset('website/img/fees/course-3.jpg')}}" alt=""></a>
                        {{--<span>Junior School</span>--}}
                    </div>
                    <div class="course-content">
                        <h4><a href="#">Year/Grade 1, 2 & 3</a></h4>
                        <p style="font-size: 16px">The Basic Fees is <span class="font-weight-bold">50,000 L.E</span></p>
                    </div>
                    {{--<div class="course-position-content">
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
                    </div>--}}
                </div>
                <div class="single-course">
                    <div class="course-img">
                        <a href="#">
                            <img class="animated" src="{{asset('website/img/fees/course-4.jpg')}}" alt=""></a>
                        {{--<span>Junior School</span>--}}
                    </div>
                    <div class="course-content">
                        <h4><a href="#">Year/Grade 4, 5 & 6</a></h4>
                        <p style="font-size: 16px">The Basic Fees is <span class="font-weight-bold">55,000 L.E</span></p>
                    </div>
                    {{--<div class="course-position-content">
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
                    </div>--}}
                </div>

                <div class="single-course">
                    <div class="course-img">
                        <a href="#">
                            <img class="animated" src="{{asset('website/img/fees/course-5.jpg')}}" alt=""></a>
                        <span>Senior School</span>
                    </div>
                    <div class="course-content">
                        <h4><a href="#">Year/Grade 7, 8 & 9</a></h4>
                        <p style="font-size: 16px">The Basic Fees is <span class="font-weight-bold">60,000 L.E</span></p>
                    </div>
                    {{--<div class="course-position-content">
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
                    </div>--}}
                </div>

                <div class="single-course">
                    <div class="course-img">
                        <a href="#">
                            <img class="animated" src="{{asset('website/img/fees/course-6.jpg')}}" alt=""></a>
                        {{--<span>Senior School</span>--}}
                    </div>
                    <div class="course-content">
                        <h4><a href="#">Year/Grade 10, 11 & 12</a></h4>
                        <p style="font-size: 16px">The Basic Fees is <span class="font-weight-bold">65,000 L.E</span></p>
                    </div>
                    {{--<div class="course-position-content">
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
                    </div>--}}
                </div>
            </div>
        </div>
    </div>

    <!------ Reservation Fess Section ------>
    <div class="achievement-area pt-60 pb-20">
        <div class="container">
            <div class="section-title">
                <h3 class="font-weight-bold" style="font-size: 30px">Reservation <span style="color: #00a651">Fees</span></h3>
                <p>2,500 EGP MUST be paid upon acceptance of entry to NDIS <span class="font-weight-bold">    ( Accredited from 1st installment amount )</span> </p>
            </div>
        </div>
    </div>

    <!------ Tuition Fess Section ------>
    <div class="achievement-area pt-60 pb-20">
        <div class="container">
            <div class="section-title">
                <h3 class="font-weight-bold" style="font-size: 30px">Tuition <span style="color: #00a651">Fees</span></h3>
                <p>To be paid in FOUR <span class="font-weight-bold"> EQUAL</span> installments a full year for each term <span class="font-weight-bold">    ( Accredited from 1st installment amount )</span> </p>
                <ul>
                    <li style="font-size: 16px; margin-bottom: 10px"><span class="font-weight-bold" style="color: #0ac766; font-size: 25px">25%</span> is due from May 1st until June 30th.</li>
                    <li style="font-size: 16px; margin-bottom: 10px"><span class="font-weight-bold" style="color: #0ac766; font-size: 25px">25%</span> is due from August 1st until till August 15th.</li>
                    <li style="font-size: 16px; margin-bottom: 10px"><span class="font-weight-bold" style="color: #0ac766; font-size: 25px">25%</span> is due from November 1st until November 15th.</li>
                    <li style="font-size: 16px; margin-bottom: 10px"><span class="font-weight-bold" style="color: #0ac766; font-size: 25px">25%</span> is due from February 1st until February 15th.</li>
                </ul>
            </div>
        </div>
    </div>


    <!------ Tuition Fess Section ------>
    <div class="achievement-area pt-60 pb-20">
        <div class="container">
            <div class="section-title">
                <h3 class="font-weight-bold" style="font-size: 30px">Bus <span style="color: #00a651">Fees</span></h3>
                <p>Are to be paid in TWO <span class="font-weight-bold"> EQUAL</span> installments; 50%  with 1st installment  & 50%  with 3rd installment.<span class="font-weight-bold">  <br> *Bus fees will be announced on July 2019.</span> .<span class="font-weight-bold">  <br> *A discount of 500 EGP ONLY for siblings .</span> </p>
                {{--<p class="font-weight-bold mb-20" style="font-size: 18px;  color: #d91e26"> Available Areas</p>
                <ul>
                    <li style="font-size: 16px; margin-bottom: 10px">Marioutya</li>
                    <li style="font-size: 16px; margin-bottom: 10px">Lebiny</li>
                    <li style="font-size: 16px; margin-bottom: 10px">Mansourya</li>
                    <li style="font-size: 16px; margin-bottom: 10px">Faisal</li>
                    <li style="font-size: 16px; margin-bottom: 10px">Haram</li>
                    <li style="font-size: 16px; margin-bottom: 10px">Remaya</li>
                    <li style="font-size: 16px; margin-bottom: 10px">Hadayek El-Ahram</li>
                    <li style="font-size: 16px; margin-bottom: 10px">Wahat Road</li>
                    <li style="font-size: 16px; margin-bottom: 10px">Dokki</li>
                    <li style="font-size: 16px; margin-bottom: 10px">Mohandeseen</li>
                    <li style="font-size: 16px; margin-bottom: 10px">Zayed</li>
                    <li style="font-size: 16px; margin-bottom: 10px">October</li>
                    <li style="font-size: 16px; margin-bottom: 10px">Maadi</li>
                </ul>--}}
            </div>
        </div>
    </div>


    <!------ Uniform Fess Section ------>
    <div class="achievement-area pt-60 pb-20">
        <div class="container">
            <div class="section-title">
                <h3 class="font-weight-bold" style="font-size: 30px">Uniform <span style="color: #00a651">Fees</span></h3>
                <p>School uniform can be purchased at the School campus The prices are available starting August 1st.  <span class="font-weight-bold" style="font-size: 16px"><br> (Not included in the Tuition Fees)</span> </p>
            </div>
        </div>
    </div>


    <!------ 5-	Educational Supplies:Section ------>
    <div class="achievement-area pt-60 pb-20">
        <div class="container">
            <div class="section-title">
                <h3 class="font-weight-bold" style="font-size: 30px">Educational  <span style="color: #00a651">Supplies</span></h3>
                <p>The parent has to pay an amount of 3,000 with the school tuition installments
                    (2019/2020). These fees represent Stationery, Art and Hygienic Supplies offered by the school management for the student through the whole year.
                </p>
            </div>
        </div>
    </div>

    <!------ Additional Section ------>
    <div class="achievement-area pt-60 pb-20">
        <div class="container">
            <div class="section-title">
                <h3 class="font-weight-bold" style="font-size: 30px">Additional & Optional   <span style="color: #00a651">Charges</span></h3>
                <p>Additional charges might apply for TRIPS and will be communicated to parents in time.</p>
            </div>
        </div>
    </div>

    @include('layouts.footer')
@endsection
