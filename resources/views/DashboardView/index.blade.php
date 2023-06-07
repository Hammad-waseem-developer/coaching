@extends('DashboardLayout.dashboard_layout')

@section('content')
    <div id="content">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-2"></div>
               <div class="col-md-10 my-5">
                <div class="row">
                    <div class="col-md-4 my-3">
                        <div class="card-body p-4 shadow shadow-sm boder border-3 border-primary">
                            <div class="d-flex w-100 align-items-baseline justify-content-between">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="#bdd487" class="bi bi-people-fill" viewBox="0 0 16 16">
                                        <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7Zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216ZM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z"/>
                                      </svg>
                                </div>
                                <div>
                                    <h5>All Students</h5>
                                    <p>{{$student}}</p>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-4 my-3">
                        <div class="card-body p-4 shadow shadow-sm boder border-3 border-primary">
                            <div class="d-flex w-100 align-items-baseline justify-content-between">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="#bdd487" class="bi bi-person-video" viewBox="0 0 16 16">
                                        <path d="M8 9.05a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z"/>
                                        <path d="M2 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H2Zm10.798 11c-.453-1.27-1.76-3-4.798-3-3.037 0-4.345 1.73-4.798 3H2a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1h-1.202Z"/>
                                      </svg>
                                </div>
                                <div>
                                    <h5>All Teachers</h5>
                                    <p>{{$faculity}}</p>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-4 my-3">
                        <div class="card-body p-4 shadow shadow-sm boder border-3 border-primary">
                            <div class="d-flex w-100 align-items-baseline justify-content-between">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="#bdd487" class="bi bi-book-half" viewBox="0 0 16 16">
                                        <path d="M8.5 2.687c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z"/>
                                      </svg>
                                </div>
                                <div>
                                    <h5>All Test</h5>
                                    <p>{{$test}}</p>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-4 my-3">
                        <div class="card-body p-4 shadow shadow-sm boder border-3 border-primary">
                            <div class="d-flex w-100 align-items-baseline justify-content-between">
                                <div>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="#bdd487" class="bi bi-megaphone" viewBox="0 0 16 16">
                                        <path d="M13 2.5a1.5 1.5 0 0 1 3 0v11a1.5 1.5 0 0 1-3 0v-.214c-2.162-1.241-4.49-1.843-6.912-2.083l.405 2.712A1 1 0 0 1 5.51 15.1h-.548a1 1 0 0 1-.916-.599l-1.85-3.49a68.14 68.14 0 0 0-.202-.003A2.014 2.014 0 0 1 0 9V7a2.02 2.02 0 0 1 1.992-2.013 74.663 74.663 0 0 0 2.483-.075c3.043-.154 6.148-.849 8.525-2.199V2.5zm1 0v11a.5.5 0 0 0 1 0v-11a.5.5 0 0 0-1 0zm-1 1.35c-2.344 1.205-5.209 1.842-8 2.033v4.233c.18.01.359.022.537.036 2.568.189 5.093.744 7.463 1.993V3.85zm-9 6.215v-4.13a95.09 95.09 0 0 1-1.992.052A1.02 1.02 0 0 0 1 7v2c0 .55.448 1.002 1.006 1.009A60.49 60.49 0 0 1 4 10.065zm-.657.975 1.609 3.037.01.024h.548l-.002-.014-.443-2.966a68.019 68.019 0 0 0-1.722-.082z"/>
                                      </svg>
                                </div>
                                <div>
                                    <h5>Announcements</h5>
                                    <p>{{$announcement}}</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
               </div>
            </div>
        </div>
    </div>

@endsection
