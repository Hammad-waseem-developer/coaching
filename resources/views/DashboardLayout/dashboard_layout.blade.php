<!DOCTYPE html>
<html>

<head>
    <title>Knewton Coaching Center</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
</head>
<style>
    * {
        margin: 0;
        padding: 0;
    }

    #sideMain {
        background-color: #212529 !important;
        height: 100% !important;
    }

    #sidebar {
        margin: 0;
        background-color: black;
        height: 100% !important;
    }

    .accordion-button {
        background-color: transparent;
        color: white !important;

    }

    .accordion-item {
        background-color: transparent;
        color: white !important;

    }

    .btn-check:focus+.btn,
    .btn:focus {
        outline: 0;
        box-shadow: 0 0 0 0.25rem rgba(13, 109, 253, 0) !imp class="p-2"ortant;
    }

    .btn-check:focus+.btn,
    .btn:focus {
        box-shadow: none !important;
    }

    .drop-menue {
        text-decoration: none;
        color: #e1e1e1;
        margin-left: 20px;
    }

    #sidemMain {
        transition: all 0.5s ease-in-out;
    }

    .btn-primary {
        color: #fff !important;
        background-color: #32b493 !important;
        border-color: #bdd487 !important;
    }

    h1,
    h2,
    h3.h4,
    h5,
    h6 {

        font-weight: 700;
        color: #20b19b;

    }

    .sideMain ul li:hover {
        background: #32b493;
        border-radius: 6px;
    }

    .sideMain ul li a:hover {
        color: #fff;
    }

    .sideMain::-webkit-scrollbar-thumb {
        background: #20b19b;
        border-radius: 7px;

    }

    .sideMain::-webkit-scrollbar {
        width: 8px;
        height: 8px;
        background: #212529;
    }

    .table-responsive::-webkit-scrollbar {
        width: 8px;
        height: 8px;
        background: #dadada;
        border-radius: 7px;
    }

    .table-responsive::-webkit-scrollbar-thumb {
        background: #20b19b;
        border-radius: 7px;
    }

    .form-label {
        margin-bottom: 0.5rem;
        font-weight: 600;
        font-size: 14px;
        color: black;
    }

    .form-control:focus {
        color: #212529;
        background-color: #fff;
        border-color: #20b19b4b;
        outline: 0;
        box-shadow: 0 0 0 0.25rem #20b19b4d;
    }

    input[type=radio] {
        accent-color: #20b19b !important;
    }

    input[type=checkbox] {
        accent-color: #20b19b !important;
    }
    .form-check-input:checked {
    background-color: #20b19b !important;
    border-color: #20b19b !important;
}
.form-control {
    border: 1px solid #89cc97 !important;
}
.form-select {
    border: 1px solid #89cc97 !important;
}
#content h2,#content h1{
margin-bottom: 25px;
color: #20b19b !important;
font-weight: 700;
}
.border-primary{
    border: #89cc97 !important;
}
.shadow-sm {
    box-shadow: 0 .125rem .25rem #89cc97 !important;
}
.bg-primary {
    background: #20b19b !important;
}
</style>

<body>


    <div class="col-md-2 sideMain" id="sideMain" style="height: 100vh;position:fixed;overflow:auto;">
        <div class="flex-shrink-0 p-3 bg-dark" style="width: 100%;height:100%;">
            <a href="/" class="d-flex align-items-center pb-3 mb-3 -decoration-none border-bottom">
                <img src="{{ url('public/logo.png') }}" class="img-fluid w-100" alt="">
            </a>
            <ul class="list-unstyled ps-0">
          @if (session()->has('admin_email'))
                <li class="mb-1">
                    <a href="{{ url('/dashboard') }}">
                        <button class="btn  text-white align-items-center rounded w-100 text-start ">
                            Dashboard
                        </button>
                    </a>
                </li>
                <li class="mb-1">
                    <a href="{{ url('/dashboard/coaching') }}">
                        <button class="btn  text-white align-items-center rounded w-100 text-start ">
                            Coaching Info
                        </button>
                    </a>
                </li>
                <li class="mb-1">
                    <button
                        class="dropdown-toggle btn btn-toggle text-white align-items-center rounded w-100 text-start collapsed"
                        data-bs-toggle="collapse" data-bs-target="#dashboard-collapse1" aria-expanded="false">
                        Faculty
                    </button>
                    <div class="collapse" id="dashboard-collapse1">
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                            <li class="p-2"><a class="drop-menue" href="{{ url('/dashboard/faculty') }}"
                                    class="">Faculty List</a></li>
                            <li class="p-2"><a class="drop-menue" href="{{ url('/dashboard/faculty-add-faculty') }}"
                                    class="">Faculty Add</a></li>
                        </ul>
                    </div>
                </li>
                <li class="mb-1">
                    <button
                        class="dropdown-toggle btn btn-toggle text-white align-items-center rounded w-100 text-start collapsed"
                        data-bs-toggle="collapse" data-bs-target="#dashboard-collapse2" aria-expanded="false">
                        Student
                    </button>
                    <div class="collapse" id="dashboard-collapse2">
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                            <li class="p-2"><a class="drop-menue" href="{{ url('/dashboard/student') }}"
                                    class="">Student List</a></li>
                            <li class="p-2"><a class="drop-menue" href="{{ url('/dashboard/student-add-student') }}"
                                    class="">Student Add</a></li>
                        </ul>
                    </div>
                </li>
                <li class="mb-1">
                    <button
                        class="dropdown-toggle btn btn-toggle text-white align-items-center rounded w-100 text-start collapsed"
                        data-bs-toggle="collapse" data-bs-target="#dashboard-collapse5" aria-expanded="false">
                        Class
                    </button>
                    <div class="collapse" id="dashboard-collapse5">
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                            <li class="p-2"><a class="drop-menue" href="{{ url('/dashboard/class') }}"
                                    class="">Class List</a></li>
                            <li class="p-2"><a class="drop-menue" href="{{ url('/dashboard/class-add-class') }}"
                                    class="">Class Add</a></li>
                        </ul>
                    </div>
                </li>
                <li class="mb-1">
                    <button
                        class="dropdown-toggle btn btn-toggle text-white align-items-center rounded w-100 text-start collapsed"
                        data-bs-toggle="collapse" data-bs-target="#dashboard-collapse3" aria-expanded="false">
                        Subject
                    </button>
                    <div class="collapse" id="dashboard-collapse3">
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                            <li class="p-2"><a class="drop-menue" href="{{ url('/dashboard/subject') }}"
                                    class="">All Subject </a></li>
                            <li class="p-2"><a class="drop-menue" href="{{ url('/dashboard/subject-add-subject') }}"
                                    class="">Add Subject </a></li>
                        </ul>
                    </div>
                </li>
                <li class="mb-1">
                    <button
                        class="dropdown-toggle btn btn-toggle text-white align-items-center rounded w-100 text-start collapsed"
                        data-bs-toggle="collapse" data-bs-target="#orders-collapse" aria-expanded="false">
                        Session
                    </button>
                    <div class="collapse" id="orders-collapse">
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                            <li class="p-2"><a class="drop-menue" href="{{ url('/dashboard/session') }}"
                                    class="">All Session</a></li>
                            <li class="p-2"><a class="drop-menue"
                                    href="{{ url('/dashboard/session-add-session') }}" class="">Add Session</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="mb-1">
                    <button
                        class="dropdown-toggle btn btn-toggle text-white align-items-center rounded w-100 text-start collapsed"
                        data-bs-toggle="collapse" data-bs-target="#orders-collapse1" aria-expanded="false">
                        Field
                    </button>
                    <div class="collapse" id="orders-collapse1">
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                            <li class="p-2"><a class="drop-menue" href="{{ url('/dashboard/field') }}"
                                    class="">All Field </a></li>
                            <li class="p-2"><a class="drop-menue" href="{{ url('/dashboard/field-add-field') }}"
                                    class="">Add Field </a></li>
                        </ul>
                    </div>
                </li>

                <li class="mb-1">
                    <button
                        class="dropdown-toggle btn btn-toggle text-white align-items-center rounded w-100 text-start collapsed"
                        data-bs-toggle="collapse" data-bs-target="#orders-collapse2" aria-expanded="false">
                        Test
                    </button>
                    <div class="collapse" id="orders-collapse2">
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                            <li class="p-2"><a class="drop-menue" href="{{ url('/dashboard/test') }}"
                                    class="">All Test </a></li>
                            <li class="p-2"><a class="drop-menue" href="{{ url('/dashboard/test-add-test') }}"
                                    class="">Add Test </a></li>
                        </ul>
                    </div>
                </li>

                <li class="mb-1">
                    <button
                        class="dropdown-toggle btn btn-toggle text-white align-items-center rounded w-100 text-start collapsed"
                        data-bs-toggle="collapse" data-bs-target="#orders-collapse5" aria-expanded="false">
                        Alumni
                    </button>
                    <div class="collapse" id="orders-collapse5">
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                            <li class="p-2"><a class="drop-menue" href="{{ url('/dashboard/alumni') }}"
                                    class="">All Alumni </a></li>
                            <li class="p-2"><a class="drop-menue"
                                    href="{{ url('/dashboard/alumni-add-alumni') }}" class="">Add Alumni </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="mb-1">
                    <button
                        class="dropdown-toggle btn btn-toggle text-white align-items-center rounded w-100 text-start collapsed"
                        data-bs-toggle="collapse" data-bs-target="#orders-collapse3" aria-expanded="false">
                        Test Details
                    </button>
                    <div class="collapse" id="orders-collapse3">
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                            <li class="p-2"><a class="drop-menue" href="{{ url('/dashboard/test-detail') }}"
                                    class="">All Tests </a></li>
                            <li class="p-2"><a class="drop-menue"
                                    href="{{ url('/dashboard/test-detail-add') }}" class="">Add Test </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="mb-1">
                    <button
                        class="dropdown-toggle btn btn-toggle text-white align-items-center rounded w-100 text-start collapsed"
                        data-bs-toggle="collapse" data-bs-target="#orders-collapse4" aria-expanded="false">
                        Announcement
                    </button>
                    <div class="collapse" id="orders-collapse4">
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                            <li class="p-2"><a class="drop-menue" href="{{ url('/dashboard/announcement') }}"
                                    class="">All Announcements </a></li>
                                    <li class="p-2"><a class="drop-menue"
                                        href="{{ url('/dashboard/announcement-add-announcement') }}" class="">Add
                                        Announcements </a></li>
                                    </ul>
                                </div>
                            </li>




                        </ul>
                        <li class="p-2 mt-2"><a class="text-decoration-none text-white bg-danger px-5 py-1 rounded-3" href="{{ url('/logout') }}"
                                class=""> LOGOUT </a></li>
                                @else
                                <li class="mb-1">
                                    <button
                                        class="dropdown-toggle btn btn-toggle text-white align-items-center rounded w-100 text-start collapsed"
                                        data-bs-toggle="collapse" data-bs-target="#orders-collapse3" aria-expanded="false">
                                        Faculity
                                    </button>
                                    <div class="collapse" id="orders-collapse3">
                                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                            <li class="p-2"><a class="drop-menue" href="{{ url('/dashboard/faculty') }}"
                                                    class="">My Info</a></li>
                                            <li class="p-2"><a class="drop-menue"
                                                    href="{{ url('/') }}" class="">Website </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="p-2 mt-2"><a class="text-decoration-none text-white bg-danger px-5 py-1 rounded-3" href="{{ url('/teacher-logout') }}"
                                    class=""> LOGOUT </a></li>
                                @endif
            {{-- <div class="fixed-bottom">
					<button class="dropdown-toggle btn btn-toggle text-white align-items-center rounded w-100 text-start collapsed" data-bs-toggle="collapse" data-bs-target="#dashboard-collapse4" aria-expanded="false">
						Muhammad Huzaifa
					  </button>
					  <div class="collapse" id="dashboard-collapse4">
						<ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
						  <li class="p-2"><a class="drop-menue" href="#" class="">Logout</a></li>
						  <li class="p-2"><a class="drop-menue" href="#" class="">Profile</a></li>
						</ul>
					  </div>
				</div> --}}
        </div>
    </div>
    @yield('content')


    {{-- <div class="wrapper"> --}}












    {{-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> --}}


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script>
        $(document).ready(function() {
            $('.js-example-basic-multiple').select2();
        });
    </script>

    <script>
        $(document).ready(function() {
            $('.js-example-basic-single').select2();
        });
    </script>

</body>

</html>
