<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movies;
use App\Http\Requests\MovieRequest;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class MovieController extends Controller
{
    public function __construct(){

    }

    public function Index_admin(){
        $movies = Movies::paginate(10);
        //dd($movies);

        // $m_genre = DB::table("movie_genre")
        //     ->join("genre","movie_genre.genre_id","=","genre.genre_id")
        //     ->where("movie_id", $movies->movie_id)
        //     ->select("genre.genre_name")
        //     ->get();

        return view('backend.dashboard.movieindex', compact('movies'));
    }

    public function Index(){
        $trending = Movies::all()->random(10);
        //dd($trending);

        $popular = Movies::all()->random(10);
        //dd($popular);

        return view('frontend.layout.index', compact('trending', 'popular'));
    }

    public function Index_History(){

        $movies = DB::table('watched_movie')
            ->join('movies', 'watched_movie.movie_id', '=', 'movies.movie_id')
            ->join('users', 'watched_movie.user_id', '=', 'users.user_id')
            ->select('movies.*')
            ->where('watched_movie.user_id', '=', Auth::user()->user_id)
            ->get();

        return view('frontend.layout.history', compact('movies'));
    }

    public function Index_Favorite(){

        $movies = DB::table('favorite_movie')
            ->join('movies', 'favorite_movie.movie_id', '=', 'movies.movie_id')
            ->join('users', 'favorite_movie.user_id', '=', 'users.user_id')
            ->select('movies.*')
            ->where('favorite_movie.user_id', '=', Auth::user()->user_id)
            ->get();

        return view('frontend.layout.favorite', compact('movies'));
    }

    public function list(){
        $mvlist = Movies::whereCategory('movie')->get();
        //dd($mvlist);

        $tvlist = Movies::whereCategory('tvShow')->get();
        //dd($tvlist);

        if(Route::currentRouteName() == 'movie.movie.list'){

            return view('frontend.layout.list', compact('mvlist'));
        }
        else
            return view('frontend.layout.list', compact('tvlist'));

    }

    public function detail($m_id){
        $movies = Movies::findOrFail($m_id);

        $m_actors = DB::table('movie_actor')
            ->join('movies', 'movie_actor.movie_id', '=', 'movies.movie_id')
            ->join('actors', 'movie_actor.actor_id', '=', 'actors.actor_id')
            ->select('actors.actor_name')
            ->where('movie_actor.movie_id', '=', $m_id)
            ->get();

        $m_genre = DB::table('movie_genre')
            ->join('movies', 'movie_genre.movie_id', '=', 'movies.movie_id')
            ->join('genre', 'movie_genre.genre_id', '=', 'genre.genre_id')
            ->select('genre.genre_name')
            ->where('movie_genre.movie_id', '=', $m_id)
            ->get();

        //$m_favorite = DB::table('favorite')


        return view('frontend.layout.detail', compact('movies', 'm_actors', 'm_genre'));
    }

    public function play_movie($m_id){
        $movies = Movies::findOrFail($m_id);
        //dd($movies);

        if (isset(Auth::user()->user_id)) {

            $check = DB::table('watched_movie')
            ->select('watched_movie.movie_id', 'watched_movie.user_id')
            ->where([['watched_movie.movie_id', '=', $m_id], ['watched_movie.user_id', '=', Auth::user()->user_id]])
            ->exists();
            //dd($check);

            if (!$check) {
                $add = DB::table('watched_movie')->insert(
                    ['user_id' => Auth::user()->user_id, 'movie_id' => $m_id]
                );
            }
        }

        return view('frontend.layout.playmovie', compact('movies'));
    }

    public function delete($m_id){
        // Tìm đến đối tượng muốn xóa
        $movies = Movies::findOrFail($m_id);

        if ($movies->delete() === false) {

            return redirect()->with('error', 'Xoá phim không thành công');
        }

        return redirect()->route('movie.dashboard.movie')->with('success', 'Xoá phim thành công');
    }

    public function edit($m_id){
        $movies = Movies::findOrFail($m_id);

        return view('backend.dashboard.movieupdate', compact('movies'));
    }


    /**
     * Update movie.
     *
     */
    public function update(MovieRequest $request, $m_id){
        $movies = Movies::findOrFail($m_id);

        $movies->name = $request->input('name');
        $movies->releaseyear = $request->input('releaseyear');
        $movies->duration = $request->input('duration');
        $movies->description = $request->input('description');
        $movies->category = $request->input('category');
        $movies->picture = $request->input('picture');
        $movies->source = $request->input('source');

        $movies->update();
        
        return redirect()->route('movie.dashboard.movie')->with('success', 'Cập nhật thông tin phim thành công');
    }

    public function add(){
        $genre = DB::table('genre')->select('genre_id', 'genre_name')->get();

        return view('backend.dashboard.movieadd', compact('genre'));
    }

    public function store(MovieRequest $request){

        $movie = new Movies;

        $movie->name = $request->input('name');
        $movie->releaseyear = $request->input('releaseyear');
        $movie->duration = $request->input('duration');
        $movie->description = $request->input('description');
        $movie->category = $request->input('category');
        $movie->picture = $request->input('picture');
        $movie->source = $request->input('source');

        $movie->save();

        $movie_id = Movies::whereName($request->input('name'))->first('movie_id');

        DB::table('movie_genre')->insert([
            ['movie_id' => $movie_id->movie_id, 'genre_id' => $request->get('genre1')],
            ['movie_id' => $movie_id->movie_id, 'genre_id' => $request->get('genre2')],
            ['movie_id' => $movie_id->movie_id, 'genre_id' => $request->get('genre3')]
        ]);

        if ($movie){
            return redirect()->route('movie.dashboard.movie')->with('success', "Tạo phim mới thành công");
        }

        return redirect()->route('movie.movie.add')->with('error', "Tạo phim mới không thành công");
    }

    public function admin_search(Request $request){
        $adsearch = Movies::where([['name','LIKE','%'.$request->input('searchname').'%']])->get();
        //dd($adsearch);

        return view('backend.dashboard.movieindex', compact('adsearch'));

    }

    public function searchMovie(Request $request){

        // $mvsearch = Movies::where([['name','LIKE','%'.$request->input('searchname').'%'],
        //     ['category', '=', 'movie']
        //     ])->get();

        if ($request->input('searchname') != '') {

            if ($request->input('searchfrom') != '' && $request->input('searchto') != '') {

                $mvsearch = Movies::where([
                        ['name', 'like', '%' . $request->input('searchname') . '%'],
                        ['category', '=', 'movie'],
                        ['releaseyear','>=', $request->input('searchfrom')],
                        ['releaseyear','<=', $request->input('searchto')],
                    ])->get();
                //dd($mvsearch);
            }
            elseif ($request->input('searchfrom') != '' && $request->input('searchto') == '') {

                $mvsearch = Movies::where([
                        ['name','like', '%' . $request->input('searchname') . '%'],
                        ['category','=', 'movie'],
                        ['releaseyear','>=', $request->input('searchfrom')],
                    ])->get();
            }
            elseif ($request->input('searchfrom') == '' && $request->input('searchto') != '') {

                $mvsearch = Movies::where([
                        ['name','like', '%' . $request->input('searchname') . '%'],
                        ['category','=', 'movie'],
                        ['releaseyear','<=', $request->input('searchto')],
                    ])->get();
            }
            else{
                $mvsearch = Movies::where([
                        ['name','like', '%' . $request->input('searchname')],
                        ['category','=','movie']
                    ])->get();
            }

        }
        else{
            
            if ($request->input('searchfrom') != '' && $request->input('searchto') != '') {

                $mvsearch = Movies::where([
                        ['category', '=', 'movie'],
                        ['releaseyear','>=', $request->input('searchfrom')],
                        ['releaseyear','<=', $request->input('searchto')],
                    ])->get();
                //dd($mvsearch);
            }
            elseif ($request->input('searchfrom') != '' && $request->input('searchto') == '') {

                $mvsearch = Movies::where([
                        ['category','=', 'movie'],
                        ['releaseyear','>=', $request->input('searchfrom')],
                    ])->get();
            }
            elseif ($request->input('searchfrom') == '' && $request->input('searchto') != '') {

                $mvsearch = Movies::where([
                        ['category','=', 'movie'],
                        ['releaseyear','<=', $request->input('searchto')],
                    ])->get();
            }

        }


        return view('frontend.layout.list', compact('mvsearch'));
        
    }

    public function searchTVshow(Request $request){

        if ($request->input('searchname') != '') {

            if ($request->input('searchfrom') != '' && $request->input('searchto') != '') {

                $tvsearch = Movies::where([
                        ['name', 'like', '%' . $request->input('searchname') . '%'],
                        ['category', '=', 'tvShow'],
                        ['releaseyear','>=', $request->input('searchfrom')],
                        ['releaseyear','<=', $request->input('searchto')],
                    ])->get();
                //dd($mvsearch);
            }
            elseif ($request->input('searchfrom') != '' && $request->input('searchto') == '') {

                $tvsearch = Movies::where([
                        ['name','like', '%' . $request->input('searchname') . '%'],
                        ['category','=', 'tvShow'],
                        ['releaseyear','>=', $request->input('searchfrom')],
                    ])->get();
            }
            elseif ($request->input('searchfrom') == '' && $request->input('searchto') != '') {

                $tvsearch = Movies::where([
                        ['name','like', '%' . $request->input('searchname') . '%'],
                        ['category','=', 'tvShow'],
                        ['releaseyear','<=', $request->input('searchto')],
                    ])->get();
            }
            else{
                $tvsearch = Movies::where([
                        ['name','like', '%' . $request->input('searchname')],
                        ['category','=','tvShow']
                    ])->get();
            }

        }
        else{
            
            if ($request->input('searchfrom') != '' && $request->input('searchto') != '') {

                $tvsearch = Movies::where([
                        ['category', '=', 'tvShow'],
                        ['releaseyear','>=', $request->input('searchfrom')],
                        ['releaseyear','<=', $request->input('searchto')],
                    ])->get();
                //dd($mvsearch);
            }
            elseif ($request->input('searchfrom') != '' && $request->input('searchto') == '') {

                $tvsearch = Movies::where([
                        ['category','=', 'tvShow'],
                        ['releaseyear','>=', $request->input('searchfrom')],
                    ])->get();
            }
            elseif ($request->input('searchfrom') == '' && $request->input('searchto') != '') {

                $tvsearch = Movies::where([
                        ['category','=', 'tvShow'],
                        ['releaseyear','<=', $request->input('searchto')],
                    ])->get();
            }

        }

        return view('frontend.layout.list', compact('tvsearch'));
    
    }

    public function genres(){

        $genres = DB::table('genre')->select('genre.*')->get();
        dd($genres);

        return view('frontend.layout.list', compact('genres'));
    }

    public function searchIndex(Request $request)
    {
        $movie = Movies::where('name', 'like', '%'. $request->input('query') . '%')->get();
        //dd($movie);
     
        return view('frontend.layout.searchlist', compact('movie'));
    }

    public function favoriteMovie($m_id){

        if (isset(Auth::user()->user_id)) {

            $check = DB::table('favorite_movie')
            ->select('favorite_movie.movie_id', 'favorite_movie.user_id')
            ->where([['favorite_movie.movie_id', '=', $m_id], ['favorite_movie.user_id', '=', Auth::user()->user_id]])
            ->exists();
            //dd($check);
            
            if (!$check) {
                $add = DB::table('favorite_movie')->insert([
                    ['movie_id' => $m_id, 'user_id' => Auth::user()->user_id]
                    ]);
                
                return redirect()->back()->with('success', "Đã thêm phim vào danh sách yêu thích");
            }
            else{
                
                return redirect()->back()->with('warning', "Phim đã có trong danh sách yêu thích");
            }
        }
        else {

            return redirect()->back()->with('error', "Vui lòng đăng nhập để sử dụng tính năng này");
        }
    }
}