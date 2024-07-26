<?php

use Masterskill\AgenceHautDeGamme\Classes\Option;

if (isset($_POST['submit'])) {
    if (isset($_POST[Option::THEME_OPTION])) {
        Option::setThemeOption(Option::THEME_OPTION, $_POST[Option::THEME_OPTION]);
    }

    if (isset($_POST[Option::PHONE_OPTION])) {
        Option::setThemeOption(Option::PHONE_OPTION, $_POST[Option::PHONE_OPTION]);
    }

    if (isset($_POST[Option::EMAIL_OPTION])) {
        Option::setThemeOption(Option::EMAIL_OPTION, $_POST[Option::EMAIL_OPTION]);
    }

    if (isset($_POST[Option::API_OPTION])) {
        Option::setThemeOption(Option::API_OPTION, $_POST[Option::API_OPTION]);
    }
}

?>


<h1 class="title__page">Page d'administration du template</h1>

<form method="POST" action="#">
    <div>
        <h1>Configuration du thème</h1>
        <div class="theme__config">
            <h2>Choisissez la disposition du thème :</h2>
            <select class="select__theme" name="<?= Option::THEME_OPTION ?>">
                <option <?= Option::getThemeOption(Option::THEME_OPTION) == "1" ? 'selected' : '' ?> value="1">Thème 1</option>
                <option <?= Option::getThemeOption(Option::THEME_OPTION) == "2" ? 'selected' : '' ?> value="2">Thème 2</option>
            </select>
        </div>

        <div class="theme__config">
            <h2>Le numéro de téléphone :</h2>
            <input type="text" name="<?= Option::PHONE_OPTION ?>" value="<?= Option::getThemeOption(Option::PHONE_OPTION) ?>" />
        </div>

        <div class="theme__config">
            <h2>L'email de contact :</h2>
            <input type="email" name="<?= Option::EMAIL_OPTION ?>" value="<?= Option::getThemeOption(Option::EMAIL_OPTION) ?>" />
        </div>
    </div>

    <hr />

    <div>
        <h1>Synchronisation avec votre logiciel</h1>
        <div class="theme__config">
            <h2>Clé d'API du logiciel MAPIM IMMO :</h2>
            <input type="password" name="<?= Option::API_OPTION ?>" value="<?= Option::getThemeOption(Option::API_OPTION) ?>" />
        </div>

    </div>

    <div class="submit__button">
        <input type="submit" class="button-primary" value="<?= _e('Save Changes') ?>" name="submit" />
    </div>
</form>