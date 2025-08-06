<?php

use Illuminate\Support\Facades\Route;

// Rutas temporales para evitar errores de rutas no definidas

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/tasks', function () {
    return 'Página de tareas (en construcción)';
})->name('tasks.index');

Route::get('/users', function () {
    return 'Página de usuarios (en construcción)';
})->name('users.index');

