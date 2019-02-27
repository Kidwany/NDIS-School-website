@extends('layouts.layouts')
@section('title', 'Application Tracking')

@section('customizedStyle')
    <link href="{{asset('metronic/assets/vendors/base/vendors.bundle.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('metronic/assets/demo/default/base/style.bundle.css')}}" rel="stylesheet" type="text/css"/>
@endsection

@section('customizedScript')
    <!--begin::Base Scripts -->
    <script src="{{asset('metronic/assets/vendors/base/vendors.bundle.js')}}" type="text/javascript"></script>
    <script src="{{asset('metronic/assets/demo/default/base/scripts.bundle.js')}}" type="text/javascript"></script>
    <!--end::Base Scripts -->
    <!--begin::Page Resources -->
    <script src="{{asset('metronic/assets/demo/default/custom/crud/wizard/wizard.js')}}"
            type="text/javascript"></script>
@endsection

@section('content')
    @include('layouts.header')

    <!------------------------ Title banner section ----------------->
    <div class="breadcrumb-area">
        <div class="breadcrumb-top default-overlay bg-img pt-100 pb-95"
             style="background-image:url({{asset('website/img/bg/admission_bg.jpg')}});">
            <div class="container">
                <h2>Track your application</h2>
                <p>From this page you can track your application status,<br> from preschool through to Year/Grade 12.
                </p>
            </div>
        </div>
        <div class="breadcrumb-bottom">
            <div class="container">
                <ul>
                    <li><a href="#">Home</a> <span><i class="fa fa-angle-double-right"></i> Track You Application</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    @if($application)
        <div class="container">
            <!--begin: Portlet Body-->
            <div class="m-portlet__body m-portlet__body--no-padding">
                <!--begin: Form Wizard-->
                <div class="m-wizard m-wizard--3 m-wizard--success" id="m_wizard">
                    <!--begin: Message container -->
                    <div class="m-portlet__padding-x">
                        <!-- Here you can put a message or alert -->
                    </div>
                    <!--end: Message container -->
                    <div class="row m-row--no-padding">
                        <div class="col-xl-3 col-lg-12">
                            <!--begin: Form Wizard Head -->
                            <div class="m-wizard__head">
                                <!--begin: Form Wizard Progress -->
                            {{--<div class="m-wizard__progress">
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0"
                                         aria-valuemax="100"></div>
                                </div>
                            </div>--}}

                            <!--end: Form Wizard Progress -->
                                <!--begin: Form Wizard Nav -->
                                <div class="m-wizard__nav">
                                    <div class="m-wizard__steps">
                                        <div class="m-wizard__step m-wizard__step--current"
                                             m-wizard-target="m_wizard_form_step_1">
                                            <div class="m-wizard__step-info">
                                                <a href="#" class="m-wizard__step-number">
                                                <span>
                                                    <span>
                                                        1
                                                    </span>
                                                </span>
                                                </a>
                                                <div class="m-wizard__step-line">
                                                    <span></span>
                                                </div>
                                                <div class="m-wizard__step-label">
                                                    Application Status
                                                </div>
                                            </div>
                                        </div>
                                        <div class="m-wizard__step"  m-wizard-target="m_wizard_form_step_2">
                                            <div class="m-wizard__step-info">
                                                <a href="#" class="m-wizard__step-number">
                                                <span
                                                    @if( $application[0]->AppMoredetails != null)
                                                    @if($application[0]->AppMoredetails->diagnostictestdate != null) style="background-color: #7ddcc9;" @endif
                                                    @endif>
                                                    <span>
                                                        2
                                                    </span>
                                                </span>
                                                </a>
                                                <div class="m-wizard__step-line">
                                                    <span></span>
                                                </div>
                                                <div class="m-wizard__step-label">
                                                    Diagnostic Test
                                                </div>
                                            </div>
                                        </div>
                                        <div class="m-wizard__step"  m-wizard-target="m_wizard_form_step_3">
                                            <div class="m-wizard__step-info">
                                                <a href="#" class="m-wizard__step-number">
                                                <span
                                                    @if( $application[0]->AppMoredetails != null)
                                                    @if($application[0]->AppMoredetails->parentmeeting != null) style="background-color: #7ddcc9;" @endif
                                                    @endif
                                                >
                                                    <span>
                                                        3
                                                    </span>
                                                </span>
                                                </a>
                                                <div class="m-wizard__step-line">
                                                    <span></span>
                                                </div>
                                                <div class="m-wizard__step-label">
                                                    Parents Meeting
                                                </div>
                                            </div>
                                        </div>
                                        <div class="m-wizard__step" m-wizard-target="m_wizard_form_step_4">
                                            <div class="m-wizard__step-info">
                                                <a href="#" class="m-wizard__step-number">
                                                <span
                                                    @if( $application[0]->AppMoredetails != null)
                                                    @if($application[0]->AppMoredetails->assessmentdate != null) style="background-color: #7ddcc9;" @endif
                                                    @endif>
                                                    <span>
                                                        4
                                                    </span>
                                                </span>
                                                </a>
                                                <div class="m-wizard__step-line">
                                                    <span></span>
                                                </div>
                                                <div class="m-wizard__step-label">
                                                    Assessment
                                                </div>
                                            </div>
                                        </div>
                                        <div class="m-wizard__step" m-wizard-target="m_wizard_form_step_5">
                                            <div class="m-wizard__step-info">
                                                <a href="#" class="m-wizard__step-number">
                                                <span
                                                    @if( $application[0]->AppMoredetails != null)
                                                    @if($application[0]->AppMoredetails->assessmentresult != null && $application[0]->AppMoredetails->assessmentresult != null) style="background-color: #7ddcc9;" @endif
                                                    @endif>
                                                    <span>
                                                        5
                                                    </span>
                                                </span>
                                                </a>
                                                <div class="m-wizard__step-line">
                                                    <span></span>
                                                </div>
                                                <div class="m-wizard__step-label">
                                                    Reservation Fee
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end: Form Wizard Nav -->
                            </div>
                            <!--end: Form Wizard Head -->
                        </div>
                        <div class="col-xl-9 col-lg-12">
                            <!--begin: Form Wizard Form-->
                            <div class="m-wizard__form" style="min-height: 90%">
                                <!--
            1) Use m-form--label-align-left class to alight the form input lables to the right
            2) Use m-form--state class to highlight input control borders on form validation
        -->
                                <form class="m-form m-form--label-align-left- m-form--state-" id="m_form">
                                    <!--begin: Form Body -->
                                    <div class="m-portlet__body m-portlet__body--no-padding">

                                    @if( $application[0]->AppMoredetails != null)
                                        <!--begin: Form Wizard Step 1-->
                                            <div class="m-wizard__form-step
                                        {{$application[0]->AppMoredetails->diagnostictestdate == null ? 'd-inline-block' : 'd-none'}} mb-50"
                                                 id="m_wizard_form_step_1">
                                                <div class="m-form__section m-form__section--first">
                                                    <div class="m-form__heading">
                                                        <h3 class="m-form__heading-title">
                                                            Application Status:
                                                        </h3>
                                                    </div>
                                                </div>
                                                <div class="m-separator m-separator--dashed m-separator--lg"></div>
                                                <div class="m-form__section">
                                                    <div class="m-form__heading">
                                                        <p style="font-size: 17px; color: #4e4e4e; font-weight: 400; font-family: inherit">
                                                            Your Application has been sent <strong style="color: #0ac766">successfully</strong>,
                                                            We will check if your info accept our policies and will contact soon.
                                                            {{--<i data-toggle="m-tooltip" data-width="auto"
                                                               class="m-form__heading-help-icon flaticon-info"
                                                               title="Some help text goes here"></i>--}}
                                                        </p>
                                                        {{--<p class="mt-40 font-weight-bold">
                                                            For More Info Contact With Us
                                                        </p>

                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <i class="fa fa-phone"></i> Phone: <span style="color: #0ac766">01023344443</span>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <i class="fa fa-envelope"></i> Email: <span style="color: #0ac766">info@ndbischool.com</span>
                                                            </div>
                                                        </div>--}}
                                                    </div>
                                                </div>
                                            </div>

                                        @else
                                        <!--begin: Form Wizard Step 1-->
                                            <div class="m-wizard__form-step d-inline-block mb-50"
                                                 id="m_wizard_form_step_1">
                                                <div class="m-form__section m-form__section--first">
                                                    <div class="m-form__heading">
                                                        <h3 class="m-form__heading-title">
                                                            Application Status:
                                                        </h3>
                                                    </div>
                                                </div>
                                                <div class="m-separator m-separator--dashed m-separator--lg"></div>
                                                <div class="m-form__section">
                                                    <div class="m-form__heading">
                                                        <p style="font-size: 17px; color: #4e4e4e; font-weight: 400; font-family: inherit">
                                                            Your Application has been sent <strong style="color: #0ac766">successfully</strong>,
                                                            We will check if your info accept our policies and will contact soon.
                                                            {{--<i data-toggle="m-tooltip" data-width="auto"
                                                               class="m-form__heading-help-icon flaticon-info"
                                                               title="Some help text goes here"></i>--}}
                                                        </p>
                                                        <p class="mt-40 font-weight-bold">
                                                            For More Info Contact With Us
                                                        </p>

                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <i class="fa fa-phone"></i> Phone: <span style="color: #0ac766">01023344443</span>
                                                            </div>
                                                            <div class="col-lg-6">
                                                                <i class="fa fa-envelope"></i> Email: <span style="color: #0ac766">info@ndbischool.com</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!--end: Form Wizard Step 1-->
                                    @endif


                                    @if( $application[0]->AppMoredetails != null)
                                        <!--begin: Form Wizard Step 2 (Diagnostic Test)-->
                                            <div class="m-wizard__form-step
                                    {{$application[0]->AppMoredetails->diagnostictestdate != null ? 'd-inline-block' : 'd-none'}}" id="m_wizard_form_step_2">
                                                <div class="m-form__section m-form__section--first">
                                                    <div class="m-form__heading">
                                                        <h3 class="m-form__heading-title">
                                                            Diagnostic Test
                                                        </h3>
                                                    </div>
                                                </div>
                                                <div class="m-separator m-separator--dashed m-separator--lg"></div>
                                                <div class="m-form__section">
                                                    <div class="m-form__heading">
                                                        <h3 class="m-form__heading-title">
                                                            <i class="fa fa-calendar"></i> Diagnostic Test Appointment
                                                        </h3>

                                                        <p style="font-size: 17px; color: #4e4e4e; font-weight: 400; font-family: inherit">
                                                            Your Child Diagnostic Test will be take place in <strong style="color: #0ac766">{{date('d M Y', strtotime($application[0]->AppMoredetails->diagnostictestdate))}}</strong>,
                                                            Please attend to school in time.
                                                            {{--<i data-toggle="m-tooltip" data-width="auto"
                                                               class="m-form__heading-help-icon flaticon-info"
                                                               title="Some help text goes here"></i>--}}
                                                        </p>
                                                    </div>
                                                </div>

                                                <div class="m-separator m-separator--dashed m-separator--lg"></div>
                                                <div class="m-form__section">
                                                    <div class="m-form__heading">
                                                        {{--<h3 class="m-form__heading-title" style="color: #e4e4e4">
                                                            Diagnostic Test Result
                                                        </h3>--}}

                                                        {{--<p style="font-size: 17px; color: #4e4e4e; font-weight: 400; font-family: inherit">
                                                            Your Child Diagnostic Test will be take place in <strong style="color: #0ac766">15 Feb 2019</strong>,
                                                            Please attend to school in time.
                                                            --}}{{--<i data-toggle="m-tooltip" data-width="auto"
                                                               class="m-form__heading-help-icon flaticon-info"
                                                               title="Some help text goes here"></i>--}}{{--
                                                        </p>--}}
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end: Form Wizard Step 3-->
                                    @endif

                                    @if( $application[0]->AppMoredetails != null)
                                        <!--begin: Form Wizard Step 3 (Parents Meeting)-->
                                            <div class="m-wizard__form-step
                                             {{$application[0]->AppMoredetails->parentmeeting != null ? 'd-inline-block' : 'd-none'}}" id="m_wizard_form_step_3">
                                                <div class="m-form__section m-form__section--first">
                                                    <div class="m-form__heading">
                                                        <h3 class="m-form__heading-title">
                                                            Parents Meeting:
                                                        </h3>
                                                    </div>
                                                </div>
                                                <div class="m-separator m-separator--dashed m-separator--lg"></div>
                                                <div class="m-form__section">
                                                    <div class="m-form__heading">
                                                        <h3 class="m-form__heading-title">
                                                            <i class="fa fa-calendar"></i> Parents Meeting Appointment
                                                        </h3>

                                                        <p style="font-size: 17px; color: #4e4e4e; font-weight: 400; font-family: inherit">
                                                            Your Parent Meeting will be take place in <strong style="color: #0ac766">{{date('d M Y', strtotime($application[0]->AppMoredetails->parentmeeting))}}</strong>,
                                                            Please attend to school in time.
                                                            {{--<i data-toggle="m-tooltip" data-width="auto"
                                                               class="m-form__heading-help-icon flaticon-info"
                                                               title="Some help text goes here"></i>--}}
                                                        </p>
                                                    </div>
                                                </div>

                                                <div class="m-separator m-separator--dashed m-separator--lg"></div>
                                                <div class="m-form__section">
                                                    <div class="m-form__heading">
                                                        {{--<h3 class="m-form__heading-title" style="color: #e4e4e4">
                                                            Diagnostic Test Result
                                                        </h3>--}}

                                                        {{--<p style="font-size: 17px; color: #4e4e4e; font-weight: 400; font-family: inherit">
                                                            Your Child Diagnostic Test will be take place in <strong style="color: #0ac766">15 Feb 2019</strong>,
                                                            Please attend to school in time.
                                                            --}}{{--<i data-toggle="m-tooltip" data-width="auto"
                                                               class="m-form__heading-help-icon flaticon-info"
                                                               title="Some help text goes here"></i>--}}{{--
                                                        </p>--}}
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end: Form Wizard Step 2-->
                                    @endif



                                    @if( $application[0]->AppMoredetails != null)
                                        <!--begin: Form Wizard Step 4 (Assessment) 4-->
                                            <div class="m-wizard__form-step
                                        {{$application[0]->AppMoredetails->assessmentdate != null ? 'd-inline-block' : 'd-none'}}" id="m_wizard_form_step_4">
                                                <div class="m-form__section m-form__section--first">
                                                    <div class="m-form__heading">
                                                        <h3 class="m-form__heading-title">
                                                            Assessments
                                                        </h3>
                                                    </div>
                                                </div>
                                                <div class="m-separator m-separator--dashed m-separator--lg"></div>
                                                <div class="m-form__section">
                                                    <div class="m-form__heading">
                                                        <h3 class="m-form__heading-title">
                                                            <i class="fa fa-calendar"></i> Assessment Appointment
                                                        </h3>

                                                        <p style="font-size: 16px; color: #4e4e4e; font-weight: 400; font-family: inherit; margin-top: 15px">
                                                            - Your Child Diagnostic Test will be take place in <strong style="color: #0ac766">28 Feb 2019</strong>,
                                                            {{--<i data-toggle="m-tooltip" data-width="auto"
                                                               class="m-form__heading-help-icon flaticon-info"
                                                               title="Some help text goes here"></i>--}}
                                                        </p>
                                                        <p> - Your Child score Must exceed <strong style="color: #0ac766">50%</strong></p>
                                                    </div>
                                                </div>

                                                <div class="m-separator m-separator--dashed m-separator--lg"></div>
                                                <div class="m-form__section">
                                                    <div class="m-form__heading">
                                                        {{--<h3 class="m-form__heading-title" style="color: #e4e4e4">
                                                            <i class="fa fa-trophy"></i> Score: <strong class="text-success"></strong>
                                                        </h3>--}}

                                                        {{--<p style="font-size: 17px; color: #4e4e4e; font-weight: 400; font-family: inherit">
                                                            Your Child Diagnostic Test will be take place in <strong style="color: #0ac766">15 Feb 2019</strong>,
                                                            Please attend to school in time.
                                                            --}}{{--<i data-toggle="m-tooltip" data-width="auto"
                                                               class="m-form__heading-help-icon flaticon-info"
                                                               title="Some help text goes here"></i>--}}{{--
                                                        </p>--}}
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end: Form Wizard Step 4-->
                                    @endif


                                    @if( $application[0]->AppMoredetails != null)
                                        <!--begin: Form Wizard Step 5-->
                                            <div class="m-wizard__form-step
                                    {{$application[0]->AppMoredetails->assessmentresult != 'failed' && $application[0]->AppMoredetails->assessmentresult != null ? 'd-inline-block' : 'd-none'}}" id="m_wizard_form_step_5">
                                                <div class="m-form__section m-form__section--first">
                                                    <div class="m-form__heading">
                                                        <h3 class="m-form__heading-title">
                                                            Reservation Fee
                                                        </h3>
                                                    </div>
                                                </div>
                                                <div class="m-separator m-separator--dashed m-separator--lg"></div>
                                                <div class="m-form__section">
                                                    <div class="m-form__heading">
                                                        <h3 class="m-form__heading-title">
                                                            <i class="fa fa-money"></i> Reservation Amount
                                                        </h3>

                                                        <p style="font-size: 16px; color: #4e4e4e; font-weight: 400; font-family: inherit; margin-top: 15px">
                                                            - Please pay the one time reservation fee  <strong style="color: #0ac766">2500 L.E</strong>,
                                                            {{--<i data-toggle="m-tooltip" data-width="auto"
                                                               class="m-form__heading-help-icon flaticon-info"
                                                               title="Some help text goes here"></i>--}}
                                                        </p>

                                                        <p> - You Must pay the amount within <strong style="color: #0ac766">5 working Days.</strong></p>
                                                    </div>
                                                </div>

                                                <div class="m-separator m-separator--dashed m-separator--lg"></div>
                                                <div class="m-form__section">
                                                    <div class="m-form__heading">
                                                        <h3 class="m-form__heading-title" style="color: #e4e4e4">
                                                            <i class="fa fa-trophy"></i> Required Documents: <strong class="text-success"></strong>
                                                        </h3>


                                                        <p style="font-size: 16px; color: #4e4e4e; font-weight: 400; font-family: inherit; margin-top: 15px">
                                                            - Please pay the one time reservation fee
                                                        </p>

                                                        <p> - Copy of vaccination report. </p>
                                                        <p> - Copy of parents’ IDs or Passports. </p>
                                                        <p> - An original electronic birth certificate. </p>
                                                        <p> - 8 recent passport-sized color photos. </p>
                                                        <p> - The original stamped report from the previous school. </p>

                                                        {{--<p style="font-size: 17px; color: #4e4e4e; font-weight: 400; font-family: inherit">
                                                            Your Child Diagnostic Test will be take place in <strong style="color: #0ac766">15 Feb 2019</strong>,
                                                            Please attend to school in time.
                                                            --}}{{--<i data-toggle="m-tooltip" data-width="auto"
                                                               class="m-form__heading-help-icon flaticon-info"
                                                               title="Some help text goes here"></i>--}}{{--
                                                        </p>--}}
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end: Form Wizard Step 5-->
                                        @endif


                                    </div>
                                    <!--end: Form Body -->
                                    <!--begin: Form Actions -->
                                {{--<div class="m-portlet__foot m-portlet__foot--fit m--margin-top-40">
                                    <div class="m-form__actions">
                                        <div class="row">
                                            <div class="col-lg-6 m--align-left">
                                                <a href="#" class="btn btn-secondary m-btn m-btn--custom m-btn--icon"
                                                   data-wizard-action="prev">
                                                    <span>
                                                        <i class="la la-arrow-left"></i>
                                                        &nbsp;&nbsp;
                                                        <span>
                                                            Back
                                                        </span>
                                                    </span>
                                                </a>
                                            </div>
                                            <div class="col-lg-6 m--align-right">
                                                <a href="#" class="btn btn-primary m-btn m-btn--custom m-btn--icon"
                                                   data-wizard-action="submit">
                                                    <span>
                                                        <i class="la la-check"></i>
                                                        &nbsp;&nbsp;
                                                        <span>
                                                            Submit
                                                        </span>
                                                    </span>
                                                </a>
                                                <a href="#" class="btn btn-success m-btn m-btn--custom m-btn--icon"
                                                   data-wizard-action="next">
                                                    <span>
                                                        <span>
                                                            Save & Continue
                                                        </span>
                                                        &nbsp;&nbsp;
                                                        <i class="la la-arrow-right"></i>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>--}}
                                <!--end: Form Actions -->
                                </form>
                            </div>
                            <!--end: Form Wizard Form-->
                        </div>
                    </div>
                </div>
                <!--end: Form Wizard-->
            </div>
            <!--end: Portlet Body-->
        </div>
    @endif








    @include('layouts.footer')
@endsection


