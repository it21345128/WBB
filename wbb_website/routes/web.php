<?php

use Illuminate\Support\Facades\Route;
use TCG\Voyager\Facades\Voyager;
use App\Models\Page;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\AboutController;

// Static Home Page Route
Route::get('/', function () {
    return view('home'); // Serve the static home page
})->name('home');

// Voyager Admin Routes
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

// Route for About Us Page
Route::get('/about', [AboutController::class, 'index'])->name('about.index');

// Contact Us Page
Route::get('/contactus', [ContactUsController::class, 'contactUs'])->name('contactus');

// Dynamic Pages Route
Route::get('/{slug}', function ($slug) {
    $page = Page::where('slug', $slug)->firstOrFail();
    return view('page', ['page' => $page]);
});

Route::post('/contact/send', [ContactUsController::class, 'sendContactForm'])->name('contact.send');
