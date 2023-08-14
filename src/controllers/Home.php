<?php

namespace App\Contollers;

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
