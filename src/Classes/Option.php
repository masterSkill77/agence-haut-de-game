<?php

namespace Masterskill\AgenceHautDeGamme\Classes;

class Option
{
    public const THEME_OPTION = "immo_theme";

    public static function setThemeOption(int $option)
    {
        $option = $option < 0 || $option > 3 ? 1 : $option;

        update_option(Option::THEME_OPTION, $option);
    }

    public static function getThemeOption(): int
    {
        return get_option(Option::THEME_OPTION, 1);
    }
}
