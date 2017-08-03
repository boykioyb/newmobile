<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login | Cms tin tuc</title>

    <link href="{{asset('admin/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('admin/font-awesome/css/font-awesome.css')}}" rel="stylesheet">

    <link href="{{asset('admin/css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('admin/css/style.css')}}" rel="stylesheet">

</head>

<body class="gray-bg">

    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div>
            <div>

                <h1 class="logo-name">NewsMobile+</h1>

            </div>
            <h3>Welcome to NewsMobile+</h3>
            <p>Login for system</p>
            <form class="m-t" role="form" action="{{route('post.login')}}" method="POST" novalidate>
                {{ csrf_field() }}
                @if(session('msg'))
                    <span class="text-danger">
                        {{ session('msg') }}
                    </span>
                    <br>
                @endif
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Username" name="username" required="" autofocus>
                    @if(asset($errors->first('username')))
                        <span class="text-danger">{{$errors->first('username')}}</span>
                    @endif
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Password" name="password" required="">
                    @if(asset($errors->first('password')))
                        <span class="text-danger">{{$errors->first('password')}}</span>
                    @endif
                </div>
                <button type="submit" class="btn btn-primary block full-width m-b">Login</button>

                <a href="#"><small>Forgot password?</small></a>
                <p class="text-muted text-center"><small>Do not have an account?</small></p>
                <a class="btn btn-sm btn-white btn-block" href="register.html">Create an account</a>
            </form>
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="{{asset('admin/js/jquery-2.1.1.js')}}"></script>
    <script src="{{asset('admin/js/bootstrap.min.js')}}"></script>

</body>

</html>
