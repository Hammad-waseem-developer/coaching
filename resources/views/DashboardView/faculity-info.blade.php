@extends('DashboardLayout.dashboard_layout')

@section('content')

<div id="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-2"></div>
      <div class="col-md-10 my-2">
        <a href="{{url('/dashboard/faculty')}}" class="btn btn-primary text-center"><< Back </a>
          <h1 class="text-center mt-3">Faculity Info</h1>

        <br>
        <div class="container">

          <div class="row mt-3 align-items-center">
            <h5>Faculity</h5>
            <hr>

            <div class="col-md-4">
              <p class="fw-bold">Full Name</p>
              <p>{{$faculity[0]->faculity_name}}</p>
            </div>
            <div class="col-md-4">
              <p class="fw-bold">Qualification</p>
              <p>{{$faculity[0]->faculity_qualification}}</p>
            </div>
            <div class="col-md-4">
              <img src="{{url('/')}}/public/faculityinfo/{{$faculity[0]->faculity_image}}" width="100px" height="100px" alt="">
            </div>

          </div>
          <div class="row align-items-center">
            <h5>Contact Info</h5>
            <hr>

            <div class="col-md-4">
              <p class="fw-bold">Contact & Whats app</p>
              <p>{{$faculity[0]->faculity_contact}}</p>
            </div>
            <div class="col-md-4">
              <p class="fw-bold"> Contact 2 </p>
              <p>{{$faculity[0]->faculity_contact2}}</p>
            </div>
            <div class="col-md-4">
              <p class="fw-bold">Faculity CNIC </p>
              <p>{{$faculity[0]->faculity_cnic}}</p>
            </div>
            <div class="col-md-4">
              <p class="fw-bold">Address</p>
              <p>{{$faculity[0]->faculity_address}}</p>
            </div>
            <div class="col-md-4">
              <p class="fw-bold">Experience</p>
              <p>{{$faculity[0]->experience}} Year</p>
            </div>
            <div class="col-md-4">
              <p class="fw-bold">Gender</p>
              @if ($faculity[0]->faculity_gender == "M")
              <p>Male</p>
              @endif
              @if ($faculity[0]->faculity_gender == "F")
              <p>Female</p>
              @endif
            </div>

          </div>

          <div class="row align-items-center">
            <h5>More Info</h5>
            <hr>

            <div class="col-md-4">
              <p class="fw-bold">Field</p>
              <p>{{$faculity[0]->field_name}}</p>
            </div>
            <div class="col-md-4">
              <p class="fw-bold">Email</p>
              <p>{{$faculity[0]->faculity_email}}</p>
            </div>
            <div class="col-md-4">
              <p class="fw-bold">Status</p>
              @if ($faculity[0]->faculity_status == 0)
              <p class="badge bg-danger">Inactive</p>
              @endif
              @if ($faculity[0]->faculity_status == 1)
              <p class="badge bg-success">Active</p>
              @endif
            </div>


          </div>



<hr>

        </div>



		</div>
        </div>
    </div>

</div>






@endsection
