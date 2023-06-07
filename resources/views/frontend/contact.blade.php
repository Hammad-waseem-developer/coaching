@extends('frontend.layout.main')

@section('container')
<section class="hero-wrap hero-wrap-2" style="background-image: url({{url('/public/frontend_assets/images/bg_1.jpg')}});">
    <div class="overlay"></div>
    <div class="container">
    <div class="row no-gutters slider-text align-items-center justify-content-center">
    <div class="col-md-9 ftco-animate text-center">
    <h1 class="mb-2 bread">Contact Us</h1>
    <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Contact <i class="ion-ios-arrow-forward"></i></span></p>
    </div>
    </div>
    </div>
    </section>
    <section class="ftco-section contact-section">
    <div class="container">
    <div class="row d-flex contact-info">
    <div class="col-md-3 d-flex">
    <div class="bg-light align-self-stretch box p-4 text-center">
    <h3 class="mb-4">Address</h3>
    <p>198 West 21th Street, Suite 721 New York NY 10016</p>
    </div>
    </div>
    <div class="col-md-3 d-flex">
    <div class="bg-light align-self-stretch box p-4 text-center">
    <h3 class="mb-4">Contact Number</h3>
    <p><a href="tel://1234567920">+ 1235 2355 98</a></p>
    </div>
    </div>
    <div class="col-md-3 d-flex">
    <div class="bg-light align-self-stretch box p-4 text-center">
    <h3 class="mb-4">Email Address</h3>
    <p><a href="https://preview.colorlib.com/cdn-cgi/l/email-protection#244d4a424b645d4b5156574d50410a474b49"><span class="__cf_email__" data-cfemail="bfd6d1d9d0ffc6d0cacdccd6cbda91dcd0d2">[email&#160;protected]</span></a></p>
    </div>
    </div>
    <div class="col-md-3 d-flex">
    <div class="bg-light align-self-stretch box p-4 text-center">
    <h3 class="mb-4">Website</h3>
    <p><a href="#">yoursite.com</a></p>
    </div>
    </div>
    </div>
    </div>
    </section>
    <section class="ftco-section ftco-no-pt ftco-no-pb contact-section">
    <div class="container">
    <div class="row d-flex align-items-stretch no-gutters">
    <div class="col-md-6 p-4 p-md-5 order-md-last bg-light">
    <form action="{{url('/user-message')}}" method="POST">
        @csrf
    <div class="form-group">
    <input type="text" class="form-control" name="user_name" placeholder="Your Name">
    @error('user_name')
    <p class="text-danger">{{ $message }}</p>
    @enderror
    </div>
    <div class="form-group">
    <input type="text" class="form-control" name="user_contact" placeholder="Contact No">
    @error('user_contact')
        <p class="text-danger">{{ $message }}</p>
    @enderror
    </div>
    <div class="form-group">
    <input type="email" class="form-control" name="user_email" placeholder="Email">
    @error('user_email')
    <p class="text-danger">{{ $message }}</p>
    @enderror
    </div>
    <div class="form-group">
    <input type="date" class="form-control" name="user_date" placeholder="Date">
    @error('user_date')
        <p class="text-danger">{{ $message }}</p>
    @enderror
    </div>
    <div class="form-group">
    <textarea name="user_message" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
    @error('user_message')
        <p class="text-danger">{{ $message }}</p>
    @enderror
    </div>
    <div class="form-group">
    <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
    </div>
    </form>
    </div>
    <div class="col-md-6 d-flex align-items-stretch">
    <div id="map"></div>
    </div>
    </div>
    </div>
    </section>
@endsection
