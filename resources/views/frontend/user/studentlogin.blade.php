@extends('frontend.layout.main')

@section('container')

<section class="">

    @if (session()->has('status'))
    <p class="bg-danger p-2 text-white">{{session()->get('status')}}</p>
    @endif

    <div class="container py-4">
          <section class="ftco-section ftco-no-pt ftco-no-pb contact-section">
              <div class="container">
              <div class="row d-flex align-items no-gutters">
              <div class="col-md-12 p-4 p-md-5 order-md-last bg-light">
                <h3 class="text-primary mt-3 mb-3">Student Login</h3>
              <form action="{{url('/studentloginstore')}}" method="POST" enctype="multipart/form-data">
                @csrf
              <div class="form-group">
                  <input type="email" id="form3Example3" name="student_email" class="form-control" placeholder="Email Address" />
                  @error('useremail')
                  <p class="text-danger">{{$message}}</p>
                  @enderror
              </div>
              <div class="form-group">
                  <input type="password" id="form3Example4" class="form-control" name="student_password" placeholder="Password" />
                  @error('userpassword')
                  <p class="text-danger">{{$message}}</p>
                  @enderror
              </div>
              <div class="form-group  mt-3 mb-3">
                  <input type="submit" value="Login" class="btn btn-primary py-3 px-5">
                  </div>
              </form>
              </div>

              </div>
              </div>
              </section>

    </div>
  </section>
@endsection
