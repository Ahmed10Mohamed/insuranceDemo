<?php

use App\Console\Commands\DeleteExpiredCancelledOrders;
use App\Http\Middleware\RedirectIfNotCompany;
use App\Http\Middleware\RedirectCompany;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use App\Http\Middleware\RedirectIfAdmin;
use App\Http\Middleware\RedirectIfNotAdmin;
use App\Http\Middleware\Active;
use App\Http\Middleware\Approve;
use App\Http\Middleware\LastActivityDate;
use App\Jobs\DeleteStaleOrdersJob;
use Illuminate\Console\Scheduling\Schedule;



return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        api: __DIR__.'/../routes/api.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withSchedule(function (Schedule $schedule) {
        $schedule->command('user-offline-after-one-day')->daily();
        $schedule->command('orders:delete-cancelled-after-2days')->daily();
        $schedule->command('orders:check-drivers-delay')->everyFiveMinutes()->withoutOverlapping();

    })

    ->withMiddleware(function (Middleware $middleware) {
        $middleware->alias([
            'admin'                    => RedirectIfAdmin::class,
            'admin.guest'              => RedirectIfNotAdmin::class,
            'active'                   => Active::class,
            'approve'                  => Approve::class,
            'LastActivityDate'         => lastActivityDate::class,
            'redirectCompanyIfNotAdmin' => RedirectCompany::class,
            'redirectIfNotCompany'      => RedirectIfNotCompany::class,

        ]);

    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();