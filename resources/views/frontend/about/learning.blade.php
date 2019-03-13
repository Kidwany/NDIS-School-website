@extends('layouts.layouts')
@section('title', 'Learning Approach')
@section('customizedStyle')
    <!--begin::Page Vendors -->
    <!--end::Page Vendors -->
    <link href="{{asset('website/css/pages/about.css')}}" rel="stylesheet" type="text/css"/>
    <!--end::Base Styles -->
@endsection
@section('content')
    @include('layouts.header')

    <!------------------------ Title banner section ----------------->
    <div class="breadcrumb-area">
        <div class="breadcrumb-top default-overlay bg-img pt-100 pb-95"
             style="background-image:url({{asset('website/img/bg/admission_bg.jpg')}});">
            <div class="container">
                <h2>Learning Approach</h2>
            </div>
        </div>
        <div class="breadcrumb-bottom">
            <div class="container">
                <ul>
                    <li><a href="#">Home</a> <span><i class="fa fa-angle-double-right"></i> Learning Approach</span></li>
                </ul>
            </div>
        </div>
    </div>

    @include('layouts.footer')
@endsection
