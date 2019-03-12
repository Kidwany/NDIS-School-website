@extends('layouts.layouts')
@section('title', 'Home')

@section('customizedStyle')
    <!--begin::Page Vendors -->
    <link href="{{asset('metronic/assets/vendors/custom/fullcalendar/fullcalendar.bundle.css')}}" rel="stylesheet"
          type="text/css"/>
    <!--end::Page Vendors -->
    <link href="{{asset('metronic/assets/vendors/base/vendors.bundle.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('metronic/assets/demo/default/base/style.bundle.css')}}" rel="stylesheet" type="text/css"/>
    <!--end::Base Styles -->
@endsection
@section('customizedScript')
    <!--begin::Base Scripts -->
    <script src="{{asset('metronic/assets/vendors/base/vendors.bundle.js')}}" type="text/javascript"></script>
    <script src="{{asset('metronic/assets/demo/default/base/scripts.bundle.js')}}" type="text/javascript"></script>
    <!--end::Base Scripts -->
    <!--begin::Page Vendors -->
    <script src="{{asset('metronic/assets/vendors/custom/fullcalendar/fullcalendar.bundle.js')}}"
            type="text/javascript"></script>
    <!--end::Page Vendors -->    <!--end::Page Resources -->
    <script>

        var CalendarBasic = {
                init: function () {
                    var e = moment().startOf("day"), t = e.format("YYYY-MM"),
                        i = e.clone().subtract(1, "day").format("YYYY-MM-DD"),
                        n = e.format("YYYY-MM-DD"), r = e.clone().add(1, "day").format("YYYY-MM-DD");

                    $("#m_calendar").fullCalendar({

                            header: {
                                left: "prev,next today",
                                center: "title",
                                right: "month,agendaWeek,agendaDay,listWeek"
                            },

                            editable: false,
                            eventLimit: !0,
                            navLinks: !0,
                            events: [
                                @foreach($events as $data)
                                {
                                  title:'{{$data->title}}',
                                  start:'{{$data->start}}',
                                  description:'{{$data->desc}}',
                                  end:'{{$data->end}}',
                                },
                                @endforeach
                            ],
                            eventRender: function (e, t) {
                                t.hasClass("fc-day-grid-event") ? (t.data("content", e.description), t.data("placement", "top"), mApp.initPopover(t)) : t.hasClass("fc-time-grid-event") ? t.find(".fc-title").append('<div class="fc-description">' + e.description + "</div>") : 0 !== t.find(".fc-list-item-title").lenght && t.find(".fc-list-item-title").append('<div class="fc-description">' + e.description + "</div>")
                            }
                        }
                    )
                }
            }
        ;
        jQuery(document).ready(function () {
            CalendarBasic.init()
        });
    </script>

@endsection
@section('content')

    @include('layouts.header')


    <div class="breadcrumb-area">
        <div class="breadcrumb-top default-overlay bg-img breadcrumb-overly-5 pt-100 pb-95"
             style="background-image:url({{asset('website/img/bg/calendar_bg.jpg')}});">
            <div class="container">

                <h2>Calendar</h2>
                <p>Our facility offers all that a young child needs to explore and learn. We have four outdoor areas for
                    children. .</p>
            </div>
        </div>
        <div class="breadcrumb-bottom">
            <div class="container">
                <ul>
                    <li><a href="#">Home</a> <span><i class="fa fa-angle-double-right"></i>Calendar</span></li>
                </ul>
            </div>
        </div>
    </div>


    <div class="container mt-100 mb-50">
        <div id="m_calendar"></div>
    </div>

    @include('layouts.footer')


@endsection
