@extends('DashboardLayout.dashboard_layout')

@section('content')

<div id="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-2"></div>
      <div class="col-md-10 my-2">
          <h1 class="text-center my-4">All Test</h1>
              <a href="{{ url ('/dashboard/test-add-test')}}" class="btn btn-primary">Add Test</a>
          <br><br>
          @if (session()->has('status'))
          <div class="row">
            <div class="col-md-4"><div class="alet alert-danger p-3">{{session()->get('status')}}</div></div>
          </div>

          @endif

              <div class="table-responsive table-striped my-3">
					<table class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th>Test</th>
                        <th>Subject </th>
                        <th>Total Marks</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        @foreach ($test as $item)
                        <td class="text-nowrap">{{$item->test_title}}</td>
                        <td class="text-nowrap">{{$item->subject_name}}</td>
                        <td class="text-nowrap">{{$item->test_marks}}</td>
                        <td>

                          <a href="{{ url('/dashboard/student_marks_add')}}/{{$item->test_id}}"><button class="btn btn-secondary">Upload Marks</button></a>
                          <a href="{{ url('/dashboard/test-edit-test')}}/{{$item->test_id}}"><button class="btn btn-primary">Edit</button></a>
                          <a href="{{ url('/dashboard/test-delete-test')}}/{{$item->test_id}}"><button class="btn btn-danger">Delete</button></a>
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
