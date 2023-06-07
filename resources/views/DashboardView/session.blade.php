@extends('DashboardLayout.dashboard_layout')

@section('content')

<div id="content">
    <div class="container-fluid">
        <div class="row">
          <div class="col-md-2"></div>
            <div class="col-md-10 my-2">
                <br>
                <br>
                <div class="badge bg-danger p-2">{{session()->get('status')}}</div>
				<div class="table-responsive table-striped">
					<table class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th style="width:70%;">Session</th>

                        <th>Action</th>
                    </tr>
                </thead>
                    <tbody>
						@foreach ($data as $item)
                      <tr>
                        <td class="text-nowrap">{{$item->session_name}}</td>
						<td>
							<a href="{{ url('/dashboard/session-edit-session')}}/{{$item->session_id}}"><button class="btn btn-primary">Edit</button></a>
							<a href="{{ url('/dashboard/session-delete-session')}}/{{$item->session_id}}"><button class="btn btn-danger">Delete</button></a>
						  </td>
                      </tr>
					  @endforeach
                      <a href="{{ url ('/dashboard/session-add-session')}}" class="btn btn-primary my-5">Add session</a>
                    </tbody>
                  </table>
				  </div>
            </div>
        </div>
    </div>

</div>




@endsection
