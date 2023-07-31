<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'App\Http\Controllers\ConatactController@create');
Route::get('/cv', 'App\Http\Controllers\ConatactController@cv');


//ADMIN
Route::get('admin/login', 'App\Http\Controllers\LoginAdminController@showLoginForm')->name('admin.login');
Route::post('admin/login', 'App\Http\Controllers\LoginAdminController@login')->name('admin.login.submit');
Route::group(['prefix' => 'admin', 'middleware' => 'auth.admin'], function () {
    Route::get('dashboard', 'App\Http\Controllers\LoginAdminController@doshboard')->name('admin.dashboard');
    Route::get('contact', 'App\Http\Controllers\LoginAdminController@contactMeList')->name('admin.contact.list');
});




