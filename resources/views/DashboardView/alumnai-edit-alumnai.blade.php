@extends('DashboardLayout.dashboard_layout')

@section('content')

<div id="content">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-2"></div>
            <div class="col-md-10 my-2">
                <h2 class=" text-center">Edit Alumnai</h2>
                <form action="{{url('/dashboard/alumni-update-alumni')}}/{{$alumnai->alumnai_id}}" enctype="multipart/form-data" method="POST">
                    @csrf
                    <div class="row justify-content-center">
                        <div class="col-md-6">
                            <label for="">Alumnai Name:</label>
                            <input type="text" class="form-control" value="{{ $alumnai->alumnai_name }}" placeholder="Enter Name" name="alumnai_name" id="">
                            @error('alumnai_name')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="" class="font-weight-bold form-label">Field</label>
                            <select class="form-select form-control form-select-lg" name="field_id" id="">
                                <option selected disabled>Select Field</option>
                                @foreach ($field as $item)
                                <option value="{{$item->field_id}}"
                                @if($alumnai->field_id == $item->field_id)
                                  {{"selected"}}
                                @endif >{{$item->field_name}}</option>
                                @endforeach
                              </select>
                            @error('field_id')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                        </div>
                    </div>
                    <div class="row my-4">
                        <div class="col-md-6">
                            <label for="">Achivement:</label>
                            <input type="text" placeholder="Enter Achivement" value="{{ $alumnai->alumnai_achivement }}" name="alumnai_achivement" class="form-control" id="">
                            @error('alumnai_achivement')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="">Qualification:</label>
                            <input type="text" placeholder="Enter Qualification" value="{{ $alumnai->alumnai_qualification }}" class="form-control" name="alumnai_qualification" id="">
                            @error('alumnai_qualification')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
                        </div>
                    </div>
                    <div class="row my-4">
                        <div class="col-md-6">
                            <label for="">Alumni Description </label>
                            <textarea name="alumnai_desc" id=""  rows="5" class="form-control">{{ $alumnai->alumnai_desc }}</textarea>
                        </div>
                        <div class="col-md-6">
                            <label for="">Image:</label>
                            <input type="file" name="alumnai_image" id="" class="form-control " placeholder="" aria-describedby="helpId">
                    <br>
                    <img src="{{ url('/public/alumnaiinfo')}}/{{$alumnai->alumnai_image}}" width="50px" alt="">
                <input type="hidden"  name="oldimg" value="{{$alumnai->alumnai_image}}" >
                            @error('alumnai_image')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
                        </div>
                    </div>
                    <button type="submit"  class="btn btn-primary my-4">Update Alumni</button>
                </form>
            </div>
        </div>
    </div>

</div>







@endsection
