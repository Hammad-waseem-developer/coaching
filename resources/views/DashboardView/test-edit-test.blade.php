@extends('DashboardLayout.dashboard_layout')

@section('content')
    <div id="content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-2"></div>
                <div class="col-md-10 my-2">
                    <h2 class=" text-center">Edit Test</h2>
                    <form action="{{ url('/dashboard/test-update-test') }}/{{ $test->test_id }}" class="my-4" method="post">
                        @csrf
                        <div class="row justify-content-center">
                            <div class="col-md-6">
                                <label for="">Test Name:</label>
                                <input type="text" class="form-control"value="{{ $test->test_title }}"
                                    placeholder="Test Name" name="test_title" id="">
                                @error('test_title')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="">Subject:</label>
                                <select name="subject" class="form-select">

                                    @foreach ($subject as $item)
                                        <option value="{{ $item->subject_id }}"
                                            @if ($item->subject_id == $test->subject_id) {{ 'selected' }} @endif>
                                            {{ $item->subject_name }}</option>
                                    @endforeach
                                </select>
                                @error('test_title')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <label for="">Test Marks:</label>
                                <input type="text" class="form-control" value="{{ $test->test_marks }}"
                                    placeholder="Test Marks" name="test_marks" id="">
                                @error('test_marks')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>

                        </div>
                        <button type="submit" class="btn btn-primary my-3">Update Test</button>
                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection
