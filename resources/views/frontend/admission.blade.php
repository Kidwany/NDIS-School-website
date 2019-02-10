@extends('layouts.layouts')
@section('title', 'Home')

@section('stepperStyle')
    <link rel="stylesheet" href="{{asset('website/css/pages/stepper/style.css')}}">
    <link rel="stylesheet" href="{{asset('website/css/pages/stepper/responsive.css')}}">
    <link rel="stylesheet" href="{{asset('website/css/libs/all_icons_min.css')}}">
    <style>
        body {
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
        <div class="breadcrumb-top default-overlay bg-img pt-100 pb-95"
             style="background-image:url({{asset('website/img/bg/admission_bg.jpg')}});">
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
                        <h2 id="pic_info">
                            Student Information
                        </h2>
                        <input id="stepnum" name="website" type="hidden" value="1">
                        <p class="step_desc">In this step you should enter your son/daughter information, Be-careful
                            during filling information .</p>
                        <a href="#0" id="more_info" data-toggle="modal" data-target="#more-info"><i
                                    class="pe-7s-info"></i></a>
                    </div>
                </div>
                <div class="col-lg-7">

                    <div id="wizard_container">
                        <div id="top-wizard">
                            <div id="progressbar"></div>
                        </div>
                        <!-- /top-wizard -->
                        <form name="example-1" id="wrapped" method="POST" class="stepper-form" action="{{ url('store') }}">
                            @csrf
                            <input id="website" name="website" type="text" value="">
                            <!-- Leave for security protection, read docs for details -->
                            <div id="middle-wizard">

                                <!-- ----------------------------Student Step --------------------------------- -->
                                <div class="step">
                                    <h3 class="main_question"><strong>1/8</strong>Enter Your Student Information</h3>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="applicationfullname">Student full name</label>
                                                <input type="text" name="applicationfullname" class="form-control required"
                                                       placeholder="Full Name" id="applicationfullname">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="father_nationality">Applying for grade</label>
                                                <select class="form-control required" name="GID"
                                                        id="father_nationality">
                                                    <option selected>Choose Grade</option>
                                                    @if(count($int['gr']))
                                                        @foreach($int['gr'] as $key)
                                                            <option value="{{$key->GID}}">{{$key->Gradename}}</option>
                                                        @endforeach
                                                    @endif

                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /row -->

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="religion">Religion</label>
                                                <select class="form-control required" name="RLID" id="religion">
                                                    <option selected>Choose Religion</option>
                                                    @if(count($int['rel']))
                                                        @foreach($int['rel'] as $key)
                                                            <option value="{{$key->RLID}}">{{$key->Religionname}}</option>
                                                        @endforeach
                                                    @endif

                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="father_nationality">Student Nationality</label>
                                                <select class="form-control required" name="NID"
                                                        id="father_nationality">
                                                    <option selected>Choose Country</option>
                                                    @if(count($int['nat']))
                                                        @foreach($int['nat'] as $key)
                                                            <option value="{{$key->NID}}">{{$key->Nationalityname}}</option>
                                                        @endforeach
                                                    @endif

                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /row -->


                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="address">Bus Address</label>
                                                <input type="text" name="applicationbusaddress" class="form-control "
                                                       placeholder="Bus Address" id="address">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="address">Age on 1st of october</label>
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
                                        <div class="col-md-4">
                                            <label for="gender">Gender</label>
                                            <select class="form-control required" name="GNID"
                                                    id="gender">
                                                <option selected>Choose gender</option>
                                                @if(count($int['gen']))
                                                    @foreach($int['gen'] as $key)
                                                        <option value="{{$key->GNID}}">{{$key->Gendername}}</option>
                                                    @endforeach
                                                @endif

                                            </select>

                                        </div>
                                        <div class="col-md-4">
                                            <label for="gender">Section</label>
                                            <select class="form-control required" name="stusection"
                                                    id="gender">
                                                <option selected>Choose Section</option>
                                                <option value="British">British</option>
                                                <option value="American">American</option>

                                            </select>

                                        </div>

                                        <div class="col-md-4">
                                            <label for="gender">Second Language</label>
                                            <select class="form-control required" name="stusecondlang"
                                                    id="gender">
                                                <option selected>Choose Language</option>

                                                        <option value="French">French</option>
                                                        <option value="German">German</option>


                                            </select>

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
                                                <label for="father_fullname">Father Fullname.</label>
                                                <input type="text" name="father_fullname" class="form-control "
                                                       placeholder="Father Fullname"
                                                       id="father_fullname">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="father_nationality">Nationality</label>
                                                <select class="form-control required" name="father_nationality"
                                                        id="father_nationality">
                                                    <option selected>Choose Country</option>
                                                    @if(count($int['nat']))
                                                        @foreach($int['nat'] as $key)
                                                            <option value="{{$key->NID}}">{{$key->Nationalityname}}</option>
                                                        @endforeach
                                                    @endif
                                                </select>
                                            </div>
                                        </div>


                                    </div>
                                    <!-- /row -->


                                    <div class="row">

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="father_email">Email</label>
                                                <input type="email" name="father_email" class="form-control "
                                                       placeholder="Father's Email" id="father_email">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="father_phone">Phone</label>
                                                <input type="number" name="father_phone" class="form-control required"
                                                       placeholder="Father's Phone" id="father_phone">
                                            </div>
                                        </div>

                                    </div>
                                    <!-- /row -->

                                    <div class="row">

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="employer">Company Name</label>
                                                <input type="text" name="fathercompany" class="form-control "
                                                       placeholder="Enter Company name" id="employer">
                                            </div>
                                        </div>


                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="job">Job</label>
                                                <select class="form-control required" name="fatherjob" id="job">
                                                    <option selected>Choose a Job</option>
                                                    @if(count($int['ocp']))
                                                        @foreach($int['ocp'] as $key)
                                                            <option value="{{$key->OID}}">{{$key->Occupationname}}</option>
                                                        @endforeach
                                                    @endif
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /row -->


                                    <!-- /row -->
                                </div>
                                <!-- /step -->

                                <!-- ----------------------------Mother Step ---------------------------------- -->
                                <div class="step">
                                    <h3 class="main_question"><strong>3/8</strong>Enter Mothers's Information</h3>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="mother_fullname">Mother Fullname.</label>
                                                <input type="text" name="mother_fullname" class="form-control "
                                                       placeholder="Mother Fullname"
                                                       id="mother_fullname">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="mother_nationality">Nationality</label>
                                                <select class="form-control required" name="mother_nationality"
                                                        id="mother_nationality">
                                                    <option selected>Choose Country</option>
                                                    @if(count($int['nat']))
                                                        @foreach($int['nat'] as $key)
                                                            <option value="{{$key->NID}}">{{$key->Nationalityname}}</option>
                                                        @endforeach
                                                    @endif
                                                </select>
                                            </div>
                                        </div>


                                    </div>
                                    <!-- /row -->

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="mother_phone">Phone</label>
                                                <input type="number" name="mother_phone" class="form-control "
                                                       placeholder="Mother's Phone" id="mother_phone">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="mother_email">Email</label>
                                                <input type="email" name="mother_email" class="form-control "
                                                       placeholder="Mother's Email" id="mother_email">
                                            </div>
                                        </div>


                                    </div>
                                    <!-- /row -->

                                    <div class="row">

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="mother_company">Company Name</label>
                                                <input type="text" name="mother_company" class="form-control "
                                                       placeholder="Enter Company name" id="mother_company">
                                            </div>
                                        </div>


                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="mother_job">Job</label>
                                                <select class="form-control required" name="mother_job" id="mother_job">
                                                    <option selected>Choose a Job</option>
                                                    @if(count($int['ocp']))
                                                        @foreach($int['ocp'] as $key)
                                                            <option value="{{$key->OID}}">{{$key->Occupationname}}</option>
                                                        @endforeach
                                                    @endif

                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /row -->


                                    <!-- /row -->


                                </div>


                                <!-- ----------------------------Emergency Step ---------------------------------- -->
                                <div class="step">
                                    <h3 class="main_question"><strong>4/8</strong>In Case Of Emergency</h3>

                                    <div class="row">

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="emergency_first_name">First Person Name</label>
                                                <input type="text" name="emergency_first_name" class="form-control "
                                                       placeholder="First Person Name" id="emergency_first_name">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="first_person_relation">Relation to Child</label>
                                                <input type="text" name="first_person_relation" class="form-control "
                                                       placeholder="First Person Relation To Child"
                                                       id="first_person_relation">
                                            </div>
                                        </div>

                                    </div>
                                    <!-- /row -->

                                    <div class="row">

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="emergency_first_mobile">First Person Mobile</label>
                                                <input type="number" name="emergency_first_mobile" class="form-control "
                                                       placeholder="First Person Phone Number"
                                                       id="emergency_first_mobile">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="emergency_first_home_no">First Person Home No</label>
                                                <input type="text" name="emergency_first_home_no" class="form-control "
                                                       placeholder="First Person Home Number"
                                                       id="emergency_first_home_no">
                                            </div>
                                        </div>

                                    </div>
                                    <!-- /row -->

                                    <hr style="margin-bottom: 10px; margin-top: 0">

                                    {{--<div class="row">--}}

                                        {{--<div class="col-md-6">--}}
                                            {{--<div class="form-group">--}}
                                                {{--<label for="emergency_second_name">Second Person Name</label>--}}
                                                {{--<input type="text" name="emergency_second_name" class="form-control "--}}
                                                       {{--placeholder="Second Person Name" id="emergency_second_name">--}}
                                            {{--</div>--}}
                                        {{--</div>--}}

                                        {{--<div class="col-md-6">--}}
                                            {{--<div class="form-group">--}}
                                                {{--<label for="second_person_relation">Relation to Child</label>--}}
                                                {{--<input type="text" name="second_person_relation" class="form-control "--}}
                                                       {{--placeholder="Second Person Relation To Child"--}}
                                                       {{--id="second_person_relation">--}}
                                            {{--</div>--}}
                                        {{--</div>--}}

                                    {{--</div>--}}
                                    <!-- /row -->

                                    {{--<div class="row">--}}

                                        {{--<div class="col-md-6">--}}
                                            {{--<div class="form-group">--}}
                                                {{--<label for="emergency_second_mobile">Second Person Mobile</label>--}}
                                                {{--<input type="number" name="emergency_second_mobile"--}}
                                                       {{--class="form-control " placeholder="Second Person Phone Number"--}}
                                                       {{--id="emergency_second_mobile">--}}
                                            {{--</div>--}}
                                        {{--</div>--}}

                                        {{--<div class="col-md-6">--}}
                                            {{--<div class="form-group">--}}
                                                {{--<label for="emergency_second_home_no">Second Person Home No</label>--}}
                                                {{--<input type="text" name="emergency_second_home_no" class="form-control "--}}
                                                       {{--placeholder="Second Person Home Number"--}}
                                                       {{--id="emergency_second_home_no">--}}
                                            {{--</div>--}}
                                        {{--</div>--}}

                                    {{--</div>--}}
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
                                                <input type="text" name="child1_name" class="form-control "
                                                       placeholder="Enter Chile Name" id="child1_name">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="child1_age">Child Age</label>
                                                <input type="number" name="child1_age" class="form-control "
                                                       placeholder="Enter Child Age" min="1" max="60" id="child1_age">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /row -->

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="child1_school">School/University Name</label>
                                                <input type="text" name="child1_school" class="form-control "
                                                       placeholder="Enter Child School or University"
                                                       id="child1_school">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="gender">Gender</label>
                                            <select class="form-control required" name="othergender"
                                                    id="gender">
                                                <option selected>Choose gender</option>
                                                @if(count($int['gen']))
                                                    @foreach($int['gen'] as $key)
                                                        <option value="{{$key->GNID}}">{{$key->Gendername}}</option>
                                                    @endforeach
                                                @endif

                                            </select>

                                        </div>
                                    </div>
                                    <!-- /row -->

                                    <hr style="margin-bottom: 10px; margin-top: 0">


                                    {{--<div class="row">--}}
                                        {{--<div class="col-md-6">--}}
                                            {{--<div class="form-group">--}}
                                                {{--<label for="child2_name">Child Name</label>--}}
                                                {{--<input type="text" name="child1_name" class="form-control "--}}
                                                       {{--placeholder="Enter Chile Name" id="child2_name">--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div class="col-md-6">--}}
                                            {{--<div class="form-group">--}}
                                                {{--<label for="child1_age">Child Age</label>--}}
                                                {{--<input type="number" name="child2_age" class="form-control "--}}
                                                       {{--placeholder="Enter Child Age" min="1" max="60" id="child2_age">--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                    {{--<!-- /row -->--}}

                                    {{--<div class="row">--}}
                                        {{--<div class="col-md-6">--}}
                                            {{--<div class="form-group">--}}
                                                {{--<label for="child1_school">School/University Name</label>--}}
                                                {{--<input type="text" name="child2_school" class="form-control "--}}
                                                       {{--placeholder="Enter Chile School or University"--}}
                                                       {{--id="child2_school">--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div class="col-md-6">--}}
                                            {{--<label for="chile2_gender">Gender</label>--}}
                                            {{--<div class="form-group">--}}

                                                {{--<div class="form-check form-check-inline">--}}
                                                    {{--<input class="form-check-input" type="radio"--}}
                                                           {{--name="inlineRadioOptions" id="inlineRadio1" value="male">--}}
                                                    {{--<label class="form-check-label" for="inlineRadio1">Male</label>--}}
                                                {{--</div>--}}
                                                {{--<div class="form-check form-check-inline">--}}
                                                    {{--<input class="form-check-input" type="radio"--}}
                                                           {{--name="inlineRadioOptions" id="inlineRadio2" value="female">--}}
                                                    {{--<label class="form-check-label" for="inlineRadio2">Female</label>--}}
                                                {{--</div>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}


                                </div>
                                <!-- /step -->

                                <!-- ----------------------------Previous Schools Step ---------------------------------- -->
                                <div class="step">
                                    <h3 class="main_question"><strong>6/8</strong>Enter Some Information about Previous
                                        Schools</h3>
                                    <div class="row">

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="school1_name">School\Nursery Name</label>
                                                <input type="text" name="school1_name" class="form-control "
                                                       placeholder="Enter Previous School Name" id="school1_name">
                                            </div>
                                        </div>



                                    </div>
                                    <!-- /row -->

                                    <div class="row">

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="curriculum1">Curriculum</label>
                                                <input type="text" name="curriculum1" class="form-control "
                                                       placeholder="Enter The Curriculum of School" id="curriculum1">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="father_nationality">grade</label>
                                                <select class="form-control required" name="stu_grade2"
                                                        id="father_nationality">
                                                    <option selected>Choose Grade</option>
                                                    @if(count($int['gr']))
                                                        @foreach($int['gr'] as $key)
                                                            <option value="{{$key->GID}}">{{$key->Gradename}}</option>
                                                        @endforeach
                                                    @endif

                                                </select>
                                            </div>
                                        </div>

                                    </div>
                                    <!-- /row -->


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
                                                <textarea type="text" name="child_hobbies1" class="form-control "
                                                          placeholder="Tell Us More About Your Child Hobbies, Interests, etc..."
                                                          id="child_hobbies"
                                                          style="resize: none; height: 70px"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /row -->

                                    <div class="row">

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="prstatus">Parent status</label>
                                                <select class="form-control required" name="PRSID" id="prstatus">
                                                    <option selected>Choose one</option>
                                                    @if(count($int['pr']))
                                                        @foreach($int['pr'] as $key)
                                                            <option value="{{$key->PRSID}}">{{$key->status}}</option>
                                                        @endforeach
                                                    @endif

                                                </select>
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
                                                <input type="text" name="firstname" class="form-control required"
                                                       placeholder="First name">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" name="lastname" class="form-control required"
                                                       placeholder="Last name">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /row -->

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="email" name="email" class="form-control required"
                                                       placeholder="Your Email">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" name="telephone" class="form-control"
                                                       placeholder="Your Telephone">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /row -->
                                    <br>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group terms">
                                                {{--<input name="terms" type="checkbox" class="icheck " value="yes">--}}
                                                {{--<label>Please accept <a href="#" data-toggle="modal"--}}
                                                                        {{--data-target="#terms-txt">terms and--}}
                                                        {{--conditions</a> ?</label>--}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /step-->

                            </div>
                            <!-- /middle-wizard -->
                            <div id="bottom-wizard">
                                <button type="button" name="backward" class="backward" onclick="goback()">Backward
                                </button>
                                <button type="button" name="forward" class="forward" onclick="">Forward
                                </button>
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
