<?php

namespace App\Controllers;

class Example
{
    public function render($args): void
    {
        Twig::render('/example.html.twig', []);
    }
}
