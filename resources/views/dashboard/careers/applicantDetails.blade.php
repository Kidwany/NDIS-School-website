@extends('dashboard.layouts.layouts')
@section('title', 'Dashboard')


@section('customizedStyle')
    <!--begin::Page Vendors -->
    <link href="{{asset('metronic/assets/vendors/custom/datatables/datatables.bundle.css')}}" rel="stylesheet"
          type="text/css"/>
    <!--end::Page Vendors -->
@endsection

@section('customizedScripts')

    <!--begin::Page Vendors -->
    <script src="{{asset('metronic/assets/vendors/custom/datatables/datatables.bundle.js')}}"
            type="text/javascript"></script>
    <!--end::Page Vendors -->
    <script src="{{asset('metronic/assets/demo/default/custom/crud/datatables/data-sources/html.js')}}"
            type="text/javascript"></script>
    <!--end::Page Resources -->    <!--end::Page Resources -->

@endsection

@section('content')


    <!-- END: Left Aside -->
    <div class="m-grid__item m-grid__item--fluid m-wrapper">
        <!-- BEGIN: Subheader -->
        <div class="m-subheader ">
            <div class="d-flex align-items-center">
                <div class="mr-auto">
                    <h3 class="m-subheader__title m-subheader__title--separator">
                        Applicant Details
                    </h3>
                    <ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
                        <li class="m-nav__item m-nav__item--home">
                            <a href="#" class="m-nav__link m-nav__link--icon">
                                <i class="m-nav__link-icon la la-home"></i>
                            </a>
                        </li>
                        <li class="m-nav__separator">
                            -
                        </li>
                        <li class="m-nav__item">
                            <a href="{{url('/management')}}" class="m-nav__link">
                                <span class="m-nav__link-text">
                                    Dashboard
                                </span>
                            </a>
                        </li>
                        <li class="m-nav__separator">
                            -
                        </li>
                        <li class="m-nav__item">
                            <a href="{{url('management/careers/appliers')}}" class="m-nav__link">
                                <span class="m-nav__link-text">
                                    Appliers
                                </span>
                            </a>
                        </li>
                        {{--<li class="m-nav__separator">
                            -
                        </li>
                        <li class="m-nav__item">
                            <a href="" class="m-nav__link">
                                <span class="m-nav__link-text">
                                    HTML
                                </span>
                            </a>
                        </li>--}}
                    </ul>
                </div>
            </div>
        </div>
        <!-- END: Subheader -->
        <div class="m-content">
            {{--<div class="m-alert m-alert--icon m-alert--air m-alert--square alert alert-dismissible m--margin-bottom-30" role="alert">
                <div class="m-alert__icon">
                    <i class="flaticon-exclamation m--font-brand"></i>
                </div>
                <div class="m-alert__text">
                    The foundation for DataTables is progressive enhancement, so it is very adept at reading table information directly from the DOM. This example shows how easy it is to add searching, ordering and paging to your HTML table by simply running DataTables on it.
                    See official documentation
                    <a href="https://datatables.net/examples/data_sources/dom.html" target="_blank">
                        here
                    </a>
                    .
                </div>
            </div>--}}
            <div class="m-portlet m-portlet--mobile">
                <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                        <div class="m-portlet__head-title">
                            <h3 class="m-portlet__head-text">
                                Applicant Information
                            </h3>
                        </div>
                    </div>
                    <div class="m-portlet__head-tools">
                        <ul class="m-portlet__nav">
                            <li class="m-portlet__nav-item">
                                {{--<a href="{{url('management/careers/create')}}" class="btn btn-primary m-btn m-btn--pill m-btn--custom m-btn--icon m-btn--air">
                                    <span>
                                        <i class="la la-plus"></i>
                                        <span>
                                            New Career
                                        </span>
                                    </span>
                                </a>--}}
                            </li>

                            <li class="m-portlet__nav-item"></li>
                            <li class="m-portlet__nav-item">
                                <div
                                    class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push"
                                    m-dropdown-toggle="hover" aria-expanded="true">
                                    <a href="#"
                                       class="m-portlet__nav-link btn btn-lg btn-secondary  m-btn m-btn--icon m-btn--icon-only m-btn--pill  m-dropdown__toggle">
                                        <i class="la la-ellipsis-h m--font-brand"></i>
                                    </a>

                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="m-portlet__body">
                    <!--begin: Form -->
                    <!--begin::Form-->
                    <!--begin::Portlet-->
                    <div class="m-portlet">
                        <div class="m-portlet__head">
                            <div class="m-portlet__head-caption">
                                <div class="m-portlet__head-title">
                                    <!------- Name ------>
                                    <h3 class="m-portlet__head-text">
                                        {{$applicant->fullname}}
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="m-portlet__body">
                            <!--begin::Section-->
                            <div class="m-section m-section--last">
                                <div class="m-section__content">
                                    <!--begin::Preview-->
                                    <div class="m-demo">
                                        <div class="m-demo__preview">
                                            <div class="m-list-search">
                                                <div class="m-list-search__results">
                                                    <span class="m-list-search__result-message m--hide">
                                                        No record found
                                                    </span>
                                                    <div class="row">

                                                        <!------- Email ------>
                                                        <div class="col-lg-6">
                                                        <span class="m-list-search__result-category m-list-search__result-category--first">
                                                        Email
                                                    </span>
                                                            <a href="" class="m-list-search__result-item">
                                                        <span class="m-list-search__result-item-text">
                                                            {{$applicant->email}}
                                                        </span>
                                                            </a>
                                                        </div>

                                                        <!------- Phone ------>
                                                        <div class="col-lg-6">
                                                        <span class="m-list-search__result-category">
                                                        Phone
                                                        </span>
                                                            <a href="#" class="m-list-search__result-item">
                                                        <span class="m-list-search__result-item-text">
                                                            {{$applicant->phone}}
                                                        </span>
                                                            </a>
                                                        </div>


                                                        <!------- Position ------>
                                                        <div class="col-lg-6">
                                                        <span class="m-list-search__result-category">
                                                        Position
                                                        </span>
                                                            <a href="#" class="m-list-search__result-item">
                                                        <span class="m-list-search__result-item-text">
                                                            {{$applicant->job->jobtitle}}
                                                        </span>
                                                            </a>
                                                        </div>

                                                        <!------------- Applying Date ------>
                                                        <div class="col-lg-6">
                                                        <span class="m-list-search__result-category">
                                                            Applying Date
                                                        </span>
                                                            <a href="#" class="m-list-search__result-item">
                                                        <span class="m-list-search__result-item-text">
                                                            {{$applicant->created_at->format('d M Y')}}
                                                        </span>
                                                            </a>
                                                        </div>


                                                        <!------------- Download PDF ------>
                                                        <div class="col-lg-6 mt-5">
                                                            <a href="{{asset($applicant->cvpath)}}" download="{{$applicant->fullname}}" class="btn btn-danger"><i class="fa fa-file-pdf-o"></i> Download CV </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Preview-->
                                    <!--begin::Dropdown-->
                                    <!--end::Dropdown-->
                                </div>
                            </div>
                            <!--end::Section-->
                        </div>
                    </div>
                    <!--end::Portlet-->
                    <!--end::Form-->

                </div>
            </div>
            <!-- END EXAMPLE TABLE PORTLET-->
        </div>
    </div>


@endsection
