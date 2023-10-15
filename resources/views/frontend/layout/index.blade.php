<!DOCTYPE html>
<html>
<head>
    <base href="{{ env('APP_URL') }}">
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="custom/scroll.css" />
    <title>The Movie | Index</title>
</head>

<body>
    <div class="overflow-hidden">

        <!-- ============ START HEADER ============ -->

        @include('frontend.component.header')

        <!-- ============ END HEADER ============ -->

        <!-- ============ START BANNER ============ -->
        
        @include('frontend.component.banner')

        <!-- ============= END BANNER =========== -->

        @include('frontend.component.indexmain')

        <!-- ==================================== START FOOTER  ========================= -->

        @include('frontend.component.footer')
        
        <!-- ==================================== END FOOTER  ========================= -->
    </div>
</body>

</html>
