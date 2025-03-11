<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__ . '/../routes/web.php',
        commands: __DIR__ . '/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        // Register your custom middleware here
        $middleware->alias([
            'admin' => \App\Http\Middleware\EnsureUserIsAdmin::class,
        ]);

        // You can also add global middleware or group middleware here if needed
        // Example:
        // $middleware->append([
        //     \App\Http\Middleware\SomeGlobalMiddleware::class,
        // ]);

        // Example of grouping middleware
        // $middleware->group('web', [
        //     \App\Http\Middleware\EncryptCookies::class,
        //     \App\Http\Middleware\VerifyCsrfToken::class,
        // ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
