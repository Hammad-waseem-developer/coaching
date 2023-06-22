@extends('DashboardLayout.dashboard_layout')

@section('content')

    <div id="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-10 my-2">
                    {{-- ADMIN VIEW --}}
                    @if (session()->has('admin_email'))
                        <h1 class="text-center my-4">All Faculties</h1>
                        <a href="{{ url('/dashboard/faculty-add-faculty') }}" class="btn btn-primary">Add Faculty</a>
                        <div class="table-responsive table-striped my-5">
                            <table class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Contact</th>
                                        <th>Address</th>
                                        <th>CNIC</th>
                                        {{-- <th>Qualification</th> --}}
                                        <th>Gender</th>
                                        {{-- <th>Joining</th> --}}
                                        {{-- <th>Image</th> --}}
                                        {{-- <th>CV</th> --}}
                                        {{-- <th>Email</th> --}}
                                        {{-- <th>Password</th> --}}
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $item)
                                        <tr>

                                            <td class="text-nowrap">{{ $item->faculity_name }}</td>
                                            <td class="text-nowrap">{{ $item->faculity_contact }}</td>
                                            <td class="text-nowrap">{{ $item->faculity_address }}</td>
                                            <td class="text-nowrap">{{ $item->faculity_cnic }}</td>
                                            {{-- <td class="text-nowrap">{{$item->faculity_qualification}}</td> --}}
                                            <td class="text-nowrap">{{ $item->faculity_gender }}</td>
                                            {{-- <td class="text-nowrap">{{$item->faculity_joining}}</td> --}}
                                            {{-- <td class="text-nowrap"><img src="{{ url('/public/faculityinfo') }}/{{$item->faculity_image}}" width="50px" alt=""></td> --}}
                                            {{-- <td class="text-nowrap"><a href="{{ url('/public/faculityinfo')}}/{{$item->faculity_cv}}" target="_blank">CV</a></td> --}}
                                            {{-- <td class="text-nowrap">{{$item->faculity_email}}</td> --}}
                                            {{-- <td class="text-nowrap">{{$item->faculity_password}}</td> --}}
                                            <td class="text-nowrap">
                                                @if ($item->faculity_status == 1)
                                                    <span class="badge bg-primary">Active</span>
                                                @else
                                                    <span class="badge bg-danger">InActive</span>
                                                @endif
                                            </td>
                                            <td class="text-nowrap">
                                                <a
                                                    href="{{ url('/dashboard/faculty-edit-faculty') }}/{{ $item->faculity_id }}"><button
                                                        class="btn btn-primary">Edit</button></a>
                                                <a
                                                    href="{{ url('/dashboard/faculty-delete-faculty') }}/{{ $item->faculity_id }}"><button
                                                        class="btn btn-danger">Delete</button></a>
                                                <a
                                                    href="{{ url('/dashboard/faculty-detail-faculty') }}/{{ $item->faculity_id }}"><button
                                                        class="btn btn-warning">Detail</button></a>
                                            </td>

                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            @else
                            {{-- ADMIN VIEW --}}
                            {{-- FACULITY VIEW --}}
                        <h1 class="text-center my-4">Faculty</h1>
                        <div class="table-responsive table-striped my-5">
                            <table class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Contact</th>
                                        <th>Address</th>
                                        <th>CNIC</th>
                                        <th>Gender</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($faculity as $item)
                                        <tr>

                                            <td class="text-nowrap">{{ $item->faculity_name }}</td>
                                            <td class="text-nowrap">{{ $item->faculity_contact }}</td>
                                            <td class="text-nowrap">{{ $item->faculity_address }}</td>
                                            <td class="text-nowrap">{{ $item->faculity_cnic }}</td>
                                            <td class="text-nowrap">{{ $item->faculity_gender }}</td>
                                            <td class="text-nowrap">
                                                @if ($item->faculity_status == 1)
                                                    <span class="badge bg-primary">Active</span>
                                                @else
                                                    <span class="badge bg-danger">InActive</span>
                                                @endif
                                            </td>
                                            <td class="text-nowrap">
                                                <a
                                                    href="{{ url('/dashboard/faculty-detail-faculty') }}/{{ $item->faculity_id }}"><button
                                                        class="btn btn-warning">Detail</button></a>
                                            </td>

                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{-- FACULITY VIEW --}}
                            @endif


                </div>
            </div>
        </div>
    </div>

    </div>




@endsection
