<?php

declare(strict_types=1);

namespace App\Http\Queries\Eloquent;

use App\Http\Contracts\Queries\BookQuery as BookQueryContract;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Http\DTO\BookDTO;
use App\Models\Book;

final class BookQuery implements BookQueryContract
{

    public function findAllPaginated(BookDTO $DTO): LengthAwarePaginator
    {
        return Book::query()
            ->when($DTO->id, fn($builder) => $builder->where('id', $DTO->id))
            ->orderBy('id', 'desc')
            ->paginate(perPage: $DTO->limit, page: $DTO->page);
    }
}
