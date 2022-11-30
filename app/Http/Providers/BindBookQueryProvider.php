<?php

namespace App\Http\Providers;

use App\Http\Queries\Eloquent\BookQuery;
use App\Http\Contracts\Queries\BookQuery as BookQueryContract;
use Illuminate\Support\ServiceProvider;

final class BindBookQueryProvider extends ServiceProvider
{
    public array $bindings = [
            BookQueryContract::class => BookQuery::class,
    ];
}
