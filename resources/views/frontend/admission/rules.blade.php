@extends('layouts.layouts')
@section('title', 'School Rules')


@section('content')
    @include('layouts.header')

    <div class="breadcrumb-area">

        <div class="breadcrumb-top default-overlay bg-img breadcrumb-overly-5 pt-100 pb-95" style="background-image:url({{asset('website/img/bg/rules_bg.jpg')}});">
            <div class="container">
                <h2>School Rules</h2>
                <p>The school rules reflect the school community’s expectations in terms of acceptable standards of behavior, dress, and personal presentation.</p>
            </div>
        </div>

        <div class="breadcrumb-bottom">
            <div class="container">
                <ul>
                    <li><a href="#">Home</a><span><i class="fa fa-angle-double-right"></i>School Rules</span></li>
                </ul>
            </div>
        </div>

    </div>


    <!------ Responsibilities ------>
    <div class="achievement-area pt-60 pb-40">
        <div class="container">
            <div class="section-title">

                <h3 class="font-weight-bold" style="font-size: 30px;  margin-bottom: 20px">Students  <span style="color: #00a651">Responsibilities</span></h3>
                <p style="margin-bottom: 0">- Attend school regularly. School hours are from 08:00 till 03:00. Students who don’t use the school bus must be punctual, please refer to the tardiness policy in this parent handbook.</p>
                <p style="margin-bottom: 0">- Respect the right of others to learn.</p>
                <p style="margin-bottom: 0">- Respect the peers and teachers in all aspects.</p>
                <p style="margin-bottom: 0">- Respect the property and equipment of school and others.</p>
                <p style="margin-bottom: 0">- Keep the school environment and the local community free from litter.</p>
                <p style="margin-bottom: 0">- Observe the uniform code of the school.</p>
                <p style="margin-bottom: 0">- Students are to bring the required materials daily.</p>

            </div>
        </div>
    </div>

    <!------ Not Allowed ------>
    <div class="achievement-area pt-60 pb-40">
        <div class="container">
            <div class="section-title">

                <h3 class="font-weight-bold" style="font-size: 30px;  margin-bottom: 20px">Not  <span style="color: #00a651">Allowed</span></h3>
                <p style="margin-bottom: 0">- Attend school reghe school b parent handbook.</p>
                <p style="margin-bottom: 0">- They will be left in the principal’s office at the beginning of the day and returned back at the end of the day.</p>
                <p style="margin-bottom: 0">- Match sticks, lighters, cameras, weapons, knives or any other similarities.</p>
                <p style="margin-bottom: 0">- Alcohol, drugs, chemicals, cigarettes or any other similarities.</p>

            </div>
        </div>
    </div>

    <!------ General Rules ------>
    <div class="achievement-area pt-60 pb-40">
        <div class="container">
            <div class="section-title">

                <h3 class="font-weight-bold" style="font-size: 30px;  margin-bottom: 20px">General  <span style="color: #00a651">Rules</span></h3>
                <p style="margin-bottom: 0">- Parents are notified with the date of each Parents’ Meeting.</p>
                <p style="margin-bottom: 0">- For emergency meeting, the parent should contact the reception to set an appointment ahead of time.</p>
                <p style="margin-bottom: 0">- Books and booklets are handed to the students within one week from the beginning of the academic year. It may take more time for the National Division according to the Ministry of Education.</p>

            </div>
        </div>
    </div>


    <!------ Lower Grades ------>
    <div class="achievement-area pt-60 pb-40">
        <div class="container">
            <div class="section-title">

                <h3 class="font-weight-bold" style="font-size: 30px;  margin-bottom: 20px">Quizzes Policy for   <span style="color: #00a651">Lower Grades</span></h3>
                <p style="margin-bottom: 0">- A quiz for each subject every two weeks.(Subject to change).</p>
                <p style="margin-bottom: 0">- For year 1, students write in pencil in the first term and they are trained to use pens starting the second term using the erasable pen.</p>
                <p style="margin-bottom: 0">- For 2nd and 3rd years, the students are obliged to write in blue pen, no marks will be scored in case of writing in pencil.</p>
                <p style="margin-bottom: 0">- In case of absence on quizzes or exam days, students can be permitted to repeat any exam or quiz as per advice of HoD.</p>

            </div>
        </div>
    </div>


    <!------Quizzes Policy for higher grades------>
    <div class="achievement-area pt-60 pb-40">
        <div class="container">
            <div class="section-title">

                <h3 class="font-weight-bold" style="font-size: 30px;  margin-bottom: 20px">Quizzes Policy for   <span style="color: #00a651">Higher Grades</span></h3>
                <p style="margin-bottom: 0">- A weekly quiz for some subjects.</p>
                <p style="margin-bottom: 0">- Quizzes plan will be set so that no overlap will occur.</p>
                <p style="margin-bottom: 0">- In case of absence on quizzes or exam days, students will not be permitted to repeat any exam or quiz.</p>

            </div>
        </div>
    </div>




    <!------ Trips and Fun days Policy ------>
    <div class="achievement-area pt-60 pb-40">
        <div class="container">
            <div class="section-title">

                <h3 class="font-weight-bold" style="font-size: 30px;  margin-bottom: 20px">Trips & Fun Days <span style="color: #00a651">Policy</span></h3>
                <p style="margin-bottom: 0">- Students are allowed to come out of uniform on fun days.</p>
                <p style="margin-bottom: 0">- Students must wear full uniform on trip days or any other activities held outside the school.</p>
                <p style="margin-bottom: 0">- On fun days and trips, all devices such as mobile phones, tablets, i-pads, etc… are totally prohibited and the school is not responsible for the loss of any device.</p>

            </div>
        </div>
    </div>




    <!------ Dress Code: ------>
    <div class="achievement-area pt-60 pb-40">
        <div class="container">
            <div class="section-title">

                <h3 class="font-weight-bold" style="font-size: 30px;  margin-bottom: 20px">Dress<span style="color: #00a651">Code</span></h3>
                <p style="margin-bottom: 0">- The school uniform should be clean, ironed, and spots free.</p>
                <p style="margin-bottom: 0">- Black shoes or trainers and white socks should be worn.</p>
                <p style="margin-bottom: 0">- P.E. uniform is to be worn on days that have P.E. sessions on schedule.</p>
                <p style="margin-bottom: 0">- Jeans are not allowed.</p>
                <p style="margin-bottom: 0">- No visible tattoos.</p>
                <p style="margin-bottom: 0">- Hair styles should be presentable, no hair colors or unacceptable styles.</p>
                <p style="margin-bottom: 0">- No visible jewelry to be worn.</p>
                <p style="margin-bottom: 0">- Boys who have beard should shave it regularly.</p>
                <p style="margin-bottom: 0">- Girls should not wear make-up or nail color.</p>
                <p style="margin-bottom: 0">- Please label your child’s jacket or any other belongings such as flasks, pencil cases, etc…. with his/her full name. This makes it easier to find any lost item at school.</p>

            </div>
        </div>
    </div>

    @include('layouts.footer')
@endsection
