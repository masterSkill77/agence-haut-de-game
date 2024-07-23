<?php get_header();

$theme = get_option("immo_theme", "1");

include(__DIR__ . "/theme/headers/header_$theme.php");

include(__DIR__ . '/theme/estates/estates.php');

include(__DIR__ . '/theme/services/service.php');

include(__DIR__ . '/theme/estates/latest-estates.php');

get_footer();
