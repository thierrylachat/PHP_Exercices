<!-- Enoncé : 
Faire une fonction qui prend deux paramètres : l'âge et le genre d'une personne. 
Le genre peut être : Homme Femme.

La fonction doit renvoyer en fonction des paramètres :
Vous êtes un homme et vous êtes majeur
Vous êtes un homme et vous êtes mineur
Vous êtes une femme et vous êtes majeure
Vous êtes une femme et vous êtes mineure

Gérer tous les cas. -->


<!-- Création de variables et insertion du header et de la barre de navigation. -->

<?php
    $titre= 'Exercice 7';
    include 'header.php';
?>


<!-- Création de la fonction profile. -->

<?php function profile($gender, $age) {
    return 'Vous êtes un '.$gender.' et vous êtes '.$age.'.';
} ?>


<!-- Affichage de la concaténation avec appel de la fonction profile. -->

<p><?= profile(substr(str_shuffle('FH'), 0, 1)), ran(1,30); ?></p>


<!-- Insertion du footer. -->

<?php include 'footer.php'; ?>