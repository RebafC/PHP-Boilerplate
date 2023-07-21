<?php

namespace App\Controllers;

class Example
{
    public function render($args)
    {
        Twig::render('/example.html.twig', []);
    }
}
