@extends('frontend.layout.main')

@section('container')

{{-- Announcement --}}

<section class="hero-wrap hero-wrap-2 bg-dark">
    <div class="overlay"></div>
    <div class="container">
    <div class="row no-gutters slider-text align-items-center justify-content-center">
    <div class="col-md-9 ftco-animate text-center">
    <h1 class="mb-2 bread">Announcements</h1>
    <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Announcements <i class="ion-ios-arrow-forward"></i></span></p>
    </div>
    </div>
    </div>
    </section>
    <section class="ftco-section">
    <div class="container px-4">
    <div class="row">
        @foreach ($announcement as $announce)
        <div class="col-md-3 course ftco-animate">
            @if ($announce->announcement_image)
        {{-- <img src="{{url('/public/announcementinfo/'.$announce->announcement_image)}}" style="width:100%;height: 300px;" class="img-fluid w-100 h-100" alt=""> --}}
        <div class="img" style="background-image: url({{url('/public/announcementinfo/'.$announce->announcement_image)}});"></div>
        @else
        <div class="img" style="background-image: url(https://static.vecteezy.com/system/resources/previews/003/313/595/original/attention-please-concept-of-important-announcement-free-vector.jpg);"></div>
        @endif
    <div class="text pt-4">
        <p class="meta d-flex">
            <span><i class="icon-table mr-2"></i>{{($announce->announcement_date)}}</span>
        </p>
    <h3><a href="{{url('/announcedetails')}}/{{$announce->announcement_id}}">{{($announce->announcement_name)}}</a></h3>
    <p>{{($announce->announcement_desc)}}</p>
    <p><a href="{{url('/announcedetails')}}/{{$announce->announcement_id}}" class="btn btn-primary">Read More</a></p>
</div>
</div>

@endforeach
    </div>
    </div>
    </section>
{{-- Announcement END --}}
@endsection
