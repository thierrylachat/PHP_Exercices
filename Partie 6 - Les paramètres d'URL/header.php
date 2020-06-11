<!-- Mise en place du header à inclure dans chaque fichier PHP. -->

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title><?= $titre ?></title>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-info">
        <a class="navbar-brand font-weight-bold" href="../index.php">PHP PARTIE 6 - LES PARAMETRES D'URL</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01"
            aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarColor01">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="../Exercice1.php?lastname=Nemare&firstname=Jean">Exercice 1</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../Exercice2.php?lastname=Nemare&firstname=Jean">Exercice 2</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../Exercice3.php?startDate=2/05/2016&endDate=27/11/2016">Exercice 3</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../Exercice4.php?language=PHP&server=LAMP">Exercice 4</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../Exercice5.php?week=12">Exercice 5</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../Exercice6?building=12&room=101">Exercice 6</a>
                </li>
            </ul>
        </div>
    </nav>
    