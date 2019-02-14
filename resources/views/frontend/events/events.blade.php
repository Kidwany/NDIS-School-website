@extends('layouts.layouts')
@section('title', 'Events')
@section('content')
    @include('layouts.header')


    <div class="breadcrumb-area">
        <div class="breadcrumb-top default-overlay bg-img pt-100 pb-95" style="background-image:url({{asset('website/img/about/about_banner.jpg')}});">
            <div class="container">
                <h2>Events</h2>
                <p>NDIS is licensed as an American and British curriculum school by the Egyptian Ministry of Education.</p>
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



    <div class="event-area pt-130 pb-130">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-event event-white-bg">
                        <div class="event-img">
                            <a href="{{url('event/details/1')}}"><img src="{{asset('website/img/event/event-1.jpg')}}" alt=""></a>
                            <div class="event-date-wrap">
                                <span class="event-date">31th</span>
                                <span>Dec</span>
                            </div>
                        </div>
                        <div class="event-content">
                            <h3><a href="{{url('event/details/1')}}">New Year Festival for Student & Parents.</a></h3>
                            <p>Every Year NDIS Celebrate with it's students for christmas day .</p>
                            <div class="event-meta-wrap">
                                <div class="event-meta">
                                    <i class="fa fa-location-arrow"></i>
                                    <span>Movenpick ,Giza</span>
                                </div>
                                <div class="event-meta">
                                    <i class="fa fa-clock-o"></i>
                                    <span>11:00 pm</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-event event-white-bg">
                        <div class="event-img">
                            <a href="{{url('event/details/1')}}"><img src="{{asset('website/img/about/who_we_are.jpg')}}" alt=""></a>
                            <div class="event-date-wrap">
                                <span class="event-date">10th</span>
                                <span>Jan</span>
                            </div>
                        </div>
                        <div class="event-content">
                            <h3><a href="{{url('event/details/1')}}">Open Day for FS-1 Stage.</a></h3>
                            <p>Next Monday will be the yearly open day for FS-1 Stage.</p>
                            <div class="event-meta-wrap">
                                <div class="event-meta">
                                    <i class="fa fa-location-arrow"></i>
                                    <span>Campus ,Giza</span>
                                </div>
                                <div class="event-meta">
                                    <i class="fa fa-clock-o"></i>
                                    <span>08:30 am</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-event event-white-bg">
                        <div class="event-img">
                            <a href="{{url('event/details/1')}}"><img src="{{asset('website/img/event/event-3.jpg')}}" alt=""></a>
                            <div class="event-date-wrap">
                                <span class="event-date">1st</span>
                                <span>Feb</span>
                            </div>
                        </div>
                        <div class="event-content">
                            <h3><a href="{{url('event/details/1')}}">Second Term Parents Meeting.</a></h3>
                            <p>parent meeting is a very important event for make interviews with your child's teachers.</p>
                            <div class="event-meta-wrap">
                                <div class="event-meta">
                                    <i class="fa fa-location-arrow"></i>
                                    <span>Campus ,Al Mnia</span>
                                </div>
                                <div class="event-meta">
                                    <i class="fa fa-clock-o"></i>
                                    <span>10:00 am</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="pro-pagination-style text-center mt-25">
                <ul>
                    <li><a class="prev" href="#"><i class="fa fa-angle-double-left"></i></a></li>
                    <li><a class="active" href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a class="next" href="#"><i class="fa fa-angle-double-right"></i></a></li>
                </ul>
            </div>
        </div>
    </div>



    @include('layouts.footer')
@endsection
