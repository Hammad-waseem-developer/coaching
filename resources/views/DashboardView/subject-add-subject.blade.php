@extends('DashboardLayout.dashboard_layout')

@section('content')

<div id="content">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-2"></div>
            <div class="col-md-4 my-5">
                <h2 class=" text-center my-3">Add Subject</h2>
                <form action="{{url('/dashboard/subject-add-subject/store')}}" method="post" class="my-4">
					@csrf
                    <div class="row justify-content-center">
                        <div class="col-md-12">
                            <label for="" class="form-label">Subject:</label>
                            <input type="text" class="form-control" value="{{old('subject_name')}}" placeholder="Enter Subject" name="subject_name" id="">
							@error('subject_name')
        					<p class="text-danger">{{$message}}</p>
      						@enderror
                        </div>
                        <div class="col-md-12 mt-3">
                            <label for="" class="form-label">Subject:</label>
                            <select name="class" class="form-select">
                                <option value="" selected disabled>Select Class</option>
                                @foreach ($class as $item)
                                    <option value="{{ $item->class_id }}">{{ $item->class_name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary mt-4" >Add New Subject</button>
                </form>
            </div>
        </div>
    </div>

</div>

@endsection
