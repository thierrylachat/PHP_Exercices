<!-- Enoncé : 
Afficher la date courante avec le jour de la semaine et le mois en toutes lettres (ex : mardi 2 août 2016)
Bonus : Le faire en français. -->


<!-- Création de variables et insertion du header et de la barre de navigation. -->

<?php
    $titre= 'Exercice 3';
    include 'header.php';
?>

<?php
// ---------------------------- bonus ----------------------------
    function dateFR($date){
        // récupère le numéro de jour de la semaine
        $dayNumber = date_format($date, 'w');
        // récupère le numéro du mois
        $monthNumber = date_format($date, 'n');
        $dayList = array('Dimanche', 'Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi');
        $monthList = array(1 => 'Janvier', 2 => 'Fevrier', 3 => 'Mars', 4 => 'Avril', 5 => 'Mai', 6 => 'Juin', 7 => 'Juillet', 8 => 'Août', 9 => 'Septembre', 10 => 'Octobre', 11 => 'Novembre', 12 => 'Décembre');
        $day = $dayList[$dayNumber];
        $month = $monthList[$monthNumber];
        // incrémente le jour prélevé du tableau, le numéro de date, le mois prélevé dans le tableau et l'année à 4 chiffre
        $date = $day." ".date_format($date, 'd').' '.$month.' '.date_format($date, 'Y');
        return $date;
    }

// ------------------- Exercice 3 et bonus -------------------------

    // setlocale function PHP
    /* Configure le script en Français */
    setlocale(LC_ALL, 'fr_FR.UTF-8', 'fra', 'fr');
    // date en toutes lettres
    $date_letters = date_create();
    $date_traduite = dateFR($date_letters);
?>


<div>Date du jour (en lettres, date_format()) : <strong><?= date_format($date_letters, 'l d F Y'); ?></strong></div>
<!-- autre méthode -->
<div>Date du jour (en lettres, date()) : <strong><?= date('l d F Y'); ?></strong></div>

<!-- Bonus -->
<div>Date traduite (strftime) : <strong><?= strftime("%A %e %B %Y", time()); ?></strong></div>
<div>Date traduite : <strong><?= $date_traduite ?></strong></div>


<!-- Insertion du footer. -->

<?php include 'footer.php'; ?>