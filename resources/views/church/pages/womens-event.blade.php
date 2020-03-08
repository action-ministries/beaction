@extends('church.master')
@section('title', 'Kingdom Woman: Show Me Naomi')
@section('content')
    <div class="kingdom-woman">
        <!-- Hero -->
        <div class="jumbotron bluebg">
            <h1><small><span>A.L.I.V.E. Presents</span> Kingdom Woman</small> <span class="small-title">Show Me</span> Naomi</h1>
            <div class="details">
                <address>Greentree Community Church <br />
                100 Kirkwood Pl. Kirkwood, MO 63122</address>
                <time datetime="2020-05-22T17:00">May 22 (5pm)</time> <time datetime="2020-05-23T09:00"> - May 23 (9am)</time>
            </div>
             <div class="row button-wrapper">
                <button type="button" class="btn btn-secondary btn-sm" data-target="#km-registration" data-toggle="modal">Register Now!</button>
                <a class="btn btn-primary btn-sm" href="//www.eventbrite.com/e/kingdom-woman-show-me-naomi-tickets-98503373241" target="_blank">Get Tickets</a>
            </div>
            <div class="photo"></div>
        </div>
        <!-- About -->
        <div class="row">
            <div class="row">
                <div class="col-md-6 nopad">
                    <img src="{{ asset('church/img/about-kw.png') }}" class="img-fluid event__image" />
                </div>
                <div class="col-md-6 nopad content text-right event__content">
                    <div class="wrap event__content-wrap">
                        <h2 class="event__content-title">About The Conference</h2>
                        <p>The Kingdom Woman conference is a 2 day event focused on encouraging, uplifting, and equipping women with dynamic speakers and revelent teaching. </p>
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
                        <h3>Sisterhood</h3>
                        <p>Enjoy a time of fellowship with like-minded women.</p>
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
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 speaker casandra">
                    <div class="text-container">
                        <h3>Casandra Davis</h3>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 speaker courtney">
                    <div class="text-container">
                        <h3>Courtney Williams</h3>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 speaker peggy">
                    <div class="text-container">
                        <h3>Peggy Demetri</h3>
                    </div>
                </div>
                <!-- <div class="col-sm-6 col-md-4 speaker harry">
                    <div class="text-container">
                        <h3>Pastor Harry Jones</h3>
                    </div>
                </div> -->
                <div class="col-sm-6 col-md-4 speaker speaker-noimg">
                    <div class="text-container">
                        <h2>More to Come...</h2>
                    </div>
                </div>
            </div>
        </div>
        <!--// Speakers //-->
        <!-- Sponsors -->
        <div class="sponsors text-center">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <h2>Sponsors</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 sponsor">
                        <a href="/" target="_blank">
                            <img src="{{ asset('church/img/actionlogo.png') }}" alt="ACTION Ministries">
                            ACTION Ministries
                        </a>
                    </div>
                    <div class="col-sm-6 sponsor">
                        <a href="//greentreechurch.com" target="_blank">
                            <img src="{{ asset('church/img/greentree.png') }}" alt="Greentree Community Church">
                        </a>
                    </div>
                    <div class="col-sm-6 sponsor">
                        <a href="//jubileebrands.com/" target="_blank">
                            <img src="{{ asset('church/img/jubilee.png') }}" alt="Jubilee Brands">
                        </a>
                    </div>
                    <div class="col-sm-6 sponsor">
                        <a href="//getcourtneychic.com/" target="_blank">
                            <img src="{{ asset('church/img/courtneychic.png') }}" alt="Courtney Chic">
                            Courtney<span>Chic</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!--// Sponsors //-->
        <!-- Contact Us -->
        <div class="contact text-center">
            <div class="row">
                <div class="col-md-6 mx-auto">
                    <div class="row">
                        <div class="col-md-12">
                            <h2 class="mx-auto">Contact Us</h2>
                            <p>Got questions? We have answers.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <p>
                                <a href="mailto:actionchristiancentersouth@gmail.com" target="_blank"><i class="fas fa-envelope"></i></a>
                                <a href="//www.facebook.com/ActionMinistries/" target="_blank"><i class="fab fa-facebook"></i></a>
                                <a href="//www.instagram.com/actionchristiancenter/" target="_blank"><i class="fab fa-instagram"></i></a>
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 offset-md-2">
                            <button type="button" class="btn btn-secondary btn-sm" data-target="#km-registration" data-toggle="modal">Register Now!</button>
                        </div>
                        <div class="col-md-4">
                            <a class="btn btn-primary btn-center btn-sm" href="//www.eventbrite.com/e/kingdom-woman-show-me-naomi-tickets-98503373241" target="_blank">Get Tickets</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--// Contact Us //-->
        <!-- Registration Modal -->
        <div class="modal fade" id="km-registration" tabindex="-1" role="dialog" aria-labelledby="km-registration-title" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title sr-only" id="km-registration-title">Kingdom Man Event Registration</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                    <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSd88hh9WwHnQ81-5W5dU1IQwFn_LhZdNHC3vUhF-6fh-EJ7YQ/viewform?embedded=true" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!--// Registration Modal //-->
    </div>
    <script>
        // $('#km-registration').modal();
    </script>
@endsection