<!-- Enoncé :
Créer un formulaire d'inscription dans votre page d'accueil index.php avec les champs suivants :
Civilité de type radio
Prénom, nom de type texte
Date de naissance de type date
Email de type email
Mot de passe de type texte
Confirmation du mot de passe de type texte
Conditions générale d'utilisation de type checkbox
Le traitement du formulaire doit se faire dans la même page.
A la validation du formulaire, afficher le formulaire et les messages d'erreurs s'il y'en a, sinon créer un cookie et stocker y les données de l'utilisateur. -->


<!-- Création de variables et insertion du header et de la barre de navigation. -->

<?php
$titre = 'Inscription';
include 'header.php';
?>

<?php


// Déclaration de REGEX.
$regexNames = '/^[a-zéèîïêëç]+((?:\-|\s)[a-zéèéîïêëç]+)?$/i';
$regexBirthday = '/^((?:19|20)[0-9]{2})-((?:0[1-9])|(?:1[0-2]))-((?:0[1-9])|(?:1[0-9])|(?:2[0-9])|(?:3[01]))$/';
$regexPassword = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W).{8,}/';


// Validation du formulaire.
$isSubmitted = false;


// Déclaration de variables.
$civility = '';
$firstName = '';
$lastName = '';
$birthday = '';
$email = '';
$password = '';
$passwordConfirmation = '';
$cgu = '';
$errors = [];
$post = [];


// Soumission du formulaire.
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $isSubmitted = true;


// Nettoyage des variables, vérification que les variables sont remplies et qu'elles correspondent aux REGEX.


    // Civilité.
    $civility = trim(filter_input(INPUT_POST, 'civility', FILTER_SANITIZE_STRING));
    if (empty($civility)) {
        $errors['civility'] = 'Merci d\'indiquer votre civilité.';
    } elseif ($civility != 1 && $civility != 2) {
        $errors['civility'] = 'La donnée saisie n\'est pas correcte';
    }
    array_push($post, $civility);


    // Prénom.
    $firstName = trim(filter_input(INPUT_POST, 'firstName', FILTER_SANITIZE_STRING));
    if (empty($firstName)) {
        $errors['firstName'] = 'Merci de renseigner votre prénom.';
    } elseif (!preg_match($regexNames, $firstName)) {
        $errors['firstName'] = 'Le format attendu n\'est pas respecté';
    }
    array_push($post, $firstName);


    // Nom.
    $lastName = trim(filter_input(INPUT_POST, 'lastName', FILTER_SANITIZE_STRING));
    if (empty($lastName)) {
        $errors['lastName'] = 'Merci de renseigner votre nom.';
    } elseif (!preg_match($regexNames, $lastName)) {
        $errors['lastName'] = 'Le format attendu n\'est pas respecté';
    }
    array_push($post, $lastName);


    // Date de naissance.
    $birthday = trim(filter_input(INPUT_POST, 'birthday', FILTER_SANITIZE_STRING));
    if (!empty($birthday)) {

        // Création du timestamp d'aujourd'hui.
        $today = strtotime("NOW");
        // Timestamp de mon input date.
        $convertBirthday = strtotime($birthday);
        if (!preg_match($regexBirthday, $birthday)) {
            $errors['birthday'] = 'Le format attendu n\'est pas respecté';
        }
        // Vérification que la date de naissance reste inférieure à NOW.
        elseif ($convertBirthday > $today) {
            $errors['birthday'] = 'Votre date de naissance ne peut pas être supérieure à la date du jour';
        }
    } else {
        $errors['birthday'] = 'Veuillez renseigner votre date de naissance';
    }
    // Conversion de la date au format français avec création d'un tableau $post et des fonctions array_push.
    $birthday = preg_replace($regexBirthday, '$3/$2/$1', $birthday);
    array_push($post, $birthday);


    // Adresse email.
    $email = trim(filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING));
    if (empty($email)) {
        $errors['email'] = 'Merci de renseigner votre adresse électronique.';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = 'Le format attendu n\'est pas respecté.';
    }
    array_push($post, $email);


    // Password.
    $password = $_POST['password'];
    $passwordConfirmation = $_POST['passwordConfirmation'];
    if (empty($password)) {
        $errors['password'] = 'Merci de choisir votre mot de passe.';
    } elseif ($password != $passwordConfirmation) {
        $errors['password'] = 'Vos mots de passe ne correspondent pas.';
    } elseif (!preg_match($regexPassword, $password)) {
        $errors['password'] = 'Votre mot de passe doit contenir au minimum 8 caractères (majuscule, minuscule, chiffre et caractère special)';
    }
    array_push($post, $password);
    array_push($post, $passwordConfirmation);


    // CGU.
    // isset — Détermine si une variable est déclarée et est différente de NULL.
    if (!isset($_POST['cgu'])) {
        $errors['cgu'] = 'Vous devez accepter nos conditions générales d\'utilisation pour vous inscrire.';
    }
    array_push($post, $_POST['cgu']);
}


