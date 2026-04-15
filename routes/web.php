<?php

use App\Http\Controllers\NewsController;
use Illuminate\Support\Facades\Route;

Route::get('/news', [NewsController::class, "index"])->name("news.index");
Route::get('/news/create', [NewsController::class, "create"])->name("news.create");
Route::post('/news/create', [NewsController::class, "store"])->name("news.store");

