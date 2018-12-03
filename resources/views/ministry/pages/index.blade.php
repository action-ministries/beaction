@extends('ministry.master')
@section('title', 'Home')
@section('content')
    <div class="jumbotron video">
        <video autoplay muted loop id="myVideo">
            <source src="{{ asset('ministry/videos/actionmin.mp4') }}" type="video/mp4">
        </video>
        <div class="message-container">
            <h1>Hello</h1>
        </div>
    </div>
@endsection