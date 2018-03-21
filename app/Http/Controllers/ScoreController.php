<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ScoreController extends Controller
{
    public function Show(Request $request, $id) {
    	/*$username = $request->input('username');
    	
    	// $score = new ProductResource(Score::find($id));
    	$score = ['test' => 'testing api'];
    	return response()->json($score);*/
    }

    
    public function GetScore() {
    	/*$score = Score::all();

        $score = [
            'score' => $score
        ];
        return response()->json($score, 200);*/
    }
    public function test(){

    }
}
