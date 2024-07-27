<?php

use Masterskill\AgenceHautDeGamme\Classes\Option;

$saved = false;
$error = false;

if (isset($_POST['submit'])) {
    try {
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

        if (isset($_POST[Option::FB_OPTION])) {
            Option::setThemeOption(Option::FB_OPTION, $_POST[Option::FB_OPTION]);
        }

        if (isset($_POST[Option::INSTA_OPTION])) {
            Option::setThemeOption(Option::INSTA_OPTION, $_POST[Option::INSTA_OPTION]);
        }

        if (isset($_POST[Option::LN_OPTION])) {
            Option::setThemeOption(Option::LN_OPTION, $_POST[Option::LN_OPTION]);
        }

        if (isset($_POST[Option::YT_OPTION])) {
            Option::setThemeOption(Option::YT_OPTION, $_POST[Option::YT_OPTION]);
        }

        $saved = true;
    } catch (Exception $e) {
        $error = true;
    }
}

?>
<?php if ($saved) : ?>

    <div class="alert__success">
        Changements enregistrés
    </div>

<?php endif;
if ($error) : ?>
    <div class="alert__error">
        Une erreur est survenue
    </div>
<?php endif; ?>
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

    <hr />

    <div>
        <h1>Réseaux sociaux</h1>
        <div class="theme__config">
            <h2>Entrer les liens pour les réseaux sociaux appropriés :</h2>
            <div class="input__rs">
                <label for="<?= Option::INSTA_OPTION ?>">Instagram :</label><input id="<?= Option::INSTA_OPTION ?>" type="text" name="<?= Option::INSTA_OPTION ?>" value="<?= Option::getThemeOption(Option::INSTA_OPTION) ?>" />
            </div>
            <div class="input__rs">
                <label for="<?= Option::LN_OPTION ?>">Linkedin :</label><input id="<?= Option::LN_OPTION ?>" type="text" name="<?= Option::LN_OPTION ?>" value="<?= Option::getThemeOption(Option::LN_OPTION) ?>" />
            </div>
            <div class="input__rs">
                <label for="<?= Option::FB_OPTION ?>">Facebook :</label><input id="<?= Option::FB_OPTION ?>" type="text" name="<?= Option::FB_OPTION ?>" value="<?= Option::getThemeOption(Option::FB_OPTION) ?>" />
            </div>
            <div class="input__rs">
                <label for="<?= Option::YT_OPTION ?>">Youtube :</label><input id="<?= Option::YT_OPTION ?>" type="text" name="<?= Option::YT_OPTION ?>" value="<?= Option::getThemeOption(Option::YT_OPTION) ?>" />
            </div>

        </div>

    </div>



    <div class="submit__button">
        <input type="submit" class="button-primary" value="<?= _e('Save Changes') ?>" name="submit" />
    </div>
</form>