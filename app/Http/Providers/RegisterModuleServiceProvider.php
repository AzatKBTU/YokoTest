<?php

declare(strict_types=1);

namespace App\Http\Providers;

use Illuminate\Support\ServiceProvider;

class RegisterModuleServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register(): void
    {
        $this->app->register(CommandBusBookServiceProviders::class);
        $this->app->register(RepositoryServiceProvider::class);
    }
}
