@extends('DashboardLayout.dashboard_layout')

@section('content')

<div id="content">
    <div class="container-fluid">
        <div class="row justify-content-center">
			<div class="col-md-2"></div>
            <div class="col-md-10 my-2">
                <h2 class=" text-center">Edit Coaching</h2>
                <form action="{{url('/dashboard/coaching-update-coaching')}}/{{ $data->coaching_id }}" method="post" enctype="multipart/form-data" class="my-4">
					@csrf
                    <div class="row justify-content-center">
                        <div class="col-md-6">
                            <label for="">Name:</label>
                            <input type="text" class="form-control" placeholder="Enter Name" name="coaching_name" value="{{ $data->coaching_name }}" id="">
							@error('coaching_name')
               				<p class="text-danger">{{ $message }}</p>
         					@enderror
                        </div>
                        <div class="col-md-6">
							<label for="">Email:</label>
                            <input type="email" class="form-control" placeholder="Enter Email" name="coaching_email" value="{{ $data->coaching_email }}" id="">
							@error('coaching_email')
							<p class="text-danger">{{ $message }}</p>
							@enderror
							</div>
						</div>
						<div class="row my-3">
							<div class="col-md-6">
								<label for="">Contact:</label>
								<input type="tel" class="form-control" placeholder="Enter Number" name="coaching_contact" value="{{ $data->coaching_contact }}" id="">
							@error('coaching_contact')
							<p class="text-danger">{{ $message }}</p>
							@enderror
                        </div>
                        <div class="col-md-6">
							<label for="">Website:</label>
							<input type="text" class="form-control" placeholder="Enter Website URL" value="{{ $data->coaching_web }}" name="coaching_web" id="">
							@error('coaching_web')
							<p class="text-danger">{{ $message }}</p>
							@enderror
						</div>
					</div>
					<div class="row my-3">
						<div class="col-md-6">
							<label for="">Address:</label>
							<textarea name="coaching_address" placeholder="Enter Address" class="form-control" id="" cols="30" rows="1">{{ $data->coaching_address }}</textarea>
							@error('coaching_address')
							<p class="text-danger">{{ $message }}</p>
							@enderror
							</div>
							<div class="col-md-6">
								<label for="">Logo:</label>
								<input type="file" name="coaching_logo"  class="form-control" >
								<img src="{{ url('/public/coachinginfo')}}/{{$data->coaching_logo }}" width="50px" alt="">
            				    <input type="hidden"  name="oldlogo" value="{{$data->coaching_logo}}" >
							@error('coaching_logo')
                			<p class="text-danger">{{ $message }}</p>
                          	@enderror
							</div>
                    </div>
                    <button class="btn btn-primary my-4" type="submit">Update </button>
                </form>
            </div>
        </div>
    </div>

</div>


@endsection
