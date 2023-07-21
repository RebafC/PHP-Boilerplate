<?php

namespace App\Interfaces;

interface View
{
    public static function render($template, $args = []);
}
