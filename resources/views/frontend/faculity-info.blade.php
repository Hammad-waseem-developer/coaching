@extends('frontend.layout.main')

@section('container')
    <section class="hero-wrap hero-wrap-2"
        style="background-image: url({{ url('/public/frontend_assets/images/bg_1.jpg') }});">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    <h1 class="mb-2 bread">Faculity Info</h1>
                    <p class="breadcrumbs"><span class="mr-2"><a href="{{url('/')}}">Home <i
                                    class="ion-ios-arrow-forward"></i></a></span> <span>Contact <i
                                class="ion-ios-arrow-forward"></i></span></p>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section contact-section">
        <div class="container">
            <div class="row d-flex contact-info">
                <div class="col-md-12 d-flex">

                    <div class="card mb-3">
                        <img src="{{url('/public/faculityinfo')}}/{{$faculity[0]->faculity_image}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h2 class="card-title"><span class="text-success"> Name : </span> {{$faculity[0]->faculity_name}}</h2>
                            <h5 class="card-title"><span class="text-success"> Contact : </span> {{$faculity[0]->faculity_contact}} / {{$faculity[0]->faculity_contact2}}</h5>
                            <p class="card-text"><span class="text-success"> Address : </span> {{$faculity[0]->faculity_address}}</p>
                            <p class="card-text"><span class="text-success"> Email : </span> {{$faculity[0]->faculity_email}}</p>
                            @if ($faculity[0]->faculity_gender == "M")
                            <p class="card-text"><span class="text-success"> Gender : </span> Male</p>
                            @endif
                            @if ($faculity[0]->faculity_gender == "F")
                            <p class="card-text"><span class="text-success"> Gender : </span> Female</p>
                            @endif
                            <p class="card-text"><span class="text-success">CNIC : {{$faculity[0]->faculity_cnic}}</p>
                            <p class="card-text"><span class="text-success">Qualification : </span> {{$faculity[0]->faculity_qualification}}</p>
                            <p class="card-text"><span class="text-success">Experience : </span> {{$faculity[0]->experience}} YEARS</p>
                            <p class="card-text"><span class="text-success">Joining : </span> {{$faculity[0]->faculity_joining}}</p>
                            <p class="card-text"><span class="text-success">Field : </span> {{$faculity[0]->field_name}}</p>
                            @if ($faculity[0]->faculity_status == 0)
                            <p class="card-text text-danger"><small class="text-muted"><span class="text-success"> Status : </span><span class="bg-danger text-light rounded-2 p-1"> Inactive </span></small></p>
                            @endif
                            @if ($faculity[0]->faculity_status == 1)
                            <p class="card-text text-success"><small class="text-muted"><span class="text-success"> Status : </span> <span class="bg-success text-light rounded-2 p-1"> Active </span> </small></p>
                            @endif

                        </div>
                    </div>

                </div>
            </div>
        </div>

    </section>
@endsection
