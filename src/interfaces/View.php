<?php

namespace App;

interface View
{
    public static function render($template, $args = []);
}
