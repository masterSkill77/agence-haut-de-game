<?php

namespace Masterskill\AgenceHautDeGamme\Classes;

use Masterskill\AgenceHautDeGamme\Interfaces\IClass;

class Support implements IClass
{
    public static function register(): void
    {
        add_action('after_setup_theme',  [static::class, 'add_theme_supports']);
    }

    public static function add_theme_supports(): void
    {
        add_theme_support('custom-logo');
        add_theme_support('post-thumbnails');
        add_theme_support('title-tag');
    }
}
