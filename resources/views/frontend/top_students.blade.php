@extends('frontend.layout.main')

@section('container')



    {{-- ---------- --}}
    <section class="hero-wrap hero-wrap-2" style="background-image: url('{{url('/public/frontend_assets/images/bg_1.jpg')}}');">
        <div class="overlay"></div>
        <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
        <div class="col-md-9 ftco-animate text-center">
        <h1 class="mb-2 bread">Top Rank Students</h1>
        <p class="breadcrumbs"><span class="mr-2"><a href="{{url('/')}}">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Top Rank Students <i class="ion-ios-arrow-forward"></i></span></p>
        </div>
        </div>
        </div>
        </section>
        <section class="ftco-section bg-light">
        <div class="container-fluid px-4">
        <div class="row">
            @foreach ($topstudent as $alumnai)
            {{--  --}}
        <div class="col-md-6 col-lg-3 ftco-animate">
        <div class="staff">
        <div class="img-wrap d-flex align-items-stretch">
        <div class="img align-self-stretch" style="background-image: url({{ asset('public/alumnaiinfo/' . $alumnai->alumnai_image)}});"></div>
        </div>
        <div class="text pt-3 text-center">
        <h3>{{($alumnai->alumnai_name)}}</h3>
        <span class="position mb-2">{{($alumnai->alumnai_achivement)}}</span>
        <div class="faded">
        <p>{{($alumnai->alumnai_qualification)}}</p>
        {{-- <ul class="ftco-social text-center">
        <li class="ftco-animate">Student Id: {{$alumnai->field_id}}</li>
        <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
        <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
        <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
        <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
        </ul> --}}
        </div>
        </div>
        </div>
        </div>
        {{--  --}}
        @endforeach
        </div>
        </div>
        </section>
    {{-- ---------- --}}

@endsection
