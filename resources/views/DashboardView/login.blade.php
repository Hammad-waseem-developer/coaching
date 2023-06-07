<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>
</head>
<body>
    {{-- <div class="container">
    <div class="row"><br><br><br><br><br><br><br><br><br><br><br><br>
      <main class="page-section inner-page-sec-padding-bottom mt--5">
            <div class="col-sm-12 col-md-12 col-xs-12 col-lg-6 mb--30 mb-lg--0">
                <!-- Login Form s-->
                <form action="{{url('/loginstore')}}" method="GET" >
                    <div class="login-form ">
                        <h4 class="login-title">Login</h4>
                        <div class="row">
                            <div class="col-md-12 col-12 mb--15">
                                <label for="email"><strong>Email</strong> </label>
                                <input class="mb-0 form-control" type="email" name="admin_email"
                                    placeholder="Enter your Email">
                                    @error('admin_email')
                                    <p class="text-danger">{{$message}}</p>
                                    @enderror
                            </div>
                            <div class="col-md-12 col-12 mb--15">
                                <label for="password"><strong>Password</strong> </label>
                                <input class="mb-0 form-control" type="password" name="admin_password"
                                    placeholder="Enter your password">
                                    @error('admin_password')
                                    <p class="text-danger">{{$message}}</p>
                                    @enderror
                            </div>
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-success">Login</button>
                            </div>

                            @if (session()->has('status'))
                            <p>{{session()->get('status')}}</p>
                    @endif

                        </div>
                    </div>
                </form>
            </div>
</main>
    </div>
</div> --}}
<div class="container">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8 my-5 py-5">
            <h1 class="text-center">Login</h1>
            <form action="{{url('/login-store')}}" method="POST">
                @csrf
            <label for="" class="mt-5">Username</label>
            <input type="text" placeholder="Enter Email" required autocomplete="off" name="admin_email" class="form-control" id="">
            @error('admin_email')
             <p class="text-danger">{{$message}}</p>
            @enderror
            <label for="" class="my-3">Password</label>
            <input type="password" placeholder="Enter Password" required name="admin_password" class="form-control" id="">
            @error('admin_password')
             <p class="text-danger">{{$message}}</p>
            @enderror
            <button type="submit" class="btn btn-primary my-3">Login</button>

            @if (session()->has('status'))
            <p>{{session()->get('status')}}</p>
            @endif
        </form>
        </div>
        <div class="col-md-2"></div>
    </div>
</div>
</body>
</html>

