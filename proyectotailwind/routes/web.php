<?php

use App\Livewire\DashboardEstacion;
use Illuminate\Support\Facades\Route;
use App\Livewire\CardEsp32;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    //ruta predeterminada Original para el sistema
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    //ruta con componentes de pagina completa livewire
//Route::get('/dashboard', DashboardEstacion::class)->name('dashboard');

    Route::get('/DashboardEstacion', DashboardEstacion::class)->name('DashboardEstacion');
    //llamada a la route 
    Route::get('/Counter', \App\Livewire\Counter::class)->name('Counter');
    Route::get('/NuevaPagina', \App\Livewire\NuevaPagina::class)->name('NuevaPagina');
    Route::get('/CardEsp32', \App\Livewire\CardEsp32::class)->name('CardEsp32');
});
