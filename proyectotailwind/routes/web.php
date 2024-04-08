<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    //llamada a la route 
    Route::get('/Counter', \App\Livewire\Counter::class)->name('Counter');
    Route::get('/NuevaPagina', \App\Livewire\NuevaPagina::class)->name('NuevaPagina');
});
