<?php

use App\Livewire\DashboardEstacion;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    //ruta predeterminada
  //  Route::get('/dashboard', function () {
  //      return view('dashboard');
  //  })->name('dashboard');
  //ruta con componentes de pagina completa livewire
    Route::get('/dashboard', DashboardEstacion::class)
    ->name('dashboard');
    //llamada a la route 
    Route::get('/Counter', \App\Livewire\Counter::class)->name('Counter');
    Route::get('/NuevaPagina', \App\Livewire\NuevaPagina::class)->name('NuevaPagina');
});
