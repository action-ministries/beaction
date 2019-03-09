@extends('church.master')
@section('title', 'Serve')
@section('content')
    <!-- Ministries Header -->
    <div class="jumbotron serve text-center bluebg">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <h1>Ministries</h1>
                <p>At ACC, we serve one another. There's something for everyone, from the youth to the elderly, whether single, or married. ACC is the place for you.</p>
            </div>
        </div>
    </div>
    <!-- ALIVE -->
    <div class="row purplebg">
        <div class="col-xl-6 nopad">
            <img src="{{ asset('church/img/womensConference.png') }}" class="img-fluid" alt="ALIVE Women's Conference 2017">
        </div>
        <div class="col-xl-6 content">
            <div class="wrap">
                <h2>A.L.I.V.E.</h2>
                <p>Anointed. Ladies. Involved. Virtuous. Enlightened.</p>
            </div>
        </div>
    </div>
    <!-- RECLAIM -->
    <div class="row bluebg">
        <div class="col-xl-6 content">
            <div class="wrap">
                <h2>R.E.C.L.A.I.M.</h2>
                <p>Restore. Evangelize. Christian. Leaders. Active. Integrity. Men.</p>
            </div>
        </div>
        <div class="col-xl-6 nopad">
            <img src="{{ asset('church/img/mensConference.jpg') }}" class="img-fluid" alt="ALIVE Women's Conference 2017">
        </div>
    </div>
    <!--Children -->
    <div class="row yellowbg">
        <div class="col-xl-6 nopad">
            <img src="{{ asset('church/img/children1.jpg') }}" class="img-fluid" alt="ALIVE Women's Conference 2017">
        </div>
        <div class="col-xl-6 content">
            <div class="wrap">
                <h2>Children</h2>
                <p>Taught by Mother Shed. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam consequatur deleniti dolorem earum enim illo, maiores molestias odit pariatur qui quia ratione recusandae, repellendus reprehenderit temporibus, velit vero?</p>
            </div>
        </div>
    </div>
    <!-- Marriage -->
    <div class="row salmonbg">
        <div class="col-xl-6 content">
            <div class="wrap">
                <h2>Marriage</h2>
                <p>Let's get married! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus ad corporis minima sapiente, temporibus vel?</p>
            </div>
        </div>
        <div class="col-xl-6 nopad">
            <img src="{{ asset('church/img/wedding.jpg') }}" class="img-fluid" alt="ALIVE Women's Conference 2017">
        </div>
    </div>
@endsection