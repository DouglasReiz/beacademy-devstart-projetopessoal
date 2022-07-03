<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    ClientController

};

Route::get('/login', function () {
    return view('login');
});

Route::get('/clientes', [ClientController::class,'index'])->name('clients.index');
