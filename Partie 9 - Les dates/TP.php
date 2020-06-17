<!-- Enoncé : création d'un calendrier. -->


<!-- Création de variables et insertion du header et de la barre de navigation. -->

<?php
$titre = 'TP';
include 'header.php';
?>


<nav class= "navbar navbar-dark bg-dark mt-3 mb-3">
    <a href="/TP.php" class="navbar-brand">Mon calendrier</a>
</nav>


<?php

function build_calendar($month, $year, $dateArray) {

    // Création d'un tableau contenant les abbréviations des ours du mois.
    $daysOfWeek = array('S', 'M', 'T', 'W', 'T', 'F', 'S');

    // Recherche du premier jour du mois en question.
    // mktime(hour, minute, second, month, day, year, is_dst).
    $firstDayOfMonth = mktime(0, 0, 0, $month, 1, $year);

    // Recherche du nombre de jours que le mois contient.
    //'t' donne le nombre de jours dans le mois.
    $numberDays = date('t', $firstDayOfMonth);

    // Récupérer les informations du premier jour du mois en question.
    // getdate(timestamp).
    $dateComponents = getdate($firstDayOfMonth);

    // Recherche du nom du mois en question.
    $monthName = $dateComponents['mon'];

    // Recherche de la valeur de l'index (0-6) du premier jour du mois en question.
    $dayOfWeek = $dateComponents['wday'];

    // Création du tableau.
    $calendar = "<table class ='calendar'>";
    $calendar .= "<caption>$monthName $year</caption>";
    $calendar .= "<tr>";

    // Création des headers du calendrier.
    foreach ($daysOfWeek as $day) {
        $calendar .= "<th class = 'header'>$day</th>";
    }

    // Création du reste du tableau.

    // Initialisation du compteur de jour commençant par le 1°.
    $currentDay = 1;
    $calendar .= "</tr><tr>";

    // La variable $dayOfWeeks est utilisée pour s'assurer que le calendrier comprend 7 colonnes.
    if ($dayOfWeek > 0) {
        $calendar .= "<td colspan= '$dayOfWeek'>&nbsp;</td>";
    }

    $month = str_pad($month, 2, "0", STR_PAD_LEFT);

    while ($currentDay <= $numberDays) {

        // 7° colonne (samedi) atteinte, démarrage d'une nouvelle ligne.

        if ($dayOfWeek == 7) {

            $dayOfWeek = 0;
            $calendar .= "</tr><tr>";
        }

        $currentDayRel = str_pad($currentDay, 2, "0", STR_PAD_LEFT);

        $date = "$year-$month-$currentDayRel";

        $calendar .= "<td class='day' rel='$date'>$currentDay</td>";

        // Incrémentation des compteurs.

        $currentDay++;
        $dayOfWeek++;

    }

// Remplissage de la ligne avec la dernière semaine du mois, si nécessaire.

    if ($dayOfWeek != 7) {

        $remainingDays = 7 - $dayOfWeek;
        $calendar = "<td colspan= '$remainingDays'>&nbsp;</td>";
    }

    $calendar .= "</tr>";

    $calendar .= "</table>";

    return $calendar;

}

?>

<?php

    $dateComponents = getdate();

    $month = $dateComponents['mon']; 			     
    $year = $dateComponents['year'];

    echo build_calendar($month, $year, $dateArray);

?>


<!-- Insertion du footer. -->

<?php include 'footer.php';?>