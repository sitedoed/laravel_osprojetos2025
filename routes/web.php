<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Rotas do Front-end
Route::get('/', [App\Http\Controllers\FrontEndController::class, 'home'])->name('home');
Route::get('/servicos', [App\Http\Controllers\FrontEndController::class, 'services'])->name('services');
Route::get('/contato', [App\Http\Controllers\FrontEndController::class, 'contact'])->name('contact');
Route::post('/contato', [ContactController::class, 'submit'])->name('contact.submit');

// Rotas do Dashboard (já existentes)
require __DIR__.'/auth.php';