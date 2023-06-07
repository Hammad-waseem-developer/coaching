@extends('DashboardLayout.dashboard_layout')

@section('content')

<div id="content">
  <div class="container-fluid">

    <div class="row">
      <div class="col-md-2"></div>
      <div class="col-md-10 my-2">
          <h1 class="text-center my-4">All Fields</h1>
            <a href="{{ url ('/dashboard/field-add-field')}}" class="btn btn-primary">Add field</a>
            <br>
            <br>
            <div class="badge bg-danger p-2">{{session()->get('status')}}</div>
				<div class="table-responsive table-striped my-3">
					<table class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th style="width:60%;">field</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
						@foreach ($data as $item)
                      <tr>
                        <td class="text-nowrap">{{$item->field_name}}</td>
						<td>
							<a href="{{ url('/dashboard/field-edit-field')}}/{{$item->field_id}}"><button class="btn btn-primary">Edit</button></a>
							<a onclick="deletefield({{$item->field_id}})" ><button class="btn btn-danger">Delete</button></a>
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



<script>

  function deletefield(id){

    var ans = confirm("Do you want to Delete ? ");

    if(ans){
      location.href = '{{url('/')}}/dashboard/field-delete-field/'+id;
    }

  }

</script>


@endsection
