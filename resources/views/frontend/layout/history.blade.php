<!DOCTYPE html>
<html>
  <head>
    <base href="{{ env('APP_URL') }}">
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="custom/scroll.css" />
    <title>The Movie | History</title>
  </head>
  <body>
    <div class="overflow-hidden">
      @include('frontend.component.header')

      @include('frontend.component.historymain')

      <!-- ==================================== START FOOTER  ========================= -->
      @include('frontend.component.footer')
      <!-- ==================================== END FOOTER  ========================= -->
    </div>
  </body>
</html>
