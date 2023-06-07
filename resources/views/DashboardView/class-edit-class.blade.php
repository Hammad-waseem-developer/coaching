@extends('DashboardLayout.dashboard_layout')

@section('content')

<div id="content">
    <div class="container-fluid ">
        <div class="row justify-content-center">
            <div class="col-md-2"></div>
            <div class="col-md-4 my-5">
                <h2 class="text-center mt-5">Edit Class</h2>
                <form action="{{url('/dashboard/class-update-class')}}/{{$class[0]->class_id}}" class="my-4" method="post">
					@csrf
                    <div class="row justify-content-center">
                        <div class="col-md-12">
                            <label for="" class="form-label">Class:</label>
                            <input type="text" class="form-control" placeholder="Enter Class" name="class_name" value="{{$class[0]->class_name}}">
                        </div>
                    </div>

                    <button class="btn btn-primary mt-4" type="submit">Update Class</button>
                </form>
            </div>
        </div>
    </div>

</div>

@endsection
