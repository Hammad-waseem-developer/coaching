@extends('DashboardLayout.dashboard_layout')

@section('content')

<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-md-12 my-5">
                <div class="table-responsive table-striped">
					<table class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th>User ID</th>
                        <th>User Username</th>
                        <th>User Email</th>
                        <th>User Password</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($result as $row )
                        <tr>
                            <td>{{$row->userID}}</td>
                            <td>{{$row->username}}</td>
                            <td>{{$row->useremail}}</td>
                            <td>{{$row->userpassword}}</td>
                            <td>
                                <a href="{{url('DashboardView/user/delete')}}/{{$row->userID}}" class="btn btn-btn-primary">Delete</a>

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
