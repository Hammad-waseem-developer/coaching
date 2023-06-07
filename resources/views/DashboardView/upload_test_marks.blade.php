@extends('DashboardLayout.dashboard_layout')

@section('content')

<div id="content">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 my-5">
                <h2 class=" text-center">Test Marks</h2>
                <form action="" class="my-4">
                    <div class="row justify-content-center">
                        <div class="col-md-6">
                            <label for="">Test Name:</label>
                            <select name="" id="" class="form-control">
                                <option value="" selected disabled>Select Test</option>
                                <option value="">Monthly Test</option>
                                <option value="">Grand Test</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="">Test Date:</label>
                            <input type="date" class="form-control" placeholder="Test Date" name="" id="">
                        </div>
                    </div>
                    <div class="row my-4">
                        <div class="col-md-6">
                            <label for="">Total Marks:</label>
                            <input type="text" class="form-control" placeholder="Total Marks" name="" id="">
                        </div>
                        <div class="col-md-6">
                            <label for="">Obtain Marks:</label>
                            <input type="text" class="form-control" placeholder="Obtain Marks" name="" id="">
                        </div>
                    </div>
                    <div class="row my-4">
                        <div class="col-md-6">
                            <label for="">Attendence:</label>
                            <select name="" id="" class="form-control">
                                <option value="" selected disabled>Select Option</option>
                                <option value="">Present</option>
                                <option value="">Absent</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="">Status</label>
                            <select name="" id="" class="form-control">
                                <option value="">Select Option</option>
                                <option value="">Pass</option>
                                <option value="">Fail</option>
                            </select>
                        </div>
                    </div>

                    <button  class="btn btn-primary my-4">Add Marks</button>
                </form>
            </div>
        </div>
    </div>

</div>









@endsection
