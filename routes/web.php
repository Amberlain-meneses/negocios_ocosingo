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

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//Rutas para usuarios
Route::group(['middleware' => ['permission:users.index']], function () {
    Route::get('users', 'UserController@index')->name('users.index');
});

Route::group(['middleware' => ['permission:users.create']], function () {
    Route::get('users/create', 'UserController@create')->name('users.create');
    Route::post('users/store', 'UserController@store')->name('users.store');
});

Route::group(['middleware' => ['permission:users.edit']], function () {
    Route::get('users/{user}/edit', 'UserController@edit')->name('users.edit');
    Route::patch('users/{user}', 'UserController@update')->name('users.update');
});

Route::group(['middleware' => ['permission:users.show']], function () {
    Route::get('users/{user}', 'UserController@show')->name('users.show');
});

Route::group(['middleware' => ['permission:users.destroy']], function () {
    Route::delete('users/{user}', 'UserController@destroy')->name('users.destroy');
});



//Rutas para roles
Route::group(['middleware' => ['permission:roles.index']], function () {
    Route::get('roles', 'RoleController@index')->name('roles.index');
});

Route::group(['middleware' => ['permission:roles.create']], function () {
    Route::get('roles/create', 'RoleController@create')->name('roles.create');
    Route::post('roles/store', 'RoleController@store')->name('roles.store');
});

Route::group(['middleware' => ['permission:roles.edit']], function () {
    Route::get('roles/{role}/edit', 'RoleController@edit')->name('roles.edit');
    Route::patch('roles/{role}', 'RoleController@update')->name('roles.update');
});

Route::group(['middleware' => ['permission:roles.show']], function () {
    Route::get('roles/{role}', 'RoleController@show')->name('roles.show');
});

Route::group(['middleware' => ['permission:roles.destroy']], function () {
    Route::delete('roles/{role}', 'RoleController@destroy')->name('roles.destroy');
});



//Rutas para productos
Route::group(['middleware' => ['permission:products.index']], function () {
    Route::get('products', 'ProductController@index')->name('products.index');
});

Route::group(['middleware' => ['permission:products.create']], function () {
    Route::get('products/create', 'ProductController@create')->name('products.create');
    Route::post('products/store', 'ProductController@store')->name('products.store');
});

Route::group(['middleware' => ['permission:products.edit']], function () {
    Route::get('products/{product}/edit', 'ProductController@edit')->name('products.edit');
    Route::patch('products/{product}', 'ProductController@update')->name('products.update');
});

Route::group(['middleware' => ['permission:products.show']], function () {
    Route::get('products/{product}', 'ProductController@show')->name('products.show');
});

Route::group(['middleware' => ['permission:products.destroy']], function () {
    Route::delete('products/{product}', 'ProductController@destroy')->name('products.destroy');
});



//Rutas para negocios
Route::group(['middleware' => ['permission:businesses.index']], function () {
    Route::get('businesses', 'BusinessController@index')->name('businesses.index');
});

Route::group(['middleware' => ['permission:businesses.create']], function () {
    Route::get('businesses/create', 'BusinessController@create')->name('businesses.create');
    Route::post('businesses/store', 'BusinessController@store')->name('businesses.store');
});

Route::group(['middleware' => ['permission:businesses.edit']], function () {
    Route::get('businesses/{business}/edit', 'BusinessController@edit')->name('businesses.edit');
    Route::patch('businesses/{business}', 'BusinessController@update')->name('businesses.update');
});

Route::group(['middleware' => ['permission:businesses.show']], function () {
    Route::get('businesses/{business}', 'BusinessController@show')->name('businesses.show');
});

Route::group(['middleware' => ['permission:businesses.destroy']], function () {
    Route::delete('businesses/{business}', 'BusinessController@destroy')->name('businesses.destroy');
});



//Rutas para categorías
Route::group(['middleware' => ['permission:categories.index']], function () {
    Route::get('categories', 'CategoryController@index')->name('categories.index');
});

Route::group(['middleware' => ['permission:categories.create']], function () {
    Route::get('categories/create', 'CategoryController@create')->name('categories.create');
    Route::post('categories/store', 'CategoryController@store')->name('categories.store');
});

Route::group(['middleware' => ['permission:categories.edit']], function () {
    Route::get('categories/{category}/edit', 'CategoryController@edit')->name('categories.edit');
    Route::patch('categories/{category}', 'CategoryController@update')->name('categories.update');
});

Route::group(['middleware' => ['permission:categories.show']], function () {
    Route::get('categories/{category}', 'CategoryController@show')->name('categories.show');
});

Route::group(['middleware' => ['permission:categories.destroy']], function () {
    Route::delete('categories/{category}', 'CategoryController@destroy')->name('categories.destroy');
});
