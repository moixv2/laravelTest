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

/*Route::get('/', function () {
    return view('welcome');
});*/


/*Route::get('/', function () {
    return view('vue1');
});*/

/* liaison entre les routes et les contrôleurs*/

// Route de welcome pour faire la liaison avec WelcomeController

Route::get('/', 'WelcomeController@index');

/***************/


Route::get('{n}', function($n) {
    return Response::make('Je suis la page ' . $n . ' !', 200);
})->where('n', '[1-3]');

// Route de Article pour faire la liaison avec ArticleController

Route::get('article/{n}', 'ArticleController@show')->where('n', '[0-9]+');

/*******************************************/

// Route de facture pour faire la liaison avec FactureController

Route::get('facture/{n}', 'FactureController@show')->where('n', '[0-9]+');

Route::get('users', 'UsersController@getInfos');
Route::post('users', 'UsersController@postInfos');

Route::get('contact', 'ContactController@getForm');
Route::post('contact', 'ContactController@postForm');
