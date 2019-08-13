@extends('layouts.layouts')
@section('title', 'Accreditation')
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
                <h2>Accreditation </h2>
            </div>
        </div>
        <div class="breadcrumb-bottom">
            <div class="container">
                <ul>
                    <li><a href="#">Home</a> <span><i class="fa fa-angle-double-right"></i> Accreditation</span></li>
                </ul>
            </div>
        </div>
    </div>



    <!------ Aim Section ------>
    <div class="about-us pt-80 pb-10">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-7">
                    <div class="about-content">
                        <div class="section-title section-title-green mb-30">
                            <h2>MOE <span></span></h2>
                            <p class="aims">
                                Basically, NDIS was granted recognition from the Egyptian Ministry of Education
                                to teach both the British and American curricula as confirmed by the relevant ministered decrees.
                            </p>
                            <div class="d-md-flex">
                                <a href="{{asset('website/pdf/398 American.pdf')}}" download class="btn btn-danger mt-10 mr-3" style="font-size: 14px"><i class="fa fa-file-pdf-o"></i> Download License for American Sector</a>
                                <a href="{{asset('website/pdf/399 British.pdf')}}" download class="btn btn-danger mt-10" style="font-size: 14px"><i class="fa fa-file-pdf-o"></i> Download License for British Sector</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-5">
                    <div class="about-img">
                        <a>
                            <img src="{{asset('website/img/brand-logo/2.png')}}" alt="" class="mt-30">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!------ Aim Section ------>
    <div class="about-us pb-10">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-7">
                    <div class="about-content">
                        <div class="section-title section-title-green mb-30">
                            <h2>British <span></span></h2>
                            <p class="aims">
                                Cambridge Assessment International Education (CAIE or simply Cambridge, formerly known as CIE -
                                (University of) Cambridge International Examinations) is a provider of international qualifications,
                                offering examinations and qualifications to 10,000 schools in more than 160 countries.[
                                The board of education is a division of Cambridge Assessment, the trading name of the
                                University of Cambridge Local Examinations Syndicate (UCLES), founded in 1858 as a
                                not-for-profit non-teaching department of the University of Cambridge.

                            </p>
                            <div class="d-md-flex">
                                <a href="{{asset('website/pdf/Cambridge.pdf')}}" download class="btn btn-danger mt-10 mr-3" style="font-size: 14px"><i class="fa fa-file-pdf-o"></i> Download Cambridge Accreditation</a>
                                <a href="{{asset('website/pdf/Cambridge examinations.pdf')}}" download class="btn btn-danger mt-10" style="font-size: 14px"><i class="fa fa-file-pdf-o"></i> Download Cambridge Examination</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-5">
                    <div class="about-img">
                        <a href="https://www.cambridgeinternational.org/why-choose-us/find-a-cambridge-school/">
                            <img src="{{asset('website/img/brand-logo/1.png')}}" alt="" class="mt-30">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!------ Aim Section ------>
    <div class="about-us pb-10">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-7">
                    <div class="about-content">
                        <div class="section-title section-title-green mb-30">
                            <h2>Pearson-Edexcel <span></span></h2>
                            <p class="aims">
                                Besides, NDIS has been granted recognition from Person-Edexcel to teach GCE,
                                International GCSE, International Advanced level, International Primary and
                                lower Secondary Curricula

                            </p>
                            <div class="d-md-flex">
                                <a href="{{asset('website/pdf/Pearson.pdf')}}" download class="btn btn-danger mt-10 mr-3" style="font-size: 14px"><i class="fa fa-file-pdf-o"></i> Download Pearson Accreditation</a>
                                <a href="{{asset('website/pdf/Edexcel.pdf')}}" download class="btn btn-danger mt-10" style="font-size: 14px"><i class="fa fa-file-pdf-o"></i> Download Edexcel Accreditation</a>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-5">
                    <div class="about-img">
                        <a href="#">
                            <img src="{{asset('website/img/brand-logo/4.png')}}" alt="" class="mt-30">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!------ Aim Section ------>
    <div class="about-us pb-10">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-7">
                    <div class="about-content">
                        <div class="section-title section-title-green mb-30">
                            <h2>American <span></span></h2>
                            <p class="aims">
                                AIAA American International Accreditation Association founded in 1992 American
                                Educational Consulting Associates, Ltd. or AECA, has been providing educational
                                services to schools for over 25 years. AECA instituted AIAA to provide accreditation
                                for schools outside of the United States that offer a national program, an international
                                program or an American style program.

                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-5">
                    <div class="about-img">
                        <a href="#">
                            <img src="{{asset('website/img/brand-logo/3.png')}}" alt="" class="mt-30">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    @include('layouts.footer')
@endsection
