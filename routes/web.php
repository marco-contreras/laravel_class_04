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
Route::get('role', function (){
    return \App\Role::with('user')->get();
});


Route::get('login', 'Auth\LoginController@showLoginForm');
Route::post('login', ['as' => 'login', 'uses' => 'Auth\LoginController@login']);
Route::get('logout', 'Auth\LoginController@logout');

Route::resource('contacts', 'ContactsController')->middleware('auth');
Route::resource('users', 'UsersController')->middleware(['auth', 'roles:admin,moderator']);

Route::get('/', ['as' => 'home', 'uses' => 'MiniPagesController@handleHome']);
