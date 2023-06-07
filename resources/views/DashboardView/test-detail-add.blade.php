@extends('DashboardLayout.dashboard_layout')

@section('content')
    <div id="content">

        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-2"></div>
                <div class="col-md-10 my-2">
                    <h2 class=" text-center">Add Test Marks</h2>

                    <br>
                    <form action="{{ url('/dashboard/search') }}" method="post">
                    <div class="row justify-content-center">
                            @csrf
                            <div class="col-md-4">

                                <label for="" class="form-label">Search Filter </label>
                                <br>
                                <label for="">Select Group / Field </label>
                                <select name="field" class="form-select">
                                    <option value="" selected disabled>Select Field</option>
                                    @foreach ($field as $item)
                                        <option value="{{ $item->field_id }}"
                                            @if (session()->get('testfield') == $item->field_id)
                                                {{"selected"}}
                                            @endif>{{ $item->field_name }}</option>
                                    @endforeach
                                </select>
                                <br>
                            </div>
                            <div class="col-md-4">
                                <br>
                                <label for="" class="form-label">Select Class</label>
                                <select name="class" class="form-select">
                                    <option value="" selected disabled>Select Class</option>
                                    @foreach ($class as $item)
                                        <option value="{{ $item->class_id }}"
                                            @if (session()->get('testclass') == $item->class_id)
                                                {{"selected"}}
                                            @endif>{{ $item->class_name }}</option>
                                    @endforeach
                                </select>
                                <br>
                            </div>
                            <div class="col-md-4">
                                <br>
                                <br>
                                <button type="submit" class="mt-2 btn btn-primary">Search</button>
                            </div>
                        </div>
                    </form>
                    <hr>

                    <div class="row justify-content-center">
                        <div class="col-md-4">

                            @if (session()->has('status'))

                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>{{session()->get('status')}}</strong>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                            @endif
                        </div>
                    </div>

                    <form action="{{ url('/dashboard/test-detail-store') }}" method="post" class="my-4">
                        @csrf
                        <div class="row my-3">
                            <div class="col-md-6">

                                <label for="" class="form-label">Select Student</label>
                                <select class="js-example-basic-single form-select " name="student_id" >
                                    <option value="" selected >Select Student</option>
                                    @foreach ($student as $item)
                                    <option value="{{ $item->student_id }}">{{ $item->student_name }}</option>
                                    @endforeach
                                  </select>
                                @error('student_id')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="" class="form-label">Selected Test </label>
                                    {{-- <input type="text" name="test_id" class="form-control" value="{{session()->get('test_id')}}"  readonly class="disabled"> --}}
                                <input type="hidden" name="test_id" value="{{session()->get('test_id')}}">
                                    <select name="test_id2" class="form-select">

                                       @foreach ($test as $item)
                                       <option value="{{$item->test_id}}"
                                        @if (session()->get('test_id') == $item->test_id)
                                            {{"selected disabled"}}
                                            @else
                                            {{"disabled"}}
                                        @endif>{{$item->test_title}}</option>

                                       @endforeach
                                    </select>
                                    @error('test_id2')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>

                        </div>
                        <div class="row my-3">

                            <div class="col-md-6">
                                <label for="" class="form-label">Enter Obtained Marks Out of {{session()->get('total_marks')}}</label>
                                <input type="number" class="form-control" min="0" max="{{session()->get('total_marks')}}" value="{{ old('obtain_marks') }}"
                                    placeholder="Enter Obtained Marks" name="obtain_marks" id="">
                                @error('obtain_marks')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="" class="form-label">Status</label>
                                <select name="status" class="form-select">
                                    <option value="" selected disabled>Select Status</option>
                                    <option value="0">Fail</option>
                                    <option value="1">Pass</option>
                                </select>
                                @error('obtain_marks')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="" class="form-label">Test Date</label>
                                <input type="date" name="date" class="form-control">
                                @error('date')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>

                        </div>
                        <button type="submit" class="btn btn-primary my-4">Add Test Marks</button>
                    </form>
                </div>
            </div>
        </div>



    </div>
    </div>
@endsection
