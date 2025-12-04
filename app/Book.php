<?php

namespace App;

use Tempest\Database\Lazy;
use Tempest\Database\PrimaryKey;

final class Book
{
    public PrimaryKey $id;

    public string $title;

    #[Lazy]
    public Author $author;
}
