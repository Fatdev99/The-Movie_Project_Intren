<div class="max-w-7xl mx-auto md:mt-[66px] mt-[61px] md:px-20 p-4">
    <h2 class="text-2xl font-semibold mb-4">Popular Movies</h2>

    @isset($actors)
      <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-10">
          @foreach($actors as $actor)
            <a href="{{ route('movie.actor.detail', $actor->actor_id ) }}" class="bg-white rounded-md shadow-md overflow-hidden">
              <img
                src="{{ $actor->actor_avatar }}"
                class="w-full"
                alt="Performer Image"
              />
              <div class="p-2">
                <h2 class="text-lg font-semibold mb-1">{{ $actor->actor_name }}</h2>

                <span class="text-sm text-gray-500 block truncate">
                  
                </span>

              </div>
            </a>
          @endforeach
        </div>
    @endisset

    <div class="flex items-center justify-center mt-10 gap-3">
      
    </div>
</div>