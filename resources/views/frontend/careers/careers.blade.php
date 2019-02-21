@extends('layouts.layouts')
@section('title', 'Home')

@section('content')
    @include('layouts.header')


    <div class="breadcrumb-area">
        <div class="breadcrumb-top default-overlay bg-img breadcrumb-overly-5 pt-100 pb-95" style="background-image:url({{asset('website/img/bg/careers_bg.jpg')}});">
            <div class="container">
                <h2>Careers</h2>
                <p>Our facility offers all that a young child needs to explore and learn. We have four outdoor areas for children. .</p>
            </div>
        </div>
        <div class="breadcrumb-bottom">
            <div class="container">
                <ul>
                    <li><a href="#">Home</a> <span><i class="fa fa-angle-double-right"></i>Calendar</span></li>
                </ul>
            </div>
        </div>
    </div>


    <div class="related-courses mb-80">
        <div class="container">
            <div class="row">
                @if($careers)
                    @foreach($careers as $career)
                        <!--------------------------------- Career ----------------------------->
                        <div class="col-md-6 career_container">
                            <div class="related-title">
                                <h3 style="font-size: 18px; font-weight: 700; color: #1a9a47">{{$career->jobtitle}} <span style="font-size: 13px; color: #777777; font-weight: 300"> {{$career->created_at->diffForHumans()}}</span></h3>
                                <p style="font-size: 14px; color: #777777; line-height: 20px">
                                    {{$career->desc}}
                                </p>
                            </div>
                            <div class="d-flex flex-row justify-content-end">
                                <a class="btn btn-primary mt-15" href="{{url('careers-apply')}}" style="border-radius: 0; font-size: 14px; padding: 5px 15px; background-color: #213f95">Apply Now</a>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>

        </div>
    </div>





    @include('layouts.footer')
@endsection
