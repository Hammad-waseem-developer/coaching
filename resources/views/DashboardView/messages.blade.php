@extends('DashboardLayout.dashboard_layout')

@section('content')
    <div id="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-10 my-2">
                    <h1 class="text-center my-4">Messages From Users</h1>
                    <div class="table-responsive table-striped">
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Contact</th>
                                    <th>Email</th>
                                    <th>Date</th>
                                    <th>Message</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($messages as $message)
                                    <tr>
                                        <td class="text-nowrap">{{ $message->user_name }}</td>
                                        <td class="text-nowrap">{{ $message->user_contact }}</td>
                                        <td class="text-nowrap">{{ $message->user_email }}</td>
                                        <td class="text-nowrap">{{ $message->user_date }}</td>
                                        <td class="text-nowrap">{{ $message->user_message }}</td>
                                        <td class="text-nowrap">
                                          <a onclick="delmessage({{ $message->msg_id }})" class="btn btn-danger">Delete</a>
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

    <script >

      function delmessage(id){

        var ans = confirm("do you want to Delete ? ");

        if(ans){
            location.href = '{{url('/')}}/dashboard/messages-delete/'+id;
        }

      }

  </script>
@endsection
