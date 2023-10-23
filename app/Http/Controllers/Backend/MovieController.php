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

        return view('frontend.layout.detail', compact('movies', 'm_actors'));
    }

    public function play_movie($m_id){
        $movies = Movies::findOrFail($m_id);
        //dd($movies);

        if (isset(Auth::user()->user_id)) {

            $check = DB::table('watched_movie')
            ->select('watched_movie.movie_id', 'watched_movie.user_id')
            ->where([['watched_movie.movie_id', '=', $m_id], ['watched_movie.user_id', '=', Auth::user()->user_id]])
            ->get();
            //dd($check);

            // Ở đây em nên dùng hàm nào để kiểm tra $check có giá trị trả về không ạ??
            if ($check = []) {
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
        return view('backend.dashboard.movieadd');
    }

    public function store(MovieRequest $request){

        $movie = Movies::create($request->validated());

        if ($movie){
            return redirect()->route('movie.dashboard.movie')->with('success', "Tạo phim mới thành công");
        }

        return redirect()->route('movie.movie.add')->with('error', "Tạo phim mới không thành công");
    }

    public function admin_search(Request $request){
        $adsearch = Movies::whereName($request->input('searchname'))->get();
        //dd($adsearch);

        return view('backend.dashboard.movieindex', compact('adsearch'));

    }

    public function searchMovie(Request $request){

        $mvsearch = Movies::where([['name','LIKE','%'.$request->input('searchname').'%'],
            ['category', '=', 'movie']
            ])->get();

        // if ($request->input('searchname') != '') {

        //     if ($request->input('searchfrom') != '' && $request->input('searchto') != '') {

        //         $mvsearch = Movies::where([
        //                 ['name', 'like', '%' . $request->input('searchname') . '%'],
        //                 ['category', '=', 'movie'],
        //                 ['releaseyear','>=', $request->input('searchfrom')],
        //                 ['releaseyear','<=', $request->input('searchto')],
        //             ])->get();
        //         //dd($mvsearch);
        //     }
        //     elseif ($request->input('searchfrom') != '' && $request->input('searchto') == '') {

        //         $mvsearch = Movies::where([
        //                 ['name','like', '%' . $request->input('searchname') . '%'],
        //                 ['category','=', 'movie'],
        //                 ['releaseyear','>=', $request->input('searchfrom')],
        //             ])->get();
        //     }
        //     elseif ($request->input('searchfrom') == '' && $request->input('searchto') != '') {

        //         $mvsearch = Movies::where([
        //                 ['name','like', '%' . $request->input('searchname') . '%'],
        //                 ['category','=', 'movie'],
        //                 ['releaseyear','<=', $request->input('searchto')],
        //             ])->get();
        //     }
        //     else{
        //         $mvsearch = Movies::where([
        //                 ['name','like', '%' . $request->input('searchname')],
        //                 ['category','=','movie']
        //             ])->get();
        //     }

        // }
        // else{
            
        //     if ($request->input('searchfrom') != '' && $request->input('searchto') != '') {

        //         $mvsearch = Movies::where([
        //                 ['category', '=', 'movie'],
        //                 ['releaseyear','>=', $request->input('searchfrom')],
        //                 ['releaseyear','<=', $request->input('searchto')],
        //             ])->get();
        //         dd($mvsearch);
        //     }
        //     elseif ($request->input('searchfrom') != '' && $request->input('searchto') == '') {

        //         $mvsearch = Movies::where([
        //                 ['category','=', 'movie'],
        //                 ['releaseyear','>=', $request->input('searchfrom')],
        //             ])->get();
        //     }
        //     elseif ($request->input('searchfrom') == '' && $request->input('searchto') != '') {

        //         $mvsearch = Movies::where([
        //                 ['category','=', 'movie'],
        //                 ['releaseyear','<=', $request->input('searchto')],
        //             ])->get();
        //     }

        // }


        return view('frontend.layout.list', compact('mvsearch'));
        
    }

    public function searchTVshow(Request $request){

        $tvsearch = Movies::where([['name', 'like', '%' . $request->input('searchname') . '%'], ['category', '=', 'tvShow']])->get();
        //dd($tvsearch);

        return view('frontend.layout.list', compact('tvsearch'));
    
    }

    public function searchIndex(Request $request)
    {
        $movie = Movies::where('name', 'like', '%'. $request->input('query') . '%')->get();
        //dd($movie);
     
        return view('frontend.layout.searchlist', compact('movie'));
    }
}