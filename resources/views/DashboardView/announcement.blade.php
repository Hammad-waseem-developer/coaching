@extends('DashboardLayout.dashboard_layout')

@section('content')

<div id="content">
  <div class="container-fluid">

    <div class="row">
      <div class="col-md-2"></div>
      <div class="col-md-10 my-2">
          <h1 class="text-center my-4 ">Announcement</h1>
            <a href="{{ url ('/dashboard/announcement-add-announcement')}}" class="btn btn-primary">Add Announcement</a>
				<div class="table-responsive table-striped mt-3">
					<table class="table table-striped table-bordered">
                    <thead>
                      <tr>
                          <th>Name</th>
                          <th>Description</th>
                          <th>Date</th>
						  <th>Image</th>
                          <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
						@foreach ($data as $item)

						<tr>
							<td class="text-nowrap">{{$item->announcement_name}}</td>
							<td class="text-nowrap">{{$item->announcement_desc}}</td>
							<td class="text-nowrap">{{$item->announcement_date}}</td>
              @if ($item->announcement_image != null)
              <td><img src="{{ url('/public/announcementinfo') }}/{{$item->announcement_image}}" width="50px" alt=""></td>
              @else
              <td>No Images</td>
              @endif
							<td>
								<a href="{{ url('/dashboard/announcement-edit-announcement')}}/{{$item->announcement_id}}"><button class="btn btn-primary">Edit</button></a>
								<a onclick="delannounc({{$item->announcement_id}})" ><button class="btn btn-danger">Delete</button></a>
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

    function delannounc(id){

      var ans = confirm("do you want to Delete ? ");

      if(ans){
          location.href = '{{url('/')}}/dashboard/announcement-delete-announcement/'+id;
      }

    }

</script>


@endsection
