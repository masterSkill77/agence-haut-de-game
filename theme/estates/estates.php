<?php

use Masterskill\AgenceHautDeGamme\API\Endpoint;
use Masterskill\AgenceHautDeGamme\Classes\Option;

$apiCall = Endpoint::get('/bien');

$biens = ($apiCall['data']);

?>

<div>
    <h1 class="text-center text-5xl w-full my-10 uppercase bloc__title">Nos nouveautés</h1>
    <h3 class="text-center text-2xl w-full mb-40">Découvrez nos derniers biens proposés</h3>

    <div class='flex items-center justify-center flex-wrap gap-4 mb-40'>
        <?php if (Option::getThemeOption(Option::API_OPTION)) :  foreach ($biens as $estate) { ?>

                <div class='w-1/5 flex items-center justify-center flex-wrap border border-solid p-4 cursor-pointer estate__card'>
                    <img src="<?= get_template_directory_uri() . '/public/images/bloc_1/maison-cotiere-decor-elegant-moderne-accents-verre-metal.jpg' ?>" alt="" class="w-full mb-4">
                    <p class='w-full'>
                        <?= $estate['city'] ?> ( <?= $estate['zap_country'] ?>)
                    </p>
                    <p class='w-full font-bold'>
                        <?= $estate['advertisement']['title'] ?>
                    </p>

                    <p class='w-full'>
                        <?= $estate['land_area'] ?> m<sup>2</sup> - <?= number_format($estate['info_financiere']['info_price'], 0, ',', ' ') ?> €
                    </p>
                </div>

        <?php        }
        endif; ?>
    </div>
</div>