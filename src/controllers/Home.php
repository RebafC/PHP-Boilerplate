<?php

namespace App;

class Home
{
    public function render($args)
    {
        Twig::render(
            '/main.html.twig',
            [
                'title' => 'Hello Brian example',
                'content' => 'hello  brian',
            ]
        );
    }
}
