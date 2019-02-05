@extends('layouts.layouts')
@section('title', 'Home')

@section('stepperStyle')
    <link rel="stylesheet" href="{{asset('website/css/pages/stepper/style.css')}}">
    <link rel="stylesheet" href="{{asset('website/css/pages/stepper/responsive.css')}}">
    <link rel="stylesheet" href="{{asset('website/css/libs/all_icons_min.css')}}">
    <style>
        body
        {
            background-color: #e4e4e4;
        }
    </style>
@endsection

@section('stepperScripts')
    <!-- Common script -->
    <script src="{{asset('website/js/stepper/common_scripts.js')}}"></script>
    <!-- Wizard script -->
    <script src="{{asset('website/js/stepper/questionare_wizard_func.js')}}"></script>
    <!-- Menu script -->
    <script src="{{asset('website/js/stepper/velocity.min.js')}}"></script>
    <script src="{{asset('website/js/stepper/main.js')}}"></script>
    <!-- Theme script -->
    <script src="{{asset('website/js/stepper/functions.js')}}"></script>
@endsection

@section('content')
    @include('layouts.header')



    <!------------------------ Title banner section ----------------->
    <div class="breadcrumb-area">
        <div class="breadcrumb-top default-overlay bg-img pt-100 pb-95" style="background-image:url({{asset('website/img/bg/admission_bg.jpg')}});">
            <div class="container">
                <h2>Online Application</h2>
                <p>in this application you should fill the required data .</p>
            </div>
        </div>
        <div class="breadcrumb-bottom">
            <div class="container">
                <ul>
                    <li><a href="#">Home</a> <span><i class="fa fa-angle-double-right"></i> About Page</span></li>
                </ul>
            </div>
        </div>
    </div>


    {{--<div id="preloader">
        <div data-loader="circle-side"></div>
    </div><!-- /Preload -->--}}

    <div id="loader_form">
        <div data-loader="circle-side-2"></div>
    </div><!-- /loader_form -->



    <main>
        <div id="form_container">
            <div class="row">
                <div class="col-lg-5">
                    <div id="left_form">
                        <figure><img id="infoimg" src="{{asset('website/img/stepper/boy.png')}}" alt=""></figure>
                        <h2 id="pic_info">Student Information</h2>
                        <input id="stepnum" name="website" type="hidden" value="1">
                        <p class="step_desc">In this step you should enter your son/daughter information, Be-careful during filling information .</p>
                        <a href="#0" id="more_info" data-toggle="modal" data-target="#more-info"><i class="pe-7s-info"></i></a>
                    </div>
                </div>
                <div class="col-lg-7">

                    <div id="wizard_container">
                        <div id="top-wizard">
                            <div id="progressbar"></div>
                        </div>
                        <!-- /top-wizard -->
                        <form name="example-1" id="wrapped" method="POST" class="stepper-form">
                            <input id="website" name="website" type="text" value="">
                            <!-- Leave for security protection, read docs for details -->
                            <div id="middle-wizard">

                                <!-- ----------------------------Student Step --------------------------------- -->
                                <div class="step">
                                    <h3 class="main_question"><strong>1/8</strong>Enter Your Student Information</h3>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="studentName">Student full name</label>
                                                <input type="text" name="studentName" class="form-control required"   placeholder="Full Name" id="studentName">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="nickName">Nick Name</label>
                                                <input type="text" name="nickName" class="form-control " placeholder="Nick Name" id="nickName">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /row -->

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="religion">Nationality</label>
                                                <select class="form-control required" name="religion" id="religion">
                                                    <option selected>Choose Religion</option>
                                                    <option>Muslim</option>
                                                    <option>Christian</option>
                                                    <option>jewish</option>
                                                    <option>Buddhist</option>
                                                    <option>Other</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="father_nationality">Student Nationality</label>
                                                <select class="form-control required" name="father_nationality" id="father_nationality">
                                                    <option selected>Choose Country</option>
                                                    <option>America</option>
                                                    <option>Egypt</option>
                                                    <option>United Kingdom</option>
                                                    <option>Syria</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /row -->


                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="address">Address</label>
                                                <input type="text" name="st_nationality" class="form-control " placeholder="Address" id="address">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="address">Date of Birth</label>
                                                <div class="d-flex">
                                                    <!-- /year -->
                                                    <select class="form-control required" name="year">
                                                        <option selected>Year</option>
                                                        <option>2002</option>
                                                        <option>2003</option>
                                                        <option>2004</option>
                                                        <option>2005</option>
                                                        <option>2006</option>
                                                        <option>2007</option>
                                                        <option>2008</option>
                                                        <option>2009</option>
                                                        <option>2010</option>
                                                        <option>2011</option>
                                                    </select>

                                                    <!-- /month -->
                                                    <select class="form-control required" name="month">
                                                        <option selected>Month</option>
                                                        <option>January</option>
                                                        <option>February</option>
                                                        <option>March</option>
                                                        <option>April</option>
                                                        <option>May</option>
                                                        <option>June</option>
                                                        <option>July</option>
                                                        <option>August</option>
                                                        <option>September</option>
                                                        <option>October</option>
                                                        <option>November</option>
                                                        <option>December</option>
                                                    </select>

                                                    <!-- /day -->
                                                    <select class="form-control required" name="day">
                                                        <option selected>Day</option>
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>5</option>
                                                        <option>6</option>
                                                        <option>7</option>
                                                        <option>8</option>
                                                        <option>9</option>
                                                        <option>10</option>
                                                        <option>11</option>
                                                        <option>12</option>
                                                        <option>13</option>
                                                        <option>14</option>
                                                        <option>15</option>
                                                        <option>16</option>
                                                        <option>17</option>
                                                        <option>18</option>
                                                        <option>19</option>
                                                        <option>20</option>
                                                        <option>21</option>
                                                        <option>22</option>
                                                        <option>23</option>
                                                        <option>24</option>
                                                        <option>25</option>
                                                        <option>26</option>
                                                        <option>27</option>
                                                        <option>28</option>
                                                        <option>29</option>
                                                        <option>30</option>
                                                        <option>31</option>
                                                    </select>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /row -->


                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="gender">Gender</label>
                                            <div class="form-group">

                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="male">
                                                    <label class="form-check-label" for="inlineRadio1">Male</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="female">
                                                    <label class="form-check-label" for="inlineRadio2">Female</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /row -->
                                </div>
                                <!-- /step -->

                                <!-- ----------------------------Father Step ---------------------------------- -->
                                <div class="step">
                                    <h3 class="main_question"><strong>2/8</strong>Enter Father's Information</h3>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="father_nationality">Nationality</label>
                                                <select class="form-control required" name="father_nationality" id="father_nationality">
                                                    <option selected>Choose Country</option>
                                                    <option>America</option>
                                                    <option>Egypt</option>
                                                    <option>United Kingdom</option>
                                                    <option>Syria</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="father_phone">Phone</label>
                                                <input type="number" name="father_phone" class="form-control required" placeholder="Father's Phone" id="father_phone">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /row -->


                                    <div class="row">

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="father_email">Email</label>
                                                <input type="email" name="father_email" class="form-control " placeholder="Father's Email" id="father_email">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="father_passport">ID/Passport No.</label>
                                                <input type="text" name="father_passport" class="form-control " placeholder="Enter ID or Passport for non Egyptians" id="father_passport">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /row -->

                                    <div class="row">


                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="father_nationality">Qualification</label>
                                                <select class="form-control required" name="father_nationality" id="father_nationality">
                                                    <option selected>Choose Education Level</option>
                                                    <option>Bachelor’s degree</option>
                                                    <option>Master</option>
                                                    <option>Doctoral</option>
                                                    <option>Diploma</option>
                                                    <option>Institute</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="job">Job</label>
                                                <select class="form-control required" name="job" id="job">
                                                    <option selected>Choose a Job</option>
                                                    <option>Doctor</option>
                                                    <option>Teacher</option>
                                                    <option>Business Man</option>
                                                    <option>Banker</option>
                                                    <option>Have Private Business</option>
                                                    <option>Other</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /row -->

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="employer">Employer Name</label>
                                                <input type="text" name="employer" class="form-control " placeholder="Enter employer name" id="employer">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="father_business_address">Business Address</label>
                                                <input type="text" name="father_business_address" class="form-control " placeholder="Enter Mother's Business Address" id="father_business_address">
                                            </div>
                                        </div>

                                    </div>
                                    <!-- /row -->
                                </div>
                                <!-- /step -->

                                <!-- ----------------------------Mother Step ---------------------------------- -->
                                <div class="step">
                                    <h3 class="main_question"><strong>3/8</strong>Enter Mothers's Information</h3>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="mother_nationality">Nationality</label>
                                                <select class="form-control required" name="mother_nationality" id="mother_nationality">
                                                    <option selected>Choose Country</option>
                                                    <option>America</option>
                                                    <option>Egypt</option>
                                                    <option>United Kingdom</option>
                                                    <option>Syria</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="mother_phone">Phone</label>
                                                <input type="number" name="mother_phone" class="form-control " placeholder="Mother's Phone" id="mother_phone">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /row -->


                                    <div class="row">

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="mother_email">Email</label>
                                                <input type="email" name="mother_email" class="form-control " placeholder="Mother's Email" id="mother_email">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="mother_passport">ID/Passport No.</label>
                                                <input type="text" name="mother_passport" class="form-control " placeholder="Enter ID or Passport for non Egyptians" id="mother_passport">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /row -->

                                    <div class="row">


                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="mother_nationality">Qualification</label>
                                                <select class="form-control required" name="mother_nationality" id="mother_nationality">
                                                    <option selected>Choose Education Level</option>
                                                    <option>Bachelor’s degree</option>
                                                    <option>Master</option>
                                                    <option>Doctoral</option>
                                                    <option>Diploma</option>
                                                    <option>Institute</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="mother_job">Job</label>
                                                <select class="form-control required" name="mother_job" id="mother_job">
                                                    <option selected>Choose a Job</option>
                                                    <option>Doctor</option>
                                                    <option>Teacher</option>
                                                    <option>Business Man</option>
                                                    <option>Banker</option>
                                                    <option>Have Private Business</option>
                                                    <option>Other</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /row -->

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="mother_employer">Employer Name</label>
                                                <input type="text" name="mother_employer" class="form-control " placeholder="Enter employer name" id="mother_employer">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="mother_business_address">Business Address</label>
                                                <input type="text" name="mother_business_address" class="form-control " placeholder="Enter Mother's Business Address" id="mother_business_address">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /row -->


                                </div>


                                <!-- ----------------------------Emergency Step ---------------------------------- -->
                                <div class="step">
                                    <h3 class="main_question"><strong>4/8</strong>In Case Of Emergency</h3>

                                    <div class="row">

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="emergency_first_name">First Person Name</label>
                                                <input type="text" name="emergency_first_name" class="form-control " placeholder="First Person Name" id="emergency_first_name">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="first_person_relation">Relation to Child</label>
                                                <input type="text" name="first_person_relation" class="form-control " placeholder="First Person Relation To Child" id="first_person_relation">
                                            </div>
                                        </div>

                                    </div>
                                    <!-- /row -->

                                    <div class="row">

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="emergency_first_mobile">First Person Mobile</label>
                                                <input type="number" name="emergency_first_mobile" class="form-control " placeholder="First Person Phone Number" id="emergency_first_mobile">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="emergency_first_home_no">First Person Home No</label>
                                                <input type="text" name="emergency_first_home_no" class="form-control " placeholder="First Person Home Number" id="emergency_first_home_no">
                                            </div>
                                        </div>

                                    </div>
                                    <!-- /row -->

                                    <hr style="margin-bottom: 10px; margin-top: 0">

                                    <div class="row">

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="emergency_second_name">Second Person Name</label>
                                                <input type="text" name="emergency_second_name" class="form-control " placeholder="Second Person Name" id="emergency_second_name">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="second_person_relation">Relation to Child</label>
                                                <input type="text" name="second_person_relation" class="form-control " placeholder="Second Person Relation To Child" id="second_person_relation">
                                            </div>
                                        </div>

                                    </div>
                                    <!-- /row -->

                                    <div class="row">

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="emergency_second_mobile">Second Person Mobile</label>
                                                <input type="number" name="emergency_second_mobile" class="form-control " placeholder="Second Person Phone Number" id="emergency_second_mobile">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="emergency_second_home_no">Second Person Home No</label>
                                                <input type="text" name="emergency_second_home_no" class="form-control " placeholder="Second Person Home Number" id="emergency_second_home_no">
                                            </div>
                                        </div>

                                    </div>
                                    <!-- /row -->

                                </div>
                                <!-- /step -->

                                <!-- ----------------------------Brothers Step ---------------------------------- -->
                                <div class="step">
                                    <h3 class="main_question"><strong>5/8</strong>Other Children In Family</h3>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="child1_name">Child Name</label>
                                                <input type="text" name="child1_name" class="form-control " placeholder="Enter Chile Name" id="child1_name">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="child1_age">Child Age</label>
                                                <input type="number" name="child1_age" class="form-control " placeholder="Enter Child Age" min="1" max="60" id="child1_age">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /row -->

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="child1_school">School/University Name</label>
                                                <input type="text" name="child1_school" class="form-control " placeholder="Enter Chile School or University" id="child1_school">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="chile1_gender">Gender</label>
                                            <div class="form-group">

                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="male">
                                                    <label class="form-check-label" for="inlineRadio1">Male</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="female">
                                                    <label class="form-check-label" for="inlineRadio2">Female</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /row -->

                                    <hr style="margin-bottom: 10px; margin-top: 0">


                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="child2_name">Child Name</label>
                                                <input type="text" name="child1_name" class="form-control " placeholder="Enter Chile Name" id="child2_name">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="child1_age">Child Age</label>
                                                <input type="number" name="child2_age" class="form-control " placeholder="Enter Child Age" min="1" max="60" id="child2_age">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /row -->

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="child1_school">School/University Name</label>
                                                <input type="text" name="child2_school" class="form-control " placeholder="Enter Chile School or University" id="child2_school">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="chile2_gender">Gender</label>
                                            <div class="form-group">

                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="male">
                                                    <label class="form-check-label" for="inlineRadio1">Male</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="female">
                                                    <label class="form-check-label" for="inlineRadio2">Female</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                                <!-- /step -->

                                <!-- ----------------------------Previous Schools Step ---------------------------------- -->
                                <div class="step">
                                    <h3 class="main_question"><strong>6/8</strong>Enter Some Information about Previous Schools</h3>
                                    <div class="row">

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="school1_name">School Name</label>
                                                <input type="text" name="school1_name" class="form-control " placeholder="Enter Previous School Name" id="school1_name">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="grade1">Grade</label>
                                                <input type="text" name="grade1" class="form-control " placeholder="Grade" id="grade1">
                                            </div>
                                        </div>

                                    </div>
                                    <!-- /row -->

                                    <div class="row">

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="curriculum1">Curriculum</label>
                                                <input type="text" name="curriculum1" class="form-control " placeholder="Enter The Curriculum of School" id="curriculum1">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="school1_location">Location</label>
                                                <input type="text" name="school1_location" class="form-control " placeholder="Enter School Location" id="school1_location">
                                            </div>
                                        </div>

                                    </div>
                                    <!-- /row -->

                                    <div class="row">

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="school1_years">Years Attended</label>
                                                <input type="number" name="school1_years" class="form-control " placeholder="Enter Number of Years Attended" id="school1_years">
                                            </div>
                                        </div>

                                    </div>
                                    <!-- /row -->
                                </div>
                                <!-- /step -->

                                <!-- ----------------------------Additional Information ---------------------------------- -->
                                <div class="step">
                                    <h3 class="main_question"><strong>7/8</strong>Additional Information Step</h3>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="child_hobbies">Tell us More About Your Child</label>
                                                <textarea type="number" name="child_hobbies" class="form-control " placeholder="Tell Us More About Your Child Hobbies, Interests, etc..." id="child_hobbies" style="resize: none; height: 70px"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /row -->

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
{{--
                                                <label for="child_hobbies">Tell us More About Your Child</label>
--}}
                                                <textarea type="number" name="child_hobbies" class="form-control " placeholder="Why did you choose to apply to New Discovery British lntrnational School?" id="child_hobbies" style="resize: none; height: 100px"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /row -->
                                </div>
                                <!-- /step -->


                                <div class="submit step">
                                    <h3 class="main_question"><strong>8/8</strong>Please fill with your details</h3>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" name="firstname" class="form-control required" placeholder="First name">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" name="lastname" class="form-control required" placeholder="Last name">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /row -->

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="email" name="email" class="form-control required" placeholder="Your Email">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" name="telephone" class="form-control" placeholder="Your Telephone">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /row -->
                                    <br>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group terms">
                                                <input name="terms" type="checkbox" class="icheck " value="yes">
                                                <label>Please accept <a href="#" data-toggle="modal" data-target="#terms-txt">terms and conditions</a> ?</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /step-->

                            </div>
                            <!-- /middle-wizard -->
                            <div id="bottom-wizard">
                                <button type="button" name="backward" class="backward" onclick="goback()">Backward </button>
                                <button type="button" name="forward" class="forward" onclick="getalert(1)">Forward</button>
                                <button type="submit" name="process" class="submit">Submit</button>
                            </div>
                            <!-- /bottom-wizard -->
                        </form>
                    </div>
                    <!-- /Wizard container -->
                </div>
            </div><!-- /Row -->
        </div><!-- /Form_container -->
    </main>

    @include('layouts.footer')
@endsection


@section('stepperScripts')
    <!-- Common script -->
    <script src="{{asset('website/js/stepper/common_scripts.js')}}"></script>
    <!-- Wizard script -->
    <script src="{{asset('website/js/stepper/questionare_wizard_func.js')}}"></script>
    <!-- Menu script -->
    <script src="{{asset('website/js/stepper/')}}velocity.min.js"></script>
    <script src="{{asset('website/js/stepper/')}}main.js"></script>
    <!-- Theme script -->
    <script src="{{asset('website/js/stepper/')}}functions.js"></script>
@endsection
