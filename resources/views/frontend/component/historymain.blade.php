<div class="max-w-7xl mx-auto md:mt-[66px] mt-[61px] md:px-20 p-4">
    <h2 class="text-2xl font-semibold mb-4">History</h2>

    <div class="w-full ">

        <div class="grid lg:grid-cols-[repeat(5,1fr)] md:lg:grid-cols-[repeat(3,1fr)] grid-cols-[repeat(2,1fr)] md:gap-5 gap-3">

            @if(isset($movies))
                @foreach($movies as $movie)
                <a href="{{ route('movie.movie.detail', $movie->movie_id ) }}" class="item-product relative bg-white border border-gray-200 rounded-lg shadow-md">
                    <div class="relative">
                    <img src="{{ $movie->picture }}" alt="" class="rounded-t-lg">
                    <img class="absolute top-0 right-0 w-[26px] h-[26px]rounded-full overflow-hidden brightness-75" src="https://www.themoviedb.org/assets/2/v4/glyphicons/basic/glyphicons-basic-947-circle-more-white-4c440dfc1b0e626c70f4853dbbce9c4d1f2c5d8f3e05a7d3df47881cbd816adf.svg" alt="">
                    <div class="absolute flex justify-center items-center w-[38px] h-[38px] bg-black left-[11px] -bottom-4 text-white rounded-full overflow-hidden text-sm font-semibold
                    ">89<sup>%</sup>
                    <div class="border-[3px] absolute inset-0 border-3 border-green-500 rounded-full"></div>
                    
                    </div>
                    </div>
                    <div class="mt-[30px] pt-0 pb-[21px] px-2.5">
                    <h4 class="text-16 font-semibold">{{ $movie->name }}</h4>
                    <span class="text-sm  text-[#686868]">{{ $movie->releaseyear }}</span>
                    </div>
                </a>
                @endforeach
            @endif 
        </div>
    </div>

</div>