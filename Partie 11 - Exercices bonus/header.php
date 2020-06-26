<?php session_start();?>

<!-- Destruction de la session en cas de déconnexion & création d'une session utilisateur. -->

<?php

if (isset($_GET['logout'])) {
    // Vidage du tableau session.
    $_SESSION['user'] = [];
    // Vidage de la variable session.
    unset($_SESSION['user']);
    // Destruction de la session.
    session_destroy();
}

if (!empty($_POST['login']) && !empty($_POST['password'])) {
    $_SESSION['user'] = ['auth' => true, 'login' => $_POST['login']];
}

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootswatch/4.5.0/lux/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-smnSwzHqW1zKbeuSMsAM/fMQpkk7HY11LuHiwT8snL/W2QBoZtVCT4H5x1CEcJCs" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title><?=$titre?></title>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand font-weight-bold" href="../index.php">PHP PARTIE 11 - EXERCICES BONUS</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01"
            aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarColor01">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="../inscription">Inscription</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../user">Données cookies</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../Exercice4">Admin</a>
                </li>


            <!-- Affichage du lien de connexion si la session est absente. -->
            <?php   
            if (!isset($_SESSION['user'])) {
            ?>
                <li class="mr-3 nav-item">
                    <a class="nav-link" href="login.php">Me connecter</a>
                </li>
            <?php
            }

            // Sinon affichage du bouton de déconnexion si une session est ouverte.
            else {
            ?>
                <li class="mr-3 nav-item">
                <!-- le $_GET logout sert à déclencher la déconnexion -->
                    <a class="btn btn-outline-light btn-logout" href="login.php?logout=true">Se déconnecter</a>
                </li>
            <?php
            }
            ?>

            </ul>

            <!--  Création de l'icône avec la première lettre de l'utilisateur si une session est ouverte.-->
            <?php
            if (isset($_SESSION['user'])) {
            ?>
            <div class="border border-light rounded-circle text-light d-flex icon">
                <span class="m-auto"><?=/* Première lettre en MAJ */ucfirst($_SESSION['user']['login'])[0]?></span>
            </div>
            <?php
            }
            ?>

            </ul>
        </div>

    </nav>