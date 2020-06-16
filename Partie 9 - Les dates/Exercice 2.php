<!-- Enoncé : 
Afficher la date courante en respectant la forme jj-mm-aa (ex : 16-05-16). -->


<!-- Création de variables et insertion du header et de la barre de navigation. -->

<?php
    $titre= 'Exercice 2';
    include 'header.php';
?>


<!-- Création des variables dates. -->

<?php
    // Possibilité 1
    // Retourne une date sous forme d'une chaîne, au format donné par le paramètre format, fournie par le paramètre timestamp ou la date et l'heure courantes si aucun timestamp n'est fourni. En d'autres termes, le paramètre timestamp est optionnel et vaut par défaut la valeur de la fonction time().
    $date_dash = date('d-m-Y'); // ex 2

    // Possibilité 2
    $date_dash_2 = new DateTime(); // ex 2

    // Possibilité 3
    $date_dash_3 = date_create(); // ex 2
?>


<!-- Affichage des variables dates. -->

<div>Date du jour (methode date()): <strong><?= $date_dash; ?></strong></div>
<div>Date du jour (methode DateTime()) : <strong><?= $date_dash_2 -> format('d-m-Y'); ?></strong></div>
<div>Date du jour (methode date_create()) : <strong><?= date_format($date_dash_3, 'd-m-Y'); ?></strong></div>


<!-- Insertion du footer. -->

<?php include 'footer.php'; ?>