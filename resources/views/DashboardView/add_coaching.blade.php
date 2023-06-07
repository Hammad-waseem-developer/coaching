@extends('DashboardLayout.dashboard_layout')

@section('content')

<div id="content">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 my-5">
                <h2 class=" text-center">Add Coaching</h2>
                <form action="{{url('/coaching-add-coaching/store')}}" method="post" enctype="multipart/form-data" class="my-4">
					@csrf
                    <div class="row justify-content-center">
                        <div class="col-md-6">
                            <label for="">Name:</label>
                            <input type="text" class="form-control" value="{{old('coaching_name')}}" placeholder="Enter Name" name="coaching_name" id="">
							@error('coaching_name')
               				<p class="text-danger">{{ $message }}</p>
         					@enderror
                        </div>
                        <div class="col-md-6">
							<label for="">Email:</label>
                            <input type="email" class="form-control" value="{{old('coaching_email')}}" placeholder="Enter Email" name="coaching_email" id="">
							@error('coaching_email')
							<p class="text-danger">{{ $message }}</p>
							@enderror
							</div>
						</div>
						<div class="row my-3">
							<div class="col-md-6">
								<label for="">Contact:</label>
								<input type="tel" class="form-control" placeholder="Enter Number" value="{{old('coaching_contact')}}" name="coaching_contact" id="">
							@error('coaching_contact')
							<p class="text-danger">{{ $message }}</p>
							@enderror
                        </div>
                        <div class="col-md-6">
							<label for="">Website:</label>
							<input type="text" class="form-control" placeholder="Enter Website URL" value="{{old('coaching_web')}}" name="coaching_web" id="">
							@error('coaching_web')
							<p class="text-danger">{{ $message }}</p>
							@enderror
						</div>
					</div>
					<div class="row my-3">
						<div class="col-md-6">
							<label for="">Address:</label>
							<textarea name="coaching_address" placeholder="Enter Address" value="{{old('coaching_address')}}" class="form-control" id="" cols="30" rows="1"></textarea>
							@error('coaching_address')
							<p class="text-danger">{{ $message }}</p>
							@enderror
							</div>
							<div class="col-md-6">
								<label for="">Logo:</label>
								<input type="file" class="form-control" value="{{old('coaching_logo')}}" name="coaching_logo" id="">
							@error('coaching_logo')
                			<p class="text-danger">{{ $message }}</p>
                          	@enderror
							</div>
                    </div>
                    <button class="btn btn-primary my-4" type="submit">Add Coaching</button>
                </form>
            </div>
        </div>
    </div>


</div>


@endsection
