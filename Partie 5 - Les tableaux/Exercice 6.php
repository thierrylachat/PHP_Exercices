<!-- Enoncé : 
Faire une fonction qui prend trois paramètres : le nom, le prénom et l'âge d'une personne. Elle doit renvoyer une chaine de la forme :  
Bonjour + nom + prénom + , tu as + age + ans. -->

<!-- Création de variables et insertion du header et de la barre de navigation. -->

<?php
    $titre= 'Exercice 6';
    include 'header.php';
?>


<!-- Création de la fonction welcome. -->

<?php function welcome($name, $firstname, $age) {
    return 'Bonjour '.$name.' '.$firstname.' tu as '.$age.' ans.';
} ?>


<!-- Affichage de la concaténation avec appel de la fonction welcome. -->

<p><?= welcome('Guibaud', 'Hélène', 33); ?></p>


<!-- Insertion du footer. -->

<?php include 'footer.php'; ?>