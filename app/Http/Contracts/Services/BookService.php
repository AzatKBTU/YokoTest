<?php

declare(strict_types=1);

namespace App\Http\Contracts\Services;

use App\Http\DTO\BookDTO;
use Illuminate\Pagination\LengthAwarePaginator;

interface BookService
{
    public function getAll(BookDTO $DTO): LengthAwarePaginator;
}
