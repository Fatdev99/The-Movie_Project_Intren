<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Actor;
use App\Http\Requests\MovieRequest;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

class ActorController extends Controller
{
    public function __construct(){

    }

    public function Index(){

        $actors = DB::table('movie_actor')
            ->join('movies', 'movie_actor.movie_id', '=', 'movies.movie_id')
            ->join('actors', 'movie_actor.actor_id', '=', 'actors.actor_id')
            ->select('actors.*')
            ->take(8)->get();
        //dd($actors);

        return view('frontend.layout.actor', compact('actors'));
    }

    public function detail($a_id){
        $actors = Actor::findOrFail($a_id);

        $a_movies = DB::table('movie_actor')
            ->join('movies', 'movie_actor.movie_id', '=', 'movies.movie_id')
            ->join('actors', 'movie_actor.actor_id', '=', 'actors.actor_id')
            ->select('movies.movie_id', 'movies.name')
            ->where('movie_actor.actor_id', '=', $a_id)
            ->get();

        return view('frontend.layout.actordetail', compact('actors', 'a_movies'));
    }

    public function admin_search(Request $request){
        $adsearch = Actor::whereName($request->input('searchname'))->get();
        //dd($adsearch);

        return view('backend.dashboard.movieindex', compact('adsearch'));

    }
}