@extends('frontend.layout.main')

@section('container')
    {{-- Home --}}
    @if (session()->has('status'))
        <p class="bg-success p-2 m-0 text-white">{{ session()->get('status') }}</p>
    @endif
    <section class="home-slider owl-carousel">
        <div class="slider-item" style="background-image:url({{ url('/') }}/public/frontend_assets/images/bg_1.jpg);">
            <div class="overlay"></div>
            <div class="container">
                <div class="row no-gutters slider-text align-items-center justify-content-start" data-scrollax-parent="true">
                    <div class="col-md-6 ftco-animate">
                        <h1 class="mb-4">Education Needs Complete Solution</h1>
                        <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                        <p><a href="{{ url('/contact') }}" class="btn btn-primary px-4 py-3 mt-3">Contact Us</a></p>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <section class="ftco-services ftco-no-pb">
        <div class="container-wrap">
            <div class="row no-gutters">
                <div class="col-md-3 d-flex services align-self-stretch py-5 px-4 ftco-animate bg-primary">
                    <div class="media block-6 d-block text-center">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="flaticon-teacher"></span>
                        </div>
                        <div class="media-body p-2 mt-3">


                            <h3 class="heading">Certified Teachers</h3>
                            <p>Even the all-powerful Pointing has no control about the blind texts it is an almost
                                unorthographic.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex services align-self-stretch py-5 px-4 ftco-animate bg-darken">
                    <div class="media block-6 d-block text-center">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="flaticon-reading"></span>
                        </div>
                        <div class="media-body p-2 mt-3">
                            <h3 class="heading">Special Education</h3>
                            <p>Even the all-powerful Pointing has no control about the blind texts it is an almost
                                unorthographic.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex services align-self-stretch py-5 px-4 ftco-animate bg-primary">
                    <div class="media block-6 d-block text-center">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="flaticon-books"></span>
                        </div>
                        <div class="media-body p-2 mt-3">
                            <h3 class="heading">Book &amp; Library</h3>
                            <p>Even the all-powerful Pointing has no control about the blind texts it is an almost
                                unorthographic.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 d-flex services align-self-stretch py-5 px-4 ftco-animate bg-darken">
                    <div class="media block-6 d-block text-center">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="flaticon-diploma"></span>
                        </div>
                        <div class="media-body p-2 mt-3">
                            <h3 class="heading">Sport Clubs</h3>
                            <p>Even the all-powerful Pointing has no control about the blind texts it is an almost
                                unorthographic.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section ftco-no-pt ftc-no-pb">
        <div class="container">
            <div class="row d-flex">

                <div class="col-md-12 wrap-about py-5 pr-md-4 ftco-animate">
                    <h2 class="mb-4">What We Offer</h2>
                    <p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from it would
                        have been rewritten a thousand times and everything that was left from its origin would be the word.
                    </p>
                    <div class="row mt-5">
                        <div class="col-lg-6">
                            <div class="services-2 d-flex">
                                <div class="icon mt-2 d-flex justify-content-center align-items-center"><span
                                        class="flaticon-security"></span></div>
                                <div class="text pl-3">
                                    <h3>Safety First</h3>
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="services-2 d-flex">
                                <div class="icon mt-2 d-flex justify-content-center align-items-center"><span
                                        class="flaticon-reading"></span></div>
                                <div class="text pl-3">
                                    <h3>Regular Classes</h3>
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="services-2 d-flex">
                                <div class="icon mt-2 d-flex justify-content-center align-items-center"><span
                                        class="flaticon-diploma"></span></div>
                                <div class="text pl-3">
                                    <h3>Certified Teachers</h3>
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="services-2 d-flex">
                                <div class="icon mt-2 d-flex justify-content-center align-items-center"><span
                                        class="flaticon-education"></span></div>
                                <div class="text pl-3">
                                    <h3>Sufficient Classrooms</h3>
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="services-2 d-flex">
                                <div class="icon mt-2 d-flex justify-content-center align-items-center"><span
                                        class="flaticon-jigsaw"></span></div>
                                <div class="text pl-3">
                                    <h3>Creative Lessons</h3>
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="services-2 d-flex">
                                <div class="icon mt-2 d-flex justify-content-center align-items-center"><span
                                        class="flaticon-kids"></span></div>
                                <div class="text pl-3">
                                    <h3>Sports Facilities</h3>
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section ftco-counter img" id="section-counter"
        style="background-image: url({{ url('/') }}/public/frontend_assets/images/bg_3.jpg);"
        data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-2 d-flex">
                <div class="col-md-6 align-items-stretch d-flex">
                    <div class="img img-video d-flex align-items-center"
                        style="background-image: url({{ url('/') }}/public/frontend_assets/images/about-2.jpg);">
                        <div class="video justify-content-center">
                            {{-- <a href="https://vimeo.com/45830194"
                                class="icon-video popup-vimeo d-flex justify-content-center align-items-center">
                                <span class="ion-ios-play"></span>
                            </a> --}}
                        </div>
                    </div>
                </div>
                <div class="col-md-6 heading-section heading-section-white ftco-animate pl-lg-5 pt-md-0 pt-5">
                    <h2 class="mb-4">knewtown coaching</h2>
                    <p>Separated they live in. A small river named Duden flows by their place and supplies it with the
                        necessary regelialia. It is a paradisematic country. A small river named Duden flows by their place
                        and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts
                        of sentences fly into your mouth.</p>
                    <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a
                        paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                </div>
            </div>
            <div class="row d-md-flex align-items-center justify-content-center">
                <div class="col-lg-12">
                    <div class="row d-md-flex align-items-center">
                        <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18">
                                <div class="icon"><span class="flaticon-doctor"></span></div>
                                <div class="text">
                                    <strong class="number" data-number="{{ $faculity_count }}">0</strong>
                                    <span>Certified Teachers</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18">
                                <div class="icon"><span class="flaticon-doctor"></span></div>
                                <div class="text">
                                    <strong class="number" data-number="{{ $student_count }}">0</strong>
                                    <span>Students</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18">
                                <div class="icon"><span class="flaticon-doctor"></span></div>
                                <div class="text">
                                    <strong class="number" data-number="{{ $subject_count }}">0</strong>
                                    <span>Courses</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                            <div class="block-18">
                                <div class="icon"><span class="flaticon-doctor"></span></div>
                                <div class="text">
                                    <strong class="number" data-number="{{ $topstudent_count }}">0</strong>
                                    <span>Top Student</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section bg-light">
        <div class="container-fluid px-4">
            <div class="row justify-content-center mb-5 pb-2">
                <div class="col-md-8 text-center heading-section ftco-animate">
                    <!-- Staff -->
                    {{-- <div style="background-color: aliceblue;">
        <div class="container">
            <div class="row">
                <p class="mt-5" style="font-size: 20px;">GENIUS Staff</p>
                <h3 style="font-size: 40px;">Genius<span class="fw-bold"> Teachers.</span></h3>
                @foreach ($faculity as $teacher)
                <div class="col-md-3">
                    <div class="card p-3 text-center border-0">
                        <img src="{{ asset('public/faculityinfo/' . $teacher->faculity_image)}}" class="img-fluid text-center" alt="">
                        <h5 class="text-black my-3" style="cursor: pointer;">{{($teacher->faculity_name)}}</h5>
                        <p class="text-primary" style="cursor: pointer;">{{($teacher->faculity_qualification)}}</p>
                    </div>
                </div>
                @endforeach

            </div>
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4 text-center my-5">
                    <a href="{{url({{url('/')}}/public/frontend_assets/'/teacher')}}" class="btn btn-primary btn-lg">All Teachers...</a>
                </div>
                <div class="col-md-4"></div>
            </div>
        </div><br>
    </div> --}}
                    <h2 class="mb-4">Certified Teachers</h2>
                    <p>Separated they live in. A small river named Duden flows by their place and supplies it with the
                        necessary regelialia. It is a paradisematic country</p>
                </div>
            </div>
            <div class="row">
                @foreach ($faculity as $teacher)
                    <div class="col-md-6 col-lg-3 ftco-animate">
                        <div class="staff">
                            <div class="img-wrap d-flex align-items-stretch">
                                {{-- <div class="img align-self-stretch" style="background-image: url({{ asset('public/faculityinfo/' . $teacher->faculity_image)}});"></div> --}}
                                <div class="img align-self-stretch">
                                    <img src="{{url('/')}}/public/faculityinfo/{{$teacher->faculity_image}}" height="100%" width="100%" alt="">

                                </div>
                            </div>
                            <div class="text pt-3 text-center">
                                <h3> <span class="position mb-2">Teacher</span> {{ $teacher->faculity_name }}</h3>

                                <div class="faded">
                                    <p>{{ $teacher->faculity_qualification }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <a href="{{ url('/faculty') }}" class="btn btn-primary">All Teachers</a>
        </div>
    </section>
    <section class="ftco-section ftco-consult ftco-no-pt ftco-no-pb"
        style="background-image: url({{ url('/') }}/public/frontend_assets/images/bg_5.jpg);"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-md-6 py-5 px-md-5">
                    <div class="py-md-5">
                        <div class="heading-section heading-section-white ftco-animate mb-5">
                            <h2 class="mb-4">Request A Quote</h2>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                                there live the blind texts.</p>
                        </div>
                        <form action="datainsert" method="POST" enctype="multipart/form-data">
                            @csrf

                        </form>
                        <form action="{{ url('/user-message') }}" method="POST" class="appointment-form ftco-animate">
                            @csrf
                            <div class="form-group">
                                <input type="text" class="form-control mb-4 " placeholder="Your Name"
                                    name="user_name" value="{{ old('user_name') }}" id="">
                                @error('user_name')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="tel" class="form-control mb-4 " placeholder="Your Number"
                                    value="{{ old('user_contact') }}" name="user_contact" id="">
                                @error('user_contact')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control mb-4 " placeholder="Your Email"
                                    value="{{ old('user_email') }}" name="user_email" id="">
                                @error('user_email')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="date" class="form-control mb-4 " name="user_date"
                                    value="{{ old('user_date') }}" id="">
                                @error('user_date')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">

                                <textarea name="user_message" id="" cols="30" rows="3" value="{{ old('user_message') }}"
                                    class="form-control mb-4 " placeholder="Message"></textarea>
                                @error('user_message')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>



                            <div class="form-group ml-md-4">
                                <input type="submit" value="Request A Quote" class="btn btn-primary py-3 px-4">
                            </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        </div>
    </section>
    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-2">

                <div class="col-md-8 text-center heading-section ftco-animate">
                    <h2 class="mb-4"><span>Announcement</span>s</h2>
                    {{-- <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p> --}}
                </div>
            </div>
            <div class="row">
                @foreach ($announcement as $announce)
                    <div class="col-md-6 shadow col-lg-4 ftco-animate">
                        <div class="blog-entry">
                            @if ($announce->announcement_image)
                                <img src="{{ url('/public/announcementinfo/' . $announce->announcement_image) }}"
                                    style="width:100%;height: 300px;" class="img-fluid w-100 h-100" alt="">
                            @else
                                <img src="{{ url('https://static.vecteezy.com/system/resources/previews/003/313/595/original/attention-please-concept-of-important-announcement-free-vector.jpg') }}"
                                    style="height: 300px;" class="img-fluid w-100 h-100" alt="">
                            @endif
                            <div class="text bg-white p-4">
                                <h3 class="heading"><a href="#">{{ $announce->announcement_name }}</a></h3>
                                <p>{{ $announce->announcement_desc }}</p>
                                <div class="d-flex align-items-center mt-4">
                                    <p class="mb-0"><a
                                            href="{{ url('/announcedetails') }}/{{ $announce->announcement_id }}"
                                            class="btn btn-primary">Read More <span
                                                class="ion-ios-arrow-round-forward"></span></a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <center>
            <a href="{{ url('/announce') }}" class="btn btn-primary mt-5">View All Announcements</a>
        </center>
        </div>
    </section>
    <section class="ftco-section testimony-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-2">
                <div class="col-md-8 text-center heading-section ftco-animate">
                    <h2 class="mb-4">Top Rank Students</h2>
                </div>
            </div>
            <div class="row ftco-animate justify-content-center">
                <div class="col-md-12">
                    <div class="carousel-testimony owl-carousel">
                        @foreach ($topstudent as $alumnai)
                            <div class="item">
                                <div class="testimony-wrap d-flex">
                                    <div class="user-img mr-4"
                                        style="background-image: url({{ asset('public/alumnaiinfo/' . $alumnai->alumnai_image) }})">
                                    </div>
                                    <div class="text ml-2">
                                        <span class="quote d-flex align-items-center justify-content-center">
                                        </span>
                                        <p>{{ $alumnai->field_id }} - {{ $alumnai->alumnai_achivement }}</p>
                                        <p class="name">{{ $alumnai->alumnai_name }}</p>
                                        <span class="position">{{ $alumnai->alumnai_qualification }}</span>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Home End --}}
@endsection
