<?php

namespace App\Classes;

use App\Interfaces\View;

class Twig implements View
{
    /**
     * Render a view template using Twig
     *
     * @param string $template  The template file
     * @param array $args  Associative array of data to display in the view (optional)
     *
     */
    public static function render($template, $args = []): void
    {
        static $twig = null;

        if ($twig === null) {
            $loader = new \Twig\Loader\FilesystemLoader(__DIR__ . '/../templates');
            $twig = new \Twig\Environment($loader, ['autoescape' => false]);
        }

        echo $twig->render($template, $args);
    }
}
