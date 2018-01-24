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
});
Route::get('/general','MonControlleur@general');
Route::get('/real/{id}','Film@realisateur')->where('id', '[0-9]+');
Route::get('/addmovie', 'bdd@film');
Route::get('/formfilm', 'MonControlleur@form');
