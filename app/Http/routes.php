<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Se usuário estiver no index ou em /movies, retona o index
Route::get('/','Movies@index');
Route::get('/movies','Movies@index');
// Voto via get chama função vote no Model
Route::get('vote/{id}','Movies@vote');
// Manda votos para o ranking via POST enquanto os filmes são votados
Route::post('/show_votes','Movies@show_votes');
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
