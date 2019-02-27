@extends('layouts.layouts')
@section('title', 'Thank You')
@section('content')
    @include('layouts.header')

    <div class="about-us pt-100 pb-90">
        <div class="container">
            <div class="section-title-3 section-shape-hm2-1 text-center mb-100">
                <h2>Congratulations <span>...</span></h2>
                <h2>Your Application Submitted <span>Successfully.</span></h2>
                <p class="mt-50">Your Application Code is </p>
                <p class="mb-50" style="font-weight: bold; color: #0ac766; font-size: 50px;">{{Session::get('appcode')}}</p>

                <a href="{{asset('/application-track')}}" class="btn btn-success" style="background-color: #00a651 !important; font-size: 15px; padding: 10px 30px">Track Your Application</a>
            </div>
        </div>
    </div>

    @include('layouts.footer')
@endsection
