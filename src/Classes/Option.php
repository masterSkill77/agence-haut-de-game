<?php

namespace Masterskill\AgenceHautDeGamme\Classes;

class Option
{
    public const THEME_OPTION = "immo_theme";
    public const PHONE_OPTION = "immo_phone";


    public static function getThemeOption(string $themeOption, mixed $default = ''): mixed
    {
        return get_option($themeOption, $default);
    }


    public static function setThemeOption(string $themeOption, mixed $value)
    {
        update_option($themeOption, $value);
    }
}
