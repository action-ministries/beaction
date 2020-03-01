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
        <!-- About -->
        <div class="row">
            <div class="row">
                <div class="col-md-6 nopad">
                    <img src="{{ asset('church/img/about-km.png') }}" class="img-fluid event__image" />
                </div>
                <div class="col-md-6 nopad content text-right event__content">
                    <div class="wrap event__content-wrap">
                        <h2 class="event__content-title">About The Conference</h2>
                        <p>Every church no matter the denomination, no matter the racial, economic, or social background is welcome to attend this wonderful revival. Come out and let's reconnect with our God together!
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!--// About //-->
        <!-- What to Expect -->
        <div class="features row text-center">
            <div class="container">
                <h2>What to Expect</h2>
                <div class="row">
                    <div class="col-sm-12 col-md-4 card fire">
                        <i class="fas fa-fire"></i>
                        <h3>Dynamic Speakers</h3>
                        <p>The Word of God delivered through powerful Spirit-filled messages.</p>
                    </div>
                    <div class="col-sm-12 col-md-4 card food">
                        <i class="fas fa-utensils"></i>
                        <h3>Food Included</h3>
                        <p>Come and be filled. Spiritually and physically.</p>
                    </div>
                    <div class="col-sm-12 col-md-4 card fellowship">
                        <i class="fas fa-users"></i>
                        <h3>Brotherhood</h3>
                        <p>Enjoy a time of fellowship with like-minded brothers.</p>
                    </div>
                </div>
            </div>
        </div>
        <!--// What to Expect //-->
        <!-- Speakers -->
        <div class="speakers">
            <div class="row">
                <div class="col-sm-6 col-md-4 speaker speaker-noimg">
                    <div class="text-container">
                        <h2>Meet Our Speakers</h2>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 speaker bishop">
                    <div class="text-container">
                        <h3>Bishop Ike Motley</h3>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorem, modi.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 speaker elijah">
                    <div class="text-container">
                        <h3>Minister Elijah Williams</h3>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorem, modi.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 speaker randy">
                    <div class="text-container">
                        <h3>Dr. Randolph Shed</h3>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorem, modi.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 speaker demetrius">
                    <div class="text-container">
                        <h3>Pastor Demetrius Moore</h3>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorem, modi.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 speaker harry">
                    <div class="text-container">
                        <h3>Pastor Harry Jones</h3>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorem, modi.</p>
                    </div>
                </div>
            </div>
        </div>
        <!--// Speakers //-->
        <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSfw9Je6eYnBwH_LZfFwBPWRRwIXTbx4yTOr_bEvs42OZsxElA/viewform?embedded=true" width="640" height="1820" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe>
    </div>
@endsection