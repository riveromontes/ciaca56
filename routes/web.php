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

      //7 rutas para roles
      //Route::post(RUTA)->name(NOMBRE_DE_RUTA)
        //->middlewere(PERMISO);
      Route::post('roles/store', 'RoleController@store')->name('roles.store')
        ->middlewere('permission:roles.create');

      Route::get('roles', 'RoleController@index')->name('roles.index')
        ->middlewere('permission:roles.index');

      Route::get('roles/create', 'RoleController@create')->name('roles.create')
        ->middlewere('permission:roles.create');

    //abajo entre llaves estamos pasando un parametro que será esperado
      Route::put('roles/{role}', 'RoleController@update')->name('roles.update')
        ->middlewere('permission:roles.edit');

      Route::get('roles/{role}', 'RoleController@show')->name('roles.show')
        ->middlewere('permission:roles.show');

      Route::delete('roles/{role}', 'RoleController@destroy')->name('roles.destroy')
        ->middlewere('permission:roles.destroy');

      Route::get('roles/{role}/edit', 'RoleController@edit')->name('roles.edit')
        ->middlewere('permission:roles.edit');



      //7 rutas para products
      //Route::post(RUTA)->name(NOMBRE_DE_RUTA)
        //->middlewere(PERMISO);
      Route::post('products/store', 'ProductController@store')->name('products.store')
        ->middlewere('permission:products.create');

      Route::get('products', 'ProductController@index')->name('products.index')
        ->middlewere('permission:products.index');

      Route::get('products/create', 'ProductController@create')->name('products.create')
        ->middlewere('permission:products.create');

    //abajo entre llaves estamos pasando un parametro que será esperado
      Route::put('products/{role}', 'ProductController@update')->name('products.update')
        ->middlewere('permission:products.edit');

      Route::get('products/{role}', 'ProductController@show')->name('products.show')
        ->middlewere('permission:products.show');

      Route::delete('products/{role}', 'ProductController@destroy')->name('products.destroy')
        ->middlewere('permission:products.destroy');

      Route::get('products/{role}/edit', 'ProductController@edit')->name('products.edit')
        ->middlewere('permission:products.edit');



      //rutas para users
      //Route::post(RUTA)->name(NOMBRE_DE_RUTA)
        //->middlewere(PERMISO);
      Route::get('users', 'UserController@index')->name('users.index')
        ->middlewere('permission:users.index');

    //abajo entre llaves estamos pasando un parametro que será esperado
      Route::put('users/{role}', 'UserController@update')->name('users.update')
        ->middlewere('permission:users.edit');

      Route::get('users/{role}', 'UserController@show')->name('users.show')
        ->middlewere('permission:users.show');

      Route::delete('users/{role}', 'UserController@destroy')->name('users.destroy')
        ->middlewere('permission:users.destroy');

      Route::get('users/{role}/edit', 'UserController@edit')->name('users.edit')
        ->middlewere('permission:users.edit');




        
});
