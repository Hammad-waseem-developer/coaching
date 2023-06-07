@extends('DashboardLayout.dashboard_layout')

@section('content')
    <div id="content">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-2"></div>
                <div class="col-md-10 my-2">
                    <h2 class="text-center">Add Faculty</h2>
                    <form action="{{ url('/dashboard/faculty-add-faculty/store') }}" method="post"
                        enctype="multipart/form-data" class="my-4">
                        @csrf
                        <div class="row justify-content-center">
                            <div class="col-md-4 mt-2">
                                <label for="" class="form-label">Full Name <span
                                        class="text-danger fw-bold">*</span></label>
                                <input type="text" class="form-control" value="{{ old('faculity_name') }}"
                                    placeholder="Enter Name" name="faculity_name" id="">
                                @error('faculity_name')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-md-4 mt-2">
                                <label for="" class="form-label">Contact 1 <span
                                        class="text-danger fw-bold">*</span></label>
                                <input type="tel" class="form-control" value="{{ old('faculity_contact') }}"
                                    placeholder="0316-3995999" name="faculity_contact" id="">
                                @error('faculity_contact')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-md-4 mt-2">
                                <label for="" class="form-label">Contact 2</label>
                                <input type="tel" class="form-control" value="{{ old('faculity_contact2') }}"
                                    placeholder="0316-3995999" name="faculity_contact2" id="">
                                @error('faculity_contact2')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="col-md-4 mt-2">
                                <label for="" class="form-label">CNIC <span
                                        class="text-danger fw-bold">*</span></label>
                                <input type="text" class="form-control" value="{{ old('faculity_cnic') }}"
                                    placeholder="Enter CNIC" name="faculity_cnic" id="">
                                @error('faculity_cnic')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>


                            <div class="col-md-4 mt-2">
                                <label for="" class="form-label">Qualification</label>
                                <input type="text" value="{{ old('faculity_qualification') }}"
                                    name="faculity_qualification" class="form-control" placeholder="BS, MS , MPhill">
                                @error('faculity_qualification')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-md-4 mt-2">
                                <label for="" class="form-label">Experience in Teaching <span
                                        class="text-danger fw-bold">*</span></label>
                                <input type="number" value="{{ old('experience') }}" min="0" name="experience"
                                    class="form-control">
                            </div>

                            <div class="col-md-4 mt-2">
                                <label for="" class="form-label">Joining Date <span
                                        class="text-danger fw-bold">*</span></label>
                                <input type="date" class="form-control" placeholder="Select Date" name="faculity_joining"
                                    id="">
                                @error('faculity_joining')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="col-md-4 mt-2">
                                <label for="" class="form-label">Group / Field <span
                                        class="text-danger fw-bold">*</span></label>

                                <select name="field" class="form-select">
                                    <option value="" selected disabled>Select Group / Field</option>
                                    @foreach ($field as $item)
                                        <option value="{{ $item->field_id }}">{{ $item->field_name }}</option>
                                    @endforeach
                                </select>
                                @error('field')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-md-4 mt-2">
                                <label for="" class="form-label">Image </label>
                                <input type="file" class="form-control" name="faculity_image">
                                @error('faculity_image')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="col-md-4 mt-2">
                                <label for="" class="form-label">CV </label>
                                <input type="file" class="form-control" name="faculity_cv" id="">
                                @error('faculity_cv')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="col-md-4 mt-2">
                                <label for="" class="form-label">Email <span
                                        class="text-danger fw-bold">*</span></label>
                                <input type="email" class="form-control" placeholder="Enter Email"
                                    name="faculity_email" value="{{ old('faculity_email') }}">
                                @error('faculity_email')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>


                            <div class="col-md-4 mt-2">
                                <label for="" class="form-label">Gender <span
                                        class="text-danger fw-bold">*</span></label><br>
                                <label for="male" class="font-weight-bold mt-2">Male</label>&nbsp;&nbsp;
                                <input type="radio" name="faculity_gender" value="M" id="male" class="">
                                &nbsp;&nbsp;&nbsp;&nbsp;
                                <label for="female" class="font-weight-bold">Female</label>&nbsp;
                                <input type="radio" name="faculity_gender" value="F" id="female" class="">
                            </div>

                            <div class="col-md-12 mt-2">
                                <label for="" class="form-label">Address:</label>
                                <textarea name="faculity_address" class="form-control" rows="3" placeholder="Enter Address">{{ old('faculity_address') }}</textarea>
                                @error('faculity_address')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>


                        </div>




                        <button type="submit" class="btn btn-primary my-4">Add Faculity</button>
                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection
