<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    UserController,
    ClientController

};

Route::get('/login', function () {
    return view('login');
});

Route::get('users', [UserController::class, 'index'])->name('users.index');
Route::get('/users/{id}', [UserController::class, 'show'])->name('users.show');

Route::get('/clientes', [ClientController::class,'index'])->name('clients.index');
