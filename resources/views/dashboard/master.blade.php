
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
    @include('dashboard.layouts.messages')
        <!-- BEGIN: Subheader -->
        <div class="m-subheader ">
            <div class="d-flex align-items-center">
                <div class="mr-auto">
                    <h3 class="m-subheader__title m-subheader__title--separator">
                        {{$tablename}}
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
                            <a href="" class="m-nav__link">
                                <span class="m-nav__link-text">
                                    Dashboard
                                </span>
                            </a>
                        </li>
                        <li class="m-nav__separator">
                            -
                        </li>
                        <li class="m-nav__item">
                            <a href="" class="m-nav__link">
                                <span class="m-nav__link-text">
                                    {{$tablename}}
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
                    <div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push"
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
                                Latest {{$tablename}}
                            </h3>
                        </div>
                    </div>
                    <div class="m-portlet__head-tools">
                        <ul class="m-portlet__nav">
                            <li class="m-portlet__nav-item">
                                <a href="{{url('management/careers/create')}}"
                                   class="btn btn-primary m-btn m-btn--pill m-btn--custom m-btn--icon m-btn--air">
                                    <span>
                                        <i class="la la-plus"></i>
                                        <span>
                                            New  {{$tablename}}
                                        </span>
                                    </span>
                                </a>
                            </li>

                            <li class="m-portlet__nav-item"></li>
                            <li class="m-portlet__nav-item">
                                <div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push"
                                     m-dropdown-toggle="hover" aria-expanded="true">
                                    <a href="#"
                                       class="m-portlet__nav-link btn btn-lg btn-secondary  m-btn m-btn--icon m-btn--icon-only m-btn--pill  m-dropdown__toggle">
                                        <i class="la la-ellipsis-h m--font-brand"></i>
                                    </a>

                                    <!------ Actions Menu -->

                                    <div class="m-dropdown__wrapper">
                                        <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                                        <div class="m-dropdown__inner">
                                            <div class="m-dropdown__bodmy">
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
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="m-portlet__body">
                    <!--begin: Datatable -->
                    <table class="table table-striped- table-bordered table-hover table-checkable" id="m_table_1">
                        <thead>
                        <tr>
                            @for($i=0;$i<count($filedname);$i++)
                                <th>{{$filedname[$i]}}</th>
                            @endfor
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>

                            @foreach(json_decode($alldata) as $key)

                                @foreach($key as $data=>$value)

                                    @if((string)$data == "isapproved")

                                        <td>

                                            @if($value == 0)
                                                <span class="m-badge m-badge--brand m-badge--wide">
                                                    pending
                                                     </span>
                                            @else
                                                <span class="m-badge m-badge--danger m-badge--wide">
                                                    accpted
                                                     </span>
                                            @endif


                                        </td>
                                    @else
                                        <td>{{$value}}</td>


                                    @endif
                                @endforeach

                                <td>
                                    <div class="d-flex flex-row justify-content-between">
                                        <button type="button" class="btn m-btn--square  btn-outline-danger">
                                            <i class="fa fa-trash">{{$key->APPID}}</i>
                                        </button>
                                        <a type="button" href="{{url('')}}" class="btn m-btn--square  btn-outline-primary">
                                            <i class="fa fa-pencil"></i>
                                        </a>
                                        <button type="button" class="btn m-btn--square  btn-outline-primary">
                                            <i class="fa fa-pencil">{{$key->APPID}}</i>
                                        </button>
                                    </div>
                                </td>
                        </tr>
                        @endforeach


                        </tbody>
                        <tfoot>
                        <tr>
                            @for($i=0;$i<count($filedname);$i++)
                                <th>{{$filedname[$i]}}</th>
                            @endfor
                            <th>Action</th>
                        </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
            <!-- END EXAMPLE TABLE PORTLET-->
        </div>
    </div>


@endsection



