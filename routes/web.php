<?php

use App\Http\Controllers\AnimalController;
use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;

Route::get('/',  [IndexController::class, 'index'])->name('home');

Route::prefix('animal')->group(function () {
    Route::get('/create', [AnimalController::class, 'addAnimal'])->name('article.ajoutAnimal');
    // Route::get('/{id}', [AnimalController::class, 'show'])->name('article.details');
    // Route::get('/update/{id}', [AnimalController::class, 'updateItem'])->name('article.misAJourArticle');
    // Route::get('/delete/{id}', [AnimalController::class, 'deleteItem'])->name('article.suppresionArticle');
});