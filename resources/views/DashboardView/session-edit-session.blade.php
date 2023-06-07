@extends('DashboardLayout.dashboard_layout')

@section('content')

<div id="content">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-2"></div>
            <div class="col-md-4 my-5">
                <h2 class=" text-center">Edit Session</h2>
                <form action="{{url('/dashboard/session-update-session')}}/{{$session[0]->session_id}}" class="my-4" method="post">
					@csrf
                    <div class="row justify-content-center">
                        <div class="col-md-12">
                            <label for="">Session:</label>
                            <input type="text" class="form-control" placeholder="Enter Session" name="session_name" value="{{$session[0]->session_name}}" id="">
                        </div>
                    </div>

                    <button class="btn btn-primary mt-4" type="submit">Update Session</button>
                </form>
            </div>
        </div>
    </div>

</div>




@endsection
