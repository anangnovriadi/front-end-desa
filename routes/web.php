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
    return view('home');
});

// Admin
Route::prefix('admin')->group(function() {
    Auth::routes();
    Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
    Route::post('/logout', 'Auth\LogoutController@logout')->name('logout');
    Route::get('/dashboard', 'Admin\DashboardController@view')->name('dashboard');

    Route::get('/content', 'Admin\ContentController@view')->name('content.index');
    Route::get('/content/edit/{id}', 'Admin\ContentController@edit')->name('content.edit');
    Route::patch('/content/edit/{id}', 'Admin\ContentController@update')->name('content.update');

    Route::get('/map', 'Admin\MapController@view')->name('map.index');
    Route::patch('/map/edit', 'Admin\MapController@update')->name('map.update');
});
