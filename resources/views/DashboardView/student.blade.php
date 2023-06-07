@extends('DashboardLayout.dashboard_layout')

@section('content')

<div id="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-2"></div>
      <div class="col-md-10 my-2">
          <h1 class="text-center my-4">All Students</h1>
        <a href="{{url('/dashboard/student-add-student')}}" class="btn btn-primary text-center">Add Student</a>
				<div class="table-responsive table-striped my-5">
                <table class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th>F/Name</th>
                        <th>Contact</th>
                        <th>F Contact</th>
                        <th>CNIC</th>
                        {{-- <th>Class</th> --}}
                        {{-- <th>Field</th> --}}
                        {{-- <th>Session</th> --}}
                        {{-- <th>Email</th> --}}
                        {{-- <th style="width: 20%;">Password</th> --}}
                        <th>picture</th>
                        <th>Status</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($student as $item)
                      <tr>
                        <td class="text-nowrap">{{$item->student_name}}</th>
                        <td class="text-nowrap">{{$item->student_fname}}</td>
                        <td class="text-nowrap">{{$item->student_contact}}</td>
                        <td class="text-nowrap">{{$item->father_contact}}</td>
                        <td class="text-nowrap">{{$item->student_cnic}}</td>
                        {{-- <td class="text-nowrap">{{$item->class_name}}</td> --}}
                        {{-- <td class="text-nowrap">{{$item->field_name}}</td> --}}
                        {{-- <td class="text-nowrap">{{$item->session_name}}</td> --}}
                        {{-- <td class="text-nowrap">{{$item->student_email}}</td> --}}
                        {{-- <td style="width: 20%;" class="text-rap">{{Crypt::decryptString($item->student_password)}}</td> --}}
                          @if ($item->picture == null)
                          <td class="text-nowrap">No Picture</td>
                          @else
                          <td class="text-nowrap"><img src="{{url('/')}}/public/student_pic/{{$item->picture}}" width="50px" height="40px" alt=""></td>
                          @endif
                        <td class="text-nowrap">
                          @if ($item->student_status == 1)
                    <span class="badge bg-success">Active</span>

                    @else
                    <span class="badge bg-danger">InActive</span>

                  @endif
                        </td>
                        <td class="text-nowrap">
                          <a href="{{ url('/dashboard/student-edit-student')}}/{{$item->student_id}}"><button class="btn btn-primary">Edit</button></a>
                          <a href="{{ url('/dashboard/student-detail-student')}}/{{$item->student_id}}"><button class="btn btn-warning">Details</button></a>
                          <a onclick="deletestudent({{$item->student_id}})" ><button class="btn btn-danger">Delete</button></a>
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

  function deletestudent(id){

    var ans = confirm("Do you want to Delete ? ");

    if(ans){
      location.href = '{{url('/')}}/dashboard/student-delete-student/'+id;
    }

  }

</script>






@endsection
