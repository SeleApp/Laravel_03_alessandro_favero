<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\MovieController;

Route::get('/', [PublicController::class, 'onePage']);

Route::get('/chi-siamo', [PublicController::class, 'aboutUs']);

Route::get('/chi-siamo/{id}', [PublicController::class, 'aboutUsDetail']);

Route::get('/movies', [MovieController::class, 'movieList']);

Route::get('/movies/{id}', [MovieController::class, 'movieDetail']);
