<?php
$description = get_bloginfo('description');
?>

<div class="flex items-center justify-center hero__container" style="background-image: url(<?= get_template_directory_uri() . '/public/images/FOND_EN_TETE_TEMPLATE1.jpg' ?>);">
    <div class="w-full">
        <h1 class="w-full">
            Votre agence immobilière
        </h1>
        <h3 class="w-full text-center text-4xl"><?= $description ?></h3>
    </div>
    <div class="w-full flex items-center justify-center gap-5">
        <div class="w-1/4 text-center card__link__container">Acheter dans l'ancien</div>
        <div class="w-1/4 text-center card__link__container">Louer</div>
        <div class="w-1/4 text-center card__link__container">Estimer</div>
    </div>

    <div class="fixed top-[30%] right-2 w-[5%]">
        <div class="button__call__action">
            <img src="<?= get_template_directory_uri() . '/public/images/top__icons/email.png' ?>" alt="" class="w-15 h-15">
        </div>
        <div class="button__call__action">
            <img src="<?= get_template_directory_uri() . '/public/images/top__icons/calculatrice.png' ?>" alt="" class="w-15 h-15">
        </div>

        <div class="button__call__action">
            <img src="<?= get_template_directory_uri() . '/public/images/top__icons/donnees-personnelles.png' ?>" alt="" class="w-15 h-15">
        </div>
    </div>
</div>