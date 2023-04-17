<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\game;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Arr;

class GameController extends Controller
{
    public function index(){
        $games = game::orderBy('updated_at', 'desc')->get();
        return view('index', ['games' => $games]);
    }

    public function game($slug){
        $game = game::where('slug', $slug)->get()->first();
        return view('game', ['game' => $game]);
    }

    public function manage(){
        $games = game::all();
        return view('games.manage', ['games' => $games]);
    }

    public function remove($slug){
        $id = Auth::id();
        $game = game::where('slug', $slug)->where('uploader', $id)->get()->first();
        if(empty($game)){
            return back()->with('error', 'You do not own the game');
        }else{
            $game->delete();
            return back()->with('success','Game removed successfully!');
        }
    }

    public function create(){
        return view('games.create');
    }

    public function store(Request $request){
        $validate = $request->validate([
            'name' => 'required',
            'version' => 'required',
            'slug' => 'required|unique:games',
            'description' => 'required',
            'featured_image' => 'required',
            'article' => 'required',
            'release_date' => 'required',
            'extra_title' => 'required',
        ]);

        $validate = Arr::add($validate, 'uploader', Auth::id());

        $game = game::create($validate);
        
        return back()->with('success', 'Game Created successfully');

    }

    public function search(Request $request){
        $query = $request->search;
        $games = game::search($query)->get();
        return view('search', ['games' => $games, 'query' => $query]);  
    }
}
