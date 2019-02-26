@extends('dashboard.layouts.layouts')
@section('title', 'Dashboard')


@section('datatablesStyle')
    <!--begin::Page Vendors -->
    <link href="{{asset('metronic/assets/vendors/custom/datatables/datatables.bundle.css')}}" rel="stylesheet" type="text/css" />
    <!--end::Page Vendors -->

@endsection

@section('datatablesScripts')

    <!--begin::Page Vendors -->
    <script src="{{asset('metronic/assets/vendors/custom/datatables/datatables.bundle.js')}}" type="text/javascript"></script>
    <!--end::Page Vendors -->
    <script src="{{asset('metronic/assets/demo/default/custom/crud/datatables/data-sources/html.js')}}" type="text/javascript"></script>
    <!--end::Page Resources -->    <!--end::Page Resources -->
    <script src="{{asset('metronic/assets/demo/default/base/scripts.bundle.js')}}" type="text/javascript"></script>


@endsection

@section('content')

    <!-- END: Left Aside -->
    <div class="m-grid__item m-grid__item--fluid m-wrapper">
        <!-- BEGIN: Subheader -->
        <div class="m-subheader ">
            <div class="d-flex align-items-center">
                <div class="mr-auto">
                    <h3 class="m-subheader__title m-subheader__title--separator">
                        Users
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
                                List of Users
                            </h3>
                        </div>
                    </div>
                    <div class="m-portlet__head-tools">
                        <ul class="m-portlet__nav">
                            <li class="m-portlet__nav-item">
                                <a href="{{url('management/users/create')}}" class="btn btn-primary m-btn m-btn--pill m-btn--custom m-btn--icon m-btn--air">
                                    <span>
                                        <i class="la la-plus"></i>
                                        <span>
                                            New User
                                        </span>
                                    </span>
                                </a>
                            </li>

                            <li class="m-portlet__nav-item"></li>
                            <li class="m-portlet__nav-item">
                                <div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" m-dropdown-toggle="hover" aria-expanded="true">
                                    <a href="#" class="m-portlet__nav-link btn btn-lg btn-secondary  m-btn m-btn--icon m-btn--icon-only m-btn--pill  m-dropdown__toggle">
                                        <i class="la la-ellipsis-h m--font-brand"></i>
                                    </a>

                                    <!------ Actions Menu -->

                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="m-portlet__body">

                @include('dashboard.layouts.messages')
                <!--begin: Datatable -->
                    <table class="table table-striped- table-bordered table-hover table-checkable" id="m_table_1">
                        <thead>
                        <tr>
                            <th>
                                ID
                            </th>
                            <th>
                                Name
                            </th>
                            <th>
                                Email
                            </th>
                            <th>
                                Phone
                            </th>
                            <th>
                                Created at
                            </th>
                            <th>
                                Action
                            </th>

                        </tr>
                        </thead>
                        <tbody>
                        @if($users)
                            @foreach($users as $user)
                                <tr>

                                    <td>
                                        {{$user->UID}}
                                    </td>
                                    <td>
                                        {{$user->fullname}}
                                    </td>
                                    <td>
                                        {{$user->email}}
                                    </td>
                                    <td>
                                        {{$user->phone}}
                                    </td>
                                    <td>
                                        @if($user->created_at)
                                            {{$user->created_at->diffForHumans()}}
                                        @endif
                                    </td>
                                    <td>
                                        <div class="d-flex flex-row justify-content-between">
                                            <button data-toggle="modal" data-target="#m_modal_{{$user->UID}}" href="{{url('management/users/' . $user->UID . '/delete')}}" type="button" class="btn  btn-danger mr-1">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                            <a href="{{url('management/users/' . $user->UID . '/edit')}}" type="button" class="btn  btn-primary">
                                                <i class="fa fa-pencil"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>



                                <div class="modal fade" id="m_modal_{{$user->UID}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">
                                                    Delete User
                                                </h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">
												&times;
											</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <p>
                                                    Are You Sure You want to delete User <strong>{{$user->fullname}}</strong>
                                                </p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                                    Close
                                                </button>

                                                <form action="{{route('calendar.destroy', $user->UID)}}" method="post" accept-charset="UTF-8">
                                                    {{csrf_field()}}
                                                    <input name="_method" type="hidden" value="DELETE">
                                                    <button type="submit" class="btn btn-danger">
                                                        Delete
                                                    </button>
                                                </form>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                            @endforeach
                        @endif


                        </tbody>
                    </table>
                </div>
            </div>
            <!-- END EXAMPLE TABLE PORTLET-->
        </div>
    </div>


@endsection



