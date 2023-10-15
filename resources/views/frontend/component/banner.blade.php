<header
            class="banner relative max-w-screen-xl mx-auto text-white lg:mt-16 mt-[60px] bg-cover bg-center bg-no-repeat"
            style="
            background-image: url('https://www.themoviedb.org/t/p/w1920_and_h600_multi_faces_filter(duotone,00192f,00baff)/qUOJGvH8L31HL2b9Q6DGNPGCCI0.jpg');
            ">
            <div class="banner-contents md:px-10 md:py-16 p-5 h-72">
                <h2 class="text-[48px] font-semibold">Welcome.</h2>
                <h3
                    class="banner-description md:text-[32px] text-2xl font-semibold md:mt-4 mt-0"
                >
                    Millions of movies, TV shows and people to discover. Explore now.
                </h3>

                <form class="relative mt-6" action="/search" method="get">
                    <input
                        class="w-full h-[46px] text-base text-[rgba(0,0,0,0.5)] bg-white px-5 rounded-[30px] border-[none]"
                        dir="auto"
                        name="query"
                        type="text"
                        tabindex="1"
                        autoCorrect="off"
                        autofill="off"
                        autocomplete="off"
                        spellcheck="false"
                        placeholder="Search..."
                    />

                    <input
                        class="absolute right-0 h-[46px] font-semibold text-white bg-gradient-to-r from-teal-500 to-blue-500 w-32 ml-2 border-none rounded-full"
                        type="submit"
                        value="Search"
                    />
                </form>
            </div>
        </header>