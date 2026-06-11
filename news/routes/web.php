<?php

use App\Http\Controllers\NewsController;

Route::get('/news', [NewsController::class, 'index'])->name('news.index');

Route::get('/news/{slug}', [NewsController::class, 'show'])->name('news.show');

Route::get('/teapot', function () {
    abort(418, "I'm a teapot!");
});




