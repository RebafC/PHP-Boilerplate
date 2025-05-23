<?php

namespace App\Controllers;

use App\Classes\Twig;

class Example
{
    public function render($args): void
    {
        Twig::render('/example.html.twig', []);
    }
}
