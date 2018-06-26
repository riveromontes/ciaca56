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
        //->middleware(PERMISO);
      Route::post('roles/store', 'RoleController@store')->name('roles.store')
        ->middleware('permission:roles.create');

      Route::get('roles', 'RoleController@index')->name('roles.index')
        ->middleware('permission:roles.index');

      Route::get('roles/create', 'RoleController@create')->name('roles.create')
        ->middleware('permission:roles.create');

    //abajo entre llaves estamos pasando un parametro que será esperado
      Route::put('roles/{role}', 'RoleController@update')->name('roles.update')
        ->middleware('permission:roles.edit');

      Route::get('roles/{role}', 'RoleController@show')->name('roles.show')
        ->middleware('permission:roles.show');

      Route::delete('roles/{role}', 'RoleController@destroy')->name('roles.destroy')
        ->middleware('permission:roles.destroy');

      Route::get('roles/{role}/edit', 'RoleController@edit')->name('roles.edit')
        ->middleware('permission:roles.edit');



      //7 rutas para products
      //Route::post(RUTA)->name(NOMBRE_DE_RUTA)
        //->middleware(PERMISO);
      Route::post('products/store', 'ProductController@store')->name('products.store')
        ->middleware('permission:products.create');

      Route::get('products', 'ProductController@index')->name('products.index')
        ->middleware('permission:products.index');

      Route::get('products/create', 'ProductController@create')->name('products.create')
        ->middleware('permission:products.create');

    //abajo entre llaves estamos pasando un parametro que será esperado
      Route::put('products/{product}', 'ProductController@update')->name('products.update')
        ->middleware('permission:products.edit');

      Route::get('products/{product}', 'ProductController@show')->name('products.show')
        ->middleware('permission:products.show');

      Route::delete('products/{product}', 'ProductController@destroy')->name('products.destroy')
        ->middleware('permission:products.destroy');

      Route::get('products/{product}/edit', 'ProductController@edit')->name('products.edit')
        ->middleware('permission:products.edit');



      //rutas para users
      //Route::post(RUTA)->name(NOMBRE_DE_RUTA)
        //->middleware(PERMISO);
      Route::get('users', 'UserController@index')->name('users.index')
        ->middleware('permission:users.index');

    //abajo entre llaves estamos pasando un parametro que será esperado
      Route::put('users/{user}', 'UserController@update')->name('users.update')
        ->middleware('permission:users.edit');

      Route::get('users/{user}', 'UserController@show')->name('users.show')
        ->middleware('permission:users.show');

      Route::delete('users/{user}', 'UserController@destroy')->name('users.destroy')
        ->middleware('permission:users.destroy');

      Route::get('users/{user}/edit', 'UserController@edit')->name('users.edit')
        ->middleware('permission:users.edit');


        //7 rutas para estudiantes
        //Route::post(RUTA)->name(NOMBRE_DE_RUTA)
          //->middleware(PERMISO);
        Route::post('estudiantes/store', 'EstudianteController@store')->name('estudiantes.store')
          ->middleware('permission:estudiantes.create');

        Route::get('estudiantes', 'EstudianteController@index')->name('estudiantes.index')
          ->middleware('permission:estudiantes.index');

        Route::get('estudiantes/create', 'EstudianteController@create')->name('estudiantes.create')
          ->middleware('permission:estudiantes.create');

      //abajo entre llaves estamos pasando un parametro que será esperado
        Route::put('estudiantes/{estudiante}', 'EstudianteController@update')->name('estudiantes.update')
          ->middleware('permission:estudiantes.edit');

        Route::get('estudiantes/{estudiante}', 'EstudianteController@show')->name('estudiantes.show')
          ->middleware('permission:estudiantes.show');

        Route::delete('estudiantes/{estudiante}', 'EstudianteController@destroy')->name('estudiantes.destroy')
          ->middleware('permission:products.destroy');

        Route::get('estudiantes/{estudiante}/edit', 'EstudianteController@edit')->name('estudiantes.edit')
          ->middleware('permission:estudiantes.edit');



});