// Création du cookie avant le HTML.
if (count($errors) == 0) {
    // Transformation du tableau POST en chaîne de caractères.
    $user = serialize($post);
    // Création du cookie avec la chaîne des POST.
    setcookie('user', $user, time() + 3600, '/', '', false, false);
}

// Affichage de l'alerte de création de compte si le formulaire est soumis et qu'il n'y a pas d'erreurs.
if ($isSubmitted && count($errors) == 0) { ; ?>
<div class="alert alert-success" role="alert">Votre compte a été créé avec succés.</div>
<?php } ;?>


<!-- Création du formulaire. -->

<div class="container d-flex justify-content-center">

    <div class="m-4 p-4 col-9 card border border-dark bg-secondary">
        <form method="post" action="inscription.php">

            <h1 class="m-4 p-4 font-weight-bold h2 text-center">Formulaire d'inscription</h1>

            <!-- Création de la rubrique "Identité". -->
            <h2 class="h4 m-3">Identité</h2>
            <div class="row justify-content-around">

                <!-- Affichage de la civilité.  -->
                <div class="form-group m-3 col-4">
                    <label for="civility">Civilité</label>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="customRadio1" name="civility" class="custom-control-input" checked=""
                            value="1">
                        <label class="custom-control-label" for="customRadio1">Monsieur</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="customRadio2" name="civility" class="custom-control-input" value="2">
                        <label class="custom-control-label" for="customRadio2">Madame</label>
                    </div>
                    <p class="error text-danger"><?=$errors['civility'] ?? ''?></p>
                </div>

                <!-- Affichage du nom.  -->
                <div class="form-group m-3 col-4">
                    <label for="lastName">Nom</label>
                    <input type="text" class="form-control" id="lastName" name="lastName" value="<?=$lastName?>"
                        placeholder="Dupont">
                    <p class="error text-danger"><?=$errors['lastName'] ?? ''?></p>
                </div>

            </div>

            <div class="row justify-content-around">
                <!-- Affichage du prénom.  -->
                <div class="form-group m-3 col-4">
                    <label for="firstName">Prénom</label>
                    <input type="text" class="form-control" id="firstName" name="firstName" value="<?=$firstName?>"
                        placeholder="Philippe">
                    <p class="error text-danger"><?=$errors['firstName'] ?? ''?></p>
                </div>

                <!-- Affichage de la date de naissance.  -->
                <div class="form-group m-3 col-4">
                    <label for="birthday">Date de naissance</label>
                    <input type="date" class="form-control" id="birthday" name="birthday" value="<?=$birthday?>"
                        placeholder="26/01/1967">
                    <p class="error text-danger"><?=$errors['birthday'] ?? ''?></p>
                </div>

            </div>

            <!-- Création de la rubrique "Identifiants de connexion". -->
            <h2 class="h4 m-3">Identifiants de connexion</h2>
            <div class="row justify-content-around">

                <!-- Inscription de l'adresse mail.  -->
                <div class="form-group m-3 col-9">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="<?=$email?>"
                        placeholder="philippe.dupont@gmail.com">
                    <p class="error text-danger"><?=$errors['email'] ?? ''?></p>
                </div>

                <!-- Inscription du mot de passe. -->
                <div class="form-group m-3 col-9">
                    <label for="password">Mot de passe</label>
                    <input type="password" class="form-control" id="password" name="password" value="<?=$password?>"
                        placeholder="Mdp1234">
                    <div id="forcePassword">
                        <div class="force-progress w-100 rounded-pill">
                            <div id="progress" class="p-bar" role="progressbar" aria-valuemin="0" aria-valuemax="4">
                            </div>
                        </div>
                        <div id="force" class="small text-secondary">Faible</div>
                    </div>
                    <p class="error text-danger"><?=$errors['password'] ?? ''?></p>
                </div>

                <!-- Confirmation du mot de passe. -->
                <div class="form-group m-3 col-9">
                    <label for="passwordConfirmation">Confimation du mot de passe</label>
                    <input type="password" class="form-control" id="passwordConfirmation" name="passwordConfirmation"
                        value="<?=$passwordConfirmation?>" placeholder="Mdp1234">
                    <p class="error text-danger"><?=$errors['passwordConfirmation'] ?? ''?></p>
                </div>

            </div>

            <div class="row m-4 justify-content-around">
                <div class="form-check">

                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" name="cgu" value="cgu"
                            id="cgu">
                        <label class="custom-control-label font-weight-bold" for="cgu">En soumettant ce formulaire,
                            j'autorise que les informations saisies dans ce formulaire soient
                            utilisées pour permettre de me reconnecter ultérieurement.</label>
                    </div>
                    <p class="error text-danger"><?=$errors['cgu'] ?? ''?></p>
                </div>
            </div>

            <div class="w-100 d-flex">
				<button class="mx-auto btn btn-outline-dark btn-inscription rounded-pill m-4" type="submit">Me connecter</button>
			</div>

    </div>

    <script src="jquery.js"></script>

    <script type="text/javascript">

        // Création de la force du password.
        $("input[name='password']").keyup(function () {
            // Prend la value du selecteur choisi précédement.
            var password = $(this).val();
            var force = 0;

            // Vérification que la regex est true ou false.
            // var regex = (/(?=.*[a-z])/).test(password);

            // Vérification que la value de l'input contient des lettres.
            // Si c'est le cas, la force prend +1.
            if (password.match(/(?=.*[a-z])/) || password.match(/(?=.*[A-Z])/)) {
                force++;
            }
            // Vérification que la value de l'input contient des chiffres.
            if (password.match(/(?=.*[0-9])/)) {
                force++;
            }
            // Vérification que la value de l'input contient des caractères spéciaux.
            if (password.match(/(?=.*\W)/)) {
                force++;
            }
            // Vérification que le password contient au moins 8 caractères.
            if (password.length >= 8) {
                force++;
            }

            // Détermination du texte en fonction de la force.
            var textForce = $("#force");

            // Détermination de la couleur et du texte en fonction de la force.
            if (force == 1) {
                var bgColor = '#dc3545';
                textForce.text('Faible');
            } else {
                if (force == 2) {
                    var bgColor = '#ffc107';
                    textForce.text('Moyen');
                } else {
                    if (force == 3) {
                        var bgColor = '#28a745';
                        textForce.text('Fort');
                    } else {
                        if (force == 4) {
                            var bgColor = '#0d6e25';
                            textForce.text('Très fort');
                        }
                    }
                }
            }

            document.getElementById('progress').style.backgroundColor = bgColor;
            document.getElementById('progress').style.width = 25 * force + '%';

            //document.getElementById('progress').setAttribute('style', 'width:'+25*force+'%; background-color: '+bgColor);

            // change le css de la progressbar
            /* $("#progress").css({
            	'width': 25*force+'%',
            	'background-color': bgColor
            }); */
        })

        // Disparition de la progressbar quand on quitte le champ password.
        $("input[name='password']").blur(function () {
            $("#forcePassword").slideUp();
        })

        // Apparition de la progressbar quand on focus le champ password.
        document.querySelector(`input[name="password"]`).addEventListener('focus', function () {
            let forcePassword = $("#forcePassword").slideDown();
        })

        /* $("input[name='password']").focus(function(){
        	$("#forcePassword").slideDown();
        }) */

    </script>


    <!-- Insertion du footer.  -->

    <?php include 'footer.php';?>