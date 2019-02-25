@extends('dashboard.layouts.layouts')
@section('title', 'Dashboard')


@section('datatablesStyle')
    <!--begin::Page Vendors -->
    <link href="{{asset('metronic/assets/vendors/custom/datatables/datatables.bundle.css')}}" rel="stylesheet"
          type="text/css"/>
    <!--end::Page Vendors -->
@endsection

@section('datatablesScripts')

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
                        Create New Event
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
                            <a href="{{url('management/careers')}}" class="m-nav__link">
                                <span class="m-nav__link-text">
                                    Calendar
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
                <div>
                    <div
                        class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push"
                        m-dropdown-toggle="hover" aria-expanded="true">
                        <a href="#"
                           class="m-portlet__nav-link btn btn-lg btn-secondary  m-btn m-btn--outline-2x m-btn--air m-btn--icon m-btn--icon-only m-btn--pill  m-dropdown__toggle">
                            <i class="la la-plus m--hide"></i>
                            <i class="la la-ellipsis-h"></i>
                        </a>
                    </div>
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
                                Update Event
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
                    <form class="m-form m-form--fit m-form--label-align-right" id="m_form_1" action="{{url('management/calendar')}}" method="post" accept-charset="UTF-8">
                        {{csrf_field()}}
                        <div class="m-portlet__body">

                            <div class="m-form__content">
                                @include('dashboard.layouts.messages')
                                <div class="m-alert m-alert--icon alert alert-danger m--hide" role="alert"
                                     id="m_form_1_msg">
                                    <div class="m-alert__icon">
                                        <i class="la la-warning"></i>
                                    </div>
                                    <div class="m-alert__text">
                                        Opps! Please fill the required fields.
                                    </div>
                                    <div class="m-alert__close">
                                        <button type="button" class="close" data-close="alert"
                                                aria-label="Close"></button>
                                    </div>
                                </div>
                            </div>
                            <!-------------------- Position ---------------->
                            <div class="form-group m-form__group row">
                                <label class="col-form-label col-lg-2 col-sm-12">
                                    Title *
                                </label>
                                <div class="col-lg-4 col-md-9 col-sm-12">
                                    <input type="text" class="form-control m-input" name="title"
                                           placeholder="Enter Title" data-toggle="m-tooltip" required value="{{$event->title}}">
                                    <span class="m-form__help">
                                        Enter Event Title you want to add in yearly calendar
                                    </span>
                                </div>
                            </div>


                            <!-------------------- Description ---------------->
                            <div class="form-group m-form__group row">
                                <label class="col-form-label col-lg-2 col-sm-12">
                                    Description *
                                </label>
                                <div class="col-lg-10 col-md-9 col-sm-12">
                                    <textarea class="form-control m-input" name="desc"
                                              placeholder="Enter a Description of Event" style="resize: none" rows="5" >{{$event->desc}}</textarea>
                                    {{--<span class="m-form__help">
                                        Please enter a menu within text length range 10 and 100.
                                    </span>--}}
                                </div>
                            </div>


                            <div class="form-group m-form__group row">
                                <!-------------------- Start Date ---------------->
                                <label class="col-form-label col-lg-2 col-sm-12">
                                    Start Date *
                                </label>
                                <div class="col-lg-4 col-md-9 col-sm-12">
                                    <div class='input-group'>
                                        <input type='date' class="form-control m-input" name="start" value="{{$event->start}}" placeholder="Select date"/>
                                        <div class="input-group-append">
                                            <span class="input-group-text">
                                                <i class="la la-calendar-check-o"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <span class="m-form__help">
                                        Select a date
                                    </span>
                                </div>
                            </div>



                            <div class="form-group m-form__group row">
                                <!-------------------- Start Date ---------------->
                                <label class="col-form-label col-lg-2 col-sm-12">
                                    End Date
                                </label>
                                <div class="col-lg-4 col-md-9 col-sm-12">
                                    <div class='input-group'>
                                        <input type='date' class="form-control m-input" name="end" value="{{$event->end}}" placeholder="Select date" id='m_datepicker2'/>
                                        <div class="input-group-append">
                                            <span class="input-group-text">
                                                <i class="la la-calendar-check-o"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <span class="m-form__help">
                                        Select a date
                                    </span>
                                </div>
                            </div>

                            <div class="m-form__seperator m-form__seperator--dashed m-form__seperator--space"></div>
                        </div>
                        <div class="m-portlet__foot m-portlet__foot--fit">
                            <div class="m-form__actions m-form__actions">
                                <div class="row">
                                    <div class="col-lg-10 ml-lg-auto">
                                        <input type="submit" class="btn btn-success" value="Update">

                                        <button type="reset" class="btn btn-secondary">
                                            Cancel
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!--end::Form-->

                </div>
            </div>
            <!-- END EXAMPLE TABLE PORTLET-->
        </div>
    </div>


@endsection
