<?php

namespace App\seeders;

use App\Author;
use App\Book;
use Tempest\Database\DatabaseSeeder;
use UnitEnum;
use function Tempest\Database\query;

final class BookSeeder implements DatabaseSeeder
{
    public function run(null|string|UnitEnum $database): void
    {
        $author_id = query(Author::class)
            ->insert(
                name: 'Jules Verne',
            )
            ->onDatabase($database)
            ->execute();

        query(Book::class)
            ->insert(
                title: 'Timeline Taxi',
                author_id: $author_id,
            )
            ->onDatabase($database)
            ->execute();
    }
}