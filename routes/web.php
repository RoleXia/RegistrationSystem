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

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/games', function (){
    $games = App\Game::all();
   return view('games_list', ['games' => $games]);
})->name('games');
Route::get('/games/{n}', function (){
    //TODO
});
Route::get('/calendar', function (){
    //TODO
})->name('calendar');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
