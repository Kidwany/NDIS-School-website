@extends('layouts.layouts')
@section('title', 'Why British')
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
                <h2>Why a British Curriculum?</h2>
                <p>New Discovery International School offers a curriculum which is based on the National Curriculum of England.</p>
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



    <!------ Responsibilities ------>
    <div class="achievement-area pt-60 pb-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-title">

                        <h3 class="font-weight-bold" style="font-size: 30px;  margin-bottom: 20px">Key  <span style="color: #00a651">Characteristics </span></h3>
                        <p style="margin-bottom: 0; text-align: justify">
                            The National Curriculum of England (also commonly referred to as the “UK Curriculum”) is
                            a very structured curriculum that is designed to meet the needs of all students, stretching
                            brighter children and supporting those who need it through differentiated teaching and learning
                            activities. The curriculum extends and excites all students, whatever their interests or ability.
                            Through it, teachers are able to identify, celebrate and nurture the talents and intelligence of students.
                            British education is renowned for concerning itself with the development of the whole personality
                            . Learning is important, but not enough in itself. Young people need to develop their potential to
                            explore and discover the world around them, to think for themselves and form opinions, to relate
                            to others, to develop their bodies through sport and physical education, and to gain experience
                            in taking responsibility.
                            In the British education system, students are taught to learn by questioning, problem-solving and
                            creative thinking rather than by the mere retention of facts, hence giving them analytical and
                            creative thinking skills that they will need in the working world. A variety of teaching and
                            assessment methods designed to develop independent thought as well as a mastery of the subject
                            matter is used. Parents also want the wide range of extra-curricular activities that the British
                            education system provides.
                        </p>
                    </div>
                </div>



                <div class="col-lg-6">
                    <div class="section-title">

                        <h3 class="font-weight-bold" style="font-size: 30px;  margin-bottom: 20px">Overall  <span style="color: #00a651">Structure </span></h3>
                        <p style="margin-bottom: 0; text-align: justify">
                            The National Curriculum of England has a clearly defined series of academic and other objectives
                            at every level. The education system is divided into Foundation Stage (ages 3 to 5), primary
                            education (ages 5 to 11) and secondary education (ages 11 to 18) leading most typically to an A
                            Level qualification.
                            At the end of Key Stage 1, 2, 3, progress is examined via individual teacher assessment against
                            the National Curriculum Attainment Targets for all subjects.
                            NDIS students follow the General Certificate of Secondary Education (IGCSE) programme in Key Stage 4
                            – most of them taking the Cambridge Assessment International Education or Edexcel Examinations
                            Board exams. During the IGCSE programme, students typically take courses in the core subject
                            groups of mathematics, science, English language, English literature and modern foreign language,
                            but can choose other subjects from the available options. They are awarded certificates from the
                            examination boards for the subjects that they successfully complete. Students then take the A Level
                            exams at the end of Key Stage 5.

                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="container" style="width: 84%">
        <!--===================================Features Details ================================================-->
        <div class="row about-features d-flex flex-row justify-content-center mt-5 mb-50">

            <!------------Time Commitment ----------->
            <div class="col-md-3 col-sm-6">
                <div class="about-feature d-flex flex-column justify-content-between">
                    <div class="feature-img-container">
                        <img src="{{asset('website/img/about/learning.png')}}" style="width: 120px; margin-bottom: 30px">
                    </div>
                    <p class="mb-20" style="font-weight: 500; font-size: 16px">Learning For Tomorrow </p>
                    <p class="main-font-size dark-grey " style="text-align: justify">
                        We are all aware that we live in a rapidly changing world and that we are preparing
                        our students for life in a society where they may be working in jobs that do not currently
                        exist, employing technologies that have not yet been invented. Through the British curriculum
                        at NDIS we place significant emphasis on the development of personal learning and thinking skills
                        that will result in young people who are flexible and able to adapt to changing circumstances
                        without fear of inhibition, enabling and empowering them to meet the demands of 21st century life.
                    </p>
                </div>
            </div>

            <!------------Time Commitment ----------->
            <div class="col-md-3 col-sm-6">
                <div class="about-feature d-flex flex-column justify-content-between">
                    <div class="feature-img-container">
                        <img src="{{asset('website/img/about/personal.png')}}" style="width: 120px; margin-bottom: 30px">
                    </div>
                    <p class="mb-20" style="font-weight: 500; font-size: 16px">Personal Development </p>
                    <p class="main-font-size dark-grey " style="text-align: justify">
                        We understand that children of tomorrow are going to need very different personal
                        qualities and skills than their former generation. For this reason, children at the
                        NDIS learn in such a way that they develop the personal qualities of respect, striving
                        for excellence, accepting accountability, facing challenges and ensuring we maintain a
                        happy environment. The efforts toward achievement of these attributes and personal goals
                        are reflected in our reach motto and therefore embedded in our everyday learning.
                    </p>
                </div>
            </div>

            <!------------Time Commitment ----------->
            <div class="col-md-3 col-sm-6">
                <div class="about-feature d-flex flex-column justify-content-between">
                    <div class="feature-img-container">
                        <img src="{{asset('website/img/about/international.png')}}" style="width: 120px; margin-bottom: 30px">
                    </div>
                    <p class="mb-20" style="font-weight: 500; font-size: 16px">International Mindedness and Global Awareness </p>
                    <p class="main-font-size dark-grey " style="text-align: justify">
                        One of the most essential life skills is developing an understanding of, and a
                        respect for others. We embrace this concept through nurturing and fostering this
                        respect for one another within both in our immediate community and the world in
                        which we live. We encourage our children to identify similarities rather than
                        differences among cultures and to celebrate and respect other people’s beliefs,
                        opinions, and customs.
                    </p>
                </div>
            </div>

            <!------------Time Commitment ----------->
            <div class="col-md-3 col-sm-6">
                <div class="about-feature d-flex flex-column justify-content-between">
                    <div class="feature-img-container">
                        <img src="{{asset('website/img/about/thinking.png')}}" style="width: 120px; margin-bottom: 30px">
                    </div>
                    <p class="mb-20" style="font-weight: 500; font-size: 16px">Problem Solving and Thinking Skills </p>
                    <p class="main-font-size dark-grey " style="text-align: justify">
                        We place significant value on the development of problem solving and thinking
                        skills. We recognize that the process of reaching an outcome is as important
                        as the activity or content of a lesson. Our students learn to investigate and
                        hypothesize rather than just read about scientific facts. They learn how to research,
                        interpret and develop historical enquiry skills rather than merely learning to recite
                        dates. Children at NDIS are able to apply their mathematical skills and select strategies
                        rather than learning by rote.
                    </p>
                </div>
            </div>
        </div>
    </div>



    <!------ Responsibilities ------>
    <div class="achievement-area pt-60 pb-40">
        <div class="container">
            <div class="section-title">

                <h3 class="font-weight-bold" style="font-size: 30px;  margin-bottom: 20px">Information, Communication and Technology (ICT) <span style="color: #00a651">(ICT)</span></h3>
                <p style="margin-bottom: 0">
                    ICT covers a range of theoritical and practical topics which teach the children the increasing
                    importance of technology in our lives. Children are taught these skills in a well-resourced
                    laboratory applying these skills in their everyday learning on computers and interactive
                    whiteboards in each classroom.
                </p>
            </div>

            <img src="{{asset('website/img/about/british-table.png')}}" style="width: 100%; margin-top: 50px">
        </div>
    </div>


    @include('layouts.footer')
@endsection
