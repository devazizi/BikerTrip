<?php

namespace App\Providers;

use App\Domains\Trip\Infrastructure\Repository\TripRepositoryInterface;
use App\Domains\Trip\Repository\TripRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(
            TripRepositoryInterface::class,
            TripRepository::class
        );
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
