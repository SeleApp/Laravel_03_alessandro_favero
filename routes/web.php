<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;

// Homepage: mostra il blog con gli articoli in evidenza
Route::get('/', [ArticleController::class, 'homepage'])->name('home');

// Pagina indice: elenco di tutti gli articoli
Route::get('/articoli', [ArticleController::class, 'index'])->name('articles.index');

// Pagina di dettaglio: singolo articolo identificato dallo slug
Route::get('/articoli/{slug}', [ArticleController::class, 'show'])->name('articles.show');
