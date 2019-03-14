@extends('layouts.layouts')
@section('title', 'Co-curricular')


@section('content')
    @include('layouts.header')

    <div class="breadcrumb-area">

        <div class="breadcrumb-top default-overlay bg-img breadcrumb-overly-5 pt-100 pb-95" style="background-image:url({{asset('website/img/bg/rules_bg.jpg')}});">
            <div class="container">
                <h2>Co-curricular Activities</h2>
            </div>
        </div>

        <div class="breadcrumb-bottom">
            <div class="container">
                <ul>
                    <li><a href="#">Home</a><span><i class="fa fa-angle-double-right"></i>Co-curricular</span></li>
                </ul>
            </div>
        </div>

    </div>


    <!------ Responsibilities ------>
    <div class="achievement-area pt-60 pb-40">
        <div class="container">
            <div class="section-title">

                <h3 class="font-weight-bold" style="font-size: 30px;  margin-bottom: 20px">Co-curricular  <span style="color: #00a651">Activities</span></h3>
                <p>
                    At NDIS we believe in the importance of educating and supporting the whole child and recognize
                    the needs for physical health, extra academic challenge and engagement. As you can see from
                    the schedule for Co-Curricular Activities (CCAs) it includes many activities: ranging from
                    learning a new language, playing an instrument, taking an art class, and others choosing
                    to participate in physical activities such as football, Body Balance, etc.
                </p>
                <p>
                    We hope that all the activities we offer will provide students with an opportunity to make some decisions,
                    feel proud of themselves as they learn new things. The benefits of co-curricular activity in schools
                    have been extensively researched and it has been found that students who participate in these activities
                    develop higher academic results, better relationships at school, and are more likely to lead healthy,
                    active lifestyles when they leave school.
                </p>
                <p>
                    Students also feel a greater sense of belonging and have a higher self-esteem at school when they
                    participate in structured sporting, performing arts and other activities. In addition, the co-curricular
                    opportunities we provide makes for a more motivated and engaged group of students, which leads to a happier
                    and more cohesive College. Please think very carefully when choosing the activities, you would like your
                    child to participate in and remember that your child is making a commitment to attend every week for the
                    whole term.
                </p>
            </div>
        </div>
    </div>


    @include('layouts.footer')
@endsection
