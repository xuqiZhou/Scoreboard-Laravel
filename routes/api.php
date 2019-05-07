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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('teams', 'TeamController@index');
Route::get('team/{id}', 'TeamController@show');
Route::get('teaminfo/{id}', 'TeamController@teamInfo');


Route::get('games', 'GameController@index');
Route::get('allgames', 'GameController@fetchAll');

Route::get('game/{id}', 'GameController@show');
Route::post('game', 'GameController@store');
Route::put('game', 'GameController@store');
Route::delete('game/{id}', 'GameController@destroy');