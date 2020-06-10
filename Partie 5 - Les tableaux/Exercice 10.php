<!-- Enoncé : avec le tableau de l'exercice 5, afficher toutes les valeurs de ce tableau ainsi que les clés associés.  
Cela pourra être, par exemple, de la forme : Le département + nom du département + a le numéro + numéro du département  -->


<!-- Création de variables et insertion du header et de la barre de navigation. -->

<?php
    $titre= 'Exercice 10';
    include 'header.php';
?>


<!-- Création du tableau associatif. -->

<?php $departments = array("80"=>"Somme", "60"=>"Oise", "02"=>"Aisne", "62"=>"Pas-De-Calais", "59"=>"Nord"); ?>


<!-- Affichage du tableau associatif. -->
<?php foreach($departments as $x => $x_value) {
  echo "Le département " . $x_value . " a le numéro " . $x . "." . "</br>";
}
?>


<!-- Insertion du footer. -->

<?php include 'footer.php'; ?>