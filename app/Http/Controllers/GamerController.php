<?php

namespace App\Http\Controllers;

use App\Models\Gamers;
use Illuminate\Http\Request;

class GamerController extends Controller
{
    public function index(Request $request)
    {
        return response()->json(["method" => "index"], 200);
    }

    public function show($social_id)
    {
        $gamerData = Gamers::getBySocialId($social_id);
        return response()->json(["method" => "index", "data" => ["gamer" => $gamerData]], 200);
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $gamer = New Gamers($data);
        $gamer->setAttribute('life', 5);
        if (!$gamer->save()) {
            return response()->json(["data" => $data, "status" => "error"], 400);
        }
        return response()->json(["status" => "success", "data" => $data], 200);
    }

    public function update($social_id, Request $request)
    {
        $data = $request->all();
        $gamer = Gamers::getBySocialId($social_id);
        if (!$gamer) {
            return response()->json(["status" => "error", "message" => "The gamer have not been found!"], 400);
        }
        $gamer->fill($data);
        if (!$gamer->save()) {
            return response()->json(["status" => "error", "message" => "Can not save into db:table!"], 400);
        }
        return response()->json(["method" => "update", "gamer" => $gamer], 200);
    }

    public function destroy($social_id)
    {
        $gamer = Gamers::getBySocialId($social_id);
        if ($gamer && $gamer->delete()) {
            return response()->json(["status" => "success", "message" => "The Gamer have been removed!"], 200);
        }
        return response()->json(["status" => "error", "message" => "The gamer have not found or any problem!"], 400);
    }
}
