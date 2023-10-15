<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>The Movie | Login</title>

    <link href="custom/css/bootstrap.min.css" rel="stylesheet">
    <link href="custom/font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="custom/css/animate.css" rel="stylesheet">
    <link href="custom/css/style.css" rel="stylesheet">
    <link href="custom/customize.css" rel="stylesheet">

</head>

<body class="gray-bg">

    <div class="loginColumns animated fadeInDown">
        <div class="row">

            <div class="col-md-6">
                <a href="{{ route('movie.index') }}"><img src="custom/images/logo.svg" alt="logo" width="220" height="100" /></a>

                <h2 class="font-bold">Login to your account</h2>

                <p>
                    In order to use the editing and rating capabilities of TMDB, as well as get personal recommendations you will need to login to your account.
                </p>

                <p>
                    If you do not have an account, registering for an account is free and simple.
                </p>

            </div>
            <div class="col-md-6">
                <div class="ibox-content">
                    <form method="POST" class="m-t" role="form" action="{{ route(('movie.auth')) }}">
                        @csrf
                        <div class="form-group">
                            <input type="text"
                            name="email" 
                            class="form-control" 
                            placeholder="Username"
                            value="{{ old('email') }}">
                            @if ($errors->has('email'))
                                <span class="error-message">* {{$errors->first('email')}}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <input type="password" 
                            name="password"
                            class="form-control" 
                            placeholder="Password">
                            @if ($errors->has('password'))
                                <span class="error-message">* {{$errors->first('password')}}</span>
                            @endif
                        </div>
                        <button type="submit" class="btn btn-primary block full-width m-b">Login</button>

                        <a href="#">
                            <small>Forgot password?</small>
                        </a>

                        <p class="text-muted text-center">
                            <small>Do not have an account?</small>
                        </p>
                        <a class="btn btn-sm btn-white btn-block" href="{{ route('movie.user.register') }}">Create an account</a>

                        <p class="text-muted text-center">
                            <small>or</small>
                        </p>
                        <a class="btn btn-sm btn-white btn-block" href="{{ route('movie.index') }}">Return The Movie</a>
                    </form>
                    <p class="m-t">
                        <small>Inspinia we app framework base on Bootstrap 3 &copy; 2023</small>
                    </p>
                </div>
            </div>
        </div>
        <hr/>
        <div class="row">
            <div class="col-md-6">
                Copyright The Movie DB
            </div>
            <div class="col-md-6 text-right">
               <small>© 2022-2023</small>
            </div>
        </div>
    </div>

</body>

</html>
