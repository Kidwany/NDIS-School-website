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
        <div class="breadcrumb-top default-overlay bg-img pt-100 pb-95" style="background-image:url({{asset('website/img/bg/admission_bg.jpg')}});">
            <div class="container">
                <h2>How To Apply</h2>
                <p>The British and American sections of the school are accredited to cater for children aged 2.6 to 17 <br>(from Preschool till Grade 12)</p>
            </div>
        </div>
        <div class="breadcrumb-bottom">
            <div class="container">
                <ul>
                    <li><a href="#">Home</a> <span><i class="fa fa-angle-double-right"></i> How To Apply</span></li>
                </ul>
            </div>
        </div>
    </div>


    <!------ Additional Section ------>
    <div class="achievement-area pt-60 pb-50">
        <div class="container">
            <div class="section-title">
                <h3 class="font-weight-bold" style="font-size: 30px;  margin-bottom: 20px">How to apply for school year <span style="color: #00a651"> 2019/2020:</span></h3>
                <p style="font-size: 18px">NDIS accepts applicants for enrollment in:</p>
                <p style="margin-bottom: 0; font-size: 18px">- Pre-Foundation, Foundation Stage 1 & 2.  <span style="color: #214090; font-size: 18px; font-weight: 600">(UK Curriculum).</span> </p>
                <p style="margin-bottom: 0; font-size: 18px">- Year 1 to 8 <span style="color: #214090; font-size: 18px; font-weight: 600">(British).</span> </p>
                <p style=" font-size: 18px">- Grade 1 to Grade 12  <span style="color: #214090; font-size: 18px; font-weight: 600">(American).</span> {{--<span style="color: #d71e27; font-size: 18px; font-weight: 600">(11 & 12 if capacity allows).</span> --}}</p>
                <p style="">All applicants are assessed on an individual basis and must be in good academic and behavior standing..</p>
                <p style="margin-bottom: 0">All Sections of the below application must be printed and filled in clear handwriting.</p>
            </div>
        </div>
    </div>


    <div class="container">
        <h3 class="font-weight-bold" style="font-size: 30px;  margin-bottom: 20px; padding-left: 35px">Steps of <span style="color: #00a651"> Admission.</span></h3>
    </div>


    <div class="container">
        <div class="wrapper">
            <div class="inner">
                <div id="wizard">
                    <!-- SECTION 1 -->
                    <h4>Diagnostic Test </h4>
                    <section>
                        <p>A diagnostic test will be scheduled to assess the applying student for a fee of 800 EGP paid prior to the test date.



                            <br>
                            <span class="font-weight-bold">Application fees are not a guarantee for admission.</span>
                        </p>
                        {{--<button class="forward">Next Step
                            <i class="zmdi zmdi-long-arrow-right"></i>
                        </button>--}}
                    </section>

                    <!-- SECTION 2 -->
                    <h4>Parents Meeting</h4>
                    <section class="section-style">
                        <div class="form-wrapper">
                            <p>
                                Initially accepted applicants are requested to attend a family interview.
                                <br>The Interview Shall include the applicant and his/her parents.
                                <br>The aim of the subject interview is to agree on the family role in motivation, social and emotional development, Willingness to work and the ability of NDIS to accommodate the needs of the student.



                            </p>
                           {{-- <button class="forward">Next Step
                                <i class="zmdi zmdi-long-arrow-right"></i>
                            </button>--}}
                        </div>
                    </section>

                    <!-- SECTION 3 -->
                    <h4>Assessments Results</h4>
                    <section>
                        <p>Parents will be notified of the assessment result within 5 working days from
                        The assessment date.
                        </p>

                        {{--<button class="forward" style="width: 195px; margin-top: 44px;">Next Step
                            <i class="zmdi zmdi-long-arrow-right"></i>
                        </button>--}}
                    </section>

                    <!-- SECTION 4 -->
                    <h4>Reservation Fee</h4>
                    <section class="section-style">
                        <div class="pay-wrapper">
                            <p>
                                If the student is accepted, a onetime reservation fee of <span class="font-weight-bold">2,500 EGP </span>must be paid within 5 working days.
                                <br>The said fees should be accompanied with the below documents should be presented to guarantee the student’s spot:

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
                                <span class="font-weight-bold">
                                     Important Note
                                </span>
                                <br>  •	If a school bus is required, an amount of 2,000 EGP MUST be paid with the reservation fees or with the 1st installment, by maximum.
                                Otherwise, the student will not be assigned to a bus route.
                                <br>  •	The Reservation amount is accredited from the 1st Installment.


                                <span class="font-weight-bold">
                                     <br>•	Promotion from one year to the next is done upon payment of the 1st installment before 30th June.
                                </span>


                            </p>
                            {{--<button style="width: 195px; margin-top: 45px;">Confirmation
                                <i class="zmdi zmdi-long-arrow-right"></i>
                            </button>--}}
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>


    @include('layouts.footer')
@endsection


