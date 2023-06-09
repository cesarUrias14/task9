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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('admin/home', function() {
    return view('home');
})->name('home')->middleware('auth');

Route::get('admin/photos', function () {
    return view('photos');
})->name('photos');

Route::get('admin/contact', function () {
    return view('contact');
})->name('contact');
