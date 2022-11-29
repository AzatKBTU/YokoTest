<?php

declare(strict_types=1);

namespace App\Http\Providers;

use App\Http\Commands\CreateBookCommand;
use App\Http\Handlers\CreateBookHandler;
use Illuminate\Support\Facades\Bus;
use Illuminate\Support\ServiceProvider;

final class CommandBusBookServiceProviders extends ServiceProvider
{
    private array $maps = [
        CreateBookCommand::class => CreateBookHandler::class,
    ];

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot(): void
    {
        $this->registerCommandHandlers();
    }

    private function registerCommandHandlers()
    {
        Bus::map($this->maps);
    }

}
