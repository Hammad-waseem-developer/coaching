@extends('frontend.layout.main')

@section('container')

    {{-- ---------- --}}
    <section class="hero-wrap hero-wrap-2" style="background-image: url('{{url('/public/frontend_assets/images/bg_1.jpg')}}');">
        <div class="overlay"></div>
        <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
        <div class="col-md-9 ftco-animate text-center">
        <h1 class="mb-2 bread">Our Qualified Teachers</h1>
        <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Top Rank Students <i class="ion-ios-arrow-forward"></i></span></p>
        </div>
        </div>
        </div>
        </section>
        <section class="ftco-section bg-light">
        <div class="container-fluid px-4">
        <div class="row">
            @foreach ($faculity as $teacher)

            {{--  --}}
        <div class="col-md-6 col-lg-3 ftco-animate">
        <div class="staff">
        <div class="img-wrap d-flex align-items-stretch">
        <div class="img align-self-stretch" style="background-image: url({{ url('public/faculityinfo/' . $teacher->faculity_image)}});"></div>
        </div>
        <div class="text pt-3 text-center">
        <h3> <a href="{{url('/faculty-info')}}/{{$teacher->faculity_id}}"> {{($teacher->faculity_name)}} </a></h3>
        <span class="position mb-2">{{($teacher->faculity_email)}}</span>
        <div class="faded">
        <p>{{($teacher->faculity_qualification)}}</p>
        <ul class="ftco-social text-center">
        </ul>
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


{{--  --}}
@endsection
