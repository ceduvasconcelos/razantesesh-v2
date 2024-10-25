<?php

use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth:admin', 'verified'])->group(function () {
    Route::get('', [DashboardController::class, 'index'])->name('dashboard');
});
