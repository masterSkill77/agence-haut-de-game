<?php
$teams = [
    [
        'firstName' => 'Clairmont',
        'lastName' => 'RAJAONARISON',
        'email' => 'clairmont@koders.mg',
        'status' => 'Agent spécialiste',
        'photo' => 'photo_agent1.png'
    ],
    [
        'firstName' => 'Clairmont',
        'lastName' => 'RAJAONARISON',
        'email' => 'clairmont@koders.mg',
        'status' => 'Agent spécialiste',
        'photo' => 'photo_agent2.png'
    ],
    [
        'firstName' => 'Clairmont',
        'lastName' => 'RAJAONARISON',
        'email' => 'clairmont@koders.mg',
        'status' => 'Agent spécialiste',
        'photo' => 'photo_agent3.png'
    ],
]

?>


<div class="teams__container py-20">
    <h1 class="text-center text-6xl w-full my-10 bloc__title">Notre équipe</h1>
    <h3 class="w-full text-center text-4xl mb-20">Faites confiance à vos experts dans vos projets immobiliers</h3>

    <div class="flex items-center justify-center mx-10 gap-20 my-[10%]">
        <?php foreach ($teams as $agent) { ?>
            <div class="w-[25%] relative flex flex-wrap items-center justify-center">
                <img src="<?= get_template_directory_uri() . '/public/images/agents/' . $agent['photo'] ?>" alt="" class="rounded-full image__agent mx-auto">
                <div class="text-center absolute card__agent w-full pt-36 top-[50%] min-h-[250px]">
                    <h1 class="bloc__title"><?= $agent['firstName'] . " " . $agent['lastName'] ?></h1>
                    <h2 class=""><?= $agent['status'] ?></h2>
                    <hr class="my-8 w-4/5 mx-auto" />
                    <div>
                        <p>Spécialiste secteur :</p>
                        <p>Communes</p>
                    </div>
                    <div class="mt-8 mb-4">
                        <div class="bloc__title flex items-center justify-center gap-4">
                            <img src="<?= get_template_directory_uri() . '/public/images/top__icons/telephone.png' ?>" class="w-4 h-4">
                            <span>06 01 02 03 04</span>
                        </div>
                        <div class="bloc__title flex items-center justify-center gap-4">
                            <img src="<?= get_template_directory_uri() . '/public/images/top__icons/enveloppe.png' ?>" class="w-4 h-4">
                            <span>Envoyer un email</span>
                        </div>
                    </div>
                </div>
            </div>

        <?php } ?>
    </div>
</div>