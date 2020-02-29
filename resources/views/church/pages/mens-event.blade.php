@extends('church.master')
@section('title', 'Kingdom Man: Men at Work')
@section('content')
    <div class="kingdom-man">
        <!-- Hero -->
        <div class="jumbotron bluebg">
            <h1><small><span>R.E.C.L.A.I.M. Presents</span> Kingdom Man</small> Men at Work</h1>
            <div class="details">
                <address>Greentree Community Church <br />
                100 Kirkwood Pl. Kirkwood, MO 63122</address>
                <time datetime="2020-05-29T17:00">May 29 (5pm)</time> <time datetime="2020-05-30T09:00"> - May 30 (9am)</time>
            </div>
            <div class="photo"></div>
        </div>
        <!-- Revival ->
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
        <!--// Revival //-->
        <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSfw9Je6eYnBwH_LZfFwBPWRRwIXTbx4yTOr_bEvs42OZsxElA/viewform?embedded=true" width="640" height="1820" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe>
    </div>
@endsection