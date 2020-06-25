<!-- Mise en place du header à inclure dans chaque fichier PHP. -->

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootswatch/4.5.0/lux/bootstrap.min.css" rel="stylesheet" integrity="sha384-smnSwzHqW1zKbeuSMsAM/fMQpkk7HY11LuHiwT8snL/W2QBoZtVCT4H5x1CEcJCs" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title><?= $titre ?></title>
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
                    <a class="nav-link" href="../Exercice1">Inscription</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../Exercice2">Données cookies</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../Exercice 3">Exercice 3</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../Exercice 4">Exercice 4</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../exercice 5">Exercice 5</a>
                </li>
            </ul>
        </div>
    </nav>
    