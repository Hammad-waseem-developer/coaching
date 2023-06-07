@extends('DashboardLayout.dashboard_layout')

@section('content')

<div id="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-2"></div>
      <div class="col-md-10 my-2">
        <h1 class="text-center my-4">Test</h1>
              <a href="{{ url ('/dashboard/test-detail-add')}}" class="btn btn-primary">Add Student Test Marks</a>
				<div class="table-responsive table-striped mt-4">
					<table class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        {{-- <th>Test Detail ID</th> --}}
                        <th>Student </th>
                        <th>Test </th>
                        <th>Total Marks</th>
                        <th>Obtained Marks</th>
                        <th>Status</th>
                        <th>Action </th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($student as $item)
                      <tr>
                        {{-- <td class="text-nowrap">{{$item->studenttest_id}}</td> --}}
                        <td class="text-nowrap">{{$item->student_name}}</td>
                        <td class="text-nowrap">{{$item->test_title}}</td>
                        <td class="text-nowrap">{{$item->test_marks}}</td>
                        <td class="text-nowrap">{{$item->obtain_marks}}</td>
                        <td class="text-nowrap">@if ($item->status == 1)
                            <div class="badge bg-success">Pass</div>
                            @else
                            <div class="badge bg-danger">Fail</div>

                        @endif</td>
                        {{-- <td class="text-nowrap">{{$item->test_marks}}</td> --}}
                        <td>
                          <a href="{{ url('/dashboard/test-detail-edit')}}/{{$item->studenttest_id}}"><button class="btn btn-primary">Edit</button></a>
                          <a href="{{ url('/dashboard/test-detail-delete')}}/{{$item->studenttest_id}}"><button class="btn btn-danger">Delete</button></a>
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
