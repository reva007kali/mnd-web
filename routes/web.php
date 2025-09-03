<?php

use Illuminate\Support\Facades\Route;

// Navbar pages
Route::view('/', 'home')->name('home');
Route::view('/about', 'about')->name('about');
Route::view('/blog', 'blog')->name('blog');
Route::view('/gallery', 'gallery')->name('gallery');
Route::view('/register', 'register')->name('register');

Route::prefix('program')->group(function () {
    Route::view('/fnb', 'program.fnb')->name('program.fnb');
    Route::view('/culinary', 'program.culinary')->name('program.culinary');
    Route::view('/housekeeping', 'program.housekeeping')->name('program.housekeeping');
    Route::view('/barista', 'program.barista')->name('program.barista');
    Route::view('/executive', 'program.executive')->name('program.executive');
    Route::view('/butler', 'program.butler')->name('program.butler');
    Route::view('/premium', 'program.premium')->name('program.premium');
});

Route::get('/blog/{slug}', function ($slug) {
    // dummy detail blog
    return view('blog-detail', compact('slug'));
})->name('blog.show');