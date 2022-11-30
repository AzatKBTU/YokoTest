<?php

declare(strict_types=1);

namespace App\Http\Contracts\Queries;

use Illuminate\Pagination\LengthAwarePaginator;
use App\Http\DTO\BookDTO;

interface BookQuery
{
    public function findAllPaginated(BookDTO $DTO): LengthAwarePaginator;
}
