<div class="fixed z-[100] top-0 inset-x-0 bg-[#032541] text-[#fff]">
    <nav
        class="max-w-[1300px] ease-[ease-in] transition-all duration-[0.5s] mx-auto my-0 lg:block hidden"
    >
        <div class="flex items-center gap-4 font-semibold px-10 py-[18px]">
            <a href="{{ route('movie.index') }}" class="apply text-[2.1rem] pl-0 pr-[15px] py-0">
                <img src="custom/images/logo.svg" alt="logo" width="154" height="20" />
            </a>

            <div class="flex items-center justify-between w-full">
                <ul class="flex items-center gap-6">
                    <li class="nav-list-container--item group relative">
                        <a href="{{ route('movie.movie.list') }}">Movies</a>
                        <div
                            class="absolute w-[86px] z-10 hidden flex-col gap-2.5 px-[22px] py-[18px] rounded-xl -left-1.5 top-[18px] bg-transparent group-hover:flex"
                        ></div>
                        <div
                            class="absolute border border-[#ccc] shadow-md text-black w-[141px] z-10 hidden flex-col gap-2.5 items-start justify-center px-[22px] py-[18px] rounded-xl -left-1.5 top-[198%] bg-white group-hover:flex"
                        >
                            <a
                                class="text-black text-base font-normal mb-2"
                                href="{{ route('movie.movie.list') }}"
                            >Popular</a
                            >
                            <a
                                class="text-black text-base font-normal mb-2"
                                href="{{ route('movie.movie.list') }}"
                            >Now Playing</a
                            >
                            <a
                                class="text-black text-base font-normal mb-2"
                                href="{{ route('movie.movie.list') }}"
                            >Upcoming</a
                            >
                            <a
                                class="text-black text-base font-normal mb-2"
                                href="{{ route('movie.movie.list') }}"
                            >Top Rated</a
                            >
                        </div>
                    </li>

                    <li class="nav-list-container--item group relative">
                        <a href="{{ route('movie.movie.tvShow') }}">TV Shows</a>
                        <div
                            class="absolute w-[86px] z-10 hidden flex-col gap-2.5 px-[22px] py-[18px] rounded-xl -left-1.5 top-[18px] bg-transparent group-hover:flex"
                        ></div>
                        <div
                            class="absolute border border-[#ccc] shadow-md text-black w-[141px] z-10 hidden flex-col gap-2.5 items-start justify-center px-[22px] py-[18px] rounded-xl -left-1.5 top-[198%] bg-white group-hover:flex"
                        >
                            <a
                                class="text-black text-base font-normal mb-2"
                                href="{{ route('movie.movie.tvShow') }}"
                            >Popular</a
                            >
                            <a class="text-black text-base font-normal mb-2" href="{{ route('movie.movie.tvShow') }}"
                            >Airing Today</a
                            >
                            <a class="text-black text-base font-normal mb-2" href="{{ route('movie.movie.tvShow') }}"
                            >On TV</a
                            >
                            <a class="text-black text-base font-normal mb-2" href="{{ route('movie.movie.tvShow') }}"
                            >Top Rated</a
                            >
                        </div>
                    </li>

                    <li class="nav-list-container--item group relative">
                        <a href="{{ route('movie.actor') }}">People</a>
                        <div
                            class="absolute w-[86px] z-10 hidden flex-col gap-2.5 px-[22px] py-[18px] rounded-xl -left-1.5 top-[18px] bg-transparent group-hover:flex"
                        ></div>
                        <div
                            class="absolute border border-[#ccc] shadow-md text-black w-[141px] z-10 hidden flex-col gap-2.5 items-start justify-center px-[22px] py-[18px] rounded-xl -left-1.5 top-[198%] bg-white group-hover:flex"
                        >
                            <a
                                class="text-black text-base font-normal mb-2"
                                href="{{ route('movie.actor') }}"
                            >Popular</a
                            >
                        </div>
                    </li>

                    <li class="nav-list-container--item group relative">
                        <a href="{{ route('movie.movie.list') }}">More</a>
                        <div
                            class="absolute w-[86px] z-10 hidden flex-col gap-2.5 px-[22px] py-[18px] rounded-xl -left-1.5 top-[18px] bg-transparent group-hover:flex"
                        ></div>
                        <div
                            class="absolute border border-[#ccc] shadow-md text-black w-[141px] z-10 hidden flex-col gap-2.5 items-start justify-center px-[22px] py-[18px] rounded-xl -left-1.5 top-[198%] bg-white group-hover:flex"
                        >
                            <a
                                class="text-black text-base font-normal mb-2"
                                href="{{ route('movie.movie.list') }}"
                            >Popular</a
                            >
                            <a
                                class="text-black text-base font-normal mb-2"
                                href="{{ route('movie.movie.list') }}"
                            >Airing Today</a
                            >
                            <a
                                class="text-black text-base font-normal mb-2"
                                href="{{ route('movie.movie.list') }}"
                            >On TV</a
                            >
                            <a
                                class="text-black text-base font-normal mb-2"
                                href="{{ route('movie.movie.list') }}"
                            >Top Rated</a
                            >
                        </div>
                    </li>
                </ul>

                <ul class="flex items-center justify-between gap-[26px]">
                    <li>
                        <a href="{{ route('movie.index') }}">
                            <i class="w-5 block">
                                <img src="/resources/images/plus.svg" alt="" />
                            </i>
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('movie.index') }}">
                            <div
                                class="w-7 h-[26px] flex justify-center items-center content-center border text-[0.7rem] px-[5px] py-[3px] rounded-[3px] border-solid border-white"
                            >
                                EN
                            </div>
                        </a>
                    </li>

                    @if (auth() -> check())
                        <li class="nav-list-container--item group relative">
                            <a href="">Hi, {{ Auth::user()->name }}</a>
                            
                            <div
                                class="absolute w-[86px] z-10 hidden flex-col gap-2.5 px-[22px] py-[18px] rounded-xl -left-1.5 top-[18px] bg-transparent group-hover:flex"
                            ></div>

                            @if (Auth::id() == 1 || Auth::user()->email == 'admin@gmail.com')

                                <div
                                    class="absolute border border-[#ccc] shadow-md text-black w-[141px] z-10 hidden flex-col gap-2.5 items-start justify-center px-[22px] py-[18px] rounded-xl -left-1.5 top-[198%] bg-white group-hover:flex"
                                >
                                    <a
                                        class="text-black text-base font-normal mb-2"
                                        href="{{ route('movie.user.edit', Auth::id()) }}"
                                    >My Profile
                                    </a>
                                    <a
                                        class="text-black text-base font-normal mb-2"
                                        href="{{ route('movie.dashboard.index')}}"
                                    >Dashboard
                                    </a>
                                    <a
                                        class="text-black text-base font-normal mb-2"
                                        href="{{ route('movie.logout')}}"
                                    >Log out
                                    </a>
                                </div>
                            @else

                                <div
                                    class="absolute border border-[#ccc] shadow-md text-black w-[141px] z-10 hidden flex-col gap-2.5 items-start justify-center px-[22px] py-[18px] rounded-xl -left-1.5 top-[198%] bg-white group-hover:flex"
                                >
                                    <a
                                        class="text-black text-base font-normal mb-2"
                                        href="{{ route('movie.user.edit', Auth::id()) }}"
                                    >My Profile
                                    </a>
                                    <a
                                        class="text-black text-base font-normal mb-2"
                                        href="{{ route('movie.logout')}}"
                                    >Log out
                                    </a>
                                </div>
                            @endif
                            
                        </li>
                    @else
                        <li>
                            <a href="{{ route('movie.login')}}">Log in</a>
                        </li>
                        <li>
                            <a href="{{ route('movie.user.register')}}">Register</a>
                        </li>
                        <li>
                            <a href="/">Join TMDB</a>
                        </li>
                    @endif

                    <li>
                        <a href="/">
                            <i class="block w-[30px]">
                                <img src="./images/search.svg" alt="" />
                            </i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- ======= Mobile ==== -->
    <div
        class="bg-blue-900 lg:hidden text-white flex items-center px-5 py-[10px] justify-between"
    >
    <span class="mobile-header--icon menu">
        <svg
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 24 24"
            fill="currentColor"
            class="w-6 h-6"
        >
        <path
            fill-rule="evenodd"
            d="M3 5.25a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 5.25zm0 4.5A.75.75 0 013.75 9h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 9.75zm0 4.5a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75a.75.75 0 01-.75-.75zm0 4.5a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75a.75.75 0 01-.75-.75z"
            clip-rule="evenodd"
        />
        </svg>
    </span>
        <a href="" class="mobile-header--logo">
            <img src="./images/logoFooter.svg" alt="" class="w-14" />
        </a>
        <div class="mobile-header--right flex gap-2 items-center">
        <span class="mobile-header--icon user">
        <svg
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 24 24"
            fill="currentColor"
            class="w-6 h-6"
        >
            <path
                fill-rule="evenodd"
                d="M7.5 6a4.5 4.5 0 119 0 4.5 4.5 0 01-9 0zM3.751 20.105a8.25 8.25 0 0116.498 0 .75.75 0 01-.437.695A18.683 18.683 0 0112 22.5c-2.786 0-5.433-.608-7.812-1.7a.75.75 0 01-.437-.695z"
                clip-rule="evenodd"
            />
        </svg>
        </span>
            <img
                src="./images/search.svg"
                alt=""
                class="mobile-header--icon search w-6 h-6"
            />
        </div>
    </div>
</div>