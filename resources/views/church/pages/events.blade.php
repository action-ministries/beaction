@extends('church.master')
@section('title', 'Events')
@section('content')
    <!-- Events -->
    <div class="jumbotron events bluebg text-center">
        <h1>Upcoming Events</h1>
    </div>
    <!-- Thursday Night Prayer -->
    <div class="row purplebg event">
        <div class="row">
            <div class="col-lg-6 nopad">
                <img src="{{ asset('church/img/thursdayNightPrayerCall.png') }}" class="img-fluid event__image" />
            </div>
            <div class="col-lg-6 nopad content text-right event__content">
                <div class="wrap event__content-wrap">
                    <h2 class="event__content-title">Thursday Night Prayer Call<small class="event__content-title-date">Every Thursday <a href="tel:4254266367">(425)436-6367</a></small></h2>
                    <p>Every Thursday night we gather together to pray together. How can we pray for you? Call in let us know, we would love if you joined in as well.
                        <br><br>
                        <strong>Phone Number:</strong> <a href="tel:4254266367">(425)436-6367</a><br>
                        <strong>Access Code:</strong> 6117659#
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- Revival -->
    <div class="row bluebg flip event">
        <div class="row">
            <div class="col-lg-6 nopad">
                <img src="{{ asset('church/img/revivalFBEvent.png') }}" class="img-fluid event__image" />
            </div>
            <div class="col-lg-6 nopad content text-right event__content">
                <div class="wrap event__content-wrap">
                    <h2 class="event__content-title">Meacham Park - Kirkwood Unity Revival<small class="event__content-title-date">TBD</small></h2>
                    <p>Every church no matter the denomination, no matter the racial, economic, or social background is welcome to attend this wonderful revival. Come out and let's reconnect with our God together!
                    <address class="event__content-address">
                        Greentree Community Church<br />
                        100 Kirkwood Pl.<br />
                        Kirkwood, MO 63122
                    </address>
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection