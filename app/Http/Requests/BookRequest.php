<?php

namespace App\Http\Requests;

use App\Http\DTO\BookDTO;
use Illuminate\Foundation\Http\FormRequest;

final class BookRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'limit'          => ['nullable', 'integer'],
            'page'           => ['nullable', 'integer']
        ];
    }

    public function getDTO(): BookDTO
    {
        return BookDTO::fromRequest($this);
    }
}
