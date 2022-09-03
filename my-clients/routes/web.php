<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ClientController;


require __DIR__.'/auth.php';


Route::get('/', function () {
    return view('home');
})->name('page.index');


Route::middleware(['auth'])->group(function(){

    Route::get('/home', [ClientController::class, 'home'])->name('home.index');

    Route::delete('/users/{id}', [UserController::class, 'destroy'])->name('users.delete');
    Route::put('/users/{id}', [UserController::class, 'update'])->name('users.update');
    Route::get('/users/{id}/edit', [UserController::class, 'edit'])->name('users.edit');
    Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
    Route::post('/users', [UserController::class, 'store'])->name('users.store');
    Route::get('/users', [UserController::class, 'index'])->name('users.index');
    Route::get('/users/{id}', [UserController::class, 'show'])->name('users.show');
    
    Route::get('/clients/create', [ClientController::class, 'create'])->name('clients.create');
    Route::post('/clients', [ClientController::class, 'store'])->name('clients.store');
    Route::get('/clients', [ClientController::class,'index'])->name('clients.index');
    Route::put('/client/{id}', [ClientController::class, 'Update'])->name('client.update');
    Route::get('/clients/{id}/edit', [ClientController::class, 'edit'])->name('clients.edit');
    Route::get('/users/{id}/clients', [ClientController::class, 'showMines'])->name('clients.showEach');
    Route::delete('/clients/{id}', [ClientController::class, 'destroy'])->name('clients.delete');
    Route::get('/clients/{id}', [ClientController::class, 'show'])->name('clients.show');

});



