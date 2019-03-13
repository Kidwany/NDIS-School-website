@extends('layouts.layouts')
@section('title', 'Why American')
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
             style="background-image:url({{asset('website/img/bg/british.jpg')}});">
            <div class="container">
                <h2>Why an American Curriculum?</h2>
                <p>The American education system offers a rich field of choices for international students.
                    There is such an array of schools, programs and locations that the choices may overwhelm students.
                </p>
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



    <!------ Aim Section ------>
    <div class="about-us pt-130 pb-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-7">
                    <div class="about-content">
                        <div class="section-title section-title-green mb-30">
                            <h2>Our Learning <span>Approaches</span></h2>
                            <p class="aims font-weight-bold">
                                Prior to higher education, American students attend primary and secondary
                                school for a combined total of 12 years. These years are referred to as the
                                first through twelfth grades.
                            </p>
                            <p>
                                Around age six, children begin primary school, which is most commonly called “elementary school.”
                                They attend five or six years and then go onto secondary school.
                                Secondary school consists of two programs: the first is “middle school” or
                                “junior high school” and the second program is “high school.” A diploma or certificate
                                is awarded upon graduation from high school. After graduating from  high school (12th grade),
                                students may go on to college or university. College or university study is known as
                                “higher education.”
                            </p>

                        </div>
                        {{--<div class="about-btn mt-45">
                            <a class="default-btn" href="about-us.html">ABOUT US</a>
                        </div>--}}
                    </div>
                </div>
                <div class="col-lg-5 col-md-5">
                    <div class="about-img">
                        <img src="{{asset('website/img/about/american.jpg')}}" alt="">
                        {{--<a class="video-btn video-popup" href="https://www.youtube.com/watch?v=sv5hK4crIRc">
                            <img class="animated" src="{{asset('website/img')}}/icon-img/video.png" alt="">
                        </a>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!------ Additional Section ------>
    <div class="achievement-area pt-60 pb-50">
        <div class="container">
            <div class="section-title">
                <h3 class="font-weight-bold" style="font-size: 30px;  margin-bottom: 20px">Grading <span style="color: #00a651">System</span></h3>
                <p>
                    Just like students, you will have to submit your academic transcripts as part of your application
                    for admission to university or college. Academic transcripts are official copies of your academic work.
                    This includes your “grades” and “grade point average” (GPA), which are measurements of your academic
                    achievement. Courses are commonly graded using percentages, which are converted into letter grades.
                    The grading system and GPA can be confusing, especially for international students. The interpretation
                    of grades has a lot of variation. For example, two students who attended different schools both submit
                    their transcripts to the same university. They both have 3.5 GPAs, but one student attended an average
                    high school, while the other attended a prestigious school that was academically challenging.
                    The university might interpret their GPAs differently because the two schools have dramatically different
                    standards.

                </p>
                <p class="font-weight-bold">
                    Therefore, there are some crucial things to keep in mind:
                </p>

                <ul>
                    <li>
                        •	You should find out the U.S. equivalent of the last level of education you completed in your home country.
                    </li>
                    <li>
                        •	Pay close attention to the admission requirements of each university and college, as well as individual
                        degree programs, which may have different requirements than the university.
                    </li>
                    <li>
                        •	Regularly meet with an educational advisor or guidance counselor to make sure you are meeting
                        the requirements.
                    </li>
                </ul>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <img src="{{asset('website/img/about/core subject.jpg')}}" style="width: 100%">
                <p class="text-center mt-15 font-weight-bold">Core Subject</p>
            </div>

            <div class="col-lg-6">
                <img src="{{asset('website/img/about/grade average.jpg')}}" style="width: 100%">
                <p class="text-center mt-15 font-weight-bold">(Grade Point Average) G.P.A</p>
            </div>
        </div>
    </div>




    <div class="container">
        <div class="row mb-50">
            <div class="col-lg-6">
                <img src="{{asset('website/img/about/gpa_calc.jpg')}}" style="width: 100%">
                <p class="text-center mt-15 font-weight-bold">GPA Will be Calculated as Follow</p>
            </div>

        </div>
    </div>


    @include('layouts.footer')
@endsection
