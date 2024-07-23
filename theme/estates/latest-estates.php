<?php

$estates = [
    [
        'ville' => 'Paris',
        'cp' => '5200',
        'title' => 'Villa contemporaine 13 pièces - piscine',
        'dimension' => 320,
        'price' => 100_000
    ],
    [
        'ville' => 'Paris',
        'cp' => '5200',
        'title' => 'Villa contemporaine 13 pièces - piscine',
        'dimension' => 320,
        'price' => 100_000
    ],
    [
        'ville' => 'Paris',
        'cp' => '5200',
        'title' => 'Villa contemporaine 13 pièces - piscine',
        'dimension' => 320,
        'price' => 100_000
    ],
    [
        'ville' => 'Paris',
        'cp' => '5200',
        'title' => 'Villa contemporaine 13 pièces - piscine',
        'dimension' => 320,
        'price' => 100_000
    ],
];

?>

<div>
    <h1 class="text-center text-5xl w-full my-10 uppercase bloc__title">Nos biens disponibles</h1>
    <h3 class="text-center text-2xl w-full mb-40">Découvrez nos biens disponibles à la vente</h3>

    <div class='flex items-center justify-center flex-wrap gap-4 mb-40'>
        <?php foreach ($estates as $estate) { ?>

            <div class='w-1/5 flex items-center justify-center flex-wrap border border-solid p-4 cursor-pointer estate__card'>
                <img src="<?= get_template_directory_uri() . '/public/images/bloc_1/maison-cotiere-decor-elegant-moderne-accents-verre-metal.jpg' ?>" alt="" class="w-full mb-4">
                <p class='w-full'>
                    <?= $estate['ville'] ?> ( <?= $estate['cp'] ?>)
                </p>
                <p class='w-full font-bold'>
                    <?= $estate['title'] ?>
                </p>

                <p class='w-full'>
                    <?= $estate['dimension'] ?> m<sup>2</sup> - <?= number_format($estate['price'], 0, ',', ' ') ?> €
                </p>
            </div>

        <?php        } ?>
    </div>
</div>