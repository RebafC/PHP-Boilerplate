<?php

namespace App\Contollers;

use App\Classes\Twig;

class Home
{
    public function render($args): void
    {
        Twig::render(
            '/main.twig',
            [
                'title' => 'Hello Brian example',
                'content' => 'hello  brian',
            ]
        );
    }
}
