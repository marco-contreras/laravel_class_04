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

Route::get('super', function (){
    \App\Role::create([
        'name' => 'admin',
        'nickname' => 'Administrator',
        'description' => 'Super administrator'
    ]);

    \App\Role::create([
        'name' => 'moderator',
        'nickname' => 'Moderator',
        'description' => 'Site moderator'
    ]);

    \App\Role::create([
        'name' => 'client',
        'nickname' => 'Client',
        'description' => 'Site client'
    ]);

    \App\User::create([
        'name' => 'Marco Contreras',
        'email' => 'marco.contreras.he@gmail.com',
        'password' => bcrypt('123')
    ]);

    \App\User::create([
        'name' => 'Jenifer Vizcarra',
        'email' => 'jeeny.viz@gmail.com',
        'password' => bcrypt('123')
    ]);

    echo 'done';
});
