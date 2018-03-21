<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use view;
use App\Level;
use App\gamer;
use App\variant;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index() {
    	return view("admin.index");

    }
    public function levels(){

        $levels = Level::all();
        return view("admin.levels")->with('levels',$levels);
     }
     public function adminreturn() {
        return view("admin.levels");
     }

    public function deleteadminlevels($id) {
        $levels = level::find($id);
        if(!$levels){
            return redirect('/admin.levels');
        }
       /* unlink(public_path('images/bernatar/' . $bernatar->img));*/
        $levels->delete();
        return redirect("/admin.levels");

    }

    public function admingamers() {
        $gamers = gamer::all();
        $level = Level::all();
        return view("admin.gamers")
            ->with('levels',$level)
            ->with('gamers',$gamers);
        /*return view("admin.gamers");*/
    }

    public function adminvariants() {

        $variants = variant::all();
        return view("admin.variants")
            ->with('variants',$variants);
        /*$variants = variant::all();
        return view("admin.variants")->with('variants',$variants);*/

    }

    /*public function useradm() {
        $levels = Level::all();
        return view("admin.levels")->with('levels',$levels);
    }*/
    /*delete*/

    public function admindeletegamers($id) {
        $gamers = gamer::find($id);
       /* $level_id = $gamers->level_id;
        $levels = Level::find($level_id);

        $levels->delete();*/
        $gamers->delete();
        return redirect("/admingamers");

    }
    public function admindeletelevels($id) {
        $levels = level::find($id);
        $levels->delete();
        return redirect("/adminlevels");
    }/*add*/
    /*public function adminaddgamer(Request $request) {
        $gamers = new gamer;

        $gamers->name = $request->input('name');
        $gamers->email = $request->input('email');
        $gamers->level_id = $request->input('level');

        $level = new Level;
        $level->lable_1 = 25;
        $level->lable_2 = 458;
        $level->count_of_steps = 2;
        $level->time = 60;
        $level->bal = 0;
        $level->score = 0;
        $level->level = 1;
        $level->on_off = 0;
        
        $gamers->save();
        $level->save();

        return redirect("/admingamers");
    }*/

    /*public function adminaddlevels(Request $request) {*/
        /*dd(
            $request->input('a'),
            $request->input('b')
        );*/
        /*if(isset($_POST['addlevels']))
        {
            $addlevel = 
            [
                'lable_1'              =>  $request->lable_1,
                'lable_2'              =>  $request->lable_2,
                'count_of_steps'       =>  $request->count_of_steps,
                'time'                 =>  $request->time,
                'bal'                  =>  $request->bal,
                'score'                =>  $request->score,
                'level'                =>  $request->level,
                'on_off'               =>  $request->on_off,
            ];
            DB::table('levelss')->insert($addlevel);
        }*/
        /*$levels = new level;
        $levels->lable_1 = $request->input('lable_1');
        $levels->lable_2 = $request->input('lable_2');
        $levels->count_of_steps = $request->input('count_of_steps');
        $levels->time = $request->input('time');
        $levels->bal = $request->input('bal');
        $levels->score = $request->input('score');
        $levels->level = $request->input('level');
        $levels->on_off = $request->input('on_off');


        $levels->save();*/

       /* return redirect("/adminlevels");
    }*/
    /*update*/
    public function adminupdategamer(Request $request) {
        $gamers = gamer::find($request->input('id'));
        $gamers->name = $request->input('name');
        $gamers->email = $request->input('email');
        $gamers->level_id = $request->input('level_id');
        $gamers->social_id = $request->input('social_id');
        $gamers->life = $request->input('life');
        $gamers->timeout = $request->input('timeout');
        $gamers->points = $request->input('points');
        $gamers->save();

        return redirect('/admingamers');
    }

    public function adminupdatelevels(Request $request /*, Level $level*/) {
        $levels = level::find($request->input('id'));
        $levels->level = $request->input('level');
        $levels->lable_1_step = $request->input('lable_1_step');
        $levels->lable_2_step = $request->input('lable_2_step');
        /*$levels->count_of_steps = $request->input('count_of_steps');
        $levels->time = $request->input('time');*/
        /*$levels->bal = $request->input('bal');*/
       
       /* $levels->score = $request->input('score');
        $levels->level = $request->input('level');
        $levels->on_off = $request->input('on_off');*/
        $levels->save();
         return redirect('/adminlevels');


       /* Level::creae([
            'lable_1' => request('lable_1'),
            'lable_2' => request('lable_2'),
            'count_of_steps' => request('count_of_steps'),
            'time' => request('time'),
            'bal' => request('bal'),
            'score' => request('score'),
            'level' => request('level'),
            'on_off' => request('on_off'),


        ]);*/
        
    } 
   /* public function adminsearch(Request $request){
        $searchid = $request->input('searchid');
        $searchname = $request->input('searchname');
        $searchemail = $request->input('searchemail');
        $user = gamers::where('id', 'LIKE', "%$searchid%")
                ->orwhere('name', 'LIKE', "%$searchname%")
                ->orwhere('email', 'LIKE', "%$searchemail%")->first();
                return view('admin.gamers')->with('user',$user); 
    }

    public function adminlevelsearch(Request $request){
        $searchlevelid = $request->input('searchlevelsid');
        $user = levels::where('id', 'LIKE', "%adminlevelsearch%");
        return view('admin.levels')->with('user',$user);
    }*/


}


