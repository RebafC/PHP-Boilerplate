<?php

namespace App;

class Example
{
    public function render($args)
    {
        View::render('/example.html.twig', []);
    }
}
