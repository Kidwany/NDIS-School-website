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
    <script src="{{asset('metronic/assets/demo/default/custom/crud/forms/widgets/bootstrap-datetimepicker.js')}}" type="text/javascript"></script>


@endsection

@section('content')


    <!-- END: Left Aside -->
    <div class="m-grid__item m-grid__item--fluid m-wrapper">
        <!-- BEGIN: Subheader -->
        <!-- END: Subheader -->
        <div class="m-content">

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
                    <!-- begin: Form -->
                    <!-- begin::Form -->
                    <div class="row">
                        <div class="col-lg-3">
                            <img src="{{asset($event->image)}}" style="width: 100%">
                        </div>

                        <div class="col-lg-9">
                            <form class="m-form m-form--fit m-form--label-align-right" action="{{route('event.update', $event->EVID)}}" method="POST" enctype="multipart/form-data">
                                <input name="_method" type="hidden" value="PATCH">
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
                                                <button type="button" class="close" data-close="alert" aria-label="Close"></button>
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
                                                   placeholder="Enter Title " data-toggle="m-tooltip" required value="{{$event->title}}">
                                            <span class="m-form__help">
                                                Enter Event Title you want to add in yearly calendar
                                            </span>
                                        </div>


                                        <!-------------------- Location ---------------->
                                        <label class="col-form-label col-lg-2 col-sm-12">
                                            Location *
                                        </label>
                                        <div class="col-lg-4 col-md-9 col-sm-12">
                                            <input type="text" class="form-control m-input" name="location"
                                                   placeholder="Enter Location " data-toggle="m-tooltip" value="{{$event->location}}">
                                            <span class="m-form__help">
                                                Enter Event Location.
                                            </span>
                                        </div>
                                    </div>

                                    <!-------------------- Description ---------------->
                                    <div class="form-group m-form__group row">
                                        <label class="col-form-label col-lg-2 col-sm-12">
                                            Description *
                                        </label>
                                        <div class="col-lg-10 col-md-9 col-sm-12">
                                            <textarea class="form-control m-input" name="content"
                                                      placeholder="Enter a Description of Event" style="resize: none" rows="5" >{{$event->content}}</textarea>
                                            {{--<span class="m-form__help">
                                                Please enter a menu within text length range 10 and 100.
                                            </span>--}}
                                        </div>
                                    </div>


                                    <div class="form-group m-form__group row">
                                        <!-------------------- Start Date ---------------->
                                        <label class="col-form-label col-lg-2 col-sm-12 align-content-end">
                                            Date *
                                        </label>
                                        <div class="col-lg-4 col-md-9 col-sm-12">
                                            <div class="input-group date" >
                                                <input type="text" class="form-control m-input" name="date" placeholder="Bottom left" id="m_datetimepicker_4_3" value="{{$event->date}}"/>
                                                <div class="input-group-append">
                                                    <span class="input-group-text">
                                                        <i class="la la-check glyphicon-th"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <span class="m-form__help">
                                                Select a date
                                            </span>
                                        </div>


                                        <!-------------------- Image---------------->
                                        <label class="col-form-label col-lg-2 col-sm-12">
                                            Image *
                                        </label>
                                        <div class="col-lg-4 col-md-9 col-sm-12">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="customFile" name="image">
                                                <label class="custom-file-label" for="customFile">Choose file</label>
                                            </div>
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
                        </div>
                    </div>
                    <!--end::Form-->

                </div>
            </div>
            <!-- END EXAMPLE TABLE PORTLET-->
        </div>
    </div>


@endsection
