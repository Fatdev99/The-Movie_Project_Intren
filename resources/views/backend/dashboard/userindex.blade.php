<!DOCTYPE html>
<html>

<head>
    <base href="{{ env('APP_URL') }}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>The Movie | User</title>

    <link href="custom/css/bootstrap.min.css" rel="stylesheet">
    <link href="custom/font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- FooTable -->
    <link href="custom/css/plugins/footable/footable.core.css" rel="stylesheet">

    <link href="custom/css/animate.css" rel="stylesheet">
    <link href="custom/css/style.css" rel="stylesheet">
</head>

<body>

    <div id="wrapper">
        @include('backend.dashboard.component.sidebar')

        <div id="page-wrapper" class="gray-bg" style="height: 980px">
            @include('backend.dashboard.component.nav')

            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>User Management</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="{{ route('movie.index') }}">Home</a>
                        </li>
                        <li>
                            <a href="{{ route('movie.dashboard.index') }}">Dashboard</a>
                        </li>
                        <li class="active">
                            <strong>User Management</strong>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-2">
                </div>
            </div>
            @include('backend.dashboard.component.usermain')
            @include('backend.dashboard.component.footer')
        </div>
    </div>



    <!-- Mainly scripts -->
    <script src="custom/js/jquery-3.1.1.min.js"></script>
    <script src="custom/js/bootstrap.min.js"></script>
    <script src="custom/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="custom/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="custom/js/inspinia.js"></script>
    <script src="custom/js/plugins/pace/pace.min.js"></script>

    <!-- FooTable -->
    <script src="custom/js/plugins/footable/footable.all.min.js"></script>

    <!-- Page-Level Scripts -->
    <script>
        $(document).ready(function() {

            $('.footable').footable();

        });

    </script>

</body>

</html>
