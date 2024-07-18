<?php

namespace Masterskill\AgenceHautDeGamme\Classes;

use Masterskill\AgenceHautDeGamme\Interfaces\IClass;

class Menu implements IClass
{
    public static function register(): void
    {
        add_action('after_setup_theme', [Menu::class, 'register_menu']);
    }


    /**
     * Function for registering the MENU
     */

    public static function register_menu(): void
    {
        register_nav_menus([
            'agence-main-menu' => __('Agence immo principal menu', 'agence'),
        ]);

        register_nav_menus([
            'agence-footer-menu' => __('Agence immo footer menu', 'agence'),
        ]);
    }
}
