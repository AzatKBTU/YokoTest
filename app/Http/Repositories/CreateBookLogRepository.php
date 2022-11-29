<?php

declare(strict_types=1);

namespace App\Http\Repositories;

use App\Models\Book;

final class CreateBookLogRepository implements CreateBookRepository
{
    public function __construct(
        private CreateBookRepository $bookRepository
    ) {
    }

    public function create(Book $model): void
    {
        $this->bookRepository->create($model);
    }
}
