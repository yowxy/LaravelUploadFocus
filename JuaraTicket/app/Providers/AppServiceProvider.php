<?php

namespace App\Providers;

use App\Repositories\TicketRepository;
use Illuminate\Support\ServiceProvider;
use App\Repositories\Contracts\TicketRepositoryInterface;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton(TicketRepositoryInterface::class, TicketRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
