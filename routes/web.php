<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('panel-navegacion', 'panel-navegacion')
    ->middleware(['auth', 'verified'])
    ->name('panel.navegacion');

Route::view('busqueda-avanzada', 'busqueda-avanzada')
    ->middleware(['auth', 'verified'])
    ->name('busqueda.avanzada');

Route::view('historial-versiones', 'historial-versiones')
    ->middleware(['auth', 'verified'])
    ->name('historial.versiones');

Route::view('gestion-permisos', 'gestion-permisos')
    ->middleware(['auth', 'verified'])
    ->name('gestion.permisos');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
});

require __DIR__.'/auth.php';
