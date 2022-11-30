<?php

namespace App\Http\Services;

use App\Http\Contracts\Queries\BookQuery;
use App\Http\Contracts\Services\BookService as BookServiceContract;
use App\Http\DTO\BookDTO;
use Illuminate\Pagination\LengthAwarePaginator;

final class BookService implements BookServiceContract
{
    public function __construct(
        private BookQuery $bookQuery
    ) {
    }

    public function getAll(BookDTO $DTO): LengthAwarePaginator
    {
        return $this->bookQuery->findAllPaginated($DTO);
    }
}
