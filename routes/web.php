<?php

use App\Http\Controllers\AnimalController;
use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;

Route::get('/',  [IndexController::class, 'index'])->name('home');

Route::prefix('animal')->group(function () {
    Route::get('/create', [AnimalController::class, 'addAnimal'])->name('animal.ajoutAnimal');
    Route::get('/{id}', [AnimalController::class, 'showAnimal'])->name('animal.details');
    Route::get('/update/{id}', [AnimalController::class, 'updateAnimal'])->name('animal.misAJourAnimal');
    Route::get('/delete/{id}', [AnimalController::class, 'deleteAnimal'])->name('animal.suppresionAnimal');
});