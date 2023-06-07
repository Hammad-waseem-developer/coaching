@extends('DashboardLayout.dashboard_layout')

@section('content')

<div id="content">


	<div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-2"></div>
            <div class="col-md-10 my-2">
                <h2 class=" text-center">Add Alumnai</h2>
                <form action="{{url('/dashboard/alumni-add-alumni/store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row justify-content-center">
                        <div class="col-md-6">
                            <label for="" class="form-label">Alumnai Name:</label>
                            <input type="text" class="form-control" value="{{old('alumnai_name')}}" placeholder="Enter Name" name="alumnai_name" id="">
                            @error('alumnai_name')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="" class="form-label" class="font-weight-bold form-label">Field</label>
                  <select class="form-select " name="field_id" id="">
                    <option selected disabled>Select Field</option>
          @foreach ($alumnai as $item)
          <option value="{{$item->field_id}}">{{$item->field_name}}</option>
          @endforeach
                  </select>
                            @error('field_id')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                        </div>
                    </div>
                    <div class="row my-4">
                        <div class="col-md-6">
                            <label for="" class="form-label">Achivement:</label>
                            <input type="text" placeholder="Enter Achivement" name="alumnai_achivement" value="{{old('alumnai_achivement')}}" class="form-control" id="">
                            @error('alumnai_achivement')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="" class="form-label">Qualification:</label>
                            <input type="text" placeholder="Enter Qualification" value="{{old('alumnai_qualification')}}" class="form-control" name="alumnai_qualification" id="">
                            @error('alumnai_qualification')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
                        </div>
                    </div>
                    <div class="row my-4">
                        <div class="col-md-6">
                            <label for="" class="form-label">Alumni Description </label>
                            <textarea name="alumnai_desc" value="{{old('alumnai_desc')}}"  rows="5" class="form-control"></textarea>
                        </div>
                        <div class="col-md-6">
                            <label for="" class="form-label">Image:</label>
                            <input type="file" name="alumnai_image" value="{{old('alumnai_image')}}" class="form-control " placeholder="" aria-describedby="helpId">
                            @error('alumnai_image')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
                        </div>
                    </div>
                    <button type="submit"  class="btn btn-primary my-4">Add Alumnai</button>
                </form>
            </div>
        </div>
    </div>

</div>


@endsection
