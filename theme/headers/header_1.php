<?php
$description = get_bloginfo('description');
?>

<div class="flex items-center justify-center hero__container" style="background-image: url(<?= get_template_directory_uri() . '/public/images/FOND_EN_TETE_TEMPLATE1.jpg' ?>);">
    <div class="w-full">
        <h1 class="w-full text-white">
            Votre agence immobilière
        </h1>
        <h3 class="w-full text-center text-4xl text-white"><?= $description ?></h3>
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

<div class="hero__two__container py-20">
    <h1 class="text-center text-6xl w-full my-10 bloc__title">Votre agence immobilière</h1>
    <h3 class="w-full text-center text-4xl mb-20"><?= $description ?></h3>


    <div class="text-center w-1/4 mx-auto">
        <button class="contact__button py-3 px-8 rounded-lg">Contactez-nous</button>
    </div>

    <div class="flex items-center justify-center mx-10 gap-20 mt-20">
        <img src="<?= get_template_directory_uri() . '/public/images/bloc_1/maison-cotiere-decor-elegant-moderne-accents-verre-metal.jpg' ?>" alt="" class="w-[30%]">
        <img src="<?= get_template_directory_uri() . '/public/images/bloc_1/maison-cotiere-decor-elegant-moderne-accents-verre-metal.jpg' ?>" alt="" class="w-[30%]">
        <img src="<?= get_template_directory_uri() . '/public/images/bloc_1/maison-cotiere-decor-elegant-moderne-accents-verre-metal.jpg' ?>" alt="" class="w-[30%]">
    </div>
</div>