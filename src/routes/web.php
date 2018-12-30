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

Route::group(
    [
        'namespace'  => 'MaterialAdmin\app\Http\Controllers',
        'middleware' => 'web',
        'prefix'     => config('material.route_prefix'),
    ],
    function () {
        Route::get('/', 'AdminController@index')->name('material.dashboard');
        Route::get('/user/logout', 'UserController@logout')->name('material.logout');
        Route::get('/user/profile', 'ProfileController@index')->name('material.profile');
        Route::put('/user/profile/{id}', 'ProfileController@update')->name('material.profile.edit');
    }
);
