@extends('layouts.layouts')
@section('title', 'How To Apply')
@section('applyStepper')
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('website/css/layouts/stepper.css')}}">
    <link rel="stylesheet" href="{{asset('website/css/libs/animate.css')}}">
    <link rel="stylesheet" href="{{asset('website/css/libs/table/select2.min.css')}}">
    <link rel="stylesheet" href="{{asset('website/css/libs/table/perfect-scrollbar.css')}}">
    <link rel="stylesheet" href="{{asset('website/css/libs/table/util.css')}}">
    <link rel="stylesheet" href="{{asset('website/css/libs/table/main.css')}}">
@endsection

@section('applyStepperScript')
    <script src="{{asset('website/js/stepper/jquery.steps.js')}}"></script>
    <script src="{{asset('website/js/table/select2.min.js')}}"></script>
    <script src="{{asset('website/js/table/perfect-scrollbar.min.js')}}"></script>
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


                {{--<div class="col-lg-6 col-md-6">
                    <div class="about-img default-overlay">
                        <img src="{{asset('website/img/academics/aims.jpg')}}" alt="">
                        --}}{{--<a class="video-btn video-popup" href="https://www.youtube.com/watch?v=sv5hK4crIRc">
                            <img class="animated" src="{{asset('website/img')}}/icon-img/video.png" alt="">
                        </a>--}}{{--
                    </div>
                </div>--}}
            </div>
            <div class="description-review-area pb-50 pt-40">
                <div class="container">
                    <div class="description-review-wrapper">
                        <div class="description-review-topbar nav">
                            <a class="active text-center" data-toggle="tab" href="#des-details1" style="width: 50%">Prime Areas </a>
                            <a data-toggle="tab" href="#des-details2" class="text-center" style="width: 50%">Specific areas </a>
                            {{--
                                                            <a data-toggle="tab" href="#des-details3">Reviews</a>
                            --}}
                        </div>
                        <div class="tab-content description-review-bottom">
                            <!--------------- Prime Section --------------->
                            <div id="des-details1" class="tab-pane active">
                                <div class="product-description-wrapper">
                                    <div class="row">

                                        <div class="event-active owl-carousel nav-style-1">
                                            <!--------------- Personal, Social and Emotional Development . --------------->
                                            <div class="single-event event-white-bg">
                                                <div class="event-img">
                                                    <a href="event-details.html"><img src="{{asset('website/img/academics/social_development.jpg')}}" alt=""></a>
                                                    {{--<div class="event-date-wrap">
                                                        <span class="event-date">1st</span>
                                                        <span>Dec</span>
                                                    </div>--}}
                                                </div>

                                                <div class="event-content">
                                                    <h3 style="margin-bottom: 5px"><a href="#">Personal, Social and Emotional Development .</a></h3>
                                                    <p style="margin-bottom: 5px;">Making relationships.</p>
                                                    <p style="margin-bottom: 5px;">Self-confidence and self-awareness.</p>
                                                    <p style="margin-bottom: 5px;">Managing feelings and behaviour.</p>
                                                    {{--<div class="event-meta-wrap">
                                                        <div class="event-meta">
                                                            <i class="fa fa-location-arrow"></i>
                                                            <span>Mascot Plaza ,Uttara</span>
                                                        </div>
                                                        <div class="event-meta">
                                                            <i class="fa fa-clock-o"></i>
                                                            <span>11:00 am</span>
                                                        </div>
                                                    </div>--}}
                                                </div>
                                            </div>
                                            <!--------------- Communication and Language . . --------------->
                                            <div class="single-event event-white-bg">
                                                <div class="event-img">
                                                    <a href="event-details.html"><img src="{{asset('website/img/academics/communication.jpg')}}" alt=""></a>
                                                    {{--<div class="event-date-wrap">
                                                        <span class="event-date">1st</span>
                                                        <span>Dec</span>
                                                    </div>--}}
                                                </div>

                                                <div class="event-content">
                                                    <h3 style="margin-bottom: 5px"><a href="#">Communication and Language.</a></h3>
                                                    <p style="margin-bottom: 5px;">Listening and attention.</p>
                                                    <p style="margin-bottom: 5px;">Understanding.</p>
                                                    <p style="margin-bottom: 5px;">Speaking.</p>
                                                    {{--<div class="event-meta-wrap">
                                                        <div class="event-meta">
                                                            <i class="fa fa-location-arrow"></i>
                                                            <span>Mascot Plaza ,Uttara</span>
                                                        </div>
                                                        <div class="event-meta">
                                                            <i class="fa fa-clock-o"></i>
                                                            <span>11:00 am</span>
                                                        </div>
                                                    </div>--}}
                                                </div>
                                            </div>
                                            <!--------------- Physical . . --------------->
                                            <div class="single-event event-white-bg">
                                                <div class="event-img">
                                                    <a href="event-details.html"><img src="{{asset('website/img/academics/physical.jpg')}}" alt=""></a>
                                                    {{--<div class="event-date-wrap">
                                                        <span class="event-date">1st</span>
                                                        <span>Dec</span>
                                                    </div>--}}
                                                </div>

                                                <div class="event-content">
                                                    <h3 style="margin-bottom: 5px"><a href="#">Physical Development.</a></h3>
                                                    <p style="margin-bottom: 5px;">Moving and handling.</p>
                                                    <p style="margin-bottom: 5px;">Health and self-care.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--------------- Specific Section --------------->
                            <div id="des-details2" class="tab-pane ">
                                <div class="product-anotherinfo-wrapper">
                                    <div class="event-active owl-carousel nav-style-1">
                                        <!--------------- Literacy --------------->
                                        <div class="single-event event-white-bg">
                                            <div class="event-img">
                                                <a href="event-details.html"><img src="{{asset('website/img/academics/learning.png')}}" alt=""></a>
                                                {{--<div class="event-date-wrap">
                                                    <span class="event-date">1st</span>
                                                    <span>Dec</span>
                                                </div>--}}
                                            </div>

                                            <div class="event-content">
                                                <h3 style="margin-bottom: 5px"><a href="#">Literacy</a></h3>
                                                <p style="margin-bottom: 5px;">Reading.</p>
                                                <p style="margin-bottom: 5px;">Writing.</p>
                                                {{--<div class="event-meta-wrap">
                                                    <div class="event-meta">
                                                        <i class="fa fa-location-arrow"></i>
                                                        <span>Mascot Plaza ,Uttara</span>
                                                    </div>
                                                    <div class="event-meta">
                                                        <i class="fa fa-clock-o"></i>
                                                        <span>11:00 am</span>
                                                    </div>
                                                </div>--}}
                                            </div>
                                        </div>
                                        <!--------------- Mathematics --------------->
                                        <div class="single-event event-white-bg">
                                            <div class="event-img">
                                                <a href="event-details.html"><img src="{{asset('website/img/academics/math.jpg')}}" alt=""></a>
                                                {{--<div class="event-date-wrap">
                                                    <span class="event-date">1st</span>
                                                    <span>Dec</span>
                                                </div>--}}
                                            </div>

                                            <div class="event-content">
                                                <h3 style="margin-bottom: 5px"><a href="#">Mathematics.</a></h3>
                                                <p style="margin-bottom: 5px;">Numbers.</p>
                                                <p style="margin-bottom: 5px;">Shape, space and measure.</p>
                                                {{--<div class="event-meta-wrap">
                                                    <div class="event-meta">
                                                        <i class="fa fa-location-arrow"></i>
                                                        <span>Mascot Plaza ,Uttara</span>
                                                    </div>
                                                    <div class="event-meta">
                                                        <i class="fa fa-clock-o"></i>
                                                        <span>11:00 am</span>
                                                    </div>
                                                </div>--}}
                                            </div>
                                        </div>
                                        <!--------------- Understanding the World . . --------------->
                                        <div class="single-event event-white-bg">
                                            <div class="event-img">
                                                <a href="event-details.html"><img src="{{asset('website/img/academics/world.jpg')}}" alt=""></a>
                                                {{--<div class="event-date-wrap">
                                                    <span class="event-date">1st</span>
                                                    <span>Dec</span>
                                                </div>--}}
                                            </div>

                                            <div class="event-content">
                                                <h3 style="margin-bottom: 5px"><a href="#">Understanding the World.</a></h3>
                                                <p style="margin-bottom: 5px;">People and communities.</p>
                                                <p style="margin-bottom: 5px;">The world.</p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            {{--<div id="des-details3" class="tab-pane">
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
                            </div>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!------ Character Building Section ------>
    <div class="container">
        <div class="section-title section-title-green mb-30">
            <h2>Character <span>Building</span></h2>
            <p class="aims">Building character starts at an early age. It is believed that character building is at its most effective degree during time spent in a kindergarten. We introduce a new lesson every and each two weeks. All the topics are designed to help them enjoy a healthy life style. </p>

        </div>
        <div class="wrapper">
            <div class="inner">
                <div id="wizard">
                    <!-- Table manners 1 -->
                    <h4>Table manners</h4>
                    <section>
                        <p>
                            - Come to the table with hands and face clean.
                            <br>
                            - Never, ever chew with your mouth open.
                            <br>
                            - Never stuff your mouth.
                            <br>
                            - Put the napkin on the chair, not the table.
                            <br>
                            - Always push your chair in when finished.
                            <br>
                            - Always pick up your plate and say thank you.
                        </p>
                        {{--<button class="forward">Next Step
                            <i class="zmdi zmdi-long-arrow-right"></i>
                        </button>--}}
                    </section>

                    <!-- Winter Tips & Etiquette: 2 -->
                    <h4>Winter Tips & Etiquette</h4>
                    <section class="section-style">
                        <div class="form-wrapper">
                            <p>
                                - Dress warmly; jacket, gloves, wool hat and wool neck scarf.
                                <br>
                                - Hot drinks will keep you warm.
                                <br>
                                - Eat food rich in vitamin c (orange, guava, strawberry, kiwi, yellow pepper, broccoli and tangerine).
                                <br>
                                - Always keep tissues in your pocket.
                                <br>
                                - Stay at home for two days if you have a cold.
                                <br>
                                - If you don’t have a tissue, sneeze in your elbow.
                            </p>
                        </div>
                    </section>

                    <!-- Magic words 3 -->
                    <h4>Magic Words</h4>
                    <section>
                        <p>
                            - When to say “please, pardon me, thank you and sorry.
                            - The  importance of using them as they make us kind, happy and friendly.
                        </p>

                        {{--<button class="forward" style="width: 195px; margin-top: 44px;">Next Step
                            <i class="zmdi zmdi-long-arrow-right"></i>
                        </button>--}}
                    </section>

                    <!-- Activities 4 -->
                    <h4>Activities</h4>
                    <section class="section-style">
                        <div class="pay-wrapper">
                            <p>
                                Every activity in school life plays a significant role in the
                                development of students. Co-curricular activities are an essential
                                part of school life and help in enhance learning process of students at school.
                                At NDIS Foundation Stage we provide many activities.
                            </p>

                            <p>
                                <span class="font-weight-bold">II. Physical Education</span><br>
                                We offer a gymnastics class weekly. At the same time students learn the basic skills of football, basketball and volleyball.
                            </p>

                            <p>
                                <span class="font-weight-bold">III.	Library</span><br>
                                We believe that reading is an essential part of our educational and social aims. However, it is not enough for children to learn to read. It is important that they enjoy their personal and shared reading experience.
                                We discuss a new topic with the students on a monthly basis to give our children the chance to discover a new thing. We start with “Growth mind-set vs. fixed mind-set” statements. Followed by “Young Arab people who changed the world” ex. Nour El Shrebiny and Mahmoud weal. All our Topics lead the children to re-discover their abilities, to set goals and to open their minds to life.
                                Also, we are following “I am a reader programme” as an extra-curricular activity. Every kid brings their favorites books to share with their friends every week. With parents’ support, kids read the book and rate it. It is an amazing experience for the kids to stick on the healthy habit of reading. Also it is a good chance to have a quality time with your child.
                            </p>

                            <p>
                                <span class="font-weight-bold">IV. Art</span><br>
                                Every child is an artist by nature. By inspiring and letting our children create, we can aid into the positive direction of their intellectual, physical and social development.
                            </p>

                            <p>
                                <span class="font-weight-bold">V. ICT</span><br>
                                As we do believe that technology is an essential part of the modern education, hence we take a very good care of our ICT sessions, as technology encourages our children to explore the kind of data they might need during their learning process.
                            </p>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>

    <!------ Typically Day Table ------>
    <div class="container">
        <div class="section-title section-title-green mb-30">
            <h2>A Typical day in the  <span>Foundation Stage</span></h2>
        </div>

        <div class="limiter">
            <div class="container-table100">
                <div class="wrap-table100">
                    <div class="table100 ver5 m-b-110">
                        <div class="table100-head">
                            <table>
                                <thead>
                                    <tr class="row100 head">
                                        <th class="cell100 column1">From</th>
                                        <th class="cell100 column2">To</th>
                                        <th class="cell100 column3">Activity</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>

                        <div class="table100-body js-pscroll">
                            <table>
                                <tbody>
                                    <tr class="row100 body">
                                        <td class="cell100 column1">8:00 AM</td>
                                        <td class="cell100 column2">8:15 AM</td>
                                        <td class="cell100 column3">Self-registration and morning snack</td>
                                    </tr>

                                    <tr class="row100 body">
                                        <td class="cell100 column1">08:15 AM</td>
                                        <td class="cell100 column2">08:30 AM</td>
                                        <td class="cell100 column3">Outdoor Morning Zumba</td>
                                    </tr>

                                    <tr class="row100 body">
                                        <td class="cell100 column1">08:30 AM</td>
                                        <td class="cell100 column2">09:20 AM</td>
                                        <td class="cell100 column3">Circle time and repeat the basics</td>
                                    </tr>

                                    <tr class="row100 body">
                                        <td class="cell100 column1">09:20 AM</td>
                                        <td class="cell100 column2">09:30 AM</td>
                                        <td class="cell100 column3">Stretching exercises and water drinking </td>
                                    </tr>

                                    <tr class="row100 body">
                                        <td class="cell100 column1">09:30 AM</td>
                                        <td class="cell100 column2">10:10 AM</td>
                                        <td class="cell100 column3">Literacy class</td>
                                    </tr>

                                    <tr class="row100 body">
                                        <td class="cell100 column1">10:10 AM</td>
                                        <td class="cell100 column2">10:30 AM</td>
                                        <td class="cell100 column3">Breakfast time</td>
                                    </tr>

                                    <tr class="row100 body">
                                        <td class="cell100 column1">10:30 AM</td>
                                        <td class="cell100 column2">10:45 AM</td>
                                        <td class="cell100 column3">Playground time</td>
                                    </tr>

                                    <tr class="row100 body">
                                        <td class="cell100 column1">10:45 AM</td>
                                        <td class="cell100 column2">10:55 AM</td>
                                        <td class="cell100 column3">Wash hands and brush teeth</td>
                                    </tr>

                                    <tr class="row100 body">
                                        <td class="cell100 column1">11:00 AM</td>
                                        <td class="cell100 column2">12:20 PM</td>
                                        <td class="cell100 column3">Numeracy and KUW</td>
                                    </tr>

                                    <tr class="row100 body">
                                        <td class="cell100 column1">12:20 PM</td>
                                        <td class="cell100 column2">12:40 PM</td>
                                        <td class="cell100 column3">Lunch time</td>
                                    </tr>


                                    <tr class="row100 body">
                                        <td class="cell100 column1">12:40 PM</td>
                                        <td class="cell100 column2">01:00 PM</td>
                                        <td class="cell100 column3">Role play area time</td>
                                    </tr>


                                    <tr class="row100 body">
                                        <td class="cell100 column1">01:00 PM</td>
                                        <td class="cell100 column2">01:45 PM</td>
                                        <td class="cell100 column3">Activity class.</td>
                                    </tr>


                                    <tr class="row100 body">
                                        <td class="cell100 column1">01:45 PM</td>
                                        <td class="cell100 column2">02:30 PM</td>
                                        <td class="cell100 column3">Rehearsals for the ceremony party.</td>
                                    </tr>


                                    <tr class="row100 body">
                                        <td class="cell100 column1">02:30 PM</td>
                                        <td class="cell100 column2">02:40 PM</td>
                                        <td class="cell100 column3">Tidy up and Golden time.</td>
                                    </tr>


                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!------ Classroom displays ------>
    <div class="container">
        <div class="section-title section-title-green mb-30">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <h2>Classroom <span>Displays</span></h2>
                    <p class="aims">
                        The classroom has to be a rich, stimulating learning environment;
                        where children make relationships, grow in confidence, explore,
                        develop skills and concentration: Home corner, role play area,
                        water and sand tray, modelling table, investigation area, math area,
                        writing area, reading corner,
                        messy area, art area and construction blocks and puzzle area.
                    </p>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="about-img default-overlay">
                        <img src="{{asset('website/img/academics/class.jpg')}}" alt="">
                        {{--<a class="video-btn video-popup" href="https://www.youtube.com/watch?v=sv5hK4crIRc">
                            <img class="animated" src="{{asset('website/img')}}/icon-img/video.png" alt="">
                        </a>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!------ Outdoor Facilities displays ------>
    <div class="container">
        <div class="section-title section-title-green mb-30 mt-100">
            <h2>Outdoor <span>Facilities</span></h2>
            <p class="aims">
                Our facility offers all that a young child needs to explore and learn. We have four outdoor areas for children.
            </p>
            <p class="aims">
                The first is a fenced-in space where children can enjoy a large, well-equipped, playground.
            </p>
            <p class="aims">
                The second is a mini zoo that has some animal’s species such as; monkeys, pelicans, ostriches, peacocks, tortoise and birds.
            </p>
            <p class="aims">
                The third is a sand area where children learn through play. While playing with
                sand you give children the freedom to explore, create, and ask questions. Playing
                with sand develops the fine motor skills and hand & eye coordination.
                Also it develops the sense of touch through feelings and manipulating objects.
            </p>
            <p class="aims">
                The fourth is a role play area that includes kitchen, hospital, police station, laundry, super market and
                a restaurant. Pretend play builds confidence, creativity communication, physical development and problem solving. Along with being a fun activity, it also allows children to get into character and act out real life roles or fictional performances.
            </p>
        </div>
    </div>



    <!------ Classroom displays ------>
    <div class="container">
        <div class="col-lg-6 col-md-6">

        </div>
        <div class="section-title section-title-green mb-30 mt-100">
            <h2>How to help your <span>Child </span>at home ?</h2>
            <p class="aims">
                You, as parents and careers, are your child’s first teacher.
                We will help you to make everyday a learning day! We have prepared a
                number of valuable suggestions and some useful links which we hope to help you and your child. .
            </p>
        </div>



        <div class="accordion-panel">
            <div class="buttons-wrapper">
                <i class="plus-icon"></i>
                <div class="open-btn">
                    Open all
                </div>
                <div class="close-btn hidden">
                    Close all
                </div>
            </div>

            <dl class="accordion">
                <!------------------------ Pre-F ----------------->
                <dt>General Activities<i class="plus-icon"></i></dt>
                <dd>
                    <div class="content">
                        <ul>
                            <li>- Talk with your child about his\her day in school..</li>
                            <li>- Talk with your child about the new Topics covered in school.</li>
                            <li>- Label all the items in his\her room.</li>
                            <li>- Let your child choose what he\she is going to wear.</li>
                            <li>- Take your child to the supermarket and let him\her count
                                objects or money and sort the five food groups.
                            </li>
                            <li>- Ask your child to tidy up his\her room after playing.</li>
                            <li>- Allow your child to help you in preparing simple snacks.</li>
                            <li>- Help your child to have a bedtime routine.</li>
                        </ul>
                    </div>
                </dd>

                <!------------------------ Foundation Stage ----------------->
                <dt>Literacy <i class="plus-icon"></i></dt>
                <dd>
                    <div class="content">
                        <ul>
                            <li>- Let your child listen and sing the jolly phonics songs and make the action.</li>
                            <li>- Help them to use their phonics knowledge to read CVC words.</li>
                            <li>- Read stories for them and discuss related morals.</li>
                        </ul>
                    </div>
                </dd>

                <!------------------------ Documents required for Year 1/ Grade 1  ----------------->
                <dt>Numeracy<i class="plus-icon"></i></dt>
                <dd>
                    <div class="content">
                        <ul>
                            <li>- Ask your child to count objects around.</li>
                            <li>- Help your child to recognize the shapes and colors around.</li>
                            <li>- Let your child count money in the supermarket.</li>
                        </ul>
                    </div>
                </dd>



                <!------------------------ Knowledge and understanding of the world.  ----------------->
                <dt>Knowledge and understanding of the world.<i class="plus-icon"></i></dt>
                <dd>
                    <div class="content">
                        <ul>
                            <li>- Talk with your child about the Topic that we are covering at school.</li>
                            <li>- Discuss with your child new Topics like animals, food, furniture, community helpers and plants.</li>
                            <li>- Take your child to the zoo, museums or the beach.</li>
                        </ul>
                    </div>
                </dd>


                <!------------------------ Expressive art and design.  ----------------->
                <dt>Expressive art and design.<i class="plus-icon"></i></dt>
                <dd>
                    <div class="content">
                        <ul>
                            <li>- Sing simple songs with your child.</li>
                            <li>- Encourage all his\her creative ideas. </li>
                            <li>- Provide new materials to work with.</li>
                            <li>- Use puppets to act out fairy tales stories.</li>
                        </ul>
                    </div>
                </dd>



                <!------------------------ Expressive art and design.  ----------------->
                <dt>Physical development.<i class="plus-icon"></i></dt>
                <dd>
                    <div class="content">
                        <ul>
                            <li>- Encourage your child to get dressed and undressed.</li>
                            <li>- Remind your child to brush his\her teeth twice a day. </li>
                            <li>- Keep your child’s hands and face clean before having his\her meal.</li>
                            <li>- Go to a park with your child and let him\her have fun riding a bike or scooter and playing ball games.</li>
                        </ul>
                    </div>
                </dd>
            </dl>
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
