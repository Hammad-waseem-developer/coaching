@extends('frontend.layout.main')

@section('container')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2 col-sm-2 p-0 m-0 bg-success">
                <ul class="list-unstyled">
                    <li style="border-bottom: 2px solid white; margin: 0; padding: 10px;"><a onclick="myprofile(event)"
                        style="color: white; padding: 0; margin: 0%;" href="">My Profile</a></li>

                    <li style="border-bottom: 2px solid white; margin: 0; padding: 10px;"><a onclick="test_detail(event)"
                        style="color: white; padding: 0; margin: 0%;" href="">My Test Details</a></li>

                    <li style="border-bottom: 2px solid white; margin: 0; padding: 10px;"><a onclick="my_faculity(event)"
                        style="color: white; padding: 0; margin: 0%;" href="">My Faculity</a></li>
                </ul>
            </div>

            <div class="col-md-10 col-sm-10" style="overflow: hidden !important;" id="data">
                <h1 class="mt-4 text-center text-success"> <span class="">Welcome !</span><br />
                    {{ $student[0]->student_name }}
                </h1>
            </div>



        </div>
    </div>
    <script>
        // MYPROFILE

        function myprofile(event) {
            event.preventDefault();
            var data = document.getElementById('data');
            data.innerHTML = `
            <div class="container" style="overflow: hidden !important;">
                    <div class="row mt-3 align-items-center">
                      <h5>Personal Info</h5>
                      <hr>

                      <div class="col-md-4">
                        <p class="fw-bold">Full Name</p>
                        <p>{{ $student[0]->student_name }}</p>
                      </div>
                      <div class="col-md-4">
                        <p class="fw-bold">Father Name</p>
                        <p>{{ $student[0]->student_fname }}</p>
                      </div>
                      <div class="col-md-4">
                        <img src="{{ url('/') }}/public/student_pic/{{ $student[0]->picture }}" width="100px" height="100px" alt="">
                      </div>

                    </div>
                    <div class="row align-items-center">
                      <h5>Contact Info</h5>
                      <hr>

                      <div class="col-md-4">
                        <p class="fw-bold">Contact & Whats app</p>
                        <p>{{ $student[0]->student_contact }}</p>
                      </div>
                      <div class="col-md-4">
                        <p class="fw-bold">Father Contact</p>
                        <p>{{ $student[0]->father_contact }}</p>
                      </div>
                      <div class="col-md-4">
                        <p class="fw-bold">Father CNIC </p>
                        <p>{{ $student[0]->student_cnic }}</p>
                      </div>
                      <div class="col-md-4">
                        <p class="fw-bold">Father Occupation</p>
                        <p>{{ $student[0]->f_occupation }}</p>
                      </div>
                      <div class="col-md-4">
                        <p class="fw-bold">Office Contact</p>
                        <p>{{ $student[0]->office_contact }}</p>
                      </div>
                      <div class="col-md-4">
                        <p class="fw-bold">office Address </p>
                        <p>{{ $student[0]->office_address }}</p>
                      </div>

                      <div class="col-md-10">
                        <p class="fw-bold">Home / Permanent Address</p>
                        <p>{{ $student[0]->address }}</p>
                      </div>


                    </div>

                    <div class="row align-items-center">
                      <h5>Academic Info</h5>
                      <hr>


                      <div class="col-md-4">
                        <p class="fw-bold">Current Class </p>
                        <p>{{ $student[0]->class_name }}</p>
                      </div>
                      <div class="col-md-4">
                        <p class="fw-bold">Student Field </p>
                        <p>{{ $student[0]->field_name }}</p>
                      </div>
                      <div class="col-md-4">
                        <p class="fw-bold">Current Session: </p>
                        <p>{{ $student[0]->session_name }}</p>
                      </div>

                    </div>

                    <div class="row align-items-center">
                      <h5>Credential Details</h5>
                      <hr>

                      <div class="col-md-4">
                        <p class="fw-bold">Student email / username </p>
                        <p>{{ $student[0]->student_email }}</p>
                      </div>
                      <div class="col-md-4">
                        <p class="fw-bold">Student Password </p>
                        <p>{{ Crypt::decryptString($student[0]->student_password) }}</p>
                      </div>
                      <div class="col-md-4">
                        <p class="fw-bold">Student Status: </p>
                        @if ($student[0]->student_status == 1)
                            <div class="badge bg-success">Active</div>
                            @else
                            <div class="badge bg-danger">unactive</div>

                        @endif
                        <p></p>
                      </div>

                    </div>

          <hr>

                  </div>
        `
        }
        </script>
        {{-- MYPROFILE --}}


    <script>
        function my_faculity(event) {
            event.preventDefault();
            var data = document.getElementById('data');
            data.innerHTML = `
            <div class="container">
                <div class="row mt-3 align-items-center">
                    <h5>Faculity</h5>
                    <hr>
  <div class="col-md-4">
    <p class="fw-bold">Full Name</p>
    <p>{{ $faculity[0]->faculity_name }}</p>
  </div>
  <div class="col-md-4">
    <p class="fw-bold">Qualification</p>
    <p>{{ $faculity[0]->faculity_qualification }}</p>
  </div>
  <div class="col-md-4">
    <img src="{{ url('/') }}/public/faculityinfo/{{ $faculity[0]->faculity_image }}" width="100px" height="100px" alt="">
  </div>

</div>
<div class="row align-items-center">
  <h5>Contact Info</h5>
  <hr>

  <div class="col-md-4">
    <p class="fw-bold">Contact & Whats app</p>
    <p>{{ $faculity[0]->faculity_contact }}</p>
  </div>
  <div class="col-md-4">
    <p class="fw-bold">Experience</p>
    <p>{{ $faculity[0]->experience }} Year</p>
  </div>
  <div class="col-md-4">
    <p class="fw-bold">Gender</p>
    @if ($faculity[0]->faculity_gender == 'M')
    <p>Male</p>
    @endif
    @if ($faculity[0]->faculity_gender == 'F')
    <p>Female</p>
    @endif
  </div>

</div>

<div class="row align-items-center">
  <h5>More Info</h5>
  <hr>

  <div class="col-md-4">
    <p class="fw-bold">Field</p>
    <p>{{ $faculity[0]->field_name }}</p>
  </div>
  <div class="col-md-4">
    <p class="fw-bold">Email</p>
    <p>{{ $faculity[0]->faculity_email }}</p>
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
        `
        }
    </script>




