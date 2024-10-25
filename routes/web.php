<?php

use Illuminate\Support\Facades\Route;

Route::name('customer.')->group(function () {
    require base_path('routes/customer/web.php');

    require base_path('routes/customer/auth.php');
});

Route::name('admin.')->prefix('admin')->group(function () {
    require base_path('routes/admin/web.php');

    require base_path('routes/admin/auth.php');
});
