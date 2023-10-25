<div class="wrapper wrapper-content animated fadeInRight ecommerce">

    <div class="row">
        <div class="col-lg-12">
            <div class="ibox">
                <div class="ibox-title text-right">
                    <div class="ibox-content row">
                        <div class="col-md-8">
                            <a href="{{ route('movie.movie.add') }}">
                                <button class="btn btn-success "><i class="fa fa-plus"></i>&nbsp;&nbsp;<span class="bold">Add new movie</span></button>
                            </a>
                        </div>
                        <form method="GET" role="form" class="form-inline col-md-3" action="{{ route('movie.movie.ad-search') }}">
                            <div class="form-group">
                                <input type="text" placeholder="Enter the movie" name="searchname" class="form-control">
                            </div>
                            <a href="">
                                <button class="btn btn-primary" type="submit"><i class="fa fa-search"></i></button>
                            </a>
                        </form>
                        <a href="{{ route('movie.dashboard.movie') }}" class="col-md-1">
                            <button class="btn btn-warning"><i class="fa fa-undo"></i></button>
                        </a>
                    </div>
                </div>
                <div class="ibox-content">

                    <table class="footable table table-stripped toggle-arrow-tiny">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Picture</th>
                            <th>Name</th>
                            <th data-hide="all">Description</th>
                            <th data-hide="all">Source</th>
                            <th>Release Year</th>
                            <th>Duration</th>
                            <th>Categogy</th>
                            {{-- <th>Genre</th> --}}
                            <th class="text-right">Action</th>
                        </tr>
                        </thead>

                        <tbody>
                            @if (isset($adsearch))
                                @foreach ($adsearch as $movie)
                                    <tr>
                                        <td>{{ $movie->movie_id }}</td>
                                        <td><img src="{{ $movie->picture }}" alt="{{ $movie->name }}" width="80px" height="100px"></td>
                                        <td>{{ $movie->name }}</td>
                                        <td>{{ $movie->description }}</td>
                                        <td>{{ $movie->source }}</td>
                                        <td>{{ $movie->releaseyear }}</td>
                                        <td>{{ $movie->duration }}</td>
                                        <td>{{ $movie->category }}</td>
                                        {{-- <td>
                                            @isset($m_genre)
                                                @foreach($m_genre as $m_gen)
                                                    {{ $m_gen->genre_name }}
                                                @endforeach
                                            @endisset
                                        </td> --}}
                                        <td class="text-right">
                                            <a href="{{ route('movie.movie.edit', ['id' => $movie->movie_id ])}}" class="btn btn-success"><i class="fa fa-edit"></i></a>
                                            <a onclick="return confirm('Bạn có chắc chắn muốn xoá?')"  href="{{ route('movie.movie.delete', ['id' => $movie->movie_id ])}}" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            @else  
                                @foreach ($movies as $movie)
                                    <tr>
                                        <td>{{ $movie->movie_id }}</td>
                                        <td><img src="{{ $movie->picture }}" alt="{{ $movie->name }}" width="80px" height="100px"></td>
                                        <td>{{ $movie->name }}</td>
                                        <td>{{ $movie->description }}</td>
                                        <td>{{ $movie->source }}</td>
                                        <td>{{ $movie->releaseyear }}</td>
                                        <td>{{ $movie->duration }}</td>
                                        <td>{{ $movie->category }}</td>
                                        {{-- <td>
                                            @isset($m_genre)
                                                @foreach($m_genre as $m_gen)
                                                    {{ $m_gen->genre_name }}
                                                @endforeach
                                            @endisset
                                        </td> --}}
                                        <td class="text-right">
                                            <a href="{{ route('movie.movie.edit', ['id' => $movie->movie_id ])}}" class="btn btn-success"><i class="fa fa-edit"></i></a>
                                            <a onclick="return confirm('Bạn có chắc chắn muốn xoá?')"  href="{{ route('movie.movie.delete', ['id' => $movie->movie_id ])}}" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                {{ $movies->links() }}
                            @endif
                        </tbody>
                    </table>

                    {{-- {{ $movies->links('pagination::bootstrap-5') }} --}}
                </div>
            </div>
        </div>
    </div>

</div>