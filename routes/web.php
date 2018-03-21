<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/','IndexController@Main');
/*Route::get('/admin','AdminController@Admin');*/
Auth::routes();
Route::group(['middleware' => ['auth']], function() {

});
Route::get('/admin', 'AdminController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/adminlevels', 'AdminController@levels');
Route::get('/adminform', 'AdminController@adminreturn');
Route::get('/adminform', 'AdminController@adminreturn');
Route::get('/admingamers', 'AdminController@admingamers');
Route::get('/adminvariants', 'AdminController@adminvariants');

/*DELETE*/
Route::get('/admindeletegamer/{id}', 'AdminController@admindeletegamers');
Route::get('/admindeletelevels/{id}', 'AdminController@admindeletelevels');
/*ADD*/
Route::post('/adminaddgamer',['uses' => 'AdminController@adminaddgamer']);
Route::post('/adminaddlevels',['uses' => 'AdminController@adminaddlevels']);
/*UPDATE*/
Route::post('/adminupdategamer',['uses' => 'AdminController@adminupdategamer']);
Route::post('/adminupdatelevels',['uses' => 'AdminController@adminupdatelevels']);
Route::post('/adminsearch',['uses' => 'AdminController@adminsearch']);
/*Route::post('/adminsearch',['uses' => 'AdminController@adminsearch']);*/

/*Route::match(['post','patch'],'/adminupdatelevel',['uses' => 'AdminController@adminupdatelevel']);*/
