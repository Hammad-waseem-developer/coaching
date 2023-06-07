@extends('DashboardLayout.dashboard_layout')

@section('content')
    <div id="content">

        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-2"></div>
                <div class="col-md-10 my-2">
                    <h2 class=" text-center">Edit Student</h2>
                    <form action="{{ url('/dashboard/student-update-student') }}/{{ $student->student_id }}" method="POST"
                        class="my-4" enctype="multipart/form-data">
                        @csrf
                        <div class="row justify-content-center">
                            <div class="col-md-6">
                                <label for="">Name:</label>
                                <input type="text" class="form-control" placeholder="Enter Name"
                                    value="{{ $student->student_name }}" name="student_name" id="">
                                @error('student_name')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="">Father Name:</label>
                                <input type="text" class="form-control" placeholder="Enter Name"
                                    value="{{ $student->student_fname }}" name="student_fname" id="">
                                @error('student_fname')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="row my-3">
                            <div class="col-md-6">
                                <label for="" class="form-label">Contact & What's app:</label>
                                <input type="tel" class="form-control" value="{{ $student->student_contact }}"
                                    placeholder="Enter Number" name="student_contact" id="">
                                @error('student_contact')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="" class="form-label">Father Contact:</label>
                                <input type="tel" class="form-control" value="{{ $student->father_contact }}"
                                    placeholder="Enter Number" name="father_contact" id="">
                                @error('father_contact')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="" class="form-label">Father CNIC:</label>
                                <input type="text" class="form-control" value="{{ $student->student_cnic }}"
                                    placeholder="Enter CNIC Number" name="student_cnic" id="">
                                @error('student_cnic')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-md-6 mt-1">
                                <label for="" class="form-label">Father Occupation <span class="text-danger fw-bold">*</span></label>
                                <input type="text" class="form-control" value="{{$student->f_occupation}}" placeholder="Example: Teacher" name="occupation" id="">
                                @error('occupation')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                            </div>
                            <div class="col-md-6 mt-1">
                                <label for="" class="form-label">Office Contact :</label>
                                <input type="text" class="form-control" value="{{$student->office_contact}}" placeholder="0348299889" name="office_contact" id="">

                            </div>
                            <div class="col-md-6 mt-1">
                                <label for="" class="form-label">Office Address:</label>
                                <input type="text" class="form-control" value="{{$student->office_address}}" placeholder="Office Address" name="office_address" id="">

                            </div>
                            <div class="col-md-12 mt-1">
                                <label for="" class="form-label">Home Address <span class="text-danger fw-bold">*</span></label>
                                <textarea name="address" class="form-control" rows="3">{{$student->address}}</textarea>
                            </div>
                            @error('address')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                            <div class="col-md-6">
                                <label for="" class="form-label">Session:</label>
                                <select name="session" class="form-select">
                                    <option value="" selected disabled>Select Session</option>
                                    @foreach ($sess as $item)
                                        <option value="{{ $item->session_id }}"
                                            @if ($item->session_id == $student->session_id) {{ 'selected' }} @endif>
                                            {{ $item->session_name }}</option>
                                    @endforeach
                                </select>
                                @error('session')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-md-6 mt-1">
                                <label for="">Class:</label>
                                <select class="form-select " name="class_id" id="">
                                    <option value="{{ $student->class_id }}" disabled>Select Class</option>
                                    @foreach ($class as $item)
                                        <option value="{{ $item->class_id }}"
                                            @if ($item->class_id == $item->class_id) {{ 'selected' }} @endif>
                                            {{ $item->class_name }}</option>
                                    @endforeach
                                </select>
                                @error('class')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="row my-3">

                            <div class="col-md-6">
                                <label for="">Field:</label>
                                <select class="form-select " name="field_id" id="">
                                    <option value="{{ $student->field_id }}" disabled> Select field </option>
                                    @foreach ($field as $item)
                                        <option value="{{ $item->field_id }}"
                                            @if ($item->field_id == $item->field_id) {{ 'selected' }} @endif>
                                            {{ $item->field_name }}</option>
                                    @endforeach
                                </select>
                                @error('field')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="" class="form-label">Section <span class="text-danger fw-bold">*</span></label>
                                <select class="form-select " name="section" >
                                  @if ($student->section == 1)
                                  <option value="1" selected >A</option>
                                  <option value="2" >B</option>
                                  <option value="3" >C</option>
                                  <option value="4" >D</option>
                                  <option value="5" >E</option>
                                  @elseif ($student->section == 2)
                                  <option value="1"  >A</option>
                                  <option value="2" selected >B</option>
                                  <option value="3" >C</option>
                                  <option value="4" >D</option>
                                  <option value="5" >E</option>
                                  @elseif ($student->section ==3)
                                  <option value="1" >A</option>
                                  <option value="2" >B</option>
                                  <option value="3" selected >C</option>
                                  <option value="4" >D</option>
                                  <option value="5" >E</option>
                                  @elseif ($student->section == 4)
                                  <option value="1" >A</option>
                                  <option value="2" >B</option>
                                  <option value="3"  >C</option>
                                  <option value="4" selected>D</option>
                                  <option value="5" >E</option>

                                  @elseif ($student->section == 5)
                                  <option value="1" >A</option>
                                  <option value="2" >B</option>
                                  <option value="3"  >C</option>
                                  <option value="4" >D</option>
                                  <option value="5" selected>E</option>

                                  @endif

                                  </select>
                            </div>
                        </div>
                        <div class="row my-3">
                            <div class="col-md-6">
                                <label for="">Email:</label>
                                <input type="email" class="form-control" value="{{ $student->student_email }}"
                                    placeholder="Enter Email" name="student_email" id="">
                                @error('student_email')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="">Password:</label>
                                <input type="text" class="form-control"
                                    value="{{ Crypt::decryptString($student->student_password) }}"
                                    placeholder="Enter Password" name="student_password" id="">
                                @error('student_password')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="row my-3">
                                <div class="col-md-6">
                                    <label for="">Student Profile</label>

                                    <input type="file" name="student_pic" class="form-control">
                                    <br>
                                    @if ($student->picture == null)
                                        {{ 'no picture upload' }}
                                    <input type="hidden" name="oldpic">

                                    @else
                                    <img src="{{url('/')}}/public/student_pic/{{$student->picture}}" width="60px" alt="">
                                    <input type="hidden" name="oldpic" value="{{$student->picture}}">
                                    @endif
                                </div>
                                <div class="col-md-6">
                                    <label class="mt-2 ">Status</label>
                                    @if ($student->student_status == '1')
                                        <div class="d-flex col-12">
                                            <div class="form-check">
                                                <input class="form-check-input" checked type="radio"
                                                    name="student_status" id="" value="1">
                                                <label class="form-check-label" for="">
                                                    Active
                                                </label>
                                            </div>
                                            <div class="form-check mx-3">
                                                <input class="form-check-input" type="radio" name="student_status"
                                                    id="" value="0">
                                                <label class="form-check-label text-danger" for="">
                                                    Inactive
                                                </label>
                                            </div>
                                        @else
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="student_status"
                                                    id="" value="1">
                                                <label class="form-check-label" for="">
                                                    Active
                                                </label>
                                            </div>
                                            <div class="form-check mx-3">
                                                <input class="form-check-input" checked type="radio"
                                                    name="student_status" id="" value="0">
                                                <label class="form-check-label text-danger" for="">
                                                     Inactive
                                                </label>
                                            </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary ">Update Student</button>

                </form>
            </div>
        </div>
    </div>



    </div>
@endsection
