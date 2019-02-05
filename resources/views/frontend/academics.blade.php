@extends('layouts.layouts')
@section('title', 'How To Apply')
@section('applyStepper')
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('website/css/layouts/stepper.css')}}">
@endsection

@section('applyStepperScript')
    <script src="{{asset('website/js/stepper/jquery.steps.js')}}"></script>
@endsection
@section('content')
    @include('layouts.header')


    <!------------------------ Title banner section ----------------->
    <div class="breadcrumb-area">
        <div class="breadcrumb-top default-overlay bg-img pt-100 pb-95" style="background-image:url({{asset('website/img/bg/academics_bg.jpg')}}); object-position: top">
            <div class="container">
                <h2>Foundation Stage</h2>
                <p>We Have Many Benefits to Foundation Students During The Week.</p>
            </div>
        </div>
        <div class="breadcrumb-bottom">
            <div class="container">
                <ul>
                    <li><a href="#">Home</a> <span><i class="fa fa-angle-double-right"></i> Academics</span></li>
                </ul>
            </div>
        </div>
    </div>

    <!------ Aim Section ------>
    <div class="about-us pt-130 pb-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="about-content">
                        <div class="section-title section-title-green mb-30">
                            <h2>Our <span>Aims</span></h2>
                            <p class="aims">At NDIS Foundation Stage, we believe that the first years of life are the most influential in establishing good habits and basic learning skills.  We are working to help all children to prepare for the future and enable them to develop their capabilities as successful learners, confident individuals and responsible citizens.  Indeed, play is a fundamental part of childhood. For that reason our children’s learning is promoted successfully by activities specially planned and adapted to meet or extend their individual learning needs. </p>
                            <p>Every day is a learning day and that learning is around us. We aim to provide a balanced plan for every   child. As well we work to develop our kids’ skills and attitude best through playing, which is well planned to give our kids the opportunity to be creative and to explore the world. .</p>

                        </div>
                        {{--<div class="about-btn mt-45">
                            <a class="default-btn" href="about-us.html">ABOUT US</a>
                        </div>--}}
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="about-img default-overlay">
                        <img src="{{asset('website/img/academics/aims.jpg')}}" alt="">
                        {{--<a class="video-btn video-popup" href="https://www.youtube.com/watch?v=sv5hK4crIRc">
                            <img class="animated" src="{{asset('website/img')}}/icon-img/video.png" alt="">
                        </a>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!------ Curriculum Section ------>
    <div class="about-us pt-50 pb-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="about-content">
                        <div class="section-title section-title-green mb-30">
                            <h2>Our <span>Curriculum </span></h2>
                            <p class="aims">Our curriculum is designed to be fun and balanced to cover all the
                                learning goals.  The Department for Education, in the UK, sets out Learning Objectives
                                for each area of the curriculum and Levels of Attainment that pupils are expected
                                to achieve at the end of each key stage.
                            </p>

                        </div>
                        {{--<div class="about-btn mt-45">
                            <a class="default-btn" href="about-us.html">ABOUT US</a>
                        </div>--}}
                    </div>
                </div>


                <div class="description-review-area pb-50 pt-40">
                    <div class="container">
                        <div class="description-review-wrapper">
                            <div class="description-review-topbar nav">
                                <a class="active" data-toggle="tab" href="#des-details1">Description</a>
                                <a data-toggle="tab" href="#des-details2">Additional information</a>
                                <a data-toggle="tab" href="#des-details3">Reviews</a>
                            </div>
                            <div class="tab-content description-review-bottom">
                                <div id="des-details1" class="tab-pane active">
                                    <div class="product-description-wrapper">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas pulvinar massa metus, vitae pharetra lacus sodales sit amet. Morbi accumsan suscipit lacus, sit amet egestas magna elemen tum nec. Mauris urna enim, rutrum in iaculis nec, vehicula ut libero. Etiam sit amet ex orci. Duis eget consectetur libero, eget interdum metus. Aliquam rhoncus porttitor felis, a tincidunt ex scel erisque et. Morbi faucibus venenatis dignissim. Nullam ut facilisis mauris. In hac habitasse platea dictumst. </p>
                                        <p>Pellentesque luctus augue ipsum, ut tincidunt odio tempus at. Nullam ac quam venenatis, bibendum eros at, placerat risus. Maecenas cursus elit non nisl finibus congue. Donec posuere fringilla ante eu vehicula. Fusce sed erat quis nisi gravida vehicula id vitae dolor. In at libero pretium, maximus lorem vitae, pharetra turpis feugiat facilisis ullamcorper.  </p>
                                    </div>
                                </div>
                                <div id="des-details2" class="tab-pane ">
                                    <div class="product-anotherinfo-wrapper">
                                        <ul>
                                            <li><span>Weight</span> 400 g</li>
                                            <li><span>Dimensions</span>10 x 10 x 15 cm </li>
                                            <li><span>Materials</span> 60% cotton, 40% polyester</li>
                                            <li><span>Other Info</span> American heirloom jean shorts pug seitan letterpress</li>
                                        </ul>
                                    </div>
                                </div>
                                <div id="des-details3" class="tab-pane">
                                    <div class="row">
                                        <div class="col-lg-7">
                                            <div class="review-wrapper">
                                                <div class="single-review">
                                                    <div class="review-img">
                                                        <img src="assets/img/blog/recent-post-1.jpg" alt="">
                                                    </div>
                                                    <div class="review-content">
                                                        <div class="review-top-wrap">
                                                            <div class="review-left">
                                                                <div class="review-name">
                                                                    <h4>White Lewis</h4>
                                                                </div>
                                                                <div class="review-rating">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                </div>
                                                            </div>
                                                            <div class="review-left">
                                                                <a href="#">Reply</a>
                                                            </div>
                                                        </div>
                                                        <div class="review-bottom">
                                                            <p>Vestibulum ante ipsum primis aucibus orci luctustrices posuere cubilia Curae Suspendisse viverra ed viverra. Mauris ullarper euismod vehicula. Phasellus quam nisi, congue id nulla nec, convallis conval lis leo. Maecenas bibendum bibendum larius.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="single-review child-review">
                                                    <div class="review-img">
                                                        <img src="assets/img/blog/recent-post-2.jpg" alt="">
                                                    </div>
                                                    <div class="review-content">
                                                        <div class="review-top-wrap">
                                                            <div class="review-left">
                                                                <div class="review-name">
                                                                    <h4>White Lewis</h4>
                                                                </div>
                                                                <div class="review-rating">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                </div>
                                                            </div>
                                                            <div class="review-left">
                                                                <a href="#">Reply</a>
                                                            </div>
                                                        </div>
                                                        <div class="review-bottom">
                                                            <p>Vestibulum ante ipsum primis aucibus orci luctustrices posuere cubilia Curae Sus pen disse viverra ed viverra. Mauris ullarper euismod vehicula. </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-5">
                                            <div class="ratting-form-wrapper pl-50 ratting-nagative-mrg">
                                                <h3>Add a Review</h3>
                                                <div class="ratting-form">
                                                    <form action="#">
                                                        <div class="star-box">
                                                            <span>Your rating:</span>
                                                            <div class="ratting-star">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="rating-form-style mb-10">
                                                                    <input placeholder="Name" type="text">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="rating-form-style mb-10">
                                                                    <input placeholder="Email" type="email">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="rating-form-style form-submit">
                                                                    <textarea name="Your Review" placeholder="Message"></textarea>
                                                                    <input type="submit" value="Submit">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{--<div class="col-lg-6 col-md-6">
                    <div class="about-img default-overlay">
                        <img src="{{asset('website/img/academics/aims.jpg')}}" alt="">
                        --}}{{--<a class="video-btn video-popup" href="https://www.youtube.com/watch?v=sv5hK4crIRc">
                            <img class="animated" src="{{asset('website/img')}}/icon-img/video.png" alt="">
                        </a>--}}{{--
                    </div>
                </div>--}}
            </div>
        </div>
    </div>


    {{--<!------ About Section ------>
    <div class="container">
        <div class="wrapper">
            <div class="inner">
                <div id="wizard">
                    <!-- SECTION 1 Curriculum-->
                    <h4>Curriculum </h4>
                    <section>
                        <p>Our curriculum is designed to be fun and balanced to cover all the learning goals.
                            The Department for Education, in the UK, sets out Learning Objectives for each area of the curriculum and Levels
                            of Attainment that pupils are expected to achieve at the end of each key stage.
                            <br>
                            <span class="font-weight-bold">Paying the application doesn’t guarantee the acceptance.</span>
                        </p>
                        --}}{{--<button class="forward">Next Step
                            <i class="zmdi zmdi-long-arrow-right"></i>
                        </button>--}}{{--
                    </section>

                    <!-- SECTION 2 Character building-->
                    <h4>Character building</h4>
                    <section class="section-style">
                        <div class="form-wrapper">
                            <p>

                            </p>
                            --}}{{-- <button class="forward">Next Step
                                 <i class="zmdi zmdi-long-arrow-right"></i>
                             </button>--}}{{--
                        </div>
                    </section>

                    <!-- SECTION 3 Activities-->
                    <h4>Activities</h4>
                    <section>
                        <p>Parents will be notified of the assessment result within 5 working days from
                            The assessment date.
                        </p>

                        --}}{{--<button class="forward" style="width: 195px; margin-top: 44px;">Next Step
                            <i class="zmdi zmdi-long-arrow-right"></i>
                        </button>--}}{{--
                    </section>

                    <!-- SECTION 4 Our typical day-->
                    <h4>Our typical day</h4>
                    <section class="section-style">
                        <div class="pay-wrapper">
                            <p>
                                If the student is offered a place, a onetime reservation fee of <span class="font-weight-bold">2,500 EGP </span>must be paid within 5 working days and the below documents should be presented to guarantee the student’s place.
                                <br><span class="font-weight-bold">** This amount is accredited from the 1st Installment.</span>
                                <br>
                                - Copy of vaccination report.
                                <br>
                                - Copy of parents’ IDs or Passports.
                                <br>
                                - An original electronic birth certificate.
                                <br>
                                - 8 recent passport-sized color photos.
                                <br>
                                - The original stamped report from the previous school.
                                <br>
                                If a school bus is required, an amount of 2,000 EGP MUST be paid with reservation fees
                                with maximum 1st installment, Otherwise, the student will not be assigned to a bus route.
                                <br>
                                <span class="font-weight-bold">
                                     **Promotion from one year to the next is not automatic, unless the following year’s
                                1st installment is paid before 30th June.
                                </span>


                            </p>
                            --}}{{--<button style="width: 195px; margin-top: 45px;">Confirmation
                                <i class="zmdi zmdi-long-arrow-right"></i>
                            </button>--}}{{--
                        </div>
                    </section>


                    <!-- SECTION 5 Classroom displays-->
                    <h4>Classroom Displays</h4>
                    <section class="section-style">
                        <div class="pay-wrapper">
                            <p>
                                Classroom displays


                            </p>
                            --}}{{--<button style="width: 195px; margin-top: 45px;">Confirmation
                                <i class="zmdi zmdi-long-arrow-right"></i>
                            </button>--}}{{--
                        </div>
                    </section>

                    <!-- SECTION 6 Outdoor facilities-->
                    <h4>Outdoor facilities</h4>
                    <section class="section-style">
                        <div class="pay-wrapper">
                            <p>
                                Outdoor facilities


                            </p>
                            --}}{{--<button style="width: 195px; margin-top: 45px;">Confirmation
                                <i class="zmdi zmdi-long-arrow-right"></i>
                            </button>--}}{{--
                        </div>
                    </section>

                    <!-- SECTION 7 How to help your child at home?-->
                    <h4>How to help your child at home?</h4>
                    <section class="section-style">
                        <div class="pay-wrapper">
                            <p>
                                How to help your child at home?

                            </p>
                            --}}{{--<button style="width: 195px; margin-top: 45px;">Confirmation
                                <i class="zmdi zmdi-long-arrow-right"></i>
                            </button>--}}{{--
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>--}}



   {{-- <!------------------------ Tabs ----------------->
    <div class="course-details-area pt-130">
        <div class="container">
            <div class="row">
                <div class="col-xl-9 col-lg-8">
                    <div class="course-left-wrap mr-40">

                        <div class="apply-area">
                            <img src="{{{asset('website/img/course/academics-image.jpg')}}}" alt="">
                            <div class="course-apply-btn">
                                <a href="{{url('admission')}}" class="default-btn">APPLY NOW</a>
                            </div>
                        </div>

                        <div class="course-tab-list nav pt-40 pb-25 mb-35">
                            <a class="active" href="#course-details-1" data-toggle="tab" >
                                <h4>Aims  </h4>
                            </a>
                            <a href="#course-details-2" data-toggle="tab">
                                <h4>Curriculum </h4>
                            </a>
                            <a href="#course-details-3" data-toggle="tab">
                                <h4> Character building </h4>
                            </a>
                            <a href="#course-details-3" data-toggle="tab">
                                <h4> Activities </h4>
                            </a>
                            <a href="#course-details-3" data-toggle="tab">
                                <h4> Our typical day </h4>
                            </a>
                            <a href="#course-details-3" data-toggle="tab">
                                <h4> Classroom displays </h4>
                            </a>
                            <a href="#course-details-3" data-toggle="tab">
                                <h4>Outdoor facilities </h4>
                            </a>
                            <a href="#course-details-3" data-toggle="tab">
                                <h4> How to help your child at home? </h4>
                            </a>



                        </div>
                        <div class="tab-content jump">
                            <div class="tab-pane active" id="course-details-1">
                                <div class="over-view-content">
                                    <h4>COURSE  DETAILS</h4>
                                    <h5>Course Name : Grphic Design & Multimedia</h5>
                                    <p>magna aliqua. Ut enim ad minim veniam, nisi ut aliquiptempor incid.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi m aperiam, eaque ipsa quae abaspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                                    <div class="over-view-list">
                                        <div class="sin-over-view-list">
                                            <div class="course-list-icon">
                                                <i class="fa fa-check"></i> .
                                            </div>
                                            <div class="course-list-content">
                                                <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet,</p>
                                            </div>
                                        </div>
                                        <div class="sin-over-view-list">
                                            <div class="course-list-icon">
                                                <i class="fa fa-check"></i> .
                                            </div>
                                            <div class="course-list-content">
                                                <p> Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet,</p>
                                            </div>
                                        </div>
                                        <div class="sin-over-view-list">
                                            <div class="course-list-icon">
                                                <i class="fa fa-check"></i> .
                                            </div>
                                            <div class="course-list-content">
                                                <p>Es eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="course-details-img">
                                        <img src="assets/img/banner/course-details-1.jpg" alt="">
                                    </div>
                                    <div class="course-summary-wrap">
                                        <div class="single-course-summary">
                                            <h4>Total Students</h4>
                                            <span><i class="fa fa-user"></i> 50</span>
                                        </div>
                                        <div class="single-course-summary">
                                            <h4>Course Duration</h4>
                                            <span><i class="fa fa-clock-o"></i> 4yrs</span>
                                        </div>
                                        <div class="single-course-summary">
                                            <h4>Course Credits</h4>
                                            <span><i class="fa fa-diamond"></i> 125</span>
                                        </div>
                                        <div class="single-course-summary">
                                            <h4>Total Semester</h4>
                                            <span><i class="fa fa-book"></i> 12</span>
                                        </div>
                                    </div>
                                    <p>magna aliqua. Ut enim ad minim veniam, nisi ut aliquiptempor incid.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi m aperiam, eaque ipsa quae abaspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                                </div>
                            </div>
                            <div class="tab-pane" id="course-details-2">
                                <div class="over-view-content">
                                    <h4>INSTRUCTOR</h4>
                                    <h5>Head Of The Department  : Ara’af Imtiaz</h5>
                                    <p>magna aliqua. Ut enim ad minim veniam, nisi ut aliquiptempor incid.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi m aperiam, eaque ipsa quae abaspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                                    <div class="over-view-list">
                                        <div class="sin-over-view-list">
                                            <div class="course-list-icon">
                                                <i class="fa fa-check"></i> .
                                            </div>
                                            <div class="course-list-content">
                                                <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet,</p>
                                            </div>
                                        </div>
                                        <div class="sin-over-view-list">
                                            <div class="course-list-icon">
                                                <i class="fa fa-check"></i> .
                                            </div>
                                            <div class="course-list-content">
                                                <p> Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet,</p>
                                            </div>
                                        </div>
                                        <div class="sin-over-view-list">
                                            <div class="course-list-icon">
                                                <i class="fa fa-check"></i> .
                                            </div>
                                            <div class="course-list-content">
                                                <p>Es eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="course-details-img">
                                        <img src="assets/img/banner/course-details-1.jpg" alt="">
                                    </div>
                                    <div class="course-summary-wrap">
                                        <div class="single-course-summary">
                                            <h4>Total Students</h4>
                                            <span><i class="fa fa-user"></i> 50</span>
                                        </div>
                                        <div class="single-course-summary">
                                            <h4>Course Duration</h4>
                                            <span><i class="fa fa-clock-o"></i> 4yrs</span>
                                        </div>
                                        <div class="single-course-summary">
                                            <h4>Course Credits</h4>
                                            <span><i class="fa fa-diamond"></i> 125</span>
                                        </div>
                                        <div class="single-course-summary">
                                            <h4>Total Semester</h4>
                                            <span><i class="fa fa-book"></i> 12</span>
                                        </div>
                                    </div>
                                    <p>magna aliqua. Ut enim ad minim veniam, nisi ut aliquiptempor incid.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi m aperiam, eaque ipsa quae abaspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                                </div>
                            </div>
                            <div class="tab-pane" id="course-details-3">
                                <div class="review-wrapper">
                                    <div class="single-review">
                                        <div class="review-img">
                                            <img src="assets/img/blog/recent-post-1.jpg" alt="">
                                        </div>
                                        <div class="review-content">
                                            <div class="review-top-wrap">
                                                <div class="review-left">
                                                    <div class="review-name">
                                                        <h4>White Lewis</h4>
                                                    </div>
                                                    <div class="review-rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                </div>
                                                <div class="review-btn">
                                                    <a href="#">Reply</a>
                                                </div>
                                            </div>
                                            <div class="review-bottom">
                                                <p>Vestibulum ante ipsum primis aucibus orci luctustrices posuere cubilia Curae Suspendisse viverra ed viverra. Mauris ullarper euismod vehicula. Phasellus quam nisi, congue id nulla nec, convallis conval lis leo. Maecenas bibendum bibendum larius.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="single-review child-review">
                                        <div class="review-img">
                                            <img src="assets/img/blog/recent-post-2.jpg" alt="">
                                        </div>
                                        <div class="review-content">
                                            <div class="review-top-wrap">
                                                <div class="review-left">
                                                    <div class="review-name">
                                                        <h4>White Lewis</h4>
                                                    </div>
                                                    <div class="review-rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                </div>
                                                <div class="review-btn">
                                                    <a href="#">Reply</a>
                                                </div>
                                            </div>
                                            <div class="review-bottom">
                                                <p>Vestibulum ante ipsum primis aucibus orci luctustrices posuere cubilia Curae Suspendisse viverra ed viverra. Mauris ullarper euismod vehicula. Phasellus quam nisi, congue id nulla nec, convallis conval lis leo. Maecenas bibendum bibendum larius.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="ratting-form-wrapper">
                                    <h3>Add a Review</h3>
                                    <div class="ratting-form">
                                        <form>
                                            <div class="star-box">
                                                <span>Your rating:</span>
                                                <div class="ratting-star">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="rating-form-style mb-20">
                                                        <input placeholder="Name" type="text">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="rating-form-style mb-20">
                                                        <input placeholder="Email" type="email">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="rating-form-style form-submit">
                                                        <textarea name="Your Review" placeholder="Message"></textarea>
                                                        <input type="submit" value="Submit">
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="related-course pt-70">
                            <div class="related-title mb-45 mrg-bottom-small">
                                <h3>Related Course</h3>
                                <p>Hempor incididunt ut labore et dolore mm, itation ullamco laboris <br>nisi ut aliquip. </p>
                            </div>
                            <div class="related-slider-active">
                                <div class="single-course">
                                    <div class="course-img">
                                        <a href="#"><img class="animated" src="assets/img/course/related-course-1.jpg" alt=""></a>
                                    </div>
                                    <div class="course-content">
                                        <h4><a href="#">Apparel Manufacturing</a></h4>
                                        <p>magna aliqua. Ut enim ad minim veniam, nisi ut aliquiptempor incid.</p>
                                    </div>
                                    <div class="course-position-content">
                                        <div class="credit-duration-wrap">
                                            <div class="sin-credit-duration">
                                                <i class="fa fa-diamond"></i>
                                                <span>Credits : 125</span>
                                            </div>
                                            <div class="sin-credit-duration">
                                                <i class="fa fa-clock-o"></i>
                                                <span>Duration : 4yrs</span>
                                            </div>
                                        </div>
                                        <div class="course-btn">
                                            <a class="default-btn" href="#">APPLY NOW</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-course">
                                    <div class="course-img">
                                        <a href="#"><img class="animated" src="assets/img/course/related-course-2.jpg" alt=""></a>
                                    </div>
                                    <div class="course-content">
                                        <h4><a href="#">Grphic Design & Multimedia</a></h4>
                                        <p>magna aliqua. Ut enim ad minim veniam, nisi ut aliquiptempor incid.</p>
                                    </div>
                                    <div class="course-position-content">
                                        <div class="credit-duration-wrap">
                                            <div class="sin-credit-duration">
                                                <i class="fa fa-diamond"></i>
                                                <span>Credits : 125</span>
                                            </div>
                                            <div class="sin-credit-duration">
                                                <i class="fa fa-clock-o"></i>
                                                <span>Duration : 4yrs</span>
                                            </div>
                                        </div>
                                        <div class="course-btn">
                                            <a class="default-btn" href="#">APPLY NOW</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-course">
                                    <div class="course-img">
                                        <a href="#"><img class="animated" src="assets/img/course/related-course-3.jpg" alt=""></a>
                                    </div>
                                    <div class="course-content">
                                        <h4><a href="#">Fashion & Technology</a></h4>
                                        <p>magna aliqua. Ut enim ad minim veniam, nisi ut aliquiptempor incid.</p>
                                    </div>
                                    <div class="course-position-content">
                                        <div class="credit-duration-wrap">
                                            <div class="sin-credit-duration">
                                                <i class="fa fa-diamond"></i>
                                                <span>Credits : 125</span>
                                            </div>
                                            <div class="sin-credit-duration">
                                                <i class="fa fa-clock-o"></i>
                                                <span>Duration : 4yrs</span>
                                            </div>
                                        </div>
                                        <div class="course-btn">
                                            <a class="default-btn" href="#">APPLY NOW</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-course">
                                    <div class="course-img">
                                        <a href="#"><img class="animated" src="assets/img/course/related-course-2.jpg" alt=""></a>
                                    </div>
                                    <div class="course-content">
                                        <h4><a href="#">Fashion & Technology</a></h4>
                                        <p>magna aliqua. Ut enim ad minim veniam, nisi ut aliquiptempor incid.</p>
                                    </div>
                                    <div class="course-position-content">
                                        <div class="credit-duration-wrap">
                                            <div class="sin-credit-duration">
                                                <i class="fa fa-diamond"></i>
                                                <span>Credits : 125</span>
                                            </div>
                                            <div class="sin-credit-duration">
                                                <i class="fa fa-clock-o"></i>
                                                <span>Duration : 4yrs</span>
                                            </div>
                                        </div>
                                        <div class="course-btn">
                                            <a class="default-btn" href="#">APPLY NOW</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4">
                    <div class="sidebar-style sidebar-res-mrg-none">
                        <div class="sidebar-search mb-40">
                            <div class="sidebar-title mb-40">
                                <h4>Search</h4>
                            </div>
                            <form>
                                <input type="text" placeholder="Search">
                                <button><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                        <div class="sidebar-about mb-40">
                            <div class="sidebar-title mb-15">
                                <h4>About Us</h4>
                            </div>
                            <p>quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolors eos qui ratione voluptatem sad.</p>
                            <a href="#"><img src="assets/img/banner/banner-4.jpg" alt=""></a>
                            <div class="sidebar-social">
                                <ul>
                                    <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a class="youtube" href="#"><i class="fa fa-youtube-play"></i></a></li>
                                    <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a class="google" href="#"><i class="fa fa-google-plus"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="sidebar-recent-post mb-35">
                            <div class="sidebar-title mb-40">
                                <h4>Recent Post</h4>
                            </div>
                            <div class="recent-post-wrap">
                                <div class="single-recent-post">
                                    <div class="recent-post-img">
                                        <a href="#"><img src="assets/img/blog/recent-post-1.jpg" alt=""></a>
                                    </div>
                                    <div class="recent-post-content">
                                        <h5><a href="#">Blog title will be here.</a></h5>
                                        <span>Blog Category</span>
                                        <p>Datat non proident qui offici.hafw adec qart.</p>
                                    </div>
                                </div>
                                <div class="single-recent-post">
                                    <div class="recent-post-img">
                                        <a href="#"><img src="assets/img/blog/recent-post-2.jpg" alt=""></a>
                                    </div>
                                    <div class="recent-post-content">
                                        <h5><a href="#">Blog title will be here.</a></h5>
                                        <span>Blog Category</span>
                                        <p>Datat non proident qui offici.hafw adec qart.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="sidebar-category mb-40">
                            <div class="sidebar-title mb-40">
                                <h4>Course Category</h4>
                            </div>
                            <div class="category-list">
                                <ul>
                                    <li><a href="#">MBA <span>04</span></a></li>
                                    <li><a href="#">Graduate <span>08</span></a></li>
                                    <li><a href="#">Under Graduate <span>04</span></a></li>
                                    <li><a href="#">BBA <span>06</span></a></li>
                                    <li><a href="#">Engineering <span>04</span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="sidebar-recent-course-wrap mb-40">
                            <div class="sidebar-title mb-40">
                                <h4>Recent Courses</h4>
                            </div>
                            <div class="sidebar-recent-course">
                                <div class="sin-sidebar-recent-course">
                                    <div class="sidebar-recent-course-img">
                                        <a href="#"><img src="assets/img/blog/recent-post-1.jpg" alt=""></a>
                                    </div>
                                    <div class="sidebar-recent-course-content">
                                        <h4><a href="#">Course Title</a></h4>
                                        <ul>
                                            <li>Credits : 125</li>
                                            <li class="duration-color">Duration : 4yrs</li>
                                        </ul>
                                        <p>Datat non proident qui offici.hafw adec qart.</p>
                                    </div>
                                </div>
                                <div class="sin-sidebar-recent-course">
                                    <div class="sidebar-recent-course-img">
                                        <a href="#"><img src="assets/img/blog/recent-post-2.jpg" alt=""></a>
                                    </div>
                                    <div class="sidebar-recent-course-content">
                                        <h4><a href="#">Course Title</a></h4>
                                        <ul>
                                            <li>Credits : 125</li>
                                            <li class="duration-color">Duration : 4yrs</li>
                                        </ul>
                                        <p>Datat non proident qui offici.hafw adec qart.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="sidebar-tag-wrap">
                            <div class="sidebar-title mb-40">
                                <h4>Tag</h4>
                            </div>
                            <div class="sidebar-tag">
                                <ul>
                                    <li><a href="#">Loremsite</a></li>
                                    <li><a href="#">Loreipsum</a></li>
                                    <li><a href="#">Dolar</a></li>
                                    <li><a href="#">Site ament dollar</a></li>
                                    <li><a href="#">Loremsite</a></li>
                                    <li><a href="#">Dummy Text</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!------------------------ Related ----------------->
    <div class="brand-logo-area pt-45 pb-130">
        <div class="container">
            <div class="brand-logo-active owl-carousel">
                <div class="single-brand-logo">
                    <a href="#"><img src="assets/img/brand-logo/1.png" alt=""></a>
                </div>
                <div class="single-brand-logo">
                    <a href="#"><img src="assets/img/brand-logo/2.png" alt=""></a>
                </div>
                <div class="single-brand-logo">
                    <a href="#"><img src="assets/img/brand-logo/3.png" alt=""></a>
                </div>
                <div class="single-brand-logo">
                    <a href="#"><img src="assets/img/brand-logo/4.png" alt=""></a>
                </div>
                <div class="single-brand-logo">
                    <a href="#"><img src="assets/img/brand-logo/5.png" alt=""></a>
                </div>
                <div class="single-brand-logo">
                    <a href="#"><img src="assets/img/brand-logo/6.png" alt=""></a>
                </div>
                <div class="single-brand-logo">
                    <a href="#"><img src="assets/img/brand-logo/2.png" alt=""></a>
                </div>
            </div>
        </div>
    </div>--}}

    @include('layouts.footer')
@endsection
