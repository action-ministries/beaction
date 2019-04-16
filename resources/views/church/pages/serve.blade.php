@extends('church.master')
@section('title', 'Serve')
@section('content')
    <!-- Ministries Header -->
    <div class="jumbotron serve text-center bluebg">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <h1>Ministries</h1>
                <p>At ACC-South, we serve one another. There's something for everyone, from the youth to the elderly, single or married. ACC-South is the place for you.</p>
            </div>
        </div>
    </div>
    <!-- ALIVE -->
    <div class="row purplebg">
        <div class="col-xl-6 nopad">
            <img src="{{ asset('church/img/alive.jpg') }}" class="img-fluid" alt="ALIVE Women's Conference 2017">
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
            <img src="{{ asset('church/img/kingdomManTickets.jpg') }}" class="img-fluid" alt="ALIVE Women's Conference 2017">
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
                <p>"See that you do not despise one of these little ones. For I tell you that their angels in heaven always see the face of my Father in heaven"<br /><i>Matthew 18:10</i></p>
                <p>Taught by Mother Shed with the support of some volunteers from Greentree Community Church. Our children are instructed in the ways of God, through learning about biblical characters and stories.</p>
            </div>
        </div>
    </div>
    <!-- Marriage -->
    <div class="row salmonbg">
        <div class="col-xl-6 content">
            <div class="wrap">
                <h2>Marriage</h2>
                <p>“Therefore a man shall leave his father and his mother and hold fast to his wife, and they shall become one flesh."<br /><i>Gen. 2:24</i></p>
                <p>We support marriages. Through counseling, and a monthly couples' discussion that happens on every 2<sup>nd</sup> Sunday, immediately following church services.</p>
            </div>
        </div>
        <div class="col-xl-6 nopad">
            <img src="{{ asset('church/img/wedding.jpg') }}" class="img-fluid" alt="ALIVE Women's Conference 2017">
        </div>
    </div>
@endsection