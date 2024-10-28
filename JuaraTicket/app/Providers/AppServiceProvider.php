<?php

namespace App\Providers;

use App\Repositories\BookingRepository;
use App\Repositories\Contracts\BookingRepositoryInterface;
use App\Repositories\Contracts\CategoryRepositoryInterface;
use App\Repositories\Contracts\SellerRepositoryInterface;
use App\Repositories\TicketRepository;
use Illuminate\Support\ServiceProvider;
use App\Repositories\Contracts\TicketRepositoryInterface;
use App\Repositories\SellerRepository;
use CategoryRepository;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton(TicketRepositoryInterface::class, TicketRepository::class);
        $this->app->singleton(BookingRepositoryInterface::class, BookingRepository::class);
        $this->app->singleton(CategoryRepositoryInterface::class, CategoryRepository::class);
        $this->app->singleton(SellerRepositoryInterface::class, SellerRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
