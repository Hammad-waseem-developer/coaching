<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from preview.colorlib.com/theme/fox/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 07 May 2023 18:34:09 GMT -->

<head>
    <title>knewtown coaching - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&amp;display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ url('/') }}/public/BOOTSTRAP/css/bootstrap.css">
    <link rel="stylesheet" href="{{ url('/') }}/public/frontend_assets/css/animate.css">
    <link rel="stylesheet" href="{{ url('/') }}/public/frontend_assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ url('/') }}/public/frontend_assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="{{ url('/') }}/public/frontend_assets/css/magnific-popup.css">
    <link rel="stylesheet" href="{{ url('/') }}/public/frontend_assets/css/aos.css">
    <link rel="stylesheet" href="{{ url('/') }}/public/frontend_assets/css/ionicons.min.css">
    <link rel="stylesheet" href="{{ url('/') }}/public/frontend_assets/css/flaticon.css">
    <link rel="stylesheet" href="{{ url('/') }}/public/frontend_assets/css/icomoon.css">
    <link rel="stylesheet" href="{{ url('/') }}/public/frontend_assets/css/style.css">
    <style>
        .navbar {
            position: sticky;
            top: 0;
            background: #0d1128e3 !important;
        }

        .navbar .container {
            width: 100% !important;

        }
    </style>

<body>
    <div class="bg-top navbar-light">
        <marquee behavior="" direction="">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nihil, quo!
        </marquee>
        <div class="container">
            <div class="row no-gutters d-flex align-items-center align-items-stretch">
                <div class="col-md-4 d-flex align-items-center py-4">
                    <a class="navbar-brand" href="{{ url('/home') }}">knewtown <span>coaching</span></a>
                </div>
                <div class="col-lg-8 d-block">
                    <div class="row d-flex">
                        <div class="col-md d-flex topper align-items-center align-items-stretch py-md-4">
                            <div class="icon d-flex justify-content-center align-items-center"><span
                                    class="icon-paper-plane"></span></div>
                            <div class="text">
                                <span>Email</span>
                                <span><a href="mailto:huzaifaW@gmail.com" class="__cf_email__"
                                        data-cfemail="f1889e8483949c90989db1949c90989ddf929e9c">[huzaifakhanwaseem2233@gmail.com]</a></span>
                            </div>
                        </div>
                        <div class="col-md d-flex topper align-items-center align-items-stretch py-md-4">
                            <div class="icon d-flex justify-content-center align-items-center"><span
                                    class="icon-phone2"></span></div>
                            <div class="text">
                                <span>Call</span>
                                <span><a href="tel:903190283675">Call Us: + 903190283675</a></span>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container  d-flex align-items-center px-4">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav">
                    <li class="nav-item active"><a href="{{ url('/') }}" class="nav-link pl-0">Home</a></li>
                    <li class="nav-item"><a href="{{ url('/web-student') }}" class="nav-link">Top Students</a></li>
                    <li class="nav-item"><a href="{{ url('/faculty') }}" class="nav-link">Our Teachers</a></li>
                    <li class="nav-item"><a href="{{ url('/aboutus') }}" class="nav-link">About Us</a></li>
                    <li class="nav-item"><a href="{{ url('/contact') }}" class="nav-link">Contact Us</a></li>

                    @if (session()->has('student_email'))
                    {{-- <li class="nav-item"><a class="nav-link">{{ session()->get('student_email') }}</a></li> --}}
                    <li class="nav-item"><a href="{{ url('/announce') }}" class="nav-link">Announcement</a></li>
                    <li class="nav-item"><a href="{{ url('/student-logout') }}" class="nav-link"
                        style="color:rgb(255, 116, 116);">Logout</a></li>
                        <li class="nav-item"><a href="{{ url('/my-profile') }}" class="nav-link bg-primary">My Profile</a></li>
                    @else
                    <div class="dropdown" style="padding-top: 1.3rem;">
                        <li class="nav-item">
                            <a class="dropdown-toggle text-white fw-bold" href="{{ url('/userlogin') }}" role="button"
                                id="dropdownMenuLink" data-bs-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                Login
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <!-- Dropdown menu items -->
                                <a class="dropdown-item" href="{{ url('/student-login') }}">Student Login</a>
                                <a class="dropdown-item" href="{{ url('/teacher-login') }}">Teacher login</a>
                            </div>
                        </li>
                    </div>
                    @endif

                    <li class="nav-item"><a class="nav-link">
                            <span type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-bell" viewBox="0 0 16 16">
                                    <path
                                        d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zM8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z" />
                                </svg>
                            </span>
                        </a></li>
                </ul>
            </div>
        </div>
    </nav>


    {{-- modal --}}
    <!-- Button trigger modal -->


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">
                        @if (session()->has('announcement_name'))
                        <p>{{session()->get('announcement_name')}}</p>
                        @endif
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    @if (session()->has('announcement_desc'))
                    <p>{{session()->get('announcement_desc')}}</p>
                    <p style="font-size: 12px; color:green;">{{session()->get('announcement_date')}}</p>
                    @endif
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
