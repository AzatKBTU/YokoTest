<?php

namespace App\Http\Providers;

use App\Http\Repositories\BookRepository;
use App\Http\Repositories\CreateBookLogRepository;
use App\Http\Repositories\CreateBookRepository;
use Illuminate\Support\ServiceProvider;

final class RepositoryServiceProvider extends ServiceProvider
{
    public array $bindings = [
        // Repository
        CreateBookRepository::class => CreateBookLogRepository::class,
    ];

    public function register()
    {
        $this->app->when(CreateBookLogRepository::class)
            ->needs(CreateBookRepository::class)
            ->give(BookRepository::class);
    }

}
