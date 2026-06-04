<?php

use App\Http\Controllers\NewsController;

Route::get('/news', [NewsController::class, 'index'])->name('news.index');

Route::get('/news/{slug}', [NewsController::class, 'show'])->name('news.show');





