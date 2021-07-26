<?php

namespace App;

class Example
{
    public function render($args)
    {
        Twig::render('/example.html.twig', []);
    }
}
