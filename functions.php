<?php

require_once dirname(__FILE__) . "/vendor/autoload.php";

use Masterskill\AgenceHautDeGamme\Classes\Admin;
use Masterskill\AgenceHautDeGamme\Classes\Menu;
use Masterskill\AgenceHautDeGamme\Classes\PostType;
use Masterskill\AgenceHautDeGamme\Classes\Script;
use Masterskill\AgenceHautDeGamme\Classes\Support;

define("AGENCE_IMMO_ASSETS_DIRECTORY", get_template_directory_uri() . '/public');

define("PUBLIC_IMAGES_DIRECTORY", get_template_directory_uri() . '/public/images');

Menu::register();
Script::register();
Support::register();
Admin::register();
PostType::register();
