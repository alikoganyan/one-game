<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::resource('gamer', 'GamerController');

Route::middleware('auth:api')->get('/user', function (Request $request) {
   /* Route::get('/getLevels', 'LevelsController@getLevels');*/
    Route::get('levels', 'LevelsController@index');
    Route::get('levels/{level}', 'LevelsController@show');
    Route::post('levels', 'LevelsController@store');
    Route::put('levels/{level}', 'LevelsController@update');
    Route::delete('levels/{level}', 'LevelsController@delete');
    return $request->user();
});
Route::get('/score/{id}', 'ScoreController@Show');
Route::get('/getscore', 'ScoreController@GetScore');



