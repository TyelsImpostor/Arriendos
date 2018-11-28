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

//Rutas para la pagina principal

Route::get('/', [
  'as' => 'home.index',
  'uses' => 'HomeController@index'
]);

//Rutas de busqueda

Route::get('/categories/{name}', [
  'as' => 'home.search.category',
  'uses' => 'HomeController@searchCategory'
]);

Route::get('/tags/{name}', [
  'as' => 'home.search.tag',
  'uses' => 'HomeController@searchTag'
]);

// Rutas del panel de administracion para los usuarios autorizados y el administrador

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function(){

  Route::group(['middleware' => 'admin'], function(){

    //Rutas de las vistas de users

    Route::resource('users', 'UsersController');
    Route::get('users', [
      'uses' => 'UsersController@index',
      'as' => 'users.index'
    ]);

    //Rutas de las vistas de categories

    Route::resource('categories', 'CategoriesController');
    Route::get('categories/{id}/destroy', [
      'uses' => 'CategoriesController@destroy',
      'as' => 'categories.destroy'
    ]);

    //Rutas de las vistas de tags

    Route::resource('tags', 'TagsController');
    Route::get('tags/{id}/destroy', [
      'uses' => 'TagsController@destroy',
      'as' => 'tags.destroy'
    ]);

    //Rutas de las vistas de images

    Route::get('images', [
      'uses' => 'ImagesController@index',
      'as' => 'images.index'
    ]);

    //Rutas de las vistas de accept

    Route::resource('accept', 'AcceptController');
    Route::get('accept', [
      'uses' => 'AcceptController@index',
      'as' => 'accept.index'
    ]);

    Route::resource('graficos', 'ChartController');
    Route::get('graficos', [
      'uses' => 'ChartController@index',
      'as' => 'graficos.index'
    ]);

    Route::resource('test', 'TestController');
    Route::get('test', [
      'uses' => 'TestController@index',
      'as' => 'test.index'
    ]);
  });

  //Rutas de las vistas de articles

  Route::resource('articles', 'ArticlesController');
  Route::get('articles/{id}/destroy', [
    'uses' => 'ArticlesController@destroy',
    'as' => 'articles.destroy'
  ]);

  //Rutas de las vistas de pays

  Route::resource('pays', 'PaysController');
  Route::get('pays/{id}/destroy', [
    'uses' => 'PaysController@destroy',
    'as' => 'pays.destroy'
  ]);
});

//Rutas de las vistas de Myarticles

Route::resource('myarticles', 'MyarticlesController');
Route::get('myarticles', [
  'uses' => 'MyarticlesController@index',
  'as' => 'myarticles.index'
]);

//Rutas de las vistas de todos los Articulos

Route::resource('all', 'AllController');
Route::get('all', [
  'uses' => 'AllController@index',
  'as' => 'all.index'
]);

//Rutas para el registro de los usuarios

Route::resource('registers', 'RegisterController');
Route::get('/registers', [
  'as' => 'registers.register',
  'uses' => 'RegisterController@create'
]);

//Rutas para el logeo de los usuarios

Auth::routes();

Route::get('auth/login', [
  'uses' => 'Auth\LoginController@showLoginForm',
  'as' => 'auth.login'
]);

Route::post('auth/login', [
  'uses' => 'Auth\LoginController@login',
  'as' => 'auth.login'
]);

Route::get('auth/logout', [
  'uses' => 'Auth\LoginController@logout',
  'as' => 'auth.logout'
]);
