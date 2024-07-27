<?php

namespace Masterskill\AgenceHautDeGamme\Classes;

class Option
{
    public const THEME_OPTION = "immo_theme";
    public const PHONE_OPTION = "immo_phone";
    public const EMAIL_OPTION = "immo_email";
    public const API_OPTION = "immo_api";
    public const FB_OPTION = "immo_fb";
    public const LN_OPTION = "immo_ln";
    public const INSTA_OPTION = "immo_insta";
    public const YT_OPTION = "immo_yt";


    public static function getThemeOption(string $themeOption, mixed $default = ''): mixed
    {
        return get_option($themeOption, $default);
    }


    public static function setThemeOption(string $themeOption, mixed $value)
    {
        update_option($themeOption, $value);
    }
}
