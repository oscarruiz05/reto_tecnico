<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Category;
use App\Models\Player;
use Illuminate\Http\Request;

class QuestionsController extends Controller
{
    public function index(Request $request){
        return view('play');
    }

    public function startGame(Request $request){
        $categoria = Category::with('questions.answers')->where('id', $request['ronda'])->first();
        if($categoria){
            return response()->json($categoria);
        }else if($request['ronda'] == 6){
            return response()->json('ganaste');
        }
    }

    public function validarRespuestas(Request $request){
        $respuesta = Answer::find($request['id']);
        if($respuesta->status == 1){
            return response()->json([
                'estado' => true,
            ]);
        }else{
            return response()->json([
                'estado' => false,
            ]);
        }
    }

    public function ganador(Request $request){
        $user = Player::find($request['user']['id']);
        $user->update([
            'score' => $request['puntaje']
        ]);
    }
}
