<?php

declare(strict_types=1);

namespace App\Http\Resources;

final class MessagesResource extends BaseJsonResource
{
    public function toArray($request)
    {
        return [
            'data' => null
        ];
    }
}
