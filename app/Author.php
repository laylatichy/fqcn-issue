<?php

namespace App;

use Tempest\Database\Eager;use Tempest\Database\HasMany;use Tempest\Database\PrimaryKey;

final class Author
{
    public PrimaryKey $id;

    /** @var Book[] */
    #[HasMany]
    public array $books;
}
