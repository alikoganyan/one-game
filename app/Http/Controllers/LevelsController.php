<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Level;
use DB;
use Illuminate\Support\Facades\Validator;
class LevelsController extends Controller
{
    /* public function getLevels()
     {
         $levels = Level::all();

         $levels = [
             'levels' => $levels
         ];
         return response()->json($levels, 200);
     }*/

    public function index()
    {
        return Level::all();
    }

    public function show(Level $level)
    {
        return $level;
    }

    public function store(Request $request)
    {
        $level = Level::create($request->all());

        return response()->json($level, 201);
    }

    public function update(Request $request, Level $level)
    {
        $level->update($request->all());

        return response()->json($level, 200);
    }

    public function delete(Level $level)
    {
        $level->delete();

        return response()->json(null, 204);
    }
}
