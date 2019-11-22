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

Route::get('/category_songs','API\songsController@get_songs');
Route::get('/songs','API\songsController@all_songs');
Route::get('/allartist','API\songsController@artists');
Route::get('/artistsongs','API\songsController@artist_songs');

