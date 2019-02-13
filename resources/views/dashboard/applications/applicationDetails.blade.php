@extends('dashboard.layouts.layouts')
@section('title', 'Dashboard')
@section('content')


    <div class="m-grid__item m-grid__item--fluid m-wrapper">
        <!-- BEGIN: Subheader -->
        <div class="m-subheader ">
            <div class="d-flex align-items-center">
                <div class="mr-auto">
                    <h3 class="m-subheader__title ">
                        Application Details
                    </h3>
                </div>
                <div>
                    <div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" m-dropdown-toggle="hover" aria-expanded="true">
                        <a href="#" class="m-portlet__nav-link btn btn-lg btn-secondary  m-btn m-btn--outline-2x m-btn--air m-btn--icon m-btn--icon-only m-btn--pill  m-dropdown__toggle">
                            <i class="la la-plus m--hide"></i>
                            <i class="la la-ellipsis-h"></i>
                        </a>
                        <div class="m-dropdown__wrapper">
                            <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                            <div class="m-dropdown__inner">
                                <div class="m-dropdown__body">
                                    <div class="m-dropdown__content">
                                        <ul class="m-nav">
                                            <li class="m-nav__section m-nav__section--first m--hide">
                                                                <span class="m-nav__section-text">
                                                                    Quick Actions
                                                                </span>
                                            </li>
                                            <li class="m-nav__item">
                                                <a href="" class="m-nav__link">
                                                    <i class="m-nav__link-icon flaticon-share"></i>
                                                    <span class="m-nav__link-text">
                                                                        Activity
                                                                    </span>
                                                </a>
                                            </li>
                                            <li class="m-nav__item">
                                                <a href="" class="m-nav__link">
                                                    <i class="m-nav__link-icon flaticon-chat-1"></i>
                                                    <span class="m-nav__link-text">
                                                                        Messages
                                                                    </span>
                                                </a>
                                            </li>
                                            <li class="m-nav__item">
                                                <a href="" class="m-nav__link">
                                                    <i class="m-nav__link-icon flaticon-info"></i>
                                                    <span class="m-nav__link-text">
                                                                        FAQ
                                                                    </span>
                                                </a>
                                            </li>
                                            <li class="m-nav__item">
                                                <a href="" class="m-nav__link">
                                                    <i class="m-nav__link-icon flaticon-lifebuoy"></i>
                                                    <span class="m-nav__link-text">
                                                                        Support
                                                                    </span>
                                                </a>
                                            </li>
                                            <li class="m-nav__separator m-nav__separator--fit"></li>
                                            <li class="m-nav__item">
                                                <a href="#" class="btn btn-outline-danger m-btn m-btn--pill m-btn--wide btn-sm">
                                                    Submit
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: Subheader -->
        <div class="m-content">
            <div class="row">
                {{--<div class="col-xl-3 col-lg-4">
                    <div class="m-portlet m-portlet--full-height  ">
                        <div class="m-portlet__body">
                            <div class="m-card-profile">
                                <div class="m-card-profile__title m--hide">
                                    Your Profile
                                </div>
                                <div class="m-card-profile__pic">
                                    <div class="m-card-profile__pic-wrapper">
                                        <img src="../assets/app/media/img/users/user4.jpg" alt=""/>
                                    </div>
                                </div>
                                <div class="m-card-profile__details">
                                                    <span class="m-card-profile__name">
                                                        Mark Andre
                                                    </span>
                                    <a href="" class="m-card-profile__email m-link">
                                        mark.andre@gmail.com
                                    </a>
                                </div>
                            </div>
                            <ul class="m-nav m-nav--hover-bg m-portlet-fit--sides">
                                <li class="m-nav__separator m-nav__separator--fit"></li>
                                <li class="m-nav__section m--hide">
                                                    <span class="m-nav__section-text">
                                                        Section
                                                    </span>
                                </li>
                                <li class="m-nav__item">
                                    <a href="../header/profile&amp;demo=default.html" class="m-nav__link">
                                        <i class="m-nav__link-icon flaticon-profile-1"></i>
                                        <span class="m-nav__link-title">
                                                            <span class="m-nav__link-wrap">
                                                                <span class="m-nav__link-text">
                                                                    My Profile
                                                                </span>
                                                                <span class="m-nav__link-badge">
                                                                    <span class="m-badge m-badge--success">
                                                                        2
                                                                    </span>
                                                                </span>
                                                            </span>
                                                        </span>
                                    </a>
                                </li>
                                <li class="m-nav__item">
                                    <a href="../header/profile&amp;demo=default.html" class="m-nav__link">
                                        <i class="m-nav__link-icon flaticon-share"></i>
                                        <span class="m-nav__link-text">
                                                            Activity
                                                        </span>
                                    </a>
                                </li>
                                <li class="m-nav__item">
                                    <a href="../header/profile&amp;demo=default.html" class="m-nav__link">
                                        <i class="m-nav__link-icon flaticon-chat-1"></i>
                                        <span class="m-nav__link-text">
                                                            Messages
                                                        </span>
                                    </a>
                                </li>
                                <li class="m-nav__item">
                                    <a href="../header/profile&amp;demo=default.html" class="m-nav__link">
                                        <i class="m-nav__link-icon flaticon-graphic-2"></i>
                                        <span class="m-nav__link-text">
                                                            Sales
                                                        </span>
                                    </a>
                                </li>
                                <li class="m-nav__item">
                                    <a href="../header/profile&amp;demo=default.html" class="m-nav__link">
                                        <i class="m-nav__link-icon flaticon-time-3"></i>
                                        <span class="m-nav__link-text">
                                                            Events
                                                        </span>
                                    </a>
                                </li>
                                <li class="m-nav__item">
                                    <a href="../header/profile&amp;demo=default.html" class="m-nav__link">
                                        <i class="m-nav__link-icon flaticon-lifebuoy"></i>
                                        <span class="m-nav__link-text">
                                                            Support
                                                        </span>
                                    </a>
                                </li>
                            </ul>
                            <div class="m-portlet__body-separator"></div>
                            <div class="m-widget1 m-widget1--paddingless">
                                <div class="m-widget1__item">
                                    <div class="row m-row--no-padding align-items-center">
                                        <div class="col">
                                            <h3 class="m-widget1__title">
                                                Member Profit
                                            </h3>
                                            <span class="m-widget1__desc">
                                                                Awerage Weekly Profit
                                                            </span>
                                        </div>
                                        <div class="col m--align-right">
                                                            <span class="m-widget1__number m--font-brand">
                                                                +$17,800
                                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="m-widget1__item">
                                    <div class="row m-row--no-padding align-items-center">
                                        <div class="col">
                                            <h3 class="m-widget1__title">
                                                Orders
                                            </h3>
                                            <span class="m-widget1__desc">
                                                                Weekly Customer Orders
                                                            </span>
                                        </div>
                                        <div class="col m--align-right">
                                                            <span class="m-widget1__number m--font-danger">
                                                                +1,800
                                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="m-widget1__item">
                                    <div class="row m-row--no-padding align-items-center">
                                        <div class="col">
                                            <h3 class="m-widget1__title">
                                                Issue Reports
                                            </h3>
                                            <span class="m-widget1__desc">
                                                                System bugs and issues
                                                            </span>
                                        </div>
                                        <div class="col m--align-right">
                                                            <span class="m-widget1__number m--font-success">
                                                                -27,49%
                                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>--}}
                <div class="col-xl-12 col-lg-12">
                    <div class="m-portlet m-portlet--full-height m-portlet--tabs  ">
                        <div class="m-portlet__head">
                            <div class="m-portlet__head-tools">
                                <ul class="nav nav-tabs m-tabs m-tabs-line   m-tabs-line--left m-tabs-line--primary" role="tablist">
                                    <li class="nav-item m-tabs__item">
                                        <a class="nav-link m-tabs__link active" data-toggle="tab" href="#all_app_info" role="tab">
                                            <i class="flaticon-share m--hide"></i>
                                            All Info
                                        </a>
                                    </li>
                                    <li class="nav-item m-tabs__item">
                                        <a class="nav-link m-tabs__link" data-toggle="tab" href="#student_data" role="tab">
                                            <i class="flaticon-share m--hide"></i>
                                            Student Info
                                        </a>
                                    </li>
                                    <li class="nav-item m-tabs__item">
                                        <a class="nav-link m-tabs__link" data-toggle="tab" href="#father_data" role="tab">
                                            Father Data
                                        </a>
                                    </li>
                                    <li class="nav-item m-tabs__item">
                                        <a class="nav-link m-tabs__link" data-toggle="tab" href="#mother_data" role="tab">
                                            Mother Data
                                        </a>
                                    </li>
                                    <li class="nav-item m-tabs__item">
                                        <a class="nav-link m-tabs__link" data-toggle="tab" href="#emergency_data" role="tab">
                                            Emergency
                                        </a>
                                    </li>
                                    <li class="nav-item m-tabs__item">
                                        <a class="nav-link m-tabs__link" data-toggle="tab" href="#other_children" role="tab">
                                            Other Children
                                        </a>
                                    </li>
                                    <li class="nav-item m-tabs__item">
                                        <a class="nav-link m-tabs__link" data-toggle="tab" href="#previous_schools" role="tab">
                                            Previous Schools
                                        </a>
                                    </li>
                                    <li class="nav-item m-tabs__item">
                                        <a class="nav-link m-tabs__link" data-toggle="tab" href="#additional_info" role="tab">
                                            Additional Info
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="m-portlet__head-tools">
                                <ul class="m-portlet__nav">
                                    <li class="m-portlet__nav-item m-portlet__nav-item--last">
                                        <div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" m-dropdown-toggle="hover" aria-expanded="true">
                                            <a href="#" class="m-portlet__nav-link btn btn-lg btn-secondary  m-btn m-btn--icon m-btn--icon-only m-btn--pill  m-dropdown__toggle">
                                                <i class="la la-gear"></i>
                                            </a>

                                            <!-- END: Side Menu -->
                                            <div class="m-dropdown__wrapper">
                                                <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                                                <div class="m-dropdown__inner">
                                                    <div class="m-dropdown__body">
                                                        <div class="m-dropdown__content">
                                                            <ul class="m-nav">
                                                                <li class="m-nav__section m-nav__section--first">
                                                                    <span class="m-nav__section-text">
                                                                        Quick Actions
                                                                    </span>
                                                                </li>
                                                                <li class="m-nav__item">
                                                                    <a href="" class="m-nav__link">
                                                                        <i class="m-nav__link-icon flaticon-share"></i>
                                                                        <span class="m-nav__link-text">
                                                                            Create Post
                                                                        </span>
                                                                    </a>
                                                                </li>
                                                                <li class="m-nav__item">
                                                                    <a href="" class="m-nav__link">
                                                                        <i class="m-nav__link-icon flaticon-chat-1"></i>
                                                                        <span class="m-nav__link-text">
                                                                            Send Messages
                                                                        </span>
                                                                    </a>
                                                                </li>
                                                                <li class="m-nav__item">
                                                                    <a href="" class="m-nav__link">
                                                                        <i class="m-nav__link-icon flaticon-multimedia-2"></i>
                                                                        <span class="m-nav__link-text">
                                                                            Upload File
                                                                        </span>
                                                                    </a>
                                                                </li>
                                                                <li class="m-nav__section">
                                                                    <span class="m-nav__section-text">
                                                                        Useful Links
                                                                    </span>
                                                                </li>
                                                                <li class="m-nav__item">
                                                                    <a href="" class="m-nav__link">
                                                                        <i class="m-nav__link-icon flaticon-info"></i>
                                                                        <span class="m-nav__link-text">
                                                                            FAQ
                                                                        </span>
                                                                    </a>
                                                                </li>
                                                                <li class="m-nav__item">
                                                                    <a href="" class="m-nav__link">
                                                                        <i class="m-nav__link-icon flaticon-lifebuoy"></i>
                                                                        <span class="m-nav__link-text">
                                                                            Support
                                                                        </span>
                                                                    </a>
                                                                </li>
                                                                <li class="m-nav__separator m-nav__separator--fit m--hide"></li>
                                                                <li class="m-nav__item m--hide">
                                                                    <a href="#" class="btn btn-outline-danger m-btn m-btn--pill m-btn--wide btn-sm">
                                                                        Submit
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="tab-content">
                            <!-- Begin: All Info Data -->
                            <div class="tab-pane active" id="all_app_info">
                                <!-- Begin: Student Data -->
                                @include('dashboard.applications.applicationComponents.all_info')

                            </div>
                            <!-- End: All Info Data -->
                            <!-- Begin: Student Data -->
                            <div class="tab-pane" id="student_data">
                                @include('dashboard.applications.applicationComponents.student')
                            </div>
                            <!-- End: Student Data -->
                            <!-- Begin: Father Data -->
                            <div class="tab-pane " id="father_data">
                                @include('dashboard.applications.applicationComponents.father_info')
                            </div>
                            <!-- End: Father Data -->
                            <!-- Begin: Mother Data -->
                            <div class="tab-pane " id="mother_data">
                                @include('dashboard.applications.applicationComponents.mother_info')                            </div>
                            <!-- End: Mother Data -->
                            <!-- Begin: Emergency Data -->
                            <div class="tab-pane " id="emergency_data">
                                @include('dashboard.applications.applicationComponents.emergency')
                            </div>
                            <!-- End: Emergency Data -->
                            <!-- Begin: Other Children -->
                            <div class="tab-pane " id="other_children">
                                @include('dashboard.applications.applicationComponents.other_children')
                            </div>
                            <!-- End: Other Children -->
                            <!-- Begin: Previous Schools -->
                            <div class="tab-pane " id="previous_schools">
                                @include('dashboard.applications.applicationComponents.previous_school')
                            </div>
                            <!-- End: Previous Schools -->
                            <!-- Begin: Additional Info -->
                            <div class="tab-pane " id="additional_info">
                                @include('dashboard.applications.applicationComponents.additional_info')
                            </div>
                            <!-- End: Additional Info -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
