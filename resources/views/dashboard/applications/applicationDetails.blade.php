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
                    </div>
                </div>
            </div>
        </div>
        <!-- END: Subheader -->
        <div class="m-content">
            <div class="row">
                <div class="col-xl-12 col-lg-12">
                    <div class="m-portlet m-portlet--full-height m-portlet--tabs  ">
                        <div class="m-portlet__head">
                            <div class="m-portlet__head-tools">
                                <ul class="nav nav-tabs m-tabs m-tabs-line   m-tabs-line--left m-tabs-line--primary" role="tablist">
                                    <li class="nav-item m-tabs__item">
                                        <a class="nav-link m-tabs__link active" data-toggle="tab" href="#all_app_info" role="tab">
                                            <i class="flaticon-share m--hide"></i>
                                            Update Application
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
                                            <a href="#" class="d-none m-portlet__nav-link btn btn-lg btn-secondary  m-btn m-btn--icon m-btn--icon-only m-btn--pill  m-dropdown__toggle">
                                                <i class="la la-gear"></i>
                                            </a>

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
