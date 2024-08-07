<?php

use App\Http\Controllers\PersonController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/landing', function () {
    return view('landing');
});

Route::get('/form', function () {
    return view('form');
});

Route::post('/persons', [PersonController::class, 'store'])->name('person.store');

Route::get('/persons/create', [PersonController::class, 'create'])->name('person.create');
