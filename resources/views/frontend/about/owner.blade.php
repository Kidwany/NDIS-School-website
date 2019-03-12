@extends('layouts.layouts')
@section('title', 'About')
@section('customizedStyle')
    <!--begin::Page Vendors -->
    <!--end::Page Vendors -->
    <link href="{{asset('website/css/pages/about.css')}}" rel="stylesheet" type="text/css"/>
    <!--end::Base Styles -->
@endsection
@section('content')
    @include('layouts.header')



    <!--===================================about Section================================================-->
    <div class="container mb-5" style="margin-top: 120px">
        <div class="row">
            <div class="col-lg-8 col-md-6">
                <div class="about-us-text">
                    <div class="d-flex flex-column justify-content-between">
                        <div>
                            <h3 class="dark-grey font-weight-bold">ABOUT OWNER</h3>
                            <p class="dark-grey main-font-size">
                                Mr. Mohamed Abdelghany is a long-time educationalist since 1964, with an extensive
                                experience in teaching students and managing schools of different grades in several
                                governesses around Egypt, including Minya, Southern Egypt and Cairo.
                            </p>
                            <p class="dark-grey main-font-size">
                                Mr. Abdelghany has continuously pursued his passion in achieving a unique
                                educational system that develops an integrated learning community with strong moral
                                guides, including qualified teachers and advanced technologies, involved parents,
                                and highly driven students.
                            </p>
                            <p class="dark-grey main-font-size">
                                Mr. Abdelghany established the private school business with his family since 1989.
                                He founded two schools in Minya and Southern Egypt with his sons. The schools proved
                                to accomplish a high success rate in enhancing its students’ educational and ethical
                                backgrounds.
                            </p>
                            <p class="dark-grey main-font-size">
                                Afterwards, Mr. Abdelghany established the New Discovery British School in Cairo. There,
                                he ensures that the students undergo a stimulatingly effective and modern educational process;
                                Mr. Abdelghany introduced a unique 21st century character building program, as well as the world’s
                                top e-learning system.
                            </p>
                        </div>
                        <div class="about-footer mt-40">
                            <div class="d-flex flex-row justify-content-between">
                                <div>
                                    <p class="medium-font-size dark-grey font-weight-bold mb-0">Mr.Mohamed Abdelghany</p>
                                    <p class="main-font-size" style="color: #0ac766">School Owner</p>
                                </div>
                                <div>
                                    <img src=" {{asset('img/pages/about/Ahmed%20Tawfik.png')}}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="about-us-img">
                    <img src="{{asset('img/pages/about/ahmed.png')}}">
                </div>
            </div>
        </div>

        <!--===================================Features ================================================-->
        <div class="row experience-years d-flex flex-row justify-content-center ">
            <h2 class="dark-grey text-center font-weight-bold"><span>20 </span>{{trans('about/about.years_experience')}}</h2>
        </div>

        <!--===================================Features Details ================================================-->
        <div class="row about-features d-flex flex-row justify-content-center mt-5">

            <!------------Time Commitment ----------->
            <div class="col-md-3 col-sm-6">
                <div class="about-feature d-flex flex-column justify-content-between">
                    <div class="feature-img-container">
                        <img src="{{asset('img/assets/about/time.png')}}">
                    </div>
                    <p class="large-font-size-font-size dark-grey main-font-weight mb-0">{{trans('home/home.time_title')}}</p>
                    <p class="main-font-size dark-grey ">
                        {{trans('home/home.time_desc')}}

                    </p>
                </div>
            </div>

            <!------------ Team ----------->
            <div class="col-md-3 col-sm-6">
                <div class="about-feature d-flex flex-column justify-content-between">
                    <div class="feature-img-container">
                        <img src="{{asset('img/assets/about/team.png')}}">
                    </div>
                    <p class="large-font-size-font-size dark-grey main-font-weight mb-0">{{trans('home/home.professional_title')}}</p>
                    <p class="main-font-size dark-grey ">
                        {{trans('home/home.professional_desc')}}
                    </p>
                </div>
            </div>

            <!------------Modern Designs----------->
            <div class="col-md-3 col-sm-6">
                <div class="about-feature d-flex flex-column justify-content-between">
                    <div class="feature-img-container">
                        <img src="{{asset('img/assets/about/home%20design.png')}}">
                    </div>
                    <p class="large-font-size-font-size dark-grey main-font-weight mb-0">{{trans('home/home.modern_title')}}</p>
                    <p class="main-font-size dark-grey ">
                        {{trans('home/home.modern_desc')}}
                    </p>
                </div>
            </div>

            <!------------Support 24/7----------->
            <div class="col-md-3 col-sm-6">
                <div class="about-feature d-flex flex-column justify-content-between">
                    <div class="feature-img-container">
                        <img src="{{asset('img/assets/about/support.png')}}">
                    </div>
                    <p class="large-font-size-font-size dark-grey main-font-weight mb-0">{{trans('home/home.support_title')}}</p>
                    <p class="main-font-size dark-grey ">
                        {{trans('home/home.support_desc')}}
                    </p>
                </div>
            </div>
        </div>
    </div>



    @include('layouts.footer')
@endsection
