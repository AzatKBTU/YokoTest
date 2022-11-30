<?php

declare(strict_types=1);

namespace App\Http\Resources;

final class BookResource extends BaseJsonResource
{
    public function toArray($request): array
    {
        return [
            'id'          => $this->resource->id,
            'title'       => $this->resource->title,
            'description' => $this->resource->description,
            'author'      => $this->resource->author,
            'created_at'  => $this->resource->created_at
        ];
    }
}
