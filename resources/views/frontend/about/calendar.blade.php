@extends('layouts.layouts')
@section('title', 'Home')

@section('customizedStyle')
    <!--begin::Page Vendors -->
    <link href="{{asset('metronic/assets/vendors/custom/fullcalendar/fullcalendar.bundle.css')}}" rel="stylesheet" type="text/css"/>
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
    <script src="{{asset('metronic/assets/vendors/custom/fullcalendar/fullcalendar.bundle.js')}}" type="text/javascript"></script>
    <!--end::Page Vendors -->    <!--end::Page Resources -->
    <script>
        var CalendarBasic = {
            init: function () {
                var e = moment().startOf("day"), t = e.format("YYYY-MM"), i = e.clone().subtract(1, "day").format("YYYY-MM-DD"),
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
                    events: [{
                        title: "All Day Event",
                        start: t + "-01",
                        description: "Lorem ipsum dolor sit incid idunt ut",
                        className: "m-fc-event--danger m-fc-event--solid-warning"
                    }, {
                        title: "Reporting",
                        start: t + "-14T13:30:00",
                        description: "Lorem ipsum dolor incid idunt ut labore",
                        end: t + "-14",
                        className: "m-fc-event--accent"
                    }, {
                        title: "Company Trip",
                        start: t + "-02",
                        description: "Lorem ipsum dolor sit tempor incid",
                        end: t + "-03",
                        className: "m-fc-event--primary"
                    }, {
                        title: "ICT Expo 2017 - Product Release",
                        start: t + "-03",
                        description: "Lorem ipsum dolor sit tempor inci",
                        end: t + "-05",
                        className: "m-fc-event--light m-fc-event--solid-primary"
                    }, {
                        title: "Dinner",
                        start: t + "-12",
                        description: "Lorem ipsum dolor sit amet, conse ctetur",
                        end: t + "-10"
                    }, {
                        id: 999,
                        title: "Repeating Event",
                        start: t + "-09T16:00:00",
                        description: "Lorem ipsum dolor sit ncididunt ut labore",
                        className: "m-fc-event--danger"
                    }, {
                        id: 1e3,
                        title: "Repeating Event",
                        description: "Lorem ipsum dolor sit amet, labore",
                        start: t + "-16T16:00:00"
                    }, {
                        title: "Conference",
                        start: i,
                        end: r,
                        description: "Lorem ipsum dolor eius mod tempor labore",
                        className: "m-fc-event--accent"
                    }, {
                        title: "Meeting",
                        start: n + "T10:30:00",
                        end: n + "T12:30:00",
                        description: "Lorem ipsum dolor eiu idunt ut labore"
                    }, {
                        title: "Lunch",
                        start: n + "T12:00:00",
                        className: "m-fc-event--info",
                        description: "Lorem ipsum dolor sit amet, ut labore"
                    }, {
                        title: "Meeting",
                        start: n + "T14:30:00",
                        className: "m-fc-event--warning",
                        description: "Lorem ipsum conse ctetur adipi scing"
                    }, {
                        title: "Happy Hour",
                        start: n + "T17:30:00",
                        className: "m-fc-event--metal",
                        description: "Lorem ipsum dolor sit amet, conse ctetur"
                    }, {
                        title: "Dinner",
                        start: n + "T20:00:00",
                        className: "m-fc-event--solid-focus m-fc-event--light",
                        description: "Lorem ipsum dolor sit ctetur adipi scing"
                    }, {
                        title: "Birthday Party",
                        start: r + "T07:00:00",
                        className: "m-fc-event--primary",
                        description: "Lorem ipsum dolor sit amet, scing"
                    }, {
                        title: "Click for Google",
                        url: "http://google.com/",
                        start: t + "-28",
                        className: "m-fc-event--solid-info m-fc-event--light",
                        description: "Lorem ipsum dolor sit amet, labore"
                    }],
                    eventRender: function (e, t) {
                        t.hasClass("fc-day-grid-event") ? (t.data("content", e.description), t.data("placement", "top"), mApp.initPopover(t)) : t.hasClass("fc-time-grid-event") ? t.find(".fc-title").append('<div class="fc-description">' + e.description + "</div>") : 0 !== t.find(".fc-list-item-title").lenght && t.find(".fc-list-item-title").append('<div class="fc-description">' + e.description + "</div>")
                    }
                })
            }
        };
        jQuery(document).ready(function () {
            CalendarBasic.init()
        });
    </script>

@endsection
@section('content')

    @include('layouts.header')


    <div class="breadcrumb-area">
        <div class="breadcrumb-top default-overlay bg-img breadcrumb-overly-5 pt-100 pb-95" style="background-image:url({{asset('website/img/bg/calendar_bg.jpg')}});">
            <div class="container">
                <h2>Calendar</h2>
                <p>Our facility offers all that a young child needs to explore and learn. We have four outdoor areas for children. .</p>
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
