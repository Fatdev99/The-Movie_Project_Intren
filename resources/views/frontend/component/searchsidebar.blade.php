<div>
    <form method="POST" action="">
        <input class="border border-gray-300 px-3 py-2 rounded-md w-full" type="text" placeholder="Search ...">

        <div class="btn-search flex justify-center items-center h-[44px] text-[19px] font-semibold text-white-500 bg-blue-500 rounded-[20px] my-[20px]"><button type="submit">Search</button></div>
    </form>
    <div class="shadow-[0_2px_8px_rgba(0,0,0,0.1)] flex justify-between flex-wrap items-center p-4 rounded-lg shadow-md border border-gray-200 bg-white">
      <span class="text-16 font-semibold">Sort</span>
      <img class="w-4 h-4" src="custom/images/next.svg" alt="" />
    </div>
    <div class="mt-3">
      <div class="shadow-[0_2px_8px_rgba(0,0,0,0.1)] flex justify-between items-center p-4 rounded-lg shadow-md border-t border-gray-200 bg-white">
        <span class="text-gray-500">Filters</span>
        <img class="w-4 h-4" src="custom/images/next.svg" alt="" />
      </div>
      <div class="p-4">
        <h3 class="flex items-center text-gray-500">
          Show Me
          <img class="w-4 h-4 ml-2" src="custom/images/circle-question.svg" alt="" />
        </h3>

        <label class="flex items-center space-x-2 mt-10 text-gray-600">
          <input id="show_me_everything" type="radio" name="show_me" value="0" checked="checked">
          <span class="text-sm font-medium">Everything</span>
        </label>

        <label class="flex items-center space-x-2 mt-4 text-gray-600">
          <input id="show_me_not_seen" type="radio" value="1" name="show_me">
          <span class="text-sm font-medium">I Haven't Seen</span>
        </label>

        <label class="flex items-center space-x-2 mt-4 text-gray-600">
          <input id="show_me_seen" type="radio" value="2" name="show_me">
          <span class="text-sm font-medium">I Had Seen</span>
        </label>
      </div>
      
      <form action="" method="POST">
        <div class="p-4 border-t border-gray-200">
          <h3 class="flex items-center text-gray-500">Release Year</h3>
  
          <label class="flex items-center space-x-2 mt-4 text-gray-600">
            <input id="all_releases" type="checkbox" name="all_releases" value="true" checked="">
            <span class="text-sm font-medium">Search all episodes?</span>
          </label>
  
          <div class="flex items-center mt-8 space-x-2 justify-between">
            <h3 class="text-gray-500">fr</h3>
            <input type="text" class="border border-gray-300 px-3 py-2 rounded-md">
          </div>
  
          <div class="flex items-center mt-8 space-x-2 justify-between">
            <h3 class="text-gray-500">to</h3>
            <input type="text" class="border border-gray-300 px-3 py-2 rounded-md">
          </div>
  
          <div class="btn-search flex justify-center items-center h-[44px] text-[19px] font-semibold text-white-500 bg-blue-500 rounded-[20px] my-[20px]"><button type="submit">Search</button></div>
        </div>
      </form>

      <div class="p-4 border-t border-gray-200">
        <h3 class="text-gray-500">Genres</h3>
        <ul id="with_genres" class=" mt-4">
          <li class="border border-gray-400 rounded-[14px] inline-block px-[13px] py-[5px] text-sm mt-2 text-left mr-2"><a class="no-underline" href="/discover/tv?with_genres=10759">Action &amp; Adventure</a></li>
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
    </div>

</div>