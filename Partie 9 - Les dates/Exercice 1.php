<!-- Enoncé : 
Afficher la date courante en respectant la forme jj/mm/aaaa (ex : 16/05/2016). -->


<!-- Création de variables et insertion du header et de la barre de navigation. -->

<?php
    $titre= 'Exercice 1';
    include 'header.php';
?>


<!-- Affichage de la date courante. -->

<?php

    // Possibilité 1
    // Retourne une date sous forme d'une chaîne, au format donné par le paramètre format, fournie par le paramètre timestamp ou la date et l'heure courantes si aucun timestamp n'est fourni. En d'autres termes, le paramètre timestamp est optionnel et vaut par défaut la valeur de la fonction time().
    $date_slash = date('d/m/Y'); // ex 1

    // Possibilité 2
    $date_slash_2 = new DateTime(); // ex 1

    // Possibilité 3
    $date_slash_3 = date_create(); // ex 1
?>

<div>Date du jour (methode date()): <strong><?= $date_slash; ?></strong></div>
<div>Date du jour (methode DateTime()) : <strong><?= $date_slash_2 -> format('d/m/Y'); ?></strong></div>
<div>Date du jour (methode date_create()) : <strong><?= date_format($date_slash_3, 'd/m/Y'); ?></strong></div>


<!-- Insertion du footer. -->

<?php include 'footer.php'; ?>