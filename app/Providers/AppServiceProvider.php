<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Models\User;
use App\Models\Order;
use App\Policies\UserPolicy;
use App\Policies\OrderPolicy;
use Illuminate\Pagination\Paginator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        // Gate::policy(User::class, UserPolicy::class);
        // Gate::policy(Order::class, OrderPolicy::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Paginator::useBootstrap();
        Paginator::useBootstrapFive();
        Paginator::useBootstrapFour();

    }
}