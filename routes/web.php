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

// Route::get('/', function () {
//     return view('home');
// });

Route::get('/', 'Front\HomeController@view')->name('home');
Route::get('/produk-hukum', 'Front\ProdukHukumController@view')->name('produk-hukum');

// Admin
Route::prefix('admin')->group(function() {
    Auth::routes();
    // Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
    // Route::post('/logout', 'Auth\LogoutController@logout')->name('logout');
    Route::get('/dashboard', 'Admin\DashboardController@view')->name('dashboard');

    Route::get('/content', 'Admin\ContentController@view')->name('content.index');
    Route::get('/content/edit/{id}', 'Admin\ContentController@edit')->name('content.edit');
    Route::patch('/content/edit/{id}', 'Admin\ContentController@update')->name('content.update');

    Route::get('/map', 'Admin\MapController@view')->name('map.index');
    Route::patch('/map/edit', 'Admin\MapController@update')->name('map.update');

    Route::get('/youtube', 'Admin\YoutubeController@view')->name('youtube.index');
    Route::patch('/youtube/edit', 'Admin\YoutubeController@update')->name('youtube.update');

    Route::get('/potensi', 'Admin\PotensiController@view')->name('potensi.index');
    Route::get('/potensi/create', 'Admin\PotensiController@create')->name('potensi.create');
    Route::post('/potensi/store', 'Admin\PotensiController@store')->name('potensi.store');
    Route::get('/potensi/edit/{id}', 'Admin\PotensiController@edit')->name('potensi.edit');
    Route::patch('/potensi/update/{id}', 'Admin\PotensiController@update')->name('potensi.update');
    Route::delete('/potensi/delete/{id}', 'Admin\PotensiController@delete')->name('potensi.destroy');
});
