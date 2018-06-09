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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//routes

Route::middleware(['auth'])->group(function(){
      //roles
      //Route::post(RUTA)->name(NOMBRE_DE_RUTA)
        //->middlewere(PERMISO);
      Route::post('roles/store')->name('roles.store')
        ->middlewere('permission:roles.create');

      Route::get('roles')->name('roles.index')
        ->middlewere('permission:roles.index');

      Route::get('roles/create')->name('roles.create')
        ->middlewere('permission:roles.create');

    //abajo entre llaves estamos pasando un parametro que será esperado
      Route::put('roles/{role}')->name('roles.update')
        ->middlewere('permission:roles.edit');

      Route::get('roles/{role}')->name('roles.show')
        ->middlewere('permission:roles.show');

      Route::delete('roles/{role}')->name('roles.destroy')
        ->middlewere('permission:roles.destroy');
        
      Route::get('roles/{role}/edit')->name('roles.edit')
        ->middlewere('permission:roles.edit');
});
