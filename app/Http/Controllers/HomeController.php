<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Player;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $best_players = Player::orderBy('score', 'desc')->take(5)->get();
        return view('welcome', compact('best_players'));
    }
    public function store(Request $request){
        $user = Player::create([
            'name' => $request['name'],
            'score' => 0
        ]);
        return response()->json($user);
    }

}
