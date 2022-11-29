<?php

namespace App\Http\Repositories;

use App\Models\Book;

final class BookRepository implements CreateBookRepository
{
    public function create(Book $model): void
    {
        $model->saveOrFail();
    }
}
