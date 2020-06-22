<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootswatch/4.5.0/minty/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-HqaYdAE26lgFCJsUF9TBdbZf7ygr9yPHtxtg37JshqVQi6CCAo6Qvwmgc5xclIiV" crossorigin="anonymous">

    <link rel="stylesheet" href="formulaireStyle.css">

    <title>Formulaire</title>

</head>


<?php
// ==== déclaration des regex(s) ==== //
// ==== année - mois - jour ==== //
    $regexBirthDate = '/^[0-9]{4}-[0-9]{2}-[0-9]{2}$/';
// ==== (+33) 06/07... xx xx xx xx ==== //
    $regexPhone = '/^(\+33|0)[1-79][0-9]{8}$/';
    $regexAddress = "/^[A-Z0-9,éèêâôûüï'\- ]+$/i";
    $regexZipCode = '/^((2A|2B)|[0-9]{5})$/';
    $regexNames = '/^[a-zéèîïêëç]+((?:\-|\s)[a-zéèéîïêëç]+)?$/i';
// ==== Validation du formulaire ==== //
$isSubmitted = false;
// ==== Initialisation des variables ==== //
$firstName=''; $lastName=''; $birthDate='';
$birthCountry=''; $nationality=''; $address=''; $zipCode=''; $city='';
$mail=''; $phone=''; $poleEmploi=''; $diploma='';
$badge=''; $codecademyProfile='';
$heroes=''; $hacks=''; $skills='';
$errors = [];
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $isSubmitted = true;
    // == validation des champs == //
    //
    $firstName= trim(filter_input(INPUT_POST, 'firstName', FILTER_SANITIZE_STRING));
    if (empty ($firstName)){
        $errors['firstName'] = 'Merci de renseigner votre prénom.';
    }elseif (!preg_match($regexNames,$firstName)) {
        $errors['firstName'] = 'Le format attendu n\'est pas respecté.';
    }
    //
    $lastName= trim(filter_input(INPUT_POST, 'lastName', FILTER_SANITIZE_STRING));
    if (empty ($lastName)){
        $errors['lastName'] = 'Merci de renseigner votre nom.';
    }elseif (!preg_match($regexNames,$lastName)) {
        $errors['lastName'] = 'Le format attendu n\'est pas respecté.';
    }
    //
    $birthCountry= trim(filter_input(INPUT_POST, 'birthCountry', FILTER_SANITIZE_STRING));
    if (empty ($birthCountry)){
        $errors['birthCountry'] = 'Merci de renseigner votre pays de naissance.';
    }elseif (!preg_match($regexNames,$birthCountry)) {
        $errors['birthCountry'] = 'Le format attendu n\'est pas respecté.';
    }
    //
    $nationality= trim(filter_input(INPUT_POST, 'nationality', FILTER_SANITIZE_STRING));
    if (empty ($nationality)){
        $errors['nationality'] = 'Merci de renseigner votre nationalité.';
    }elseif (!preg_match($regexNames,$nationality)) {
        $errors['nationality'] = 'Le format attendu n\'est pas respecté.';
    }
    //
    $birthDate= trim(filter_input(INPUT_POST, 'birthDate', FILTER_SANITIZE_STRING));
    if (empty ($birthDate)){
        $errors['birthDate'] = 'Merci de renseigner votre date de naissance.';
    }elseif (!preg_match($regexBirthDate,$birthDate)) {
        $errors['birthDate'] = 'Le format attendu n\'est pas respecté.';
    }
    // ==== Numéro de tel
    $phone= trim(filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_STRING));
    if (empty ($phone)){
        $errors['phone'] = 'Merci de renseigner correctement votre numéro de téléphone.';
    }elseif (!preg_match($regexPhone,$phone)) {
        $errors['phone'] = 'Le format attendu n\'est pas respecté.';
    }
    // ==== Adresse Mail
    $mail= trim(filter_input(INPUT_POST, 'mail', FILTER_SANITIZE_STRING));
    if (empty ($mail)){
        $errors['mail'] = 'Merci de renseigner correctement votre adresse électronique.';
    }elseif (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
        $errors['mail'] = 'Le format attendu n\'est pas respecté.';
    }
    // ==== Adresse
    $address= trim(filter_input(INPUT_POST, 'address', FILTER_SANITIZE_STRING));
    if (empty ($address)){
        $errors['address'] = 'Merci de renseigner une adresse convenable.';
    }elseif (!preg_match($regexAddress,$address)) {
        $errors['address'] = 'Le format attendu n\'est pas respecté.';
    }
        // ==== Code postal
    $zipCode= trim(filter_input(INPUT_POST, 'zipCode', FILTER_SANITIZE_STRING));
    if (empty ($zipCode)){
        $errors['zipCode'] = 'Merci de renseigner votre code postal.';
    }elseif (!preg_match($regexZipCode,$zipCode)) {
        $errors['zipCode'] = 'Le format attendu n\'est pas respecté.';
    }
        // ==== Ville
    $city= trim(filter_input(INPUT_POST, 'city', FILTER_SANITIZE_STRING));
    if (empty ($city)){
        $errors['city'] = 'Merci de renseigner votre nom de ville.';
    }elseif (!preg_match($regexNames,$city)) {
        $errors['city'] = 'Le format attendu n\'est pas respecté.';
    }
    // ==== FORMATIONS ET XPs ==== //
    $poleEmploi= trim(filter_input(INPUT_POST, 'poleEmploi', FILTER_SANITIZE_STRING));
    if (empty($poleEmploi)){
        $errors['poleEmploi'] = 'Merci de renseigner votre identifiant.';
    }
    $diploma= trim(filter_input(INPUT_POST, 'diploma', FILTER_SANITIZE_STRING));
    if (empty($diploma)){
        $errors['diploma'] = 'Merci de selectioner votre diplôme.';
    }
    $badge= trim(filter_input(INPUT_POST, 'badge', FILTER_SANITIZE_NUMBER_INT));
    if (empty($badge)){
        $errors['badge'] = 'Merci d\'informer votre nombre de badges valides.';
    }elseif (!filter_var($badge, FILTER_VALIDATE_INT)) {
        $errors['badge'] = 'On veut un chiffre!!!!';
    }
    $codecademyProfile= trim(filter_input(INPUT_POST, 'codecademyProfile', FILTER_SANITIZE_STRING));
    if (empty($codecademyProfile)){
        $errors['codecademyProfile'] = 'Merci d\'informer votre lien Codecademy valides.';
    }elseif (!filter_var($codecademyProfile, FILTER_VALIDATE_URL)) {
        $errors['codecademyProfile'] = 'Ton lien, on te dit!!!!';
    }
    //
    $hacks = trim(filter_input(INPUT_POST, 'hacks', FILTER_SANITIZE_STRING));
    //
    $heroes = trim(filter_input(INPUT_POST, 'heroes', FILTER_SANITIZE_STRING));
    //
    $skills = trim(filter_input(INPUT_POST, 'skills', FILTER_SANITIZE_STRING));
    if (!isset($skills)){
        $errors['skills'] = 'Coche ta case, te dis-je!.';
    }
    var_dump($errors);
}

