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

use App\Video;

Route::get('/', function () {
	// $videos = App\Video::all();
    return view('index');
})->name('main');


Route::post('/submit', 'VideoController@submit');
Route::post('/insert_video_code','VideoController@insertCode');


Route::get('/live', 'HomeController@index')->name('home');

Auth::routes();


Route::get('/$2y$10$PwnmP4QoXlM3dEFXbeQOsu23iOGsjdvn0r35r.jvY.SCbzQlhd.ga', 'AdminController@index')->name('admin');


Route::post('/live_update','LiveController@update');

