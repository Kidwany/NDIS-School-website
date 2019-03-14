@extends('layouts.layouts')
@section('title', 'British sector')
@section('customizedStyle')
    <!--begin::Page Vendors -->
    <!--end::Page Vendors -->
    <link href="{{asset('website/css/pages/about.css')}}" rel="stylesheet" type="text/css"/>
    <!--end::Base Styles -->
@endsection
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
                <h2>American Curriculum</h2>
                <p></p>
            </div>
        </div>
        <div class="breadcrumb-bottom">
            <div class="container">
                <ul>
                    <li><a href="#">Home</a> <span><i class="fa fa-angle-double-right"></i> American Curriculum</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!------ American Curruclume ------>
    <div class="achievement-area pt-60 pb-40" id="middle-school">
        <div class="container">
            <div class="section-title">
                <h3 class="font-weight-bold text-center" style="font-size: 40px;  margin-bottom: 60px">American    <span style="color: #00a651">Curriculum</span></h3>
                <p>
                    Academic programs at NDIS have always been given the highest priority by both the School's dedicated
                    teachers and the administration. In the Lower and Middle Schools, the Core Knowledge Sequence provides
                    the foundation for the curriculum, which ensures that all students in these divisions learn a coherent
                    and unified body of knowledge and academic skills.
                </p>
                <p>
                    Upper school students follow a challenging college-preparatory curriculum, with the option of pursuing
                    the courses in many subjects.
                </p>
            </div>
        </div>
    </div>


    <!------ Elementary Stage ------>
    <div class="achievement-area pt-60 pb-40" id="middle-school">
        <div class="container">
            <div class="section-title">
                <h3 class="font-weight-bold text-center" style="font-size: 40px;  margin-bottom: 60px">Elementary    <span style="color: #00a651">Stage</span></h3>
                <p>
                    NDIS Lower School is committed to educating the whole child, and the program focuses not only on the
                    academic, but also on the creative, moral, and physical development of children.
                </p>
                <p>
                    UThe curriculum is both traditional and innovative, and is supplemented by a variety of social and
                    cultural activities. NDIS endorses, through all its programs, an enthusiasm for life, for learning
                    and for individual growth within a purposeful community.
                </p>
            </div>
        </div>
    </div>

    <!------ Language Arts ------>
    <div class="achievement-area pt-60 pb-40">
        <div class="container">
            <div class="section-title">
                <h3 class="font-weight-bold" style="font-size: 25px;  margin-bottom: 20px">Language <span style="color: #00a651">Arts </span></h3>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-title">

                        <h3 class="font-weight-bold" style="font-size: 25px;  margin-bottom: 20px">Reading <span style="color: #00a651"> </span></h3>
                        <p style="margin-bottom: 0; text-align: justify" class="text-justify">
                            Students identify and explain plot-based relationships and begin to analyze narrative elements
                            of text. They continue to explore and understand the implied meaning of text as well as the impact
                            a character has on a story.
                        </p>
                    </div>
                </div>



                <div class="col-lg-6">
                    <div class="section-title">

                        <h3 class="font-weight-bold" style="font-size: 25px;  margin-bottom: 20px">Writing and  <span style="color: #00a651">Spelling </span></h3>
                        <p style="margin-bottom: 0; text-align: justify">
                            Students learn to create organized pieces of writing that support the topics with reasons,
                            facts, details, and other relevant information. Paragraphs are well formed and sequential,
                            and students are able to complete the writing process through to a publishable piece.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!------ Social Studies ------>
    <div class="achievement-area pt-60 pb-40">
        <div class="container">
            <div class="section-title">
                <h3 class="font-weight-bold" style="font-size: 25px;  margin-bottom: 20px">Social <span style="color: #00a651">Studies </span></h3>
            </div>
            <div class="section-title">

                <h3 class="font-weight-bold" style="font-size: 30px;  margin-bottom: 20px">The  <span style="color: #00a651">World</span></h3>
                <p>
                    •	World Geography (Spatial Sense; Mountains) <br>
                    •	Europe in Middle Ages <br>
                    •	The Spread of Islam and the Holy Wars <br>
                    •	Early and Medieval <br>
                    •	African Kingdoms <br>
                    •	China: Dynasties and Conquerors <br>
                </p>
            </div>
        </div>
    </div>


    <!------  Research Process------>
    <div class="achievement-area pt-60 pb-40">
        <div class="container">
            <div class="section-title">

                <h3 class="font-weight-bold" style="font-size: 30px;  margin-bottom: 20px">Research   <span style="color: #00a651">Process</span></h3>
                <p>
                    •	Demonstrate the use of topic-based guiding questions. <br>
                    •	Recognize a variety of research resources. <br>
                    •	Identify keywords and synonyms as effective search criteria. <br>
                    •	Practice note-taking methods. <br>
                    •	Practice paraphrasing and summarizing skills. <br>
                    •	Keep track of sources. <br>
                    •	Define plagiarism. <br>
                    •	List sources. <br>
                    •	Explore the elements of a research project. <br>
                    •	Revise for grammar and mechanics. <br>
                    •	Follow teacher-set research goals and deadlines. <br>
                    •	Maintain proper use of time and focus during the research process. <br>
                    •	Reflect on the research process and product. <br>
                    •	Differentiate between useful and non-useful information. <br>

                </p>
            </div>
        </div>
    </div>

    <!------ Middle School ------>
    <div class="achievement-area pt-60 pb-40" id="middle-school">
        <div class="container">
            <div class="section-title">
                <h3 class="font-weight-bold text-center" style="font-size: 40px;  margin-bottom: 60px">Middle School   <span style="color: #00a651">Curriculum</span></h3>
                <p>
                    The curriculum and the environment of the Middle School are designed to facilitate the academic,
                    aesthetic, physical, and social growth of students within a structured and caring framework.
                    Our goal is to teach students to question, to encourage students to consider alternatives to
                    stereotyped patterns of thinking, to pursue independent research on thought-provoking issues,
                    and to make rational judgments.
                </p>
                <p>
                    Academically, students are expected to master basic skills and content, to become more inquisitive
                    and analytical, to develop research and technology skills, and to organize and present what they
                    learn in verbal, written, and digital forms.
                </p>
                <p>
                    Socially, students are expected to become more tolerant and understanding of others, to gain greater
                    respect for themselves and for others, and to participate in the community.
                </p>

            </div>
        </div>
    </div>


    <!------ Middle School Grades ------>
    <div class="achievement-area pt-60 pb-40">
        <div class="container">
            <div class="description-review-area pb-50 pt-40">
                <div class="container">
                    <div class="description-review-wrapper">
                        <div class="description-review-topbar nav">
                            <a class="active text-center" data-toggle="tab" href="#grade6" style="width: 33.3%">Grade 6 </a>
                            <a data-toggle="tab" href="#grade7" class="text-center" style="width: 33.3%">Grade 7 </a>
                            <a data-toggle="tab" href="#grade8" class="text-center" style="width: 33.3%">Grade 8 </a>
                        </div>
                        <div class="tab-content description-review-bottom">
                            <!--------------- Grade 6 --------------->
                            <div id="grade6" class="tab-pane active">
                                <div class="product-description-wrapper">
                                    <!--===================================Features Details ================================================-->
                                    <div class="row about-features d-flex flex-row justify-content-center mt-5 mb-50">

                                        <!------------ English ----------->
                                        <div class="col-md-3 col-sm-6">
                                            <div class="about-feature d-flex flex-column justify-content-between">
                                                <div class="feature-img-container">
                                                    <img src="{{asset('website/img/curriculum/english.png')}}" style="width: 120px; margin-bottom: 30px">
                                                </div>
                                                <p class="mb-20" style="font-weight: 500; font-size: 16px">English</p>
                                                <p class="main-font-size dark-grey text-justify">
                                                    The sixth grade English student is an active participant in classroom discussions. S/he
                                                    Presents personal opinions, understands differing viewpoints, delivers a formal speech,
                                                    Participates in dramatic presentations, distinguishes between fact and opinion, and
                                                    Analyzes the effectiveness of group communication. The student builds on the study of
                                                    Word origins and continues vocabulary development from grade five.
                                                </p>
                                            </div>
                                        </div>

                                        <!------------ Math ----------->
                                        <div class="col-md-3 col-sm-6">
                                            <div class="about-feature d-flex flex-column justify-content-between">
                                                <div class="feature-img-container">
                                                    <img src="{{asset('website/img/curriculum/math.png')}}" style="width: 120px; margin-bottom: 30px">
                                                </div>
                                                <p class="mb-20" style="font-weight: 500; font-size: 16px">Math</p>
                                                <p class="main-font-size dark-grey text-justify">
                                                    Sixth Grade Mathematics places continued emphasis on the study of whole numbers,
                                                    Decimals, and rational numbers (fractions). By the end of sixth grade, a student masters
                                                    The four arithmetic operations with whole numbers, positive fractions, and positive
                                                    Decimal integers; a grade six student accurately computes and solves problems. Students understand the concepts of mean, median, and the mode of data sets and how to calculate the range.

                                                </p>
                                            </div>
                                        </div>

                                        <!------------ Earth Science ----------->
                                        <div class="col-md-3 col-sm-6">
                                            <div class="about-feature d-flex flex-column justify-content-between">
                                                <div class="feature-img-container">
                                                    <img src="{{asset('website/img/curriculum/science_earth.png')}}" style="width: 120px; margin-bottom: 30px">
                                                </div>
                                                <p class="mb-20" style="font-weight: 500; font-size: 16px">Earth Science</p>
                                                <p class="main-font-size dark-grey text-justify">
                                                    Students will be able to connect the study of Earth’s composition, structure, processes,
                                                    And history; its atmosphere, fresh water, and oceans; and its environment in space.
                                                    Students emphasize historical contributions in the development of scientific thought
                                                    About the earth and space. Students are able to interpret maps, charts, tables, and profiles;
                                                    they use technology to collect, analyze and report data; and they utilize science skills
                                                    in systematic investigation. Problem solving and decision-making are an integral part of
                                                    earth science, especially as they relate to the costs and benefits of utilizing the Earth’s resources.
                                                </p>
                                            </div>
                                        </div>

                                        <!------------Social ----------->
                                        <div class="col-md-3 col-sm-6">
                                            <div class="about-feature d-flex flex-column justify-content-between">
                                                <div class="feature-img-container">
                                                    <img src="{{asset('website/img/curriculum/social.png')}}" style="width: 120px; margin-bottom: 30px">
                                                </div>
                                                <p class="mb-20" style="font-weight: 500; font-size: 16px">Social Studies</p>
                                                <p class="main-font-size dark-grey text-justify">
                                                    Grade 6 Social Studies will revolve around an exploration of world cultures. In grade 6,
                                                    Students will be exploring the Western Hemisphere (Canada, USA, Mexico, Caribbean,
                                                    Central America, and South America) as well as Europe. This larger region will be then
                                                    Further broken down into smaller sections and students will look in depth at the
                                                    Physical geography, cultures, climate, and the economic and political situations of these
                                                    Locations.
                                                    Grade 6 Social Studies will revolve around an exploration of world cultures. In grade 6,
                                                    Students will be exploring the Western Hemisphere (Canada, USA, Mexico, Caribbean,
                                                    Central America, and South America) as well as Europe. This larger region will be then
                                                    Further broken down into smaller sections and students will look in depth at the
                                                    Physical geography, cultures, climate, and the economic and political situations of these
                                                    Locations.

                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--------------- Grade 7 --------------->
                            <div id="grade7" class="tab-pane ">
                                <div class="product-description-wrapper">
                                    <!--===================================Features Details ================================================-->
                                    <div class="row about-features d-flex flex-row justify-content-center mt-5 mb-50">

                                        <!------------ English ----------->
                                        <div class="col-md-3 col-sm-6">
                                            <div class="about-feature d-flex flex-column justify-content-between">
                                                <div class="feature-img-container">
                                                    <img src="{{asset('website/img/curriculum/english.png')}}" style="width: 120px; margin-bottom: 30px">
                                                </div>
                                                <p class="mb-20" style="font-weight: 500; font-size: 16px">English</p>
                                                <p class="main-font-size dark-grey text-justify">
                                                    Student continues to develop oral communication skills and becomes more
                                                    Knowledgeable of the effects of verbal and nonverbal behaviors in oral communication.
                                                    S/he continues to read a wide variety of fiction, nonfiction, and poetry while becoming
                                                    More independent and analytical. The student reads independently for at least thirty
                                                    Minutes a night, a variety of fiction and non-fiction, for appreciation and comprehension.
                                                    The student continues to extend responses to self-selected reading and continues to refine
                                                    written composition skills, with special attention to word choice, organization, style, and grammar.
                                                </p>
                                            </div>
                                        </div>

                                        <!------------ Mathematics ----------->
                                        <div class="col-md-3 col-sm-6">
                                            <div class="about-feature d-flex flex-column justify-content-between">
                                                <div class="feature-img-container">
                                                    <img src="{{asset('website/img/curriculum/math.png')}}" style="width: 120px; margin-bottom: 30px">
                                                </div>
                                                <p class="mb-20" style="font-weight: 500; font-size: 16px">Mathematics</p>
                                                <p class="main-font-size dark-grey text-justify">
                                                    <span class="font-weight-bold">Pre-Algebra (Integrated Math 1)</span> reviews or extends concepts and skills learned in
                                                    previous grades and new content that prepares students for more abstract concepts in
                                                    algebra and geometry. A pre-algebra student gains proficiency in computation with
                                                    rational numbers (positive and negative fractions, positive and negative decimals, whole
                                                    numbers, and integers) and uses proportions to solve a variety of problems. New concepts
                                                    include solving two-step equations and inequalities, with a focus on the Pythagorean theorem and probability.

                                                </p>
                                            </div>
                                        </div>

                                        <!------------ Science ----------->
                                        <div class="col-md-3 col-sm-6">
                                            <div class="about-feature d-flex flex-column justify-content-between">
                                                <div class="feature-img-container">
                                                    <img src="{{asset('website/img/curriculum/science.png')}}" style="width: 120px; margin-bottom: 30px">
                                                </div>
                                                <p class="mb-20" style="font-weight: 500; font-size: 16px"> Science</p>
                                                <p class="main-font-size dark-grey text-justify">
                                                    Students in <span class="font-weight-bold">Grade Seven Life Science</span> develop a more complex understanding
                                                    of change, cycles, patterns, and relationships in the living world. Students
                                                    build on basic principles related to these concepts by exploring the cellular
                                                    organization and the classification of organisms; the dynamic relationships
                                                    among organisms, populations, communities, and ecosystems; and change as a
                                                    result of the transmission of genetic information from generation to
                                                    generation. Inquiry skills at this level include organization and mathematical
                                                    analysis of data, manipulation of variables in experiments, and
                                                    Identification of sources of experimental error.

                                                </p>
                                            </div>
                                        </div>

                                        <!------------Social Studies ----------->
                                        <div class="col-md-3 col-sm-6">
                                            <div class="about-feature d-flex flex-column justify-content-between">
                                                <div class="feature-img-container">
                                                    <img src="{{asset('website/img/curriculum/social.png')}}" style="width: 120px; margin-bottom: 30px">
                                                </div>
                                                <p class="mb-20" style="font-weight: 500; font-size: 16px">Social Studies</p>
                                                <p class="main-font-size dark-grey text-justify">
                                                    In grade 7, students will study world regions by focusing on the East and exploring
                                                    Africa, Asia, Australia and Oceania. This larger region will be then further broken down
                                                    Into smaller sections and students will look in depth at the physical geography, cultures,
                                                    Climate, and the economic and political situations of these locations. There will be some
                                                    Detail of history added to prepare the students for Grade 8. Students will work on travel
                                                    Projects where they have to plan an itinerary and all of the details of their trips and then
                                                    They will create presentations so they can share their virtual adventures with their
                                                    Classmates.

                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--------------- Grade 8 --------------->
                            <div id="grade8" class="tab-pane ">
                                <div class="product-description-wrapper">
                                    <!--===================================Features Details ================================================-->
                                    <div class="row about-features d-flex flex-row justify-content-center mt-5 mb-50">

                                        <!------------ English ----------->
                                        <div class="col-md-3 col-sm-6">
                                            <div class="about-feature d-flex flex-column justify-content-between">
                                                <div class="feature-img-container">
                                                    <img src="{{asset('website/img/curriculum/english.png')}}" style="width: 120px; margin-bottom: 30px">
                                                </div>
                                                <p class="mb-20" style="font-weight: 500; font-size: 16px">English</p>
                                                <p class="main-font-size dark-grey text-justify">
                                                    The focus of Grade 8 English is to prepare the student for the rigors of
                                                    all courses in High School in that reading and writing skills are critical
                                                    elements of all subjects. Key components of the curriculum include writing
                                                    narrative, persuasive and expository essays, critical thinking, literature
                                                    and poetry analysis, vocabulary, and grammatical and editing skills.
                                                    In addition, the course focuses on public speaking to both enhance student
                                                    confidence and oral English skills. Writing texts are expected to be between
                                                    600 to 900 words or more.
                                                </p>
                                            </div>
                                        </div>

                                        <!------------ Algebra (Integrated Math 2) ----------->
                                        <div class="col-md-3 col-sm-6">
                                            <div class="about-feature d-flex flex-column justify-content-between">
                                                <div class="feature-img-container">
                                                    <img src="{{asset('website/img/curriculum/math.png')}}" style="width: 120px; margin-bottom: 30px">
                                                </div>
                                                <p class="mb-20" style="font-weight: 500; font-size: 16px">Algebra (Integrated Math 2)</p>
                                                <p class="main-font-size dark-grey text-justify">
                                                    Students focus on symbolic reasoning and calculations with symbols, which
                                                    are central in algebra. Through the study of algebra, a student develops
                                                    an understanding of the symbolic language of mathematics. In addition,
                                                    a student in algebra develops algebraic skills and concepts and uses
                                                    them in solving problems.
                                                </p>
                                            </div>
                                        </div>

                                        <!------------ Science: Basic Physics & Chemistry ----------->
                                        <div class="col-md-3 col-sm-6">
                                            <div class="about-feature d-flex flex-column justify-content-between">
                                                <div class="feature-img-container">
                                                    <img src="{{asset('website/img/curriculum/science.png')}}" style="width: 120px; margin-bottom: 30px">
                                                </div>
                                                <p class="mb-20" style="font-weight: 500; font-size: 16px"> Science: Basic Physics & Chemistry</p>
                                                <p class="main-font-size dark-grey text-justify">
                                                    Students in 8th Grade Science develop an understanding of the scientific
                                                    process as they survey both physics and chemistry. Students continue to emphasize data
                                                    analysis and experimentation through hands-on inquiry. The concept of change is explored
                                                    through the study of transformations of energy and matter. Students focus on integrated
                                                    topics, which include physical science formulas and basic chemistry concepts.
                                                </p>
                                            </div>
                                        </div>

                                        <!------------Social Studies ----------->
                                        <div class="col-md-3 col-sm-6">
                                            <div class="about-feature d-flex flex-column justify-content-between">
                                                <div class="feature-img-container">
                                                    <img src="{{asset('website/img/curriculum/social.png')}}" style="width: 120px; margin-bottom: 30px">
                                                </div>
                                                <p class="mb-20" style="font-weight: 500; font-size: 16px">Social Studies</p>
                                                <p class="main-font-size dark-grey text-justify">
                                                    This course will take students from the ancient civilizations to the European Renaissance.
                                                    Within the course, students will focus on the transitions of power, technology, and trade
                                                    throughout the expanding world. Interactions between people and an exploration of how geography
                                                    has affected humanity will facilitate students' understanding as they begin to question history
                                                    and view it as a living, ever-changing content area.

                                                </p>
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


    <!------ High School ------>
    <div class="achievement-area pt-60 pb-40" id="high-school">
        <div class="container">
            <div class="section-title">
                <h3 class="font-weight-bold text-center" style="font-size: 40px;  margin-bottom: 80px">High School    <span style="color: #00a651">Curriculum</span></h3>
                <p>
                    Senior school runs through to 12th grade. The subject spread remains wide with general emphasis. Most
                    schools provide education in sciences (biology, chemistry and physics), mathematics (including algebra,
                    geometry, pre-calculus and statistics), english language, social sciences and physical education.
                </p>
            </div>
        </div>
    </div>


    <!------ Should I take the SAT or the ACT? ------>
    <div class="achievement-area pt-60 pb-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-title">

                        <h3 class="font-weight-bold" style="font-size: 25px;  margin-bottom: 20px">About the   <span style="color: #00a651">SAT </span></h3>
                        <p style="margin-bottom: 0; text-align: justify" class="text-justify">
                            The SAT is an entrance exam used by most colleges and universities to make admissions decisions.
                            It is a multiple-choice, pencil-and-paper test administered by the College Board.
                        </p>
                        <p class="text-justify">
                            The purpose of the SAT is to measure a high school student's readiness for college, and provide
                            colleges with one common data point that can be used to compare all applicants. College admissions
                            officers will review standardized test scores alongside your high school GPA, the classes you
                            took in high school, letters of recommendation from teachers or mentors, extracurricular activities,
                            admissions interviews, and personal essays. How important SAT scores are in the college application
                            process varies from school to school.
                        </p>
                        <p class="text-justify">
                            Overall, the higher you score on the SAT and/or ACT, the more options for attending and paying for
                            college will be available to you.
                        </p>
                    </div>
                </div>



                <div class="col-lg-6">
                    <div class="section-title">

                        <h3 class="font-weight-bold" style="font-size: 25px;  margin-bottom: 20px">Should I take the <span style="color: #00a651">SAT or the ACT? </span></h3>
                        <p style="margin-bottom: 0; text-align: justify">
                            Most colleges and universities will accept scores from either the SAT or ACT, and do not favor one test
                            over the other. That said, college-bound students are increasingly taking both the SAT and ACT. Changes
                            made to the SAT in 2016 have made it easier than ever to prep for both tests concurrently—and earn
                            competitive scores on both! The best way to decide if taking the SAT, ACT, or both tests is right for
                            you is to take a timed full-length practice test of each type. Since the content and style of the SAT
                            and ACT are very similar, factors like how you handle time pressure and what types of questions you
                            find most challenging can help you determine which test is a better fit. Try our QUIZ: SAT, ACT, or
                            Both? To learn more.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!------ How do I register for the SAT? ------>
    <div class="achievement-area pt-60 pb-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-title">

                        <h3 class="font-weight-bold" style="font-size: 25px;  margin-bottom: 20px">What is on the   <span style="color: #00a651">SAT?  </span></h3>
                        <p style="margin-bottom: 0; text-align: justify" class="text-justify">
                            •	Math
                        </p>
                        <p style=" text-align: justify" class="text-justify">
                            •	Evidence-Based Reading and Writing
                        </p>
                        <p class="text-justify">
                            The SAT also includes an optional Essay section. SAT Essay scores are reported separately
                            from overall test scores. Some colleges may require that you complete the SAT Essay.
                            You can confirm each college's admissions policies on the school website or on our school profiles.
                        </p>
                    </div>
                </div>



                <div class="col-lg-6">
                    <div class="section-title">

                        <h3 class="font-weight-bold" style="font-size: 25px;  margin-bottom: 20px">How do I register for the<span style="color: #00a651"> SAT? </span></h3>
                        <p style="margin-bottom: 0; text-align: justify">
                            SAT registration deadlines fall approximately five weeks before each test date. Register online
                            on the College Board website. The College Board may require SAT registration by mail under special
                            circumstances.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!------ How long is the SAT? ------>
    <div class="achievement-area pt-60 pb-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-title">

                        <h3 class="font-weight-bold" style="font-size: 25px;  margin-bottom: 20px">How long is the   <span style="color: #00a651">SAT?   </span></h3>
                        <p class="text-justify">
                            The SAT is 3 hours long. If you choose to take the SAT with Essay, the test will be 3 hours
                            and 50 minutes.
                        </p>
                    </div>
                </div>



                <div class="col-lg-6">
                    <div class="section-title">

                        <h3 class="font-weight-bold" style="font-size: 25px;  margin-bottom: 20px">How can I prepare for the <span style="color: #00a651"> SAT? </span></h3>
                        <p style="margin-bottom: 0; text-align: justify">
                            We can help. We have SAT prep solutions for every student and every budget.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!------ How is the SAT scored? ------>
    <div class="achievement-area pt-60 pb-40">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-title">

                        <h3 class="font-weight-bold" style="font-size: 25px;  margin-bottom: 20px">How is the    <span style="color: #00a651">SAT scored?   </span></h3>
                        <p class="text-justify">
                            Each section of the SAT is scored on a 200 to 800 point scale. Your total SAT score is the sum
                            of your section scores. The highest possible SAT score is 1600. If you take the Essay, you will
                            receive a separate score
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!------ American & British ------>
    <div class="about-us pt-50 pb-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="about-content">
                        <div class="section-title section-title-green mb-30">
                            <h3><span>MOE Civil Subjects: </span></h3>
                            <p class="aims">Ministry exams are administered in <span class="font-weight-bold">Arabic, religion and Arabic social
                                    studies.
                                </span>

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
