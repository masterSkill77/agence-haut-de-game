<?php

namespace Masterskill\AgenceHautDeGamme\Classes;

use Masterskill\AgenceHautDeGamme\Interfaces\IClass;

class Script implements IClass
{
    public static function register(): void
    {
        add_action('wp_enqueue_scripts', [Script::class, 'enqueue_scripts'], 2);
        add_action('wp_enqueue_scripts', [Script::class, 'enqueue_styles'], 2);
    }

    /**
     * Enqueue all JS scripts
     */

    public static function enqueue_scripts()
    {
        $internal_scripts = [];

        foreach ($internal_scripts as $key => $script) {
            wp_enqueue_script($key, get_template_directory_uri() . "/public/js/$script.js", [], null, true);
        }

        $external_scripts = [];

        foreach ($external_scripts as $key => $script) {
            wp_enqueue_script($key, $script, [], null, true);
        }
    }

    /**
     * Enqueue all CSS file
     */

    public static function enqueue_styles()
    {
        $styles = ['app', 'header'];

        foreach ($styles as $style) {
            wp_enqueue_style($style, get_template_directory_uri() . "/public/css/$style.css", [], null, 'screen');
        }
    }
}
