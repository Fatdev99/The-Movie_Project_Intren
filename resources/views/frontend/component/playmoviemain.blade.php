<div
        class="movie-detail relative bg-cover bg-no-repeat bg-center h-[510px] items-center lg:flex hidden"
        style="
          background-image: url('https://www.themoviedb.org/t/p/w1920_and_h800_multi_faces/iiXliCeykkzmJ0Eg9RYJ7F2CWSz.jpg');
        ">
        <div class="absolute top-0 bottom-0 left-0 right-0 bg-[linear-gradient(_to_right,rgb(67,67,67)_150px,rgba(31.5,31.5,31.5,0.54)_100%_)] z-[1] inset-0;
        "></div>
        <div class="movie-header z-10 relative z-2 max-w-[1400px] mx-auto grid grid-cols-[300px,1fr] gap-10 items-center px-10">

            <video controls>
                <source src="{{ $movies->source }}" type="video/mp4">
                Your browser does not support HTML video.
            </video>

        </div>
      </div>