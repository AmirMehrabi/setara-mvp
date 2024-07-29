<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use App\Http\Middleware\RedirectIfAuthenticated;
use App\Http\Middleware\CheckIfAuthenticatedAsStylist;
use App\Http\Middleware\CheckIfAuthenticatedAsUser;




return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->append(CheckIfAuthenticatedAsStylist::class);
        $middleware->append(CheckIfAuthenticatedAsUser::class);
        $middleware->alias([
            'guest' => RedirectIfAuthenticated::class,
        ]);

        $middleware->alias([
            'CheckIfAuthenticatedAsUserauth' => RedirectIfAuthenticated::class,
        ]);


    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();


