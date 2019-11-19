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



#Admin panel Routes
Route::prefix('admin')->group(function () {
    Route::get('/','loginController@index')->name('loginpage')->middleware('guest');
    Route::post('/login','loginController@login')->name('login');
    Route::get('/logout','loginController@logout')->name('logout');

    Route::group(['middleware' => 'auth'], function () {


        Route::get('/home','AdminController@index')->name('admin.home');


        #Songs Routes
        Route::get('/song/add','SongsController@add_song')->name('song.add');
        Route::post('/song/store','SongsController@insert')->name('song.store');
        Route::get('/song','SongsController@get_data')->name('song.table');
        Route::get('/song/edit/{id}','SongsController@edit_song')->name('edit.song');
        Route::post('/song/update','SongsController@update_song')->name('update.song');
        Route::get('/song/delete/{id}','SongsController@delete_song')->name('delete.song');


        #Category Routes
        Route::get('/category/add','CategoryController@add_category')->name('category.add');
        Route::post('/category/store','CategoryController@insert')->name('category.store');
        Route::get('/category','CategoryController@get_data')->name('category.table');
        Route::get('/category/edit/{id}','CategoryController@edit_category')->name('edit.category');
        Route::post('/category/update','CategoryController@update_category')->name('update.category');
        Route::get('/category/delete/{id}','CategoryController@delete_category')->name('delete.category');


});
});
