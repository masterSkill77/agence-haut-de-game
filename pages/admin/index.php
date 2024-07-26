<?php

use Masterskill\AgenceHautDeGamme\Classes\Option;

if (isset($_POST['submit'])) {
    if (isset($_POST[Option::THEME_OPTION])) {
        Option::setThemeOption($_POST[Option::THEME_OPTION]);
    }
}

?>


<h1 class="title__page">Page d'administration du template</h1>

<form method="POST" action="#">
    <div class="theme__config">
        <h2>Choisissez la disposition des thèmes :</h2>
        <select class="select__theme" name="immo_theme">
            <option <?= Option::getThemeOption() == "1" ? 'selected' : '' ?> value="1">Thème 1</option>
            <option <?= Option::getThemeOption() == "2" ? 'selected' : '' ?> value="2">Thème 2</option>
        </select>
    </div>
    <div class="submit__button">
        <input type="submit" class="button-primary" value="<?= _e('Save Changes') ?>" name="submit" />
    </div>
</form>