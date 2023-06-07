@extends('frontend.layout.main')

@section('container')

<section class="">


    <div class="container py-4">
          <section class="ftco-section ftco-no-pt ftco-no-pb contact-section">
              <div class="container">
              <div class="row d-flex align-items no-gutters">
              <div class="col-md-12 p-4 p-md-5 order-md-last bg-light">
                <h3 class="text-primary mt-3 mb-3">Login</h3>
              <form action="{{url('/userloginstore')}}" method="GET" enctype="multipart/form-data">
              <div class="form-group">
                  <input type="email" id="form3Example3" name="useremail" class="form-control" placeholder="Email Address" />
                  @error('useremail')
                  <p class="text-danger">{{$message}}</p>
                  @enderror
              </div>
              <div class="form-group">
                  <input type="password" id="form3Example4" class="form-control" name="userpassword" placeholder="Password" />
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