?>

<body>
    <header class="headerContainer">
        <div></div>
    </header>
    <div class="containerForm">
        <div class="grid-container">
            <?php if($isSubmitted && count($errors) != 0): ?>
            <h1 class="">FORMULAIRE D'INSCRIPTION</h1>
            <form action="" method="post">
                <p>
                    <input class="inputForm" name="lastName" placeholder="Nom" value="<?= $lastName ?>">
                    <span class="error text-danger"><?= $errors['lastName'] ?? '' ?></span>
                </p>
                <p>
                    <input class="inputForm" name="firstName" placeholder="Prénom" value="<?= $firstName ?>">
                    <span class="error text-danger"><?= $errors['firstName'] ?? '' ?></span>
                </p>
                <p>
                    <input class="inputForm" type="date" name="birthDate" placeholder="Date de Naissance"
                        value="<?= $birthDate ?>">
                    <span class="error text-danger"><?= $errors['birthDate'] ?? '' ?></span>
                </p>
                <p>
                    <input class="inputForm" name="birthCountry" placeholder="Pays de Naissance"
                        value="<?= $birthCountry ?>">
                    <span class="error text-danger"><?= $errors['birthCountry'] ?? '' ?></span>
                </p>
                <p>
                    <input class="inputForm" name="nationality" placeholder="Nationalité" value="<?= $nationality ?>">
                    <span class="error text-danger"><?= $errors['nationality'] ?? '' ?></span>
                </p>
                <p>
                    <input class="inputForm" name="address" placeholder="Adresse postale" value="<?= $address ?>">
                    <span class="error text-danger"><?= $errors['address'] ?? '' ?></span>
                </p>
                <p>
                    <input class="inputForm" name="zipCode" placeholder="Code postale" value="<?= $zipCode ?>">
                    <span class="error text-danger"><?= $errors['zipCode'] ?? '' ?></span>
                </p>
                <p>
                    <input class="inputForm" name="city" placeholder="VIlle" value="<?= $city ?>">
                    <span class="error text-danger"><?= $errors['city'] ?? '' ?></span>
                </p>
                <p>
                    <input class="inputForm" type="email" name="mail" id="" placeholder="adresse électronique"
                        value="<?= $mail ?>">
                    <span class="error text-danger"><?= $errors['email'] ?? '' ?></span>
                </p>
                <p>
                    <input class="inputForm" type="text" name="phone" id="" placeholder="numéro de téléphone"
                        value="<?= $phone ?>">
                    <span class="error text-danger"><?= $errors['phone'] ?? '' ?></span>
                </p>
                <p>
                    <select class="selectOption" name="diploma" id="levelSchool" value="<?= $diploma ?>">
                        <option value=" "> </option>
                        <option value="Sans Baccalauréat" <?= $diploma == 'Sans Baccalauréat' ? 'selected' : '' ?>>Sans
                            Baccalauréat</option>
                        <option value="Niveau Baccalauréat" <?= $diploma == 'Niveau Baccalauréat' ? 'selected' : '' ?>>
                            Niveau Baccalauréat</option>
                        <option value="Baccalauréat +2" <?= $diploma == 'Baccalauréat +2' ? 'selected' : '' ?>>
                            Baccalauréat +2</option>
                        <option value="Baccalauréat +3" <?= $diploma == 'Baccalauréat +3' ? 'selected' : '' ?>>
                            Baccalauréat +3</option>
                        <option value="Baccalauréat +4 et/ou supérieur"
                            <?= $diploma == 'Baccalauréat +4 et/ou supérieur' ? 'selected' : '' ?>>Baccalauréat +4 et/ou
                            supérieur</option>
                    </select>
                </p>
                <div class="select_arrow">
                </div>
                <p>
                    <input class="inputForm" name="poleEmploi" placeholder="Identifiant Pôle Emploi"
                        value="<?= $poleEmploi ?>">
                    <span class="error text-danger"><?= $errors['poleEmploi'] ?? '' ?></span>
                </p>
                <p>
                    <input class="inputForm" name="badge" placeholder="Nombre de badge" value="<?= $badge ?>">
                    <span class="error text-danger"><?= $errors['badge'] ?? '' ?></span>
                </p>
                <p>
                    <input class="inputForm" name="codecademyProfile" placeholder="Liens Codecademy"
                        value="<?= $codecademyProfile ?>">
                    <span class="error text-danger"><?= $errors['codecademyProfile'] ?? '' ?></span>
                </p>
                <div>
                    <p>
                        <label for="textArea">Si vous étiez un super-heros ou super-heroine, qui seriez-vous et
                            pourquoi?</label>
                    </p>
                    <textarea class="textArea" cols="62" rows="3" type="text-area" name="heroes"></textarea>
                </div>
                <div>
                    <p>
                        <label for="textArea">
                            Racontez-nous un de vos "hacks"
                            (pas forcément technique ou informatique)
                        </label>
                    </p>
                    <textarea class="textArea" cols="62" rows="3" type="text-area" name="hacks"></textarea>
                </div>
                <div class="checkboxContainer">
                    <p>Avez-vous déjà eu une experience avec la programmation et/ou l'informatique avant de remplir ce
                        formulaire?
                    </p>
                    <label for="yes">OUI</label>
                    <input type="radio" id="yes" name="skills" value="yes" <?= $skills == 'yes' ? 'checked' : '' ?>>
                    <label for="no">NON</label>
                    <input type="radio" id="no" name="skills" value="no" <?= $skills == 'no' ? 'checked' : '' ?>>
                    <span class="error text-danger"><?= $errors['skills'] ?? '' ?></span>
                </div>


                <input class="validationButton" type="submit" value="Vous soumettre">
            </form>
            <?php else: ?>
            <div>
                <p>Affichage des données utilisateurs</p>
                <p><?= $firstName ?></p>
                <p><?= $lastName ?></p>
                <p><?= $birthDate ?></p>
                <p><?= $birthCountry ?></p>
                <p><?= $nationality ?></p>
                <p><?= $address ?>, <?= $zipCode ?>, <?= $city ?></p>
                <p><a href="mailto:<?= $mail ?>">adresse e-mail</a></p>
                <p><a href="tel:<?= $phone ?>">téléphone</a></p>
                <p><?= $diploma ?></p>
                <p><?= $poleEmploi ?></p>
                <p><?= $badge ?></p>
                <p><a href="<?= $codecademyProfile ?>">Lien Codecademy</a></p>
                <p><?= $hacks ?></p>
                <p><?= $heroes ?></p>
                <p><?= $skills ?></p>
            </div>
            <?php endif; ?>
        </div>
    </div>
</body>

</html>