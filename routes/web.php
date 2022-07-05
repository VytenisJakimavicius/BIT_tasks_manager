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
    return view('welcome');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('task')->group(function() {
    Route::get('', 'App\Http\Controllers\TaskController@index')->name('task.index');
    Route::get('create', 'App\Http\Controllers\TaskController@create')->name('task.create');
    Route::post('store', 'App\Http\Controllers\TaskController@store')->name('task.store');
    Route::get('show/{task}', 'App\Http\Controllers\TaskController@show')->name('task.show');
    Route::post('destroy/{task}', 'App\Http\Controllers\TaskController@destroy' )->name('task.destroy');
    Route::post('update/{task}', 'App\Http\Controllers\TaskController@update')->name('task.update');
    Route::get('edit/{task}', 'App\Http\Controllers\TaskController@edit')->name('task.edit');
    Route::get('filterindex', 'App\Http\Controllers\TaskController@filterindex')->name('task.filterindex');
});

Route::prefix('status')->group(function() {
    Route::get('', 'App\Http\Controllers\StatusController@index')->name('status.index');
    Route::post('create', 'App\Http\Controllers\StatusController@create')->name('status.create');
    Route::post('store', 'App\Http\Controllers\StatusController@store')->name('status.store');
    Route::post('destroy/{status}', 'App\Http\Controllers\StatusController@destroy' )->name('status.destroy');
});


Route::get('login', 'App\Http\Controllers\Auth\AuthController@index')->name('login');
Route::get('registration', 'App\Http\Controllers\Auth\AuthController@registration')->name('register');
Route::post('post-registration', 'App\Http\Controllers\Auth\AuthController@postRegistration')->name('register.post');
Route::post('post-login', 'App\Http\Controllers\Auth\AuthController@postLogin')->name('login.post'); 
Route::get('logout', 'App\Http\Controllers\Auth\AuthController@logout')->name('logout');