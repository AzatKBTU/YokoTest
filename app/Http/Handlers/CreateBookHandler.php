<?php

declare(strict_types=1);

namespace App\Http\Handlers;

use App\Http\Commands\CreateBookCommand;
use App\Http\Repositories\CreateBookRepository;
use App\Models\Book;

final class CreateBookHandler
{
    public function __construct(private CreateBookRepository $createBookRepository)
    {
    }

    public function handle(CreateBookCommand $command): void
    {
        $book = new Book();

        $book->setTitle($command->getDTO->title);
        $book->setDescription($command->getDTO->description);
        $book->setAuthor($command->getDTO->author);
        $book->setTime($command->getDTO->created_at);

        $this->createBookRepository->create($book);
    }
}
