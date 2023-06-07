@extends('DashboardLayout.dashboard_layout')

@section('content')

<div id="content">
    <div class="container">
        <div class="row">
            <div class="col-md-12 my-5">
                <h2 class=" text-center">Add Test</h2>
                <form action="" class="my-4">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="">Select Test:</label>
                            <select name="" id="" class="form-control">
                                <option value="" selected disabled>Select Test</option>
                                <option value="">Monthly Test</option>
                                <option value="">Grand Test</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="">Total Marks:</label>
                            <input type="text" class="form-control" placeholder="Total Marks" name="" id="">
                        </div>
                    </div>
                    
                    <button  class="btn btn-primary my-4">Add Test</button>
                </form>
            </div>
        </div>
    </div>

</div>


@endsection
