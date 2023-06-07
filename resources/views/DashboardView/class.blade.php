@extends('DashboardLayout.dashboard_layout')

@section('content')

<div id="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-2"></div>
      <div class="col-md-10 my-2">
          <h1 class="text-center my-4">All Classes</h1>
              <a href="{{ url ('/dashboard/class-add-class')}}" class="btn btn-primary">Add Class</a>
              <br><br>
              <div class="badge bg-danger p-2">{{session()->get('status')}}</div>
				<div class="table-responsive table-striped my-4">
					<table class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th style="width:80%;">Name</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
						@foreach ($data as $item)
						<tr>
							<td class="text-nowrap">{{$item->class_name}}</td>
							<td>
								<a href="{{ url('/dashboard/class-edit-class')}}/{{$item->class_id}}"><button class="btn btn-primary">Edit</button></a>
								<a href="{{ url('/dashboard/class-delete-class')}}/{{$item->class_id}}"><button class="btn btn-danger">Delete</button></a>
							  </td>
							</tr>
							@endforeach
                    </tbody>
                  </table>
				  </div>
            </div>
        </div>
    </div>

</div>


@endsection
