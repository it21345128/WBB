<?php

Route::get('{slug}', function ($slug) {
    $page = Page::active()->where('slug', $slug)->first();

    if (!$page) {
        abort(404, 'Page not found');
    }

    return view('page', compact('page'));
})->name('dynamic.page');
