@extends('DashboardLayout.dashboard_layout')

@section('content')

<div id="content">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-2"></div>
            <div class="col-md-10 my-3">
                <h2 class=" text-center">Add Student</h2>
                <form action="{{url('/dashboard/student-add-student/store')}}" method="post" enctype="multipart/form-data" class="my-4">
                    @csrf
                    <div class="row justify-content-center">
                        <div class="col-md-6">
                            <label for="" class="form-label">Name <span class="text-danger fw-bold">*</span></label>
                            <input type="text" class="form-control" value="{{old('student_name')}}" placeholder="Enter Name" name="student_name" id="">
                            @error('student_name')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="" class="form-label">Father Name <span class="text-danger fw-bold">*</span></label>
                            <input type="text" class="form-control" value="{{old('student_fname')}}" placeholder="Enter Name" name="student_fname" id="">
                            @error('student_fname')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                        </div>
                    </div>
                    <div class="row my-3">
                        <div class="col-md-6 mt-1">
                            <label for="" class="form-label">Contact & What's app <span class="text-danger fw-bold">*</span></label>
                            <input type="tel" class="form-control" value="{{old('student_contact')}}" placeholder="03109987102" name="student_contact" id="">
                            @error('student_contact')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                        </div>
                        <div class="col-md-6 mt-1">
                            <label for="" class="form-label">Father Contact <span class="text-danger fw-bold">*</span></label>
                            <input type="tel" class="form-control" value="{{old('father_contact')}}" placeholder="03109987102" name="father_contact" id="">
                            @error('father_contact')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                        </div>
                        <div class="col-md-6 mt-1">
                            <label for="" class="form-label">Father CNIC <span class="text-danger fw-bold">*</span></label>
                            <input type="text" class="form-control" value="{{old('student_cnic')}}" placeholder="42501-9900009-3" name="student_cnic" id="">
                            @error('student_cnic')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                        </div>
                        <div class="col-md-6 mt-1">
                            <label for="" class="form-label">Father Occupation <span class="text-danger fw-bold">*</span></label>
                            <input type="text" class="form-control" value="{{old('occupation')}}" placeholder="Example: Teacher" name="occupation" id="">
                            @error('occupation')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                        </div>
                        <div class="col-md-6 mt-1">
                            <label for="" class="form-label">Office Contact :</label>
                            <input type="text" class="form-control" value="{{old('office_contact')}}" placeholder="0348299889" name="office_contact" id="">

                        </div>
                        <div class="col-md-6 mt-1">
                            <label for="" class="form-label">Office Address:</label>
                            <input type="text" class="form-control" value="{{old('office_address')}}" placeholder="Office Address" name="office_address" id="">

                        </div>
                        <div class="col-md-12 mt-1">
                            <label for="" class="form-label">Home Address <span class="text-danger fw-bold">*</span></label>
                            <textarea name="address" class="form-control" rows="3"></textarea>
                        </div>
                        @error('address')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror
                        <div class="col-md-6 mt-1">
                            <label for="" class="form-label">Session <span class="text-danger fw-bold">*</span></label>
                           <select name="session" class="form-select">
                            <option value="" selected disabled>Select Session</option>
                                @foreach ($sess as $item)
                                        <option value="{{$item->session_id}}">{{$item->session_name}}</option>
                                @endforeach
                           </select>
                            @error('session')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                        </div>
                        <div class="col-md-6 mt-1">
                            <label for="" class="form-label">Class <span class="text-danger fw-bold">*</span></label>
                            <select class="form-select " name="class_id" id="">
                                <option value="" selected disabled>Select Class</option>
                      @foreach ($class as $item)
                      <option value="{{$item->class_id}}">{{$item->class_name}}</option>
                      @endforeach
                              </select>
                              @error('class_id')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="row my-3">

                        <div class="col-md-6">
                            <label for="" class="form-label">Field / Group <span class="text-danger fw-bold">*</span></label>
                            <select class="form-select " name="field_id" id="">
                                <option value="" selected disabled> Select field </option>
                      @foreach ($field as $item)
                      <option value="{{$item->field_id}}">{{$item->field_name}}</option>
                      @endforeach
                              </select>
                              @error('field_id')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="" class="form-label">Section <span class="text-danger fw-bold">*</span></label>
                            <select class="form-select " name="section" >
                              <option value="1" selected>A</option>
                              <option value="2" >B</option>
                              <option value="3" >C</option>
                              <option value="4" >D</option>
                              <option value="5" >E</option>

                              </select>
                        </div>

                    </div>
                    <div class="row my-3">
                        <div class="col-md-6">
                            <label for="" class="form-label">Email <span class="text-danger fw-bold">*</span></label>
                            <input type="email" class="form-control" value="{{old('student_email')}}" placeholder="Enter Email" name="student_email" >
                            @error('student_email')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="" class="form-label">Password: <span class="text-danger fw-bold">*</span></label>
                            <input type="password" class="form-control" value="{{old('student_password')}}" placeholder="Enter Password" name="student_password" id="">
                            @error('student_password')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="row my-3">
                            <div class="col-md-6">

                                <label for="" class="form-label">Profile Picture</label>
                                <input type="file" name="student_pic" class="form-control">
                            </div>
                            <div class="col-md-6 my-4">
                                <div class="d-flex col-12">
                                    <label for="" class="form-label">Status : &nbsp;&nbsp;&nbsp;&nbsp;</label>
                                    <div class="form-check">
                                      <input class="form-check-input" type="radio" name="student_status" checked value="1">
                                      <label class="form-check-label" for="">
                                        Active
                                      </label>
                                    </div>
                                    <div class="form-check mx-3">
                                      <input class="form-check-input" type="radio" name="student_status"  value="0">
                                      <label class="form-check-label text-danger" for="">
                                        Inactive
                                      </label>
                                    </div>
                                  </div>
                            </div>
                        </div>

                </div>

                    <button type="submit" class="btn btn-primary my-4">Add Student</button>
                </form>
            </div>
        </div>
    </div>



</div>


@endsection
