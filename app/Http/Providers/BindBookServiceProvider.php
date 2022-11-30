<?php

namespace App\Http\Providers;

use Illuminate\Support\ServiceProvider;
use App\Http\Services\BookService;
use App\Http\Contracts\Services\BookService as BookServiceContract;

final class BindBookServiceProvider extends ServiceProvider
{
    public array $bindings = [
        // Services
        BookServiceContract::class => BookService::class,
    ];
}
