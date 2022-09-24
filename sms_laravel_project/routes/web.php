<?php

use App\Http\Controllers\Postcontroller;
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
    return view('layout.home');
});

Route::view('/contact','layout.contact')->name('contact');
Route::view('/about','layout.about')->name('about'); 
Route::view('/homes','layout.home')->name('homes');

Route::get('create',[Postcontroller::class,'create']);
Route::get('show',[Postcontroller::class,'show'])->name('show.show');
Route::post('insert',[Postcontroller::class,'insert_data']);
Route::get('show_single/{id}',[Postcontroller::class,'show_single__data']);
Route::get('article/{id}',[Postcontroller::class,'edit_data']);
Route::post('update/{id}',[Postcontroller::class,'update_data']);
Route::post('delete/{id}',[Postcontroller::class,'delete_data']);






Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
