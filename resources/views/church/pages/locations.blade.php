@extends('church.master')
@section('title', 'Locations')
@section('content')
    <!-- Events -->
    <div class="jumbotron locations bluebg text-center">
        <h1>Locations</h1>
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