<!DOCTYPE html>
<html>
  <head>
    <base href="{{ env('APP_URL') }}">
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="custom/scroll.css">
    <title>The Movie | Movie</title>
  </head>
  
  <body>
    <div class="overflow-hidden">
      @include('frontend.component.header')


     <!-- ==========START CONTENT ============ -->

     <div class="max-w-[1320px] mx-auto md:mt-[66px] mt-[61px]">
       @isset ($mvlist)
          <h2 class="pt-7 pb-7 pl-5 pr-5 lg:pl-0 lg:pr-0  text-2xl font-semibold ">
            Popular Movies
          </h2>
        @endisset

        @isset ($tvlist)
        <h2 class="pt-7 pb-7 pl-5 pr-5 lg:pl-0 lg:pr-0  text-2xl font-semibold ">
          Popular tvShow
        </h2>
        @endisset
      
        <div class="grid md:grid-cols-[260px,1fr] grid-cols-[1fr] gap-4 md:gap-8 pl-5 pr-5 lg:pl-0 lg:pr-0 ">
          @include('frontend.component.searchsidebar')
      
          @include('frontend.component.listmain')
        </div>
      </div>
      


     <!-- ==========END CONTENT ============ -->
      


      <!-- ==================================== START FOOTER  ========================= -->
      @include('frontend.component.footer')
      <!-- ==================================== END FOOTER  ========================= -->
      
    
    
    </div>
  </body>
</html>
