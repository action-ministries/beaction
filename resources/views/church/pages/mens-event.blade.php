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
             <div class="row button-wrapperß">
                <button type="button" class="btn btn-secondary btn-sm" data-target="#km-registration" data-toggle="modal">Register Now!</button>
                <a class="btn btn-primary btn-sm" href="//www.eventbrite.com/e/kingdom-man-men-at-work-tickets-97654534341" target="_blank">Get Tickets</a>
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
                        <p>The Kingdom Man conference is a 2 day event focused on encouraging, uplifting, and equipping men with dynamic speakers and revelent teaching. </p>
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
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 speaker elijah">
                    <div class="text-container">
                        <h3>Minister Elijah Williams</h3>
                    </div>
                </div>
                <!-- <div class="col-sm-6 col-md-4 speaker randy">
                    <div class="text-container">
                        <h3>Dr. Randolph Shed</h3>
                    </div>
                </div> -->
                <div class="col-sm-6 col-md-4 speaker demetrius">
                    <div class="text-container">
                        <h3>Pastor Demetrius Moore</h3>
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
                        <a href="http://jubileebrands.com/" target="_blank">
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
                            <a class="btn btn-primary btn-center btn-sm" href="//www.eventbrite.com/e/kingdom-man-men-at-work-tickets-97654534341" target="_blank">Get Tickets</a>
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
                        <iframe src="//docs.google.com/forms/d/e/1FAIpQLSfw9Je6eYnBwH_LZfFwBPWRRwIXTbx4yTOr_bEvs42OZsxElA/viewform?embedded=true" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe>
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