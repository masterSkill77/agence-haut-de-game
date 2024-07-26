<?php wp_footer() ?>
<div class="footer__container">
    <div class="w-1/3 flex justify-center items-start">
        <?php

        $custom_logo_id = get_theme_mod('custom_logo');
        $logo = wp_get_attachment_image_src($custom_logo_id, 'full');
        $url = '';
        if (has_custom_logo()) {
            $url = esc_url($logo[0]);
        }
        ?>
        <img src="<?= $url ?>" class="w-1/2 h-36" />
    </div>
    <div class="w-1/3 flex justify-center items-start">
        TEST
    </div>
    <div class="w-1/3 flex justify-center items-start">
        TEST
    </div>
</div>

</body>

</html>