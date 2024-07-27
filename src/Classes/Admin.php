<?php

namespace Masterskill\AgenceHautDeGamme\Classes;

use Masterskill\AgenceHautDeGamme\Interfaces\IClass;

class Admin implements IClass
{
    public static function register(): void
    {
        add_action('admin_menu', [Admin::class, 'register_new_admin_menu']);
        add_action('admin_enqueue_scripts', [Admin::class, 'register_admin_styles']);
    }


    public static function register_admin_styles()
    {
        $styles = ['admin'];
        foreach ($styles as $style) {
            wp_enqueue_style($style, get_template_directory_uri() . "/public/css/$style.css", [], null, 'screen');
        }
    }

    public static function register_new_admin_menu()
    {
        $slug = add_menu_page('Administration du template', 'Administration du template', 'manage_options', 'template-administration', [Admin::class, 'render'], 'dashicons-admin-tools');
    }

    public static function render()
    {
        include(get_template_directory() . '/pages/admin/index.php');
    }
}
