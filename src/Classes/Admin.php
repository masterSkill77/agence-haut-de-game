<?php

namespace Masterskill\AgenceHautDeGamme\Classes;

use Masterskill\AgenceHautDeGamme\Interfaces\IClass;

class Admin implements IClass
{
    public static function register(): void
    {
        add_action('admin_menu', [Admin::class, 'register_new_admin_menu']);
    }


    public static function register_new_admin_menu()
    {
        add_menu_page('Administration du template', 'Administration du template', 'manage_options', 'template-administration', [Admin::class, 'render'], 'dashicons-admin-tools');
    }

    public static function render()
    {
        include(get_template_directory() . '/pages/admin/index.php');
    }
}
