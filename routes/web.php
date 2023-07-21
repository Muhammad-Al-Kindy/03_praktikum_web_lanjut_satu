<?php

use App\Http\Controllers\ContactUsController;
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

// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('/category')->group(function(){
    Route::get('/products',function(){
        return view('product');
    });
});
Route::get('/news/{id}',function($id){
    return view('news',compact("id"));
});
Route::prefix('/program')->group(function(){
    Route::get('/program',function(){
        return view('program');
    });
});
Route::get('/about-us',function(){
    return view('about-us');
});

Route::resource('/contact-us',ContactUsController::class);