<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>The Movie | Register</title>

    <link href="custom/css/bootstrap.min.css" rel="stylesheet">
    <link href="custom/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="custom/css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="custom/css/animate.css" rel="stylesheet">
    <link href="custom/css/style.css" rel="stylesheet">
    <link href="custom/customize.css" rel="stylesheet">

</head>

<body class="gray-bg">

    <div class="middle-box text-center loginscreen   animated fadeInDown">
        <div>
            <div>

                <img src="custom/images/logo.svg" alt="logo" width="300" height="100" />

            </div>
            <h2>Register to The Movie</h2>
            <p>Create account to see it in action.</p>
            <form method="POST" class="m-t" role="form" action="{{ route('movie.user.store')}}">
                @csrf
                <div class="form-group">
                    <input type="text" 
                    name="name"
                    class="form-control" 
                    placeholder="Name"
                    value="{{ old('name') }}">
                    @if ($errors->has('name'))
                        <span class="error-message">* {{$errors->first('name')}}</span>
                    @endif
                </div>
                <div class="form-group">
                    <input type="phone" 
                    name="phone"
                    class="form-control" 
                    placeholder="Phone Number"
                    value="{{ old('phone') }}">
                    @if ($errors->has('phone'))
                        <span class="error-message">* {{$errors->first('phone')}}</span>
                    @endif
                </div>
                <div class="form-group">
                    <input type="text" 
                    name="address"
                    class="form-control" 
                    placeholder="Address"
                    value="{{ old('address') }}">
                    @if ($errors->has('address'))
                        <span class="error-message">* {{$errors->first('address')}}</span>
                    @endif
                </div>
                <div class="form-group">
                    <input type="email" 
                    name="email"
                    class="form-control" 
                    placeholder="Email"
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
                <div class="form-group">
                    <input type="password" 
                    name="re_password"
                    class="form-control" 
                    placeholder="Repassword">
                    @if ($errors->has('re_password'))
                        <span class="error-message">* {{$errors->first('re_password')}}</span>
                    @endif
                </div>
                <div class="form-group">
                        <div class="checkbox i-checks"><label> <input type="checkbox"><i></i> Agree the terms and policy </label></div>
                </div>
                <button type="submit" class="btn btn-primary block full-width m-b">Register</button>

                <p class="text-muted text-center"><small>Already have an account?</small></p>
                <a class="btn btn-sm btn-white btn-block" href="{{ route('movie.login') }}">Login</a>
                <p class="text-muted text-center">
                    <small>or</small>
                </p>
                <a class="btn btn-sm btn-white btn-block" href="{{ route('movie.index') }}">Return The Movie</a>
            </form>
            <p class="m-t"> <small>The movie app framework base on Bootstrap 5 &copy; 2023</small> </p>
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="custom/js/jquery-3.1.1.min.js"></script>
    <script src="custom/js/bootstrap.min.js"></script>
    <!-- iCheck -->
    <script src="/custom/js/plugins/iCheck/icheck.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.i-checks').iCheck({
                checkboxClass: 'icheckbox_square-green',
                radioClass: 'iradio_square-green',
            });
        });
    </script>
</body>

</html>
