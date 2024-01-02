<?php

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

Route::get('/', 'App\Http\Controllers\HomeController@home');

Route::get('/about', 'App\Http\Controllers\HomeController@about')->name('about');

Route::get('/contact', function() {
    return view('contact');
});

Route::get('/course/{course}/{id?}', function ($course, $id='44') {
    return $course . "-" . $id;
})->name('course');

Route::prefix('/admin')->group(function () {
    Route::get('/','App\Http\Controllers\Admin\AdminController@admin');
    Route::get('/course', 'App\Http\Controllers\Admin\AdminController@course');
    Route::get('/user', 'App\Http\Controllers\Admin\AdminController@user');
    Route::get('/comment', function () {
        return 'Comment';
    });
})->name('admin');