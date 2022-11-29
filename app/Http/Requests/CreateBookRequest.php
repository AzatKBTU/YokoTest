<?php

declare(strict_types=1);

namespace App\Http\Requests;

use App\Http\DTO\CreateBookDTO;
use Illuminate\Foundation\Http\FormRequest;

final class CreateBookRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'title'       => ['max:255'],
            'author'      => ['max:255']
        ];
    }

    public function getDTO(): CreateBookDTO
    {
        return CreateBookDTO::fromRequest($this);
    }
}
