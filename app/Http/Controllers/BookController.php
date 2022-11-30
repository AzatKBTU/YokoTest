<?php

namespace App\Http\Controllers;

use App\Http\Commands\CreateBookCommand;
use App\Http\Requests\BookRequest;
use App\Http\Requests\CreateBookRequest;
use App\Http\Resources\BooksResource;
use App\Http\Resources\MessagesResource;
use App\Http\Services\BookService;
use Illuminate\Http\Request;

final class BookController extends Controller
{
    public function __construct(
        private BookService $discountService
    ) {
    }

    public function store(CreateBookRequest $request): MessagesResource
    {
        $this->dispatch(new CreateBookCommand(
            $request->getDTO()
        ));

        return (new MessagesResource(null))
            ->setMessage('Кинга успешно создана');
    }

    public function index(BookRequest $request): BooksResource
    {
        $book = $this->discountService->getAll($request->getDTO());

        return new BooksResource($book);
    }
}
