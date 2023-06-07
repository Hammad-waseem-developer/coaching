@extends('DashboardLayout.dashboard_layout')

@section('content')

<div id="content">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-2"></div>
            <div class="col-md-4 my-5">
                <h2 class=" text-center">Edit field</h2>
                <form action="{{url('/dashboard/field-update-field')}}/{{$field[0]->field_id}}" class="my-4" method="post">
					@csrf
                    <div class="row justify-content-center">
                        <div class="col-md-12">
                            <label for="">field:</label>
                            <input type="text" class="form-control" placeholder="Enter field" name="field_name" value="{{$field[0]->field_name}}" id="">
                        </div>
                    </div>

                    <button class="btn btn-primary mt-4" type="submit">Update field</button>
                </form>
            </div>
        </div>
    </div>

</div>




@endsection
