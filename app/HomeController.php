<?php

namespace App;

use Tempest\Router\Get;
use Tempest\View\View;

use function Tempest\view;
use function Tempest\Database\query;

final readonly class HomeController
{
    #[Get('/')]
    public function __invoke(): View
    {
        $authors = query(Author::class)->all(['books']);

        dd($authors);
        return view('./home.view.php');
    }
}
