<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ClientController;



Route::delete('/users/{id}', [UserController::class, 'destroy'])->name('users.delete');
Route::put('/users/{id}', [UserController::class, 'update'])->name('users.update');
Route::get('/users/{id}/edit', [UserController::class, 'edit'])->name('users.edit');
Route::get('/users', [UserController::class, 'index'])->name('users.index');
Route::get('/users/{id}', [UserController::class, 'show'])->name('users.show');

Route::delete('/clients/{id}', [ClientController::class, 'delete'])->name('clients.delete');
Route::get('/clients/create', [ClientController::class, 'create'])->name('clients.create');
Route::post('/clients', [ClientController::class, 'store'])->name('clients.store');
Route::get('/clients', [ClientController::class,'index'])->name('clients.index');
Route::get('/clients/{id}/edit', [ClientController::class, 'edit'])->name('clients.edit');
Route::get('/clients/{id}', [ClientController::class, 'show'])->name('clients.show');

require __DIR__.'/auth.php';
