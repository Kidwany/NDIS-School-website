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
                        Create New User
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
                                    Users
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
                                                <a href="#"
                                                   class="btn btn-outline-danger m-btn m-btn--pill m-btn--wide btn-sm">
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
                                Create New User
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
                    <form class="m-form m-form--fit m-form--label-align-right" action="{{url('management/users')}}" method="post" accept-charset="UTF-8">
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

                            <!-------------------- Full Name ---------------->
                            <div class="form-group m-form__group row">
                                <label class="col-form-label col-lg-2 col-sm-12">
                                    Full Name *
                                </label>
                                <div class="col-lg-4 col-md-9 col-sm-12">
                                    <input type="text" class="form-control m-input" name="fullname"
                                           placeholder="Enter Full Name " data-toggle="m-tooltip" required value="{{old('fullname')}}">
                                    <span class="m-form__help">
                                        Enter user's full name.
                                    </span>
                                </div>


                                <!-------------------- Email ---------------->
                                <label class="col-form-label col-lg-2 col-sm-12">
                                    Email *
                                </label>
                                <div class="col-lg-4 col-md-9 col-sm-12">
                                    <input type="email" class="form-control m-input" name="email"
                                           placeholder="Enter Email " data-toggle="m-tooltip" required value="{{old('email')}}">
                                    <span class="m-form__help">
                                        Enter user's Name.
                                    </span>
                                </div>
                            </div>



                            <!-------------------- Phone ---------------->
                            <div class="form-group m-form__group row">
                                <label class="col-form-label col-lg-2 col-sm-12">
                                    Phone *
                                </label>
                                <div class="col-lg-4 col-md-9 col-sm-12">
                                    <input type="number" class="form-control m-input" name="phone"
                                           placeholder="Enter Phone " data-toggle="m-tooltip" value="{{old('phone')}}">
                                    <span class="m-form__help">
                                        Enter user's Phone.
                                    </span>
                                </div>


                                <!-------------------- Address ---------------->
                                <label class="col-form-label col-lg-2 col-sm-12">
                                    Address *
                                </label>
                                <div class="col-lg-4 col-md-9 col-sm-12">
                                    <input type="text" class="form-control m-input" name="address"
                                           placeholder="Enter Address " data-toggle="m-tooltip" value="{{old('address')}}">
                                    <span class="m-form__help">
                                        Enter user's Address.
                                    </span>
                                </div>
                            </div>


                            <div class="form-group m-form__group row">
                                <!-------------------- Password ---------------->
                                <label class="col-form-label col-lg-2 col-sm-12">
                                    Password *
                                </label>
                                <div class="col-lg-10 col-md-9 col-sm-12">
                                    <div class='input-group'>
                                        <input type='password' class="form-control m-input" name="password" placeholder="Enter Password" data-toggle="m-tooltip"/>
                                    </div>
                                </div>
                            </div>



                            <div class="form-group m-form__group row">
                                <!-------------------- Confirm Password ---------------->
                                <label class="col-form-label col-lg-2 col-sm-12">
                                    Confirm Password *
                                </label>
                                <div class="col-lg-10 col-md-9 col-sm-12">
                                    <div class='input-group'>
                                        <input type='password' class="form-control m-input" name="password_confirmation " placeholder="Repeat Password" data-toggle="m-tooltip"/>
                                    </div>
                                </div>
                            </div>

                            <div class="m-form__seperator m-form__seperator--dashed m-form__seperator--space"></div>

                        </div>
                        <div class="m-portlet__foot m-portlet__foot--fit">
                            <div class="m-form__actions m-form__actions">
                                <div class="row">
                                    <div class="col-lg-10 ml-lg-auto">
                                        <input type="submit" class="btn btn-success" value="Publish">

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
