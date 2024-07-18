<?php get_header();

$theme = get_option("immo_theme", "1");

include(__DIR__ . "/theme/headers/header_$theme.php");

get_footer();
