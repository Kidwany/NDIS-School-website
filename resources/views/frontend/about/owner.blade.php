@extends('layouts.layouts')
@section('title', 'About Owner')
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
                                    <img style="height: 40px" src="{{asset('website/img/about/signature.png')}}">
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
            <h2 class="dark-grey text-center font-weight-bold"><span>30 </span>Years of Experience</h2>
        </div>

        <!--===================================Features Details ================================================-->
        <div class="row about-features d-flex flex-row justify-content-center mt-5 mb-50">

            <!------------Time Commitment ----------->
            <div class="col-md-3 col-sm-6">
                <div class="about-feature d-flex flex-column justify-content-between">
                    <div class="feature-img-container">
                        <img src="{{asset('website/img/about/students.png')}}" style="width: 120px; margin-bottom: 30px">
                    </div>
                    <p class="mb-20" style="font-weight: 500; font-size: 16px">Students Characters</p>
                    <p class="main-font-size dark-grey ">
                        Afterwards, Mr. Abdelghany established the New Discovery British School in Cairo. There,
                        he ensures that the students undergo a stimulatingly effective and modern educational process;
                        Mr. Abdelghany introduced a unique 21st century character building program, as well as the world’s
                        top e-learning system. An ever-lasting principle for students
                    </p>
                </div>
            </div>

            <!------------Time Commitment ----------->
            <div class="col-md-3 col-sm-6">
                <div class="about-feature d-flex flex-column justify-content-between">
                    <div class="feature-img-container">
                        <img src="{{asset('website/img/about/vision.png')}}" style="width: 120px; margin-bottom: 30px">
                    </div>
                    <p class="mb-20" style="font-weight: 500; font-size: 16px">Vision</p>
                    <p class="main-font-size dark-grey ">
                        Mr. Abdelghany’s vision is to tackle every student’s strengths and talents, and ensure
                        that he/she is exposed to an out-of-the-box learning environment. He integrates his
                        educational passion with a strong set of principles. His principles include motivating
                        students through their educational journey, empowering their characters, and applying
                        authentic cultural values and norms within their lifestyles.
                    </p>
                </div>
            </div>

            <!------------Time Commitment ----------->
            <div class="col-md-3 col-sm-6">
                <div class="about-feature d-flex flex-column justify-content-between">
                    <div class="feature-img-container">
                        <img src="{{asset('website/img/about/parents.png')}}" style="width: 120px; margin-bottom: 30px">
                    </div>
                    <p class="mb-20" style="font-weight: 500; font-size: 16px">His Value for Parents</p>
                    <p class="main-font-size dark-grey ">
                        His principles as well ensure that parents are involved in their children’s education.
                        Parents not only integrate their children’s learning at home, but also strengthen their children’s
                        values with the help of the teachers. Mr. Abdelghany verifies that teaming up with parents creates
                        an unparalleled bond for students and paves the road to youth development.
                    </p>
                </div>
            </div>

            <!------------Time Commitment ----------->
            <div class="col-md-3 col-sm-6">
                <div class="about-feature d-flex flex-column justify-content-between">
                    <div class="feature-img-container">
                        <img src="{{asset('website/img/about/word.png')}}" style="width: 120px; margin-bottom: 30px">
                    </div>
                    <p class="mb-20" style="font-weight: 500; font-size: 16px">In Word</p>
                    <p class="main-font-size dark-grey ">
                        On this basis, Mr. Abdelghany pursues his living passion by developing a
                        stronger, more integrated community; thus, making positive change.
                    </p>
                </div>
            </div>
        </div>
    </div>



    @include('layouts.footer')
@endsection
