@extends('church.master')
@section('title', 'Events')
@section('content')
    <!-- Events -->
    <div class="jumbotron events bluebg text-center">
        <h1>Upcoming Events</h1>
    </div>
    <!-- Church Picnic -->
    <div class="row salmonbg event">
        <div class="row">
            <div class="col-lg-6 nopad">
                <img src="https://www.bridgetonmo.com/ImageRepository/Document?documentID=321" class="img-fluid event__image" />
            </div>
            <div class="col-lg-6 nopad content event__content text-right">
                <div class="wrap event__content-wrap">
                    <h2 class="event__content-title">Annual Church Picnic<small class="event__content-title-date">July 13 (10am)</small></h2>
                    <p>ACC-South is celebrating it's 3rd Anniversary and is inviting EVERYONE to the church's picnic celebration. There will be games, BBQ, desserts, a DJ and an all-around wholesome good time. If you're reading this... you're invited.
                    <address class="event__content-address">
                        Gentry Park<br />
                        11454 Ann Mar Dr<br />
                        Bridgeton, MO 63044
                    </address>
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
                    <h2 class="event__content-title">Meacham Park - Kirkwood Unity Revival<small class="event__content-title-date">August 26-28 (7pm - 9pm)</small></h2>
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