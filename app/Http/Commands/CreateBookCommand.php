<?php

declare(strict_types=1);

namespace App\Http\Commands;

use App\Http\DTO\CreateBookDTO;

final class CreateBookCommand
{
    /**
     * @param CreateBookDTO $getDTO
     */
    public function __construct(public CreateBookDTO $getDTO)
    {
    }
}
