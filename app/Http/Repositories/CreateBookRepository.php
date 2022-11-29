<?php

declare(strict_types=1);

namespace App\Http\Repositories;

use App\Models\Book;

interface  CreateBookRepository
{
    public function create(Book $model): void;
}
