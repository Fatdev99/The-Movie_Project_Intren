<div class="w-full ">

    @isset($mvsearch)
      @if($mvsearch)
        <div class="grid lg:grid-cols-[repeat(5,1fr)] md:lg:grid-cols-[repeat(3,1fr)] grid-cols-[repeat(2,1fr)] md:gap-5 gap-3">
          @foreach($mvsearch as $mvl)
            <a href="{{ route('movie.movie.detail', $mvl->movie_id ) }}" class="item-product relative bg-white border border-gray-200 rounded-lg shadow-md">
              <div class="relative">
                <img src="{{ $mvl->picture }}" alt="" class="rounded-t-lg">
                <img class="absolute top-0 right-0 w-[26px] h-[26px]rounded-full overflow-hidden brightness-75" src="https://www.themoviedb.org/assets/2/v4/glyphicons/basic/glyphicons-basic-947-circle-more-white-4c440dfc1b0e626c70f4853dbbce9c4d1f2c5d8f3e05a7d3df47881cbd816adf.svg" alt="">
                <div class="absolute flex justify-center items-center w-[38px] h-[38px] bg-black left-[11px] -bottom-4 text-white rounded-full overflow-hidden text-sm font-semibold
                ">89<sup>%</sup>
              <div class="border-[3px] absolute inset-0 border-3 border-green-500 rounded-full"></div>
              
              </div>
              </div>
              <div class="mt-[30px] pt-0 pb-[21px] px-2.5">
                <h4 class="text-16 font-semibold">{{ $mvl->name }}</h4>
              <span class="text-sm  text-[#686868]">{{ $mvl->release_date }}</span>
              </div>
            </a>
          @endforeach
        </div>
      @else
        <div class="page_404">
          <div class="container">
            <div class="row">	
              <div class="col-sm-12 ">
                <div class="col-sm-10 col-sm-offset-1  text-center">
                  <div class="four_zero_four_bg">
                    <h1 class="text-center ">404</h1>
                  </div>
                  <div class="contant_box_404">
                    <h2 class="h2">
                      Look like you're lost
                    </h2>
                    
                    <p>the movie you are looking for not avaible!</p>
                    
                    <a href="{{ route('movie.movie.list')}}" class="link_404">Back to Movie</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      @endif 
    @endisset

    @isset($tvsearch)
        @if(empty($tvsearch) == false)
          <div class="grid lg:grid-cols-[repeat(5,1fr)] md:lg:grid-cols-[repeat(3,1fr)] grid-cols-[repeat(2,1fr)] md:gap-5 gap-3">
            @foreach($tvsearch as $mvl)
              <a href="{{ route('movie.movie.detail', $mvl->movie_id ) }}" class="item-product relative bg-white border border-gray-200 rounded-lg shadow-md">
                <div class="relative">
                  <img src="{{ $mvl->picture }}" alt="" class="rounded-t-lg">
                  <img class="absolute top-0 right-0 w-[26px] h-[26px]rounded-full overflow-hidden brightness-75" src="https://www.themoviedb.org/assets/2/v4/glyphicons/basic/glyphicons-basic-947-circle-more-white-4c440dfc1b0e626c70f4853dbbce9c4d1f2c5d8f3e05a7d3df47881cbd816adf.svg" alt="">
                  <div class="absolute flex justify-center items-center w-[38px] h-[38px] bg-black left-[11px] -bottom-4 text-white rounded-full overflow-hidden text-sm font-semibold
                  ">89<sup>%</sup>
                <div class="border-[3px] absolute inset-0 border-3 border-green-500 rounded-full"></div>
                
                </div>
                </div>
                <div class="mt-[30px] pt-0 pb-[21px] px-2.5">
                  <h4 class="text-16 font-semibold">{{ $mvl->name }}</h4>
                <span class="text-sm  text-[#686868]">{{ $mvl->release_date }}</span>
                </div>
              </a>
            @endforeach
          </div>
        @else
          <div class="page_404">
            <div class="container">
              <div class="row">	
                <div class="col-sm-12 ">
                  <div class="col-sm-10 col-sm-offset-1  text-center">
                    <div class="four_zero_four_bg">
                      <h1 class="text-center ">404</h1>
                    </div>
                    <div class="contant_box_404">
                      <h2 class="h2">
                        Look like you're lost
                      </h2>
              
                      <p>the TVshow you are looking for not avaible!</p>
              
                      <a href="{{ route('movie.movie.tvShow')}}" class="link_404">Back to TV Shows</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        @endif
    @endisset

</div>