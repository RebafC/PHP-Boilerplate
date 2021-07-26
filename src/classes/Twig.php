<?php

namespace App;

class Twig implements View
{
    /**
     * Render a view template using Twig
     *
     * @param string $template  The template file
     * @param array $args  Associative array of data to display in the view (optional)
     *
     * @return void
     */
    public static function render($template, $args = [])
    {
        static $twig = null;

        if ($twig === null) {
            $loader = new \Twig\Loader\FilesystemLoader(__DIR__ . '/../templates');
            $twig = new \Twig\Environment($loader, ['autoescape' => false]);
        }

        echo $twig->render($template, $args);
    }
}
