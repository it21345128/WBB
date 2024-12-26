<?php

use Illuminate\Support\Facades\Route;
use TCG\Voyager\Facades\Voyager;
use App\Models\Page;

// Static Home Page Route
Route::get('/', function () {
    return view('home'); // Serve the static home page
})->name('home');

// Voyager Admin Routes
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

// Dynamic Pages Route
Route::get('/{slug}', function ($slug) {
    $page = Page::where('slug', $slug)->firstOrFail();
    return view('page', ['page' => $page]);
});
