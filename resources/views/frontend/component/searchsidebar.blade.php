@if (isset($mvlist) || isset($mvsearch))
  <div>

    <form method="GET" autocomplete="on" action='{{ route('movie.movie.mv-search') }}'>

        <input class="border border-gray-300 px-3 py-2 rounded-md w-full" type="text" name="searchname" placeholder="Movie name ..." value="{{ old('searchname') }}">

        <div class="p-4 border-t border-gray-200">
          <h3 class="flex items-center text-gray-500">Release Year</h3>

          <div class="flex items-center mt-8 space-x-2 justify-between">
            <input type="text" name="searchfrom" class="border border-gray-300 px-3 py-2 rounded-md" placeholder="from year" value="{{ old('searchfrom') }}">
          </div>

          <div class="flex items-center mt-8 space-x-2 justify-between">
            <input type="text" name="searchto" class="border border-gray-300 px-3 py-2 rounded-md" placeholder="to year" value="{{ old('searchto') }}">
          </div>

          <button name="search" class="btn-search flex justify-center items-center w-[240px] h-[44px] text-[19px] font-semibold text-white-500 bg-blue-500 rounded-[20px] my-[20px]" type="submit">
            Search
          </button>
        </div>
      
    </form>

    <form method="GET" autocomplete="on" action='{{ route('movie.movie.mv-search') }}'>

      <div class="p-4 border-t border-gray-200">
          <h3 class="text-gray-500">Genres</h3>

          <ul id="with_genres" class=" mt-4">
            @isset($genres)
              @foreach($genres as $genre)
                <button value="{{ $genre->genre_id }}">
                  <li class="border border-gray-400 rounded-[14px] inline-block px-[13px] py-[5px] text-sm mt-2 text-left mr-2"> {{ $genre->genre_name }} </li>
                </button>
              @endforeach
            @endisset
          </ul>
      </div>
      
    </form>

  </div>
@endif

@if (isset($tvlist) || isset($tvsearch))
  <div>

    <form method="GET" autocomplete="on" action='{{ route('movie.movie.tv-search') }}'>

        <input class="border border-gray-300 px-3 py-2 rounded-md w-full" type="text" name="searchname" placeholder="Movie name ..." value="{{ old('searchname') }}">

        <div class="p-4 border-t border-gray-200">
          <h3 class="flex items-center text-gray-500">Release Year</h3>

          <div class="flex items-center mt-8 space-x-2 justify-between">
            <input type="text" name="searchfrom" class="border border-gray-300 px-3 py-2 rounded-md" placeholder="from year" value="{{ old('searchfrom') }}">
          </div>

          <div class="flex items-center mt-8 space-x-2 justify-between">
            <input type="text" name="searchto" class="border border-gray-300 px-3 py-2 rounded-md" placeholder="to year" value="{{ old('searchto') }}">
          </div>

          <button name="search" class="btn-search flex justify-center items-center w-[240px] h-[44px] text-[19px] font-semibold text-white-500 bg-blue-500 rounded-[20px] my-[20px]" type="submit">
            Search
          </button>
        </div>
      
    </form>

      {{-- <form method="GET" autocomplete="on" action='{{ route('movie.movie.mv-search') }}'>

        <div class="p-4 border-t border-gray-200">
          <h3 class="text-gray-500">Genres</h3>

          <ul id="with_genres" class=" mt-4">
            <li class="border border-gray-400 rounded-[14px] inline-block px-[13px] py-[5px] text-sm mt-2 text-left mr-2">Action &amp; Adventure</li>
            <li class="border border-gray-400 rounded-[14px] inline-block px-[13px] py-[5px] text-sm mt-2 text-left mr-2"><a class="no-underline" href="/discover/tv?with_genres=10762">Kids</a></li>
            <li class="border border-gray-400 rounded-[14px] inline-block px-[13px] py-[5px] text-sm mt-2 text-left mr-2"><a class="no-underline" href="/discover/tv?with_genres=10763">News</a></li>
            <li class="border border-gray-400 rounded-[14px] inline-block px-[13px] py-[5px] text-sm mt-2 text-left mr-2"><a class="no-underline" href="/discover/tv?with_genres=9648">Phim Bí Ẩn</a></li>
            <li class="border border-gray-400 rounded-[14px] inline-block px-[13px] py-[5px] text-sm mt-2 text-left mr-2"><a class="no-underline" href="/discover/tv?with_genres=18">Phim Chính Kịch</a></li>
            <li class="border border-gray-400 rounded-[14px] inline-block px-[13px] py-[5px] text-sm mt-2 text-left mr-2"><a class="no-underline" href="/discover/tv?with_genres=10751">Phim Gia Đình</a></li>
            <li class="border border-gray-400 rounded-[14px] inline-block px-[13px] py-[5px] text-sm mt-2 text-left mr-2"><a class="no-underline" href="/discover/tv?with_genres=16">Phim Hoạt Hình</a></li>
            <li class="border border-gray-400 rounded-[14px] inline-block px-[13px] py-[5px] text-sm mt-2 text-left mr-2"><a class="no-underline" href="/discover/tv?with_genres=35">Phim Hài</a></li>
            <li class="border border-gray-400 rounded-[14px] inline-block px-[13px] py-[5px] text-sm mt-2 text-left mr-2"><a class="no-underline" href="/discover/tv?with_genres=80">Phim Hình Sự</a></li>
            <li class="border border-gray-400 rounded-[14px] inline-block px-[13px] py-[5px] text-sm mt-2 text-left mr-2"><a class="no-underline" href="/discover/tv?with_genres=37">Phim Miền Tây</a></li>
            <li class="border border-gray-400 rounded-[14px] inline-block px-[13px] py-[5px] text-sm mt-2 text-left mr-2"><a class="no-underline" href="/discover/tv?with_genres=99">Phim Tài Liệu</a></li>
            <li class="border border-gray-400 rounded-[14px] inline-block px-[13px] py-[5px] text-sm mt-2 text-left mr-2"><a class="no-underline" href="/discover/tv?with_genres=10764">Reality</a></li>
            <li class="border border-gray-400 rounded-[14px] inline-block px-[13px] py-[5px] text-sm mt-2 text-left mr-2"><a class="no-underline" href="/discover/tv?with_genres=10765">Sci-Fi &amp; Fantasy</a></li>
            <li class="border border-gray-400 rounded-[14px] inline-block px-[13px] py-[5px] text-sm mt-2 text-left mr-2"><a class="no-underline" href="/discover/tv?with_genres=10766">Soap</a></li>
            <li class="border border-gray-400 rounded-[14px] inline-block px-[13px] py-[5px] text-sm mt-2 text-left mr-2"><a class="no-underline" href="/discover/tv?with_genres=10767">Talk</a></li>
            <li class="border border-gray-400 rounded-[14px] inline-block px-[13px] py-[5px] text-sm mt-2 text-left mr-2"><a class="no-underline" href="/discover/tv?with_genres=10768">War &amp; Politics</a></li>
          </ul>
        </div>
      
      </form> --}}

  </div>
@endif