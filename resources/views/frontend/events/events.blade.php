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



    <!-- Events -->
    <div class="event-area bg-img default-overlay pt-130 pb-130" style="background-image:url({{asset('website/img/bg/fees_bg.jpg')}});">
        <div class="container">
            <div class="section-title mb-75">
                <h2><span>Our</span> Events</h2>
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



    @include('layouts.footer')
@endsection
