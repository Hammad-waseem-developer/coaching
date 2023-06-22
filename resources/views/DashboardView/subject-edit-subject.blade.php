@extends('DashboardLayout.dashboard_layout')

@section('content')

<div id="content">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-2"></div>
            <div class="col-md-4 my-5">
                <h2 class=" text-center">Edit Subject</h2>
                <form action="{{url('/dashboard/subject-update-subject')}}/{{$subject[0]->subject_id}}" class="my-4" method="post">
					@csrf
                    <div class="row justify-content-center">
                        <div class="col-md-12">
                            <label for="">Subject:</label>
                            <input type="text" class="form-control" placeholder="Enter Subject" name="subject_name" value="{{$subject[0]->subject_name}}" id="">
                        </div>
                        <div class="col-md-4 mt-2">
                            <label for="" class="form-label">Class<span
                                    class="text-danger fw-bold">*</span></label>

                            <select name="class" class="form-select">
                                @foreach ($class as $item)
                                    <option value="{{ $item->class_id }}" {{ $item->class_id == $subject[0]->class_id ? 'selected' : '' }}>
                                        {{ $item->class_name }}</option>
                                @endforeach
                            </select>
                            @error('class')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <button class="btn btn-primary mt-4" type="submit">Update Subject</button>
                </form>
            </div>
        </div>
    </div>

</div>




@endsection
