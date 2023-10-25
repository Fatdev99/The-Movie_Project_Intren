<div
        class="movie-detail relative bg-cover bg-no-repeat bg-center h-[700px] items-center lg:flex hidden"
        style="
          background-image: url('https://www.themoviedb.org/t/p/w1920_and_h800_multi_faces/iiXliCeykkzmJ0Eg9RYJ7F2CWSz.jpg');
        ">
        <div class="absolute top-0 bottom-0 left-0 right-0 bg-[linear-gradient(_to_right,rgb(67,67,67)_150px,rgba(31.5,31.5,31.5,0.54)_100%_)] z-[1] inset-0;
        "></div>
        <div
          class="movie-header z-10 relative z-2 max-w-[1400px] mx-auto grid grid-cols-[300px,1fr] gap-10 items-center px-10"
          style="margin-top: 50px"
        >
          <div class="rounded-xl overflow-hidden">
            <img
              src="{{ $movies->picture }}"
              alt=""
            />
          </div>
          <div class="poster-info">
            <div class="poster-title flex items-center gap-6 mb-[15px]">
              <h2 class="text-white text-3xl font-semibold">{{ $movies->name }}</h2>
              <span class="text-white text-3xl font-normal opacity-80"
                ></span
              >
            </div>
            <div
              class="poster-facts flex items-center text-white text-base gap-4 my-[10px]"
            >
              <span
                class="certification inline-flex whitespace-nowrap items-center content-center py-1 px-2 border border-white rounded-2px mr-[7px] text-opacity-60"
              >
                PG - 13
              </span>
              <span class="date">{{ $movies->releaseyear }} (US)</span>
              <span class="category poster-facts--relative relative ml-[6px]">
                Genre: 
                @isset($m_genre)
                  @foreach($m_genre as $m_g)
                    {{ $m_g->genre_name }}
                  @endforeach
                @endisset
              </span>
              <span class="runtime poster-facts--relative relative ml-[6px]"
                >{{ $movies->convertMinutesToHours($movies->duration) }}</span
              >
            </div>
            <div class="my-3 mb-[30px]">
              <ul class="poster-actions flex items-center gap-4 text-white">
                <li class="chart flex items-center">
                  <div
                    class="relative flex justify-center items-center w-[60px] h-[60px] bg-black rounded-[50%]"
                  >
                    <span class="chart-content--score text-[20px] font-semibold"
                      >89%</span
                    >
                    <div
                      class="absolute w-full h-full border-[3px] border-green-500 top-0 left-0 rounded-full"
                    ></div>
                  </div>
                  <p class="chart-title text-base font-semibold ml-6">
                    User <br />
                    Score
                  </p>
                </li>
                
                <li class="poster-item flex items-center">
                  <a
                    href="{{ route('movie.movie.addfavorite', $movies->movie_id) }}"
                    class="poster-item--link bg-opacity-100 bg-[#032541] rounded-full w-12 h-12 flex justify-center items-center text-2xl font-bold"
                  >
                    <img
                      src="https://www.themoviedb.org/assets/2/v4/glyphicons/basic/glyphicons-basic-13-heart-white-28d2cc2d6418c5047efcfd2438bfc5d109192671263c270993c05f130cc4584e.svg"
                      alt=""
                      class="w-4 h-4"
                    />
                  </a>
                </li>
              </ul>
            </div>
            <div class="header-info text-white">

              <div class="overview mb-[50px]">
                <p class="overview-lable text-2xl font-semibold mb-2">
                  Overview
                </p>
                <span class="text-gray-200 text-base leading-7">

                  {{ $movies->description }}
        
                </span>
              </div>

              <div class="overview">
                  <p class="overview-lable text-2xl font-semibold mb-2">
                    Actor
                  </p>
                  
                  <div class="people-poster mt-3 text-gray-200 grid grid-cols-4 gap-5">
                    
                    @isset($m_actors)
                      @foreach($m_actors as $m_ac)
                        <div class="people-poster--profile">
                          <a
                          href="/person/41671-nimrod-antal"
                          class="text-base font-medium"
                          >{{ $m_ac->actor_name }}</a
                          >
                        </div>
                      @endforeach
                    @endisset
                    
                  </div>
              </div>

              <div class="mt-10 grid grid-rows-2">
                @if (isset(auth()->user()->user_id))

                  <a
                    style="width: 145px"
                    href="{{ route('movie.movie.play', $movies->movie_id) }}"
                    class="footer-btn bg-blue text-white-400 font-bold text-lg rounded-md border-2 border-white px-6 py-2 transition-colors hover:bg-white hover:text-red-600">
                    Play Movie
                  </a>

                @else

                  <a
                    style="width: 145px"
                    href="{{ route('movie.movie.play', $movies->movie_id) }}"
                    class="footer-btn bg-blue text-white-400 font-bold text-lg rounded-md border-2 border-white px-6 py-2 transition-colors hover:bg-white hover:text-red-600">
                    Play Trailer
                  </a>
                  <span class="text-gray-200 text-base leading-7" style="margin-top: 10px">
                    <a class="text-blue-500" href="{{ route('movie.login') }}">Login</a> to watch full movie
                  </span>
                @endif
              </div>
            </div>
            
          </div>
        </div>
      </div>