<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://cdn.tailwindcss.com"></script>

    <?php wp_head() ?>
</head>

<body class="p-0 m-0">
    <div class="immo__header">
        <div class="immo__logo">
            <?php

            $custom_logo_id = get_theme_mod('custom_logo');
            $logo = wp_get_attachment_image_src($custom_logo_id, 'full');
            $url = '';
            if (has_custom_logo()) {
                $url = esc_url($logo[0]);
            }
            ?>
            <a href="<?= bloginfo('url') ?>">
                <img src="<?= $url ?>" />
            </a>

        </div>
        <?= wp_nav_menu(['theme_location' => 'agence-main-menu', 'menu_class' => 'immo__menu', 'container' => '']) ?>
    </div>