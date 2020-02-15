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


Route::get('/', 'HomeController@index')
    ->name('home');

Route::get('/categories', 'CategoriesController@index')
    ->name('categories');

Route::get('/shop', 'ItemsController@index')
    ->name('items');

Route::get('/categoryitems', 'CategoryItemsController@index')
    ->name('category-items');

Route::prefix('admin')
    ->namespace('Admin')
    ->middleware(['auth', 'admin'])
    ->group(function() {
        Route::get('/', 'DashboardController@index')
            ->name('dashboard');

        Route::resource('categories', 'CategoriesController');
        Route::resource('items', 'ItemsController');
        Route::resource('category-items', 'CategoryItemsController');

    });
Auth::routes(['verify' => true]);
