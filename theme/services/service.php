<?php
$services = [
    'Service 1' => 'description',
    'Service 2' => 'description',
    'Service 3' => 'description'
];

?>

<div class="min-h-[900px] p-24 text-white" style="background-image: url(<?= get_template_directory_uri() . '/public/images/bloc_1/fond_marron2.jpg' ?>);">
    <h1 class="text-center text-5xl w-full my-10 uppercase">Profitez de nos services exclusifs</h1>
    <h3 class="text-center text-2xl w-full mb-40">Nous mettons à votre disposition un large panel de services selon vos besoins</h3>

    <div class="w-full flex items-center justify-evenly">
        <?php foreach ($services as $service => $description) { ?>
            <div class="p-4 w-1/4">

                <div class="flex items-center justify-center flex-wrap">
                    <div class="w-full flex items-center justify-center mb-10">
                        <div class="w-24 h-24 p-4 rounded-full bg-white">
                            <img src="<?= get_template_directory_uri() . '/public/images/top__icons/prestations-de-service.png' ?>" alt="">
                        </div>
                    </div>
                    <div class="w-full text-center">
                        <p class="font-bold">
                            <?= $service ?>
                        </p>
                        <p>
                            <?= $description ?>
                        </p>
                    </div>
                </div>

            </div>

        <?php } ?>
    </div>
</div>