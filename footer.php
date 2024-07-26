<?php wp_footer() ?>
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
            <img src="<?= PUBLIC_IMAGES_DIRECTORY . "/socials/facebook.png"  ?>" class="w-12" />
            <img src="<?= PUBLIC_IMAGES_DIRECTORY . "/socials/instagram.png"  ?>" class="w-12" />
            <img src="<?= PUBLIC_IMAGES_DIRECTORY . "/socials/linkedin.png"  ?>" class="w-12" />
            <img src="<?= PUBLIC_IMAGES_DIRECTORY . "/socials/youtube.png"  ?>" class="w-12" />
        </div>
    </div>
    <div class="text-white  w-1/3 flex items-start flex-wrap gap-y-4">
        <h1 class="font-bold w-full text-2xl">Contactez-nous</h1>
        <span class="w-full"><?= get_bloginfo('admin_email') ?></span>
        <span class="w-full">09 01 02 03 04</span>
    </div>
    <div class="text-white  w-1/3 flex items-start flex-wrap gap-y-4">
        <h1 class="font-bold w-full text-2xl">Se connecter</h1>
        <a href="<?= wp_login_url() ?>" class="button__container rounded-xl">
            Espace propriétaire
        </a>
    </div>
</div>

</body>

</html>