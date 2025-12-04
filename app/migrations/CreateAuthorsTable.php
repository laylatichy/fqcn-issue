<?php

namespace App\migrations;

use Tempest\Database\MigratesUp;
use Tempest\Database\QueryStatement;
use Tempest\Database\QueryStatements\CreateTableStatement;

final class CreateAuthorsTable implements MigratesUp
{
    public string $name = 'create_authors_table';

    public function up(): QueryStatement
    {
        return new CreateTableStatement('authors')
            ->primary()
            ->text('name');
    }
}