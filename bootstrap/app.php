<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->web(append: [
            \App\Http\Middleware\HandleInertiaRequests::class,
            \Illuminate\Http\Middleware\AddLinkHeadersForPreloadedAssets::class,
            \Illuminate\Http\Middleware\HandleCors::class,
        ]);

        $middleware->redirectGuestsTo(function (Request $request) {
            $prefix = explode('.', $request->route()->getName())[0];

            return route($prefix  . '.login');
        });

        $middleware->redirectUsersTo(function (Request $request) {
            if(Auth::guard('admin')->check()) {
                return route('admin.dashboard');
            }

            return route('customer.home');
        });
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
