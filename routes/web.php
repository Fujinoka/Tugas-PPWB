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

Route::get('/', 'App\Http\Controllers\IndexController@index');

//Method
Route::get('/task/create', 'App\Http\Controllers\TambahController@create')->name('task.create');
Route::post('/task', 'App\Http\Controllers\TambahController@store')->name('task.store');
Route::get('/task{task}', 'App\Http\Controllers\TambahController@edit')->name('task.edit');
Route::patch('/task{task}', 'App\Http\Controllers\TambahController@update')->name('task.update');
Route::delete('/task{task}', 'App\Http\Controllers\TambahController@destroy')->name('task.destroy');

Route::view('/Tambah', 'Tambah');
// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
