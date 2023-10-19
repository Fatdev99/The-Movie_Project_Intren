<!DOCTYPE html>
<html>
  <head>
    <base href="{{ env('APP_URL') }}">
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="custom/scroll.css" />
    <title>The Movie | Movie Details</title>
  </head>

  <body>
    <div class="overflow-hidden">
      @include('frontend.component.header')

      <!-- ==================== START CONTENT ==================  -->
      
      {{-- @include('frontend.component.shortcutbar') --}}

      <!-- ============== START POSTER ================  -->
      
      @include('frontend.component.actordetailmain')

      <!-- ==================================== START FOOTER  ========================= -->
      @include('frontend.component.footer')
      <!-- ==================================== END FOOTER  ========================= -->
    </div>
  </body>
</html>
