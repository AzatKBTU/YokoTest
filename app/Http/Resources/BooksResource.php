<?php

declare(strict_types=1);

namespace App\Http\Resources;

final class BooksResource extends BaseResourceCollection
{
    public function toArray($request): array
    {
        return [
            'data' => BookResource::collection($this->collection),
        ];
    }
}
