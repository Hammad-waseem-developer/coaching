@extends('DashboardLayout.dashboard_layout')

@section('content')

<div id="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-2"></div>
      <div class="col-md-10 my-2">
        <a href="{{url('/dashboard/student')}}" class="btn btn-primary text-center"><< Back </a>
          <h1 class="text-center mt-3">Admission Form </h1>

        <br>
        <div class="container">

          <div class="row mt-3 align-items-center">
            <h5>Personal Info</h5>
            <hr>

            <div class="col-md-4">
              <p class="fw-bold">Full Name</p>
              <p>{{$student->student_name}}</p>
            </div>
            <div class="col-md-4">
              <p class="fw-bold">Father Name</p>
              <p>{{$student->student_fname}}</p>
            </div>
            <div class="col-md-4">
              <img src="{{url('/')}}/public/student_pic/{{$student->picture}}" width="100px" height="100px" alt="">
            </div>

          </div>
          <div class="row align-items-center">
            <h5>Contact Info</h5>
            <hr>

            <div class="col-md-4">
              <p class="fw-bold">Contact & Whats app</p>
              <p>{{$student->student_contact}}</p>
            </div>
            <div class="col-md-4">
              <p class="fw-bold">Father Contact</p>
              <p>{{$student->father_contact}}</p>
            </div>
            <div class="col-md-4">
              <p class="fw-bold">Father CNIC </p>
              <p>{{$student->student_cnic}}</p>
            </div>
            <div class="col-md-4">
              <p class="fw-bold">Father Occupation</p>
              <p>{{$student->f_occupation}}</p>
            </div>
            <div class="col-md-4">
              <p class="fw-bold">Office Contact</p>
              <p>{{$student->office_contact}}</p>
            </div>
            <div class="col-md-4">
              <p class="fw-bold">office Address </p>
              <p>{{$student->office_address}}</p>
            </div>

            <div class="col-md-12">
              <p class="fw-bold">Home / Permanent Address</p>
              <p>{{$student->address}}</p>
            </div>


          </div>

          <div class="row align-items-center">
            <h5>Academic Info</h5>
            <hr>


            <div class="col-md-4">
              <p class="fw-bold">Current Class </p>
              <p>{{$student->class_name}}</p>
            </div>
            <div class="col-md-4">
              <p class="fw-bold">Student Field </p>
              <p>{{$student->field_name}}</p>
            </div>
            <div class="col-md-4">
              <p class="fw-bold">Current Session: </p>
              <p>{{$student->session_name}}</p>
            </div>

          </div>

          <div class="row align-items-center">
            <h5>Credential Details</h5>
            <hr>

            <div class="col-md-4">
              <p class="fw-bold">Student email / username </p>
              <p>{{$student->student_email}}</p>
            </div>
            <div class="col-md-4">
              <p class="fw-bold">Student Password </p>
              <p>{{Crypt::decryptString($student->student_password)}}</p>
            </div>
            <div class="col-md-4">
              <p class="fw-bold">Student Status: </p>
              @if ($student->student_status == 1)
                  <div class="badge bg-success">Active</div>
                  @else
                  <div class="badge bg-danger">unactive</div>

              @endif
              <p></p>
            </div>

          </div>

<hr>

        </div>



		</div>
        </div>
    </div>

</div>



<script>

  function deletestudent(id){

    var ans = confirm("Do you want to Delete ? ");

    if(ans){
      location.href = '{{url('/')}}/dashboard/student-delete-student/'+id;
    }

  }

</script>






@endsection
