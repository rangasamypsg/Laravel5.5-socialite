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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Route::get('login/github', 'Auth\LoginController@redirectToProvider');
//Route::get('login/github/callback', 'Auth\LoginController@handleProviderCallback');


Route::get('login/{social}', 'Auth\LoginController@redirectToProvider')->where('social','twitter|facebook|linkedin|google|github|bitbucket');
Route::get('login/{social}/callback', 'Auth\LoginController@handleProviderCallback')->where('social','twitter|facebook|linkedin|google|github|bitbucket');


 