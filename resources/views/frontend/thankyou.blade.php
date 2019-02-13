@extends('layouts.layouts')
@section('title', 'thank you')
@section('content')
    @include('layouts.header')

    <h1>thank you for your time</h1>
    <h2>please write down your applicaiton code:{{Session::get('appcode')}}</h2>
    @include('layouts.footer')
@endsection