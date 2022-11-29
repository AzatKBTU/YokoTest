<?php

namespace App\Http\Controllers;

use App\Http\Commands\CreateBookCommand;
use App\Http\Requests\CreateBookRequest;
use App\Http\Resources\MessagesResource;
use Illuminate\Http\Request;

final class BookController extends Controller
{
    public function store(CreateBookRequest $request): MessagesResource
    {
        $this->dispatch(new CreateBookCommand(
            $request->getDTO()
        ));

        return (new MessagesResource(null))
            ->setMessage('Кинга успешно создана');
    }
}
