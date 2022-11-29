<?php

declare(strict_types=1);

namespace App\Http\DTO;

use App\Http\Requests\CreateBookRequest;

final class CreateBookDTO
{
    public string $title;
    public string $description;
    public ?string $author;
    public ?string $created_at;

    public static function fromRequest(CreateBookRequest $request): self
    {
        $self = new self();

        $request->input('title') != null
            ? $title = $request->input('title')
            : $title = $request->input('name');

        $request->input('description') != null
            ? $description = $request->input('description')
            : $description = $request->input('desc');

        $self->title       = $title;
        $self->description = $description;
        $self->author      = $request->input('author');
        $self->created_at  = $request->input('createdAt');

        return $self;
    }
}
