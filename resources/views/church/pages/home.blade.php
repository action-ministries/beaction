@extends('church.master')
@section('title', 'Home')
@section('content')
    <div class="jumbotron home">
        <div class="row">
            <div class="hero-text col-lg-5 offset-lg-6">
                <h1 class="title">A Place For You</h1>
                <p class="sub-title">ACC-South is a place just for you. No matter where you are in your walk with Christ, we're here to support you.</p>
            </div>
        </div>
    </div>
    <!-- Section 1 -->
    <div class="row salmonbg flip">
        <div class="row">
            <div class="col-lg-6 nopad">
                <img src="{{ asset('church/img/church.jpg') }}" class="img-fluid" />
            </div>
            <div class="col-lg-6 nopad content text-right">
                <div class="wrap">
                    <h2>New Here?</h2>
                    <p>We'd really like to connect with you. Send us a message on <a href="https://www.messenger.com/t/ActionMinistries" target="_blank">Facebook Messenger</a>, <a href="https://instagram.com/actionchristiancenter" title="Follow us on Instagram" target="_blank">Instagram</a> or <a href="mailto:actionchristiancentersouth@gmail.com" title="Email Us">Email</a>. </p>
                </div>
            </div>
        </div>
    </div>
    <!-- Section 2 -->
    <div class="row whitebg morepad text-center flip">
        <div class="col-lg-8 offset-lg-2">
            <h2>Want to Know More?</h2>
            <p>Follow us or send us a message to find out more about us.</p>
            <div class="know-social-icons">
                <a href="https://facebook.com/actionministries" title="Like us on Facebook" target="_blank"><i class="fab fa-3x fa-facebook facebook-text"></i></a>
                <a href="https://instagram.com/actionchristiancenter" title="Follow us on Instagram" target="_blank"><i class="fab fa-3x fa-instagram instagram-text"></i></a>
                <a href="mailto:actionchristiancentersouth@gmail.com" title="Email Us"><i class="far fa-3x fa-envelope-open"></i></a>
            </div>
        </div>
    </div>
    <!-- Section 3 -->
    <div class="row yellowbg">
        <div class="row">
            <div class="col-lg-6 nopad">
                <img src="{{ asset('church/img/children.jpg') }}" class="img-fluid" />
            </div>
            <div class="col-lg-6 nopad content">
                <div class="wrap">
                    <h2>Discover Jesus!</h2>
                    <p>At ACC-South, children recieve great, age-appropiate, bibical teaching. They're walked through the great Bible stories and after each class, they take time for a short recess in the playground.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Section 4 -->
    <div class="row purplebg flip">
        <div class="row">
            <div class="col-lg-6 nopad">
                <iframe width="100%" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3119.0886648983765!2d-90.40787868478776!3d38.57780597962123!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x87d8cc2fd980eadd%3A0xcbfef48f2d591bd5!2sGreentree+Community+Church!5e0!3m2!1sen!2sus!4v1535778563600" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            <div class="col-lg-6 nopad content">
                <div class="wrap">
                    <h2>Let's Meet!</h2>
                    <p>Located inside Greentree Community Church, we have Sunday Services starting at 2pm in the lower level. Park in the rear. Notify us of your coming and we’ll make sure to greet you in the parking lot.</p>
                </div>
            </div>
        </div>
    </div>
@endsection