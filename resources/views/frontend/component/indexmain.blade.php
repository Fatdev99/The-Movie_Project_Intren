                <!-- ============== START TRENDING ========== -->
                <div class="max-w-[1300px] m-auto">
                    <div class="">
                        <div class="flex items-center gap-5 mt-10">
                            <h2 class="text-2xl font-semibold px-5 md:px-0">Trending</h2>
                            <div
                                class="rounded-full flex items-center space-x-2 border border-solid border-[#032541]"
                            >
                                <p
                                    class="bg-[#032541] py-1 px-3 rounded-full inline-flex items-center text-[#52c4a3] font-semibold"
                                >
                                    Today
                                </p>
                                <a
                                    href="#"
                                    class="pr-3 text-[#032541] font-medium hover:text-blue-500 transition duration-300"
                                >This week</a
                                >
                            </div>
                        </div>
                        <div
                            class="px-5 my-5 md:px-0 overflow-x-auto flex gap-5 max-w-[1300px] mx-auto px-10 py-10 bg-cover bg-center bg-no-repeat bg-[url('images/bg-movie.svg')]"
                        >
        
                            @foreach($trending as $trend)
                                <a
                                    href="{{ route('movie.movie.detail', $trend->movie_id) }}"
                                    class="min-w-[150px] group relative hover:shadow-lg transition-transform transform hover:translate-y-[-4px]"
                                    style=""
                                >
                                    <div class="product-item--img relative">
                                        <img
                                            src="{{ $trend->picture }}"
                                            alt=""
                                            class="rounded-lg"
                                        />
                                        <div
                                            class="percent absolute -bottom-4 left-[11px] flex justify-center items-center w-[38px] h-[38px] bg-black rounded-full group-hover:flex"
                                        >
                                            <span class="percent-title text-white text-sm font-semibold"
                                            >79<sup>%</sup></span>
                                            <div
                                                class="border-[3px] absolute inset-0 border-3 border-green-500 rounded-full"
                                            ></div>
                                        </div>
                                    </div>
                                    <div class="product-content mt-[26px]">
                                        <h4 class="product-title text-base font-semibold truncate">
                                            {{ $trend->name }}
                                        </h4>
                                        <span class="product-time text-sm text-gray-600"
                                        >{{ $trend->release_date }}
                                        </span>
                                    </div>
                                </a>
                            @endforeach

                        </div>
                    </div>
                </div>
                <!-- ============== END TRENDING ========== -->
        
        <!-- ==================================== START Latest Trailers ========================= -->
        <div
            class="movie-banner max-w-[1300px] md:p-10 p-5 m-auto relative from-opacity-70 via-opacity-50 to-opacity-0 bg-cover bg-center bg-[url(https://www.themoviedb.org/t/p/w1920_and_h427_multi_faces/gBDQXWpj004yodiUkzm3YhRFMQu.jpg)]">

            <div class="flex items-center gap-5 mb-6 text-white">
                <h2 class="text-2xl font-semibold z-[2]">Latest Trailers</h2>
                <div
                    class="z-[2] rounded-full flex items-center space-x-2 border border-solid border-[#2cd8ac]"
                >
                    <p
                        class="bg-gradient-to-r from-teal-500 to-blue-500 py-1 px-3 rounded-full inline-flex items-center text-black font-semibold"
                    >
                        Popular
                    </p>
                    <a
                        href="#"
                        class="pr-3 text-white bg-transparent hover:text-blue-500 transition duration-300 hidden md:block"
                    >
                        In Theaters
                    </a>
                </div>
            </div>
            <div class="flex items-center justify-between gap-5 overflow-x-auto">
                <div class="z-[2] movie-youtube max-w-xs text-center">
                    <iframe 
                        class="rounded-xl" 
                        width="300" 
                        height="250" 
                        src="https://www.youtube.com/embed/DhlaBO-SwVE" 
                        title="EXPEND4BLES (2023) Official Trailer - Jason Statham, 50 Cent, Megan Fox, Dolph Lundgren" 
                        frameborder="0" 
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                        allowfullscreen>
                    </iframe>
                    <p class="movie-youtube--title text-white text-lg font-medium mt-3">
                        Expend4bles
                    </p>
                    <p class="movie-youtube--des text-center text-white">
                        Official Trailer
                    </p>
                </div>
                <div class="z-[2] movie-youtube max-w-xs text-center">
                    <iframe 
                        class="rounded-xl"
                        width="300" 
                        height="250"
                        src="https://www.youtube.com/embed/jzQn0-WH4WM" 
                        title="Retribution (2023) Official Trailer – Liam Neeson" 
                        frameborder="0" 
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                        allowfullscreen>
                    </iframe>
                    <p class="movie-youtube--title text-white text-lg font-medium mt-3">
                        Retribution
                    </p>
                    <p class="movie-youtube--des text-center text-white">
                        Final Official Trailer
                    </p>
                </div>
                <div class="z-[2] movie-youtube max-w-xs text-center">
                    <iframe 
                        class="rounded-xl"
                        width="300" 
                        height="250"
                        src="https://www.youtube.com/embed/fSbNQ5-FZyA" 
                        title="NEW MOVIE TRAILERS 2023 | 4K ULTRA HD" 
                        frameborder="0" 
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                        allowfullscreen>
                    </iframe>
                    <p class="movie-youtube--title text-white text-lg font-medium mt-3">
                        Trailer 2023
                    </p>
                    <p class="movie-youtube--des text-center text-white">
                        Fox Official Trailer
                    </p>
                </div>
            </div>
            <div class="overlay absolute inset-0 bg-black opacity-50"></div>
        </div>

        <!-- ==================================== END Latest Trailers ========================= -->

        <!-- ==================================== START What's Popular ========================= -->
        <div class="max-w-[1300px] m-auto">
            <div class="">
                <div class="flex items-center gap-5 mt-10">
                    <h2 class="text-2xl font-semibold px-5 md:px-0">What's Popular</h2>
                    <div
                        class="rounded-full flex items-center space-x-2 border border-solid border-[#032541]"
                    >
                        <p
                            class="bg-[#032541] py-1 px-3 rounded-full inline-flex items-center text-[#52c4a3] font-semibold"
                        >
                            Today
                        </p>
                        <a
                            href="#"
                            class="pr-3 text-[#032541] font-medium hover:text-blue-500 transition duration-300"
                        >This week</a
                        >
                    </div>
                </div>
                <div
                    class="overflow-x-auto flex gap-5 max-w-[1300px] mx-auto px-5 py-5 my-5 md:px-10 md:py-10 bg-cover bg-center bg-no-repeat bg-[url('images/bg-movie.svg')]"
                >
                    @foreach($popular as $pop)
                    <a
                        href="{{ route('movie.movie.detail', $pop->movie_id) }}"
                        class="min-w-[150px] group relative hover:shadow-lg transition-transform transform hover:translate-y-[-4px]"
                    >
                        <div class="product-item--img relative">
                            <img
                                src="{{ $pop->picture }}"
                                alt=""
                                class="rounded-lg"
                            />
                            <div
                                class="percent absolute -bottom-4 left-[11px] flex justify-center items-center w-[38px] h-[38px] bg-black rounded-full group-hover:flex"
                            >
                                <span class="percent-title text-white text-sm font-semibold"
                                >79<sup>%</sup></span>
                                <div
                                    class="border-[3px] absolute inset-0 border-3 border-green-500 rounded-full"
                                ></div>
                            </div>
                        </div>
                        <div class="product-content mt-[26px]">
                            <h4 class="product-title text-base font-semibold truncate">
                                {{ $pop->name }}
                            </h4>
                            <span class="product-time text-sm text-gray-600"
                            >{{ $pop->release_date }}
                            </span>
                        </div>
                    </a>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- ==================================== END What's Popular ========================= -->

        <!-- ==================================== START Join Today ========================= -->

        <div
            class="max-w-[1300px] m-auto bg-cover bg-center bg-no-repeat"
            style="
            background-image: url('https://image.tmdb.org/t/p/w1920_and_h800_multi_faces_filter(duotone,190235,ad47dd)/lMnoYqPIAVL0YaLP5YjRy7iwaYv.jpg');
            ">

            <div class="md:py-8 md:px-10 p-5">
                <div class="grid md:grid-cols-2 md:gap-8 grid-cols-1 gap-5 items-end">
                    <div class="text-white">
                        <h2 class="text-3xl font-bold">Join Today</h2>
                        <p class="text-lg mt-5">
                            Get access to maintain your own <em>custom personal lists</em>,
                            <em>track what you've seen</em> and search and filter for
                            <em>what to watch next</em>—regardless if it's in theatres, on
                            TV or available on popular streaming services like .
                        </p>
                        <p class="signup-button mt-8">
                            <a
                                href="{{ route('movie.login') }}"
                                class="text-white text-base font-semibold py-2 px-4 rounded-md bg-[#805be7]"
                            >Sign Up</a
                            >
                        </p>
                    </div>
                    <div class="text-white">
                        <ul class="list-disc">
                            <li>Enjoy TMDb ad free</li>
                            <li>Maintain a personal watchlist</li>
                            <li>
                                Filter by your subscribed streaming services and find
                                something to watch
                            </li>
                            <li>Log the movies and TV shows you've seen</li>
                            <li>Build custom lists</li>
                            <li>Contribute to and improve our database</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- ==================================== END Join Today ========================= -->

        <!-- ==================================== START Leaderboard ========================= -->
        <div class="max-w-[1300px] m-auto mx-auto px-10 py-8">
            <div class="leaderboard-header flex items-center">
                <h2 class="text-[22px] font-semibold mr-6">LeaderBoard</h2>
                <div>
                    <p class="leaderboard-header--title">
                <span
                    class="bg-[#64e7b9] inline-block rounded-full w-2 h-2 mr-1"
                ></span>
                        All Time Edits
                    </p>
                    <p class="leaderboard-header--title">
                <span
                    class="bg-[#e56567] inline-block rounded-full w-2 h-2 mr-1"
                ></span>
                        Edits This Week
                    </p>
                </div>
            </div>
            <ul
                class="leaderboard-content mt-4 grid md:grid-cols-2 md:gap-4 grid-cols-1 gap-2"
            >
                <li class="leaderboard-content-item flex items-center gap-4">
                <span
                    class="leaderboard-content--avatar flex items-center justify-center w-14 h-14 rounded-full text-white bg-green-500 text-xl font-semibold"
                >
                R
                </span>
                    <div class="leaderboard-content--info flex-1">
                        <h4 class="text-lg font-semibold">RuiZafon</h4>
                        <div class="">
                            <div class="flex items-center gap-1">
                                <div
                                    class="flex-1 rounded-xl h-2 bg-gradient-to-r from-green-500 to-green-200"
                                ></div>
                                <span class="text-sm">1009773</span>
                            </div>
                            <div class="flex items-center gap-1">
                                <div
                                    class="flex-1 rounded-xl h-2 bg-gradient-to-r from-yellow-300 to-red-500"
                                ></div>
                                <span class="text-sm">9773</span>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="leaderboard-content-item flex items-center gap-4">
                <span
                    class="leaderboard-content--avatar flex items-center justify-center w-14 h-14 rounded-full text-white bg-green-500 text-xl font-semibold"
                >
                A
                </span>
                    <div class="leaderboard-content--info flex-1">
                        <h4 class="text-lg font-semibold">Alex Malister</h4>
                        <div class="">
                            <div class="flex items-center gap-1">
                                <div
                                    class="flex-1 rounded-xl h-2 bg-gradient-to-r from-green-500 to-green-200"
                                ></div>
                                <span class="text-sm">1009773</span>
                            </div>
                            <div class="flex items-center gap-1">
                                <div
                                    class="flex-1 rounded-xl h-2 bg-gradient-to-r from-yellow-300 to-red-500"
                                ></div>
                                <span class="text-sm">9773</span>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="leaderboard-content-item flex items-center gap-4">
                <span
                    class="leaderboard-content--avatar flex items-center justify-center w-14 h-14 rounded-full text-white bg-green-500 text-xl font-semibold"
                >
                H
                </span>
                    <div class="leaderboard-content--info flex-1">
                        <h4 class="text-lg font-semibold">Henry Calvin</h4>
                        <div class="">
                            <div class="flex items-center gap-1">
                                <div
                                    class="flex-1 rounded-xl h-2 bg-gradient-to-r from-green-500 to-green-200"
                                ></div>
                                <span class="text-sm">1009773</span>
                            </div>
                            <div class="flex items-center gap-1">
                                <div
                                    class="flex-1 rounded-xl h-2 bg-gradient-to-r from-yellow-300 to-red-500"
                                ></div>
                                <span class="text-sm">9773</span>
                            </div>
                        </div>
                    </div>
                </li>
                <!-- Repeat this structure for other leaderboard items -->
            </ul>
        </div>

        <!-- ==================================== END Leaderboard ========================= -->
