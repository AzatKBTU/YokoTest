<?php

declare(strict_types=1);

namespace App\Http\DTO;

use App\Http\Requests\BookRequest;
use App\Traits\ToArrayTrait;

final class BookDTO
{
    use ToArrayTrait;

    public int $limit;
    public int $page;
    public ?int $id;

    public static function fromRequest(BookRequest $request): self
    {
        $self        = new self();
        $self->limit = (int)$request->input('limit', 20);
        $self->page  = (int)$request->input('page', 1);
        $self->id    = (int)$request->input('id') ?: null;

        return $self;
    }
}
