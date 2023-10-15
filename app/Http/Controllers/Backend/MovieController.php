<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movies;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\RegisterRequest;
use Illuminate\Support\Facades\Route;

class MovieController extends Controller
{
    public function __construct(){

    }

    public function Index_admin(){
        $movies = Movies::paginate(10);

        return view('backend.dashboard.movieindex', compact('movies'));
    }

    public function Index(){
        $trending = Movies::all()->random(10);
        //dd($trending);

        $popular = Movies::all()->random(10);
        //dd($popular);

        return view('frontend.layout.index', compact('trending', 'popular'));
    }

    public function list(){
        $mvlist = Movies::whereCategory('movie')->get();
        //dd($mvlist);

        $tvlist = Movies::whereCategory('tvShow')->get();
        //dd($mvlist);

        if(Route::currentRouteName() == 'movie.movie.list'){

            return view('frontend.layout.list', compact('mvlist'));
        }

        return view('frontend.layout.list', compact('tvlist'));
    }

    public function detail($m_id){
        $movies = Movies::findOrFail($m_id);

        return view('frontend.layout.detail', compact('movies'));
    }

    public function play($m_id){
        $movies = Movies::findOrFail($m_id);

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
     * Update user.
     *
     */
    public function update(Request $request,string $m_id){
        $movies = Movies::findOrFail($m_id);

        $movies->name = $request->input('name');
        $movies->release_date = $request->input('release_date');
        $movies->runtime = $request->input('runtime');
        $movies->description = $request->input('description');
        $movies->category = $request->input('category');
        $movies->picture = $request->input('picture');
        $movies->source = $request->input('source');

        $movies->update();
        
        return redirect()->back()->with('success', 'Cập nhật thông tin phim thành công');
    }

    public function add(){
        return view('backend.dashboard.movieadd');
    }

    public function store(Request $request){

        $movie = Movies::create($request->validated());

        if ($movie){
            return redirect()->route('movie.dashboard.movie')->with('success', "Đăng kí tài khoản thành công");
        }

        return redirect()->route('movie.movie.add')->with('error', "Đăng kí tài khoản không thành công");
    }
}