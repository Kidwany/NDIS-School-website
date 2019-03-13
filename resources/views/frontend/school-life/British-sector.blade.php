@extends('layouts.layouts')
@section('title', 'British sector')
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
        <div class="breadcrumb-top default-overlay bg-img pt-100 pb-95"
             style="background-image:url({{asset('website/img/bg/academics_bg.jpg')}}); object-position: top">
            <div class="container">
                <h2>British Curriculum</h2>
                <p></p>
            </div>
        </div>
        <div class="breadcrumb-bottom">
            <div class="container">
                <ul>
                    <li><a href="#">Home</a> <span><i class="fa fa-angle-double-right"></i> British Curriculum</span>
                    </li>
                </ul>
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
                            <h2><span>Primary </span></h2>
                            <p class="aims">The Primary section of the school is made up of Foundation stage and Key
                                stages 1 and 2. On entry to the school, we always seek to place children in an age
                                relevant year group.


                            </p>
                            <div class="limiter">
                                <div class="container-table100">
                                    <div class="wrap-table100">
                                        <div class="table100 ver5 m-b-110">
                                            <div class="table100-head">
                                                <table>
                                                    <thead>
                                                    <tr class="row100 head">
                                                        <th class="cell100 column1">Year</th>
                                                        <th class="cell100 column2">Age on 1st october</th>
                                                        <th class="cell100 column3">Stage</th>
                                                    </tr>
                                                    </thead>
                                                </table>
                                            </div>

                                            <div class="table100-body js-pscroll">
                                                <table>
                                                    <tbody>
                                                    <tr class="row100 body">
                                                        <td class="cell100 column1">Year 1</td>
                                                        <td class="cell100 column2">5.6</td>
                                                        <td class="cell100 column3">key Stage 1</td>
                                                    </tr>
                                                    <tr class="row100 body">
                                                        <td class="cell100 column1">Year 2</td>
                                                        <td class="cell100 column2">6.6</td>
                                                        <td class="cell100 column3">key Stage 1</td>
                                                    </tr>
                                                    <tr class="row100 body">
                                                        <td class="cell100 column1">Year 3</td>
                                                        <td class="cell100 column2">7.6</td>
                                                        <td class="cell100 column3">key Stage 2</td>
                                                    </tr>
                                                    <tr class="row100 body">
                                                        <td class="cell100 column1">Year 4</td>
                                                        <td class="cell100 column2">8.6</td>
                                                        <td class="cell100 column3">key Stage 2</td>
                                                    </tr>
                                                    <tr class="row100 body">
                                                        <td class="cell100 column1">Year 5</td>
                                                        <td class="cell100 column2">9.6</td>
                                                        <td class="cell100 column3">key Stage 2</td>
                                                    </tr>
                                                    <tr class="row100 body">
                                                        <td class="cell100 column1">Year 6</td>
                                                        <td class="cell100 column2">10.6</td>
                                                        <td class="cell100 column3">key Stage 2</td>
                                                    </tr>


                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>


            </div>

        </div>
    </div>



    <!------ Classroom displays ------>
    <div class="container">

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
                <dt id="stage1"><a name="stage1">Key Stage 1 & 2 (Year 1 - 6)</a><i class="plus-icon"></i></dt>
                <dd id="stage1d">
                    <div class="content">
                        <p>Our curriculum consists of the English National Curriculum complemented by a strong pastoral
                            programme further supported by a wide range of extracurricular activities. Our curriculum is
                            challenging, creative and constantly reviewed for relevance, breadth and effect. We
                            understand that children learn best by doing, exploring and being appropriately challenged,
                            whilst feeling safe, valued and part of a lively community.</p>
                        <P>The broad curriculum we offer includes art, design, languages, science, humanities and
                            personal, social and health education. We have an emphasis on knowledge, skills and cultural
                            understanding. Whilst we give a strict prominence to our core subjects of English and
                            Mathematics, we also use a ‘Creative Curriculum’ approach to the other subjects. A Creative
                            Curriculum involves creative teaching of lessons, a wide variety of learning approaches and
                            a creative output of ideas from the children.</p>
                        <p> Students work within vibrant classrooms organised around corridors that house the year
                            group. This enables activities to be organised within classes but also across year groups.
                            This often means that the curriculum is organised under the umbrella of the House
                            activities.</p>
                        <p>In the Primary, the children are grouped within the class for different purposes either in
                            ability groups or mixed ability groups depending on the objectives of each particular
                            lesson. This ensures that learning opportunities are optimised to meet a variety of
                            students’ needs.</p>
                        <p> Primary students at NDIS are encouraged to become active learners, able to take
                            responsibility for their lives, and to become leaders in their own way. Enrolling your
                            children at NDIS is not only to prepare them for secondary school and university, but to
                            prepare them for life, as we develop their dispositions and aptitudes for a rapidly changing
                            world.</p>
                        <p> Our teachers are fully qualified to British standards, receive ongoing training and are
                            encouraged to model learning themselves. Recent initiatives to enhance our work have
                            included Assessment for Learning, Attitudes to Learning, our Student Leadership programme
                            and the development of our Virtual Learning Environment.</p>
                        <p> One of the features of NDIS is the professionalism and availability of staff. Primary
                            teachers meet parents informally after school every day of the year and most pastoral and
                            academic issues are dealt with promptly this way.</p>
                        <p>The Teachers are supported by a wide variety of support staff. We have teams of teaching
                            assistants in every year, learning support assistants and specialist staff such as the
                            librarians and IT support team. All work towards the same goal of educating the children at
                            NDIS.</p>
                        <p> The Primary School provides a vibrant curriculum, supported by highly qualified staff
                            members all working to the mission of providing a superb foundation for secondary and
                            further learning but even more so, shaping your child for their future lives of success.</p>

                    </div>
                </dd>


            </dl>
        </div>

    </div>
    <!------ Curriculum Section ------>
    <div class="about-us pt-50 pb-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="about-content">
                        <div class="section-title  mb-30">
                            <h2><span>The Senior Curriculum </span></h2>
                            <p>The Senior School gives the student a supportive, yet challenging learning
                                environment. A highly qualified and professional staff supports students in acquiring
                                life-long skills and prepares for the internationally recognised IGCSE and ‘A’ level
                                programmes through exciting, application based classroom teaching and learning.</p>
                            <p>NDIS is well prepared to cater for the academic and social needs of internationally
                                mobile students and encourages all students to constantly challenge themselves. Our
                                teachers nurture students who are intellectually curious, creative, respectful, caring
                                and discerning young adults, conscious of their responsibility to the community and
                                their environment. Parents are encouraged to work in partnership with the school and
                                support it in its mission of continual improvement.</p>
                            <p>The Senior School Curriculum (11-18 years of age) is organised to ensure that all
                                students receive a broad, balanced and clearly articulated learning entitlement, which
                                is coherent within each Key Stage, as well as being progressive and continuous in
                                nature, building upon the foundations laid during the Primary school.</p><br>
                            The Senior School is organised through three key stages:


                            <div class="limiter">
                                <div class="container-table100">
                                    <div class="wrap-table100">
                                        <div class="table100 ver5 m-b-110">
                                            <div class="table100-head">
                                                <table>
                                                    <thead>
                                                    <tr class="row100 head">
                                                        <th class="cell100 column1">Year</th>
                                                        <th class="cell100 column2">Age on 1st october</th>
                                                        <th class="cell100 column3">Stage</th>
                                                    </tr>
                                                    </thead>
                                                </table>
                                            </div>

                                            <div class="table100-body js-pscroll">
                                                <table>
                                                    <tbody>
                                                    <tr class="row100 body">
                                                        <td class="cell100 column1">Year 7</td>
                                                        <td class="cell100 column2">11.6</td>
                                                        <td class="cell100 column3">key Stage 3</td>
                                                    </tr>
                                                    <tr class="row100 body">
                                                        <td class="cell100 column1">Year 8</td>
                                                        <td class="cell100 column2">12.6</td>
                                                        <td class="cell100 column3">key Stage 3</td>
                                                    </tr>
                                                    <tr class="row100 body">
                                                        <td class="cell100 column1">Year 9</td>
                                                        <td class="cell100 column2">13.6</td>
                                                        <td class="cell100 column3">key Stage 3</td>
                                                    </tr>
                                                    <tr class="row100 body">
                                                        <td class="cell100 column1">Year 10</td>
                                                        <td class="cell100 column2">14.6</td>
                                                        <td class="cell100 column3">key Stage 4</td>
                                                    </tr>
                                                    <tr class="row100 body">
                                                        <td class="cell100 column1">Year 11</td>
                                                        <td class="cell100 column2">15.6</td>
                                                        <td class="cell100 column3">key Stage 4</td>
                                                    </tr>
                                                    <tr class="row100 body">
                                                        <td class="cell100 column1">Year 12</td>
                                                        <td class="cell100 column2">16.6</td>
                                                        <td class="cell100 column3">key Stage 5(also called the Sixth
                                                            Form)
                                                        </td>
                                                    </tr>


                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p>
                                The Senior School provides a progressive, student-led learning environment where each
                                student has the opportunity to discover and develop their unique identity, talents and
                                interests. Our committed teachers ensure that every student is given the guidance and
                                encouragement to achieve to their very best of their ability, both inside and outside
                                the classroom.</p>
                            <p>In the Senior School, we strive to create a culture where curiosity is nurtured and
                                where student success is driven by a sense of genuine engagement with learning. It is
                                important to us that our students have a sense of humility through exposure to a
                                diversity of human experience leading them to want to make a difference, to act
                                creatively and to think critically. We aim for every individual to live our reach motto
                                and to be respected, known and cared for within our community.


                            </p>
                        </div>

                    </div>
                </div>


            </div>

        </div>
    </div>

    <!------ Classroom displays ------>
    <div class="container">

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


                <!------------------------ Foundation Stage ----------------->
                <dt id="stage3"><a name="stage3">Key Stage 3 (Year 7 - 9)</a> <i class="plus-icon"></i></dt>
                <dd id="stage3d">
                    <div class="content">
                        <p>At NDIS, we have a three-year (Year 7, 8 and 9) KS3 curriculum which is broad and balanced in
                            offering all students the opportunity to build their skills and knowledge in all of the
                            following subjects: Art, Drama, Design & Technology (DT), English, Geography, History,
                            Information and Communication Technology (ICT), Maths, Languages, Music, Physical Education
                            (PE), Science and Personal Health and Social Education </p>
                    </div>
                </dd>

                <!------------------------ Documents required for Year 1/ Grade 1  ----------------->
                <dt id="stage4"><a name="stage4">Key Stage 4 (Year 10-11)</a><i class="plus-icon"></i></dt>
                <dd id="stage4d">
                    <div class="content">
                        <p>The curriculum at Key Stage 4 is a two year course of study culminating in external
                            examinations (IGCSE set by Cambridge Examinations 9CIE, London EDEXEL and AQA) Boards.</p>
                        <p>These examinations allow for a range of achievements from either A* to G or 9-1, although we
                            only considers grades from A* to C or 9-4 as passes. The courses are assessed by external
                            examinations and coursework. The core curriculum at Key Stage 4 comprises the following
                            subjects: Mathematics, English Literature, English Language, the Sciences, Physical
                            Education (non-examined), Personal, Social and Health Education (PSHE).</p>
                        <p> Students then select four optional subjects from the following: Spanish, French, Arabic
                            (Native and Non-Native), Art, Drama, Music, Physical Education (examined), Food Technology,
                            Resistant Materials, Geography, History, Economics, Business Studies and ICT. We encourage
                            all students must select a Language, a Humanities subject, and a more practical subject from
                            the options.
                        </p>
                    </div>
                </dd>


                <!------------------------ Knowledge and understanding of the world.  ----------------->
                <dt id="stage5"><a name="stage5">Key Stage 5 (Year 12)</a><i class="plus-icon"></i></dt>
                <dd id="stage5d">
                    <div class="content">
                        <p>
                            Key Stage 5 offers students the opportunity to take their studies to A-level as part of a
                            lively and enthusiastic academic community. Students who have demonstrated at GCSE that they
                            have the potential for further study are able to choose from sixteen subjects (subject to
                            demand, staffing, timetabling and individual GCSE targets).</p>
                        <p>In Year 12, our students study four or five subjects at A/S level, and usually three but
                            sometime four to A-level in Year 13. The majority of our students take up places in Higher
                            Education, usually to some of the world’s top university. Part of the PSHE programme in the
                            Sixth Form (called Futures) is devoted to careers advice and helping students as individuals
                            select appropriate Higher Education courses.</p>
                        <p>Currently the NDIS Sixth Form offers a range of subjects at A Level, a British qualification
                            which is internationally recognised as being highly rigorous and desirable for entry into
                            universities all around the world. These are a natural continuation from GCSE / IGCSE exams
                            and follow a two year programme.

                        </p>
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
    <!------ Curriculum Section ------>
    <div class="about-us pt-50 pb-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="about-content">
                        <div class="section-title section-title-green mb-30">
                            <h3><span>MOE Civil Subjects: </span></h3>
                            <p class="aims">Ministry exams are administered in Arabic, religion and Arabic social
                                studies.


                            </p>


                        </div>
                        <div class="section-title section-title-green mb-30">
                            <h3><span>Second Language : </span></h3>
                            <p class="aims">At NDIS we have 2 choices for the second language:
                            <h4>French</h4>
                            It’s available for all grades and years
                            <h4>German</h4>
                            It’s available for all grades and years


                            </p>
                        </div>

                    </div>
                </div>


            </div>

        </div>
    </div>
    <script type="text/javascript">
        function opencol(ele) {

            var active = ele;

            document.getElementById(active.slice(1, active.length)).className = "is-open";
            document.getElementById(active.slice(1, active.length) + "d").style.height = "auto";
            document.getElementById("headerbottom").style.position = "initial";
        }

        var active = window.location.hash;
        document.getElementById(active.slice(1, active.length)).className = "is-open";
        document.getElementById(active.slice(1, active.length) + "d").style.height = "auto";
        document.getElementById("headerbottom").style.position = "initial";
        //document.getElementById(active.slice(1,active.length)).style.marginTop ="200px";
    </script>


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
