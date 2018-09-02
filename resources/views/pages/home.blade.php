@extends('master')
@section('title', 'Home')
@section('content')
    <div class="jumbotron home">
        <div class="row">
            <div class="hero-text col-lg-4 col-lg-offset-7">
                <h1 class="title">A Place For You</h1>
                <p class="sub-title">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam assumenda commodi expedita maxime voluptate. Itaque libero odio perferendis quia tenetur?</p>
                <a href="#" class="btn btn-ghost">Button</a>
            </div>
        </div>
    </div>
    <!-- Section 1 -->
    <div class="row salmonbg flip">
        <div class="row">
            <div class="col-lg-6 nopad">
                <img src="{{ asset('/img/church.jpg') }}" class="img-fluid" />
            </div>
            <div class="col-lg-6 nopad content text-right">
                <div class="wrap">
                    <h2>New Here?</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A aspernatur beatae corporis enim illum ipsum laudantium modi molestias obcaecati, quas qui saepe tempore ut vitae?</p>
                    <a href="#" class="btn btn-lg btn-primary">Button</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Section 2 -->
    <div class="row whitebg morepad text-center flip">
        <div class="col-lg-4 col-lg-offset-4">
            <h2>Want to Know More?</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores at atque cum distinctio ea exercitationem facere impedit nihil provident quasi!</p>
            <a href="#" class="btn btn-primary">Button</a>
        </div>
    </div>
    <!-- Section 3 -->
    <div class="row yellowbg">
        <div class="row">
            <div class="col-lg-6 nopad">
                <img src="{{ asset('img/children.jpg') }}" class="img-fluid" />
            </div>
            <div class="col-lg-6 nopad content">
                <div class="wrap">
                    <h2>New Here?</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam at doloribus hic iste quam quisquam soluta voluptates. Cupiditate maxime praesentium quos recusandae reprehenderit sunt voluptatem.</p>
                    <a href="#" class="btn btn-lg btn-purple">Button</a>
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
                    <h2>New Here?</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam at doloribus hic iste quam quisquam soluta voluptates. Cupiditate maxime praesentium quos recusandae reprehenderit sunt voluptatem.</p>
                </div>
            </div>
        </div>
    </div>
@endsection