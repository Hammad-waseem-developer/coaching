@extends('frontend.layout.main')

@section('container')
{{-- ----- --}}
<section class="hero-wrap hero-wrap-2 bg-dark">
    <div class="overlay"></div>
    <div class="container">
    <div class="row no-gutters slider-text align-items-center justify-content-center">
    <div class="col-md-9 ftco-animate text-center fadeInUp ftco-animated">
    <h1 class="mb-2 bread">Announcement Detail</h1>
    <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Announcement Detail <i class="ion-ios-arrow-forward"></i></span></p>
    </div>
    </div>
    </div>
    </section>
    <section class="ftco-section ftco-no-pt ftc-no-pb">
        <div class="container">
            @foreach ($announcedetails as $details)
            <div class="row d-flex mb-4 mt-4">
                <div class="col-md-5 order-md-last wrap-about wrap-about d-flex align-items-stretch">
        <div class="img" style="background-image: url({{url('/public/announcementinfo/'.$details->announcement_image)}}); border"></div>
        </div>



        <div class="col-md-7 wrap-about py-5 pr-md-4 ftco-animate fadeInUp ftco-animated">
            <h2 class="mb-4">{{($details->announcement_name)}}</h2>
            <p>{{($details->announcement_desc)}}</p>
            <p>{{($details->announcement_date)}}</p>
        </div>
    </div>
    @endforeach

        </div>
        </section>
{{-- ----- --}}
@endsection
