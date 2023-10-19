<div
        class="movie-detail relative bg-cover bg-no-repeat bg-center h-[700px] items-center lg:flex hidden"
        style="
          background-image: url('https://www.themoviedb.org/t/p/w1920_and_h800_multi_faces/iiXliCeykkzmJ0Eg9RYJ7F2CWSz.jpg');
        ">
        <div class="absolute top-0 bottom-0 left-0 right-0 bg-[linear-gradient(_to_right,rgb(67,67,67)_150px,rgba(31.5,31.5,31.5,0.54)_100%_)] z-[1] inset-0;
        "></div>
        <div
          class="movie-header z-10 relative z-2 max-w-[1400px] mx-auto grid grid-cols-[300px,1fr] gap-10 items-center px-10"
        >
          <div class="rounded-xl overflow-hidden">
            <img
              src="{{ $actors->actor_avatar }}"
              alt=" avatar "
            />
          </div>
          <div class="poster-info">
            <div class="poster-title flex items-center gap-6 mb-[80px]">
              <h2 class="text-white text-3xl font-semibold">{{ $actors->actor_name }}</h2>
            </div>
            <div class="header-info text-white">

              <div class="overview mb-[50px]">
                <p class="overview-lable text-2xl font-semibold mb-2">
                  Movies
                </p>
              </div>
              <div class="people-poster mt-3 text-blue-400 grid grid-cols-5 gap-10">

                @isset($a_movies)
                  @foreach($a_movies as $a_m)
                    <div class="people-poster--profile">
                      <a
                        href="{{ route('movie.movie.detail', $a_m->movie_id) }}"
                        class="text-base font-medium"
                        >{{ $a_m->name }}</a>
                    </div>
                  @endforeach
                @endisset

              </div>
            </div>
            
          </div>
        </div>
      </div>