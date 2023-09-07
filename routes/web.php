<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//главная страница
Route::group(['namespace' => 'App\Http\Controllers\Main'], function () {
    Route::get('/', 'IndexController')->name('home');
});

//админ панель
Route::group(['namespace' => 'App\Http\Controllers\Admin', 'prefix' => 'admin'], function () {

    Route::group(['namespace' => 'Main'], function () {
        Route::get('/', 'IndexController')->name('admin');
    });

    Route::group(['namespace' => 'Category', 'prefix' => 'categories'], function () {
        Route::get('/', 'IndexController')->name('admin.categories');
        Route::get('/create', 'CreateController')->name('admin.categories.create');
        Route::post('/create', 'StoreController')->name('admin.categories.store');
        Route::get('/{id}', 'ShowController')->name('admin.categories.show');
    });
});


Auth::routes();

