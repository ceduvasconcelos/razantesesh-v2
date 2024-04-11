<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::permanentRedirect('/', '/admin/dashboard');

Route::get('/dashboard', function () {
    return Inertia::render('Admin/Pages/Dashboard/Index');
})->name('dashboard');
