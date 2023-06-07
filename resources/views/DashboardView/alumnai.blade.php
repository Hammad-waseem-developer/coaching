
@extends('DashboardLayout.dashboard_layout')

@section('content')

<div id="content">
  <div class="container">
    <div class="row">
      <div class="col-md-2"></div>
      <div class="col-md-10 my-2">
        <h1 class="text-center my-4">All Alumni</h1>
        <a href="{{ url ('/dashboard/alumni-add-alumni')}}" class="btn btn-primary">Add Alumnai</a>
                <div class="table-responsive table-striped mt-3">
					<table class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th>Field</th>
                        <th>Achivements</th>
                        <th>Qualification</th>
                        <th>Image</th>
                        <th style="width: 20%;">Description</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($alumnai as $item)
                      <tr>
                        <td class="text-nowrap">{{$item->alumnai_name}}</td>
                        <td class="text-nowrap">{{$item->field_name}}</td>
                        <td class="text-nowrap">{{$item->alumnai_achivement}}</td>
                        <td class="text-nowrap">{{$item->alumnai_qualification}}</td>
                        <td><img src="{{ url('/public/alumnaiinfo') }}/{{$item->alumnai_image}}" width="50px" alt=""></td>
                        <td class="text-nowrap " >{{$item->alumnai_desc}}</td>

                        <td class="d-flex ">
                          <a href="{{ url('/dashboard/alumni-edit-alumni')}}/{{$item->alumnai_id}}"><button class="btn btn-primary">Edit</button></a>
                          <a class="ms-2" href="{{ url('/dashboard/alumni-delete-alumni')}}/{{$item->alumnai_id}}"><button class="btn btn-danger">Delete</button></a>
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
