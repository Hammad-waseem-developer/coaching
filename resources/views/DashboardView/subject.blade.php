@extends('DashboardLayout.dashboard_layout')

@section('content')

<div id="content">
  <div class="container-fluid">

    <div class="row">
      <div class="col-md-2"></div>
      <div class="col-md-10 my-2">
          <h1 class="text-center my-4">All Subjects</h1>
            <a href="{{ url ('/dashboard/subject-add-subject')}}" class="btn btn-primary">Add Subject</a>
            <br>
            <br>
            <div class="badge bg-danger p-2">{{session()->get('status')}}</div>
				<div class="table-responsive table-striped my-5">
					<table class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th style="width: 70%;">Subject</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
						@foreach ($data as $item)
                      <tr>
                        <td class="text-nowrap">{{$item->subject_name}}</td>
						<td>
							<a href="{{ url('/dashboard/subject-edit-subject')}}/{{$item->subject_id}}"><button class="btn btn-primary">Edit</button></a>
							<a onclick="deletesubject({{$item->subject_id}})"><button class="btn btn-danger">Delete</button></a>
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

    function deletesubject(id){

      var ans = confirm("Do you want to Delete ? ");

      if(ans){
        location.href = '{{url('/')}}/dashboard/subject-delete-subject/'+id;
      }

    }

</script>



@endsection