<script>
        // MYFACULITY



        // MYTEST
        function test_detail(event) {
            event.preventDefault();
            var data = document.getElementById('data');
            data.innerHTML = `
            <div class="container" style="overflow: hidden !important;">
                    <div class="row mt-3 align-items-center">
                      <h5>Test Info</h5>
                      <hr>
                      <div class="col-md-4">
                        <p class="fw-bold">Full Name</p>
                        <p>{{ $student[0]->student_name }}</p>
                      </div>
                      <div class="col-md-4">
                        <p class="fw-bold">Father Name</p>
                        <p>{{ $student[0]->student_fname }}</p>
                      </div>
                      <div class="col-md-4">
                        <img src="{{ url('/') }}/public/student_pic/{{ $student[0]->picture }}" width="100px" height="100px" alt="">
                      </div>

                    </div>
                    <div class="row align-items-center">
                        <h5>Test Info</h5>
                        @foreach ($test as $item)
                      <hr>

                      <div class="col-md-3">
                        <p class="fw-bold">Test Title</p>
                        <p>{{ $item->test_title }}</p>
                      </div>
                      <div class="col-md-3">
                        <p class="fw-bold">Test Marks</p>
                        <p>{{ $item->test_marks }}</p>
                      </div>
                      <div class="col-md-3">
                        <p class="fw-bold">Obtain Marks </p>
                        <p>{{ $item->obtain_marks }}</p>
                      </div>

                      <div class="col-md-3">
                        <p class="fw-bold">Test Status: </p>
                        @if ($item->status == 1)
                            <div class="badge bg-success">Pass</div>
                            @else
                            <div class="badge bg-danger">Fail</div>
                        @endif
                        <p></p>
                      </div>

                      @endforeach
                    </div>

          <hr>

                  </div>
        `
        }
        // MYTEST
    </script>



    {{-- <div class="container">
        <div class="row">
            <div class="col-md-4">


                <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">Student Info</button>

                <div class="offcanvas offcanvas-start bg-success" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel"></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>

                    <button type="button" style="border: none; outline:none; background: white; border-radius: 20px; padding:5px;" data-bs-dismiss="offcanvas" aria-label="Close">
                        <a class="text-success" href="{{url('/')}}">Web</a>
                    </button>

                </div>


            </div>
        </div>
    </div> --}}
@endsection
