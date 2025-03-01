<?php

use Masterskill\AgenceHautDeGamme\Classes\Option;

?>
<div class="footer__container">
    <div class="w-1/3 flex justify-center items-start flex-wrap">
        <?php

        $custom_logo_id = get_theme_mod('custom_logo');
        $logo = wp_get_attachment_image_src($custom_logo_id, 'full');
        $url = '';
        if (has_custom_logo()) {
            $url = esc_url($logo[0]);
        }
        ?>
        <img src="<?= $url ?>" class="w-1/2 h-36 mt-[-8%]" />
        <div class="w-full flex items-center justify-center gap-4">
            <?php if (!empty(Option::getThemeOption(Option::FB_OPTION))) : ?> <img src="<?= PUBLIC_IMAGES_DIRECTORY . "/socials/facebook.png"  ?>" onclick="redirectTo('<?= Option::getThemeOption(Option::FB_OPTION) ?>')" class="w-12" /><?php endif ?>
            <?php if (!empty(Option::getThemeOption(Option::INSTA_OPTION))) : ?><img src="<?= PUBLIC_IMAGES_DIRECTORY . "/socials/instagram.png"  ?>" onclick="redirectTo('<?= Option::getThemeOption(Option::INSTA_OPTION) ?>')" class="w-12" /><?php endif ?>
            <?php if (!empty(Option::getThemeOption(Option::LN_OPTION))) : ?><img src="<?= PUBLIC_IMAGES_DIRECTORY . "/socials/linkedin.png"  ?>" onclick="redirectTo('<?= Option::getThemeOption(Option::LN_OPTION) ?>')" class="w-12" /><?php endif ?>
            <?php if (!empty(Option::getThemeOption(Option::YT_OPTION))) : ?><img src="<?= PUBLIC_IMAGES_DIRECTORY . "/socials/youtube.png"  ?>" onclick="redirectTo('<?= Option::getThemeOption(Option::YT_OPTION) ?>')" class="w-12" /><?php endif ?>
        </div>
    </div>
    <div class="text-white  w-1/3 flex items-start flex-wrap gap-y-4">
        <h1 class="text-center font-bold w-full text-2xl">Contactez-nous</h1>
        <span class="text-center w-full"><?= Option::getThemeOption(Option::EMAIL_OPTION) ?></span>
        <span class="text-center w-full"><?= Option::getThemeOption(Option::PHONE_OPTION) ?></span>
    </div>
    <div class="text-white  w-1/3 flex items-start justify-center flex-wrap gap-y-4">
        <h1 class="text-center font-bold w-full text-2xl">Se connecter</h1>
        <a href="<?= wp_login_url() ?>" class="button__container rounded-xl">
            Espace propriétaire
        </a>
    </div>

    <?= wp_nav_menu(['theme_location' => 'agence-footer-menu', 'menu_class' => 'immo__footer__menu', 'container' => '']) ?>
    <div class="w-full text-center text-white">
        &#169; <?= date("Y") ?> - Tous droits réservés
    </div>
</div>
<?php wp_footer() ?>
<script>
    function redirectTo(link) {
        window.location.href = link;
    }
</script>
</body>

</html>