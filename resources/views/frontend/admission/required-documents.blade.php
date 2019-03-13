@extends('layouts.layouts')
@section('title', 'How To Apply')

@section('content')
    @include('layouts.header')

    <!------------------------ Title banner section ----------------->
    <div class="breadcrumb-area">
        <div class="breadcrumb-top default-overlay bg-img pt-100 pb-95" style="background-image:url({{asset('website/img/bg/admission_bg.jpg')}});">
            <div class="container">
                <h2>Required Documents</h2>
                <p>This is List of Required Documents For Applying in Different levels,<br> Pre-Foundation ( Pre-F ), Foundation Stage 1 ( FS1 ), Foundation Stage 2, Year 1/ Grade 1 </p>
            </div>
        </div>
        <div class="breadcrumb-bottom">
            <div class="container">
                <ul>
                    <li><a href="#">Home</a> <span><i class="fa fa-angle-double-right"></i> Required Documents</span></li>
                </ul>
            </div>
        </div>
    </div>


    <!------------------------ Accordion ----------------->

    <div class="container">
        <div class="accordion-panel">
            <div class="buttons-wrapper">
                <i class="plus-icon"></i>
                <div class="open-btn">
                    Open all
                </div>
                <div class="close-btn hidden">
                    Close all
                </div>
            </div>

            <dl class="accordion">
                <!------------------------ Pre-F ----------------->
                <dt>Documents required for Pre-Foundation ( Pre-F ) & Foundation Stage 1 ( FS1 )<i class="plus-icon"></i></dt>
                <dd>
                    <div class="content">
                        <ul>
                            <li>- Copy of graduation report or Master or PHD of parents.</li>
                            <li>- Copy of vaccination report.</li>
                            <li>- Copy of parents’ IDs or Passports.</li>
                            <li>- An original electronic birth certificate.</li>
                            <li>- 8 recent passport-sized color photos.</li>
                        </ul>
                    </div>
                </dd>

                <!------------------------ Foundation Stage ----------------->
                <dt>Documents required for Foundation Stage 2<i class="plus-icon"></i></dt>
                <dd>
                    <div class="content">
                        <ul>
                            <li>- Copy of graduation report or Master or PHD of parents.</li>
                            <li>- Copy of vaccination report</li>
                            <li>- Copy of parents’ IDs or Passports.</li>
                            <li>- An original electronic birth certificate</li>
                            <li>- 8 recent passport-sized color photos.</li>
                            <li>- The original academic end of FS1 report signed & stamped from the previous school.</li>
                            <li>- 4 Copies of transfer requests signed & certified from both schools (new & previous);
                                Stamped with The official Seal from The <span class="font-weight-bold">Educational Administration Department Offices</span>Educational Administration Department Offices
                                linked to both schools.
                            </li>
                            <li>- If the transfer is from a different governorate to another, transfer papers are to be
                                Certified by <span class="font-weight-bold">Educational Directorate In both governors.</span>
                            </li>
                            <li>- Electronic Transfer certificate from the Ministry Of Education’s Website for
                                transferred students signed and stamped by the previous school.
                            </li>
                        </ul>
                    </div>
                </dd>

                <!------------------------ Documents required for Year 1/ Grade 1  ----------------->
                <dt>Documents required for Year 1/ Grade 1<i class="plus-icon"></i></dt>
                <dd>
                    <div class="content">
                        <ul>
                            <li>- Copy of graduation report or Master or PHD of parents.</li>
                            <li>- Copy of vaccination report.</li>
                            <li>- Copy of parents’ IDs or Passports.</li>
                            <li>- An original electronic birth certificate.</li>
                            <li>- 8 recent passport-sized color photos.</li>
                            <li>- The original academic end of FS1 & FS2 report signed & stamped from the previous
                                school.
                            </li>
                            <li>- 4 Copies of transfer requests signed & certified from both schools (new & previous)Stamped with The official Seal from <span class="font-weight-bold">The Educational Administration Department Offices</span>
                            <li><span class="font-weight-bold">*If the transfer is from a different governorate to another, transfer papers are to beCertified by Educational Directorate In both government's.</span></li>
                            <li>- Electronic Transfer certificate from the Ministry Of Education’s Website for Transferred students signed and stamped by the previous school</li>
                            <li>- Proof of graduation document for FS1 & FS2 certified from the MOE</li>

                        </ul>
                    </div>
                </dd>
            </dl>
        </div>
    </div>

    @include('layouts.footer')
@endsection
