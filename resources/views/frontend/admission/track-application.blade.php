@extends('layouts.layouts')
@section('title', 'Application Tracking')

@section('customizedStyle')
    <link href="{{asset('metronic/assets/vendors/base/vendors.bundle.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('metronic/assets/demo/default/base/style.bundle.css')}}" rel="stylesheet" type="text/css" />
@endsection

@section('customizedScript')
    <!--begin::Base Scripts -->
    <script src="{{asset('metronic/assets/vendors/base/vendors.bundle.js')}}" type="text/javascript"></script>
    <script src="{{asset('metronic/assets/demo/default/base/scripts.bundle.js')}}" type="text/javascript"></script>
    <!--end::Base Scripts -->
    <!--begin::Page Resources -->
    <script src="{{asset('metronic/assets/demo/default/custom/crud/wizard/wizard.js')}}" type="text/javascript"></script>
@endsection

@section('content')
    @include('layouts.header')

    <!------------------------ Title banner section ----------------->
    <div class="breadcrumb-area">
        <div class="breadcrumb-top default-overlay bg-img pt-100 pb-95" style="background-image:url({{asset('website/img/bg/admission_bg.jpg')}});">
            <div class="container">
                <h2>Track your application</h2>
                <p>From this page you can track your application status,<br> from preschool through to Year/Grade 12.</p>
                <div class="container">
                    <!--begin: Portlet Body-->
                    <div class="row d-flex flex-row justify-content-center">
                        <div class="col-lg-7">
                            <form method="post" class="row mt-50 mb-50" action="{{url('/search')}}">
                                @csrf
                                <input type="text" name="appcode" placeholder="Enter Application Code Which sent to your Email" class="col-lg-9 form-control " required value="" style="height: 50px">
                                <div class="col-lg-3">
                                    <button class="btn btn-success w-100" type="submit" style="height: 50px; font-size: 16px">Search</button>
                                </div>
                                <div class="w-100 mt-15">
                                    @include('layouts.messages')
                                </div>
                            </form>
                        </div>
                    </div>
                    <!--end: Portlet Body-->
                </div>
            </div>
        </div>
        <div class="breadcrumb-bottom">
            <div class="container">
                <ul>
                    <li><a href="#">Home</a> <span><i class="fa fa-angle-double-right"></i> Track You Application</span></li>
                </ul>
            </div>
        </div>
    </div>


@endsection


