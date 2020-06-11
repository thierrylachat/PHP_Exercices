<!-- Affichage des données du formulaire transmis. -->


<!-- Création de variables et insertion du header et de la barre de navigation. -->

<?php
    $titre= 'Exercice 3';
    include 'header.php';
?>


<!-- Affichage des données lastName et firstName avec la méthode GET. -->

<p><?php echo $_GET['lastName'] ;?></p>
<p><?php echo $_GET['firstName'] ;?></p>


<!-- Affichage des données lastName et firstName avec la méthode POST. -->

<p><?php echo $_POST['lastName'] ;?></p>
<p><?php echo $_POST['firstName'] ;?></p>


<!-- Insertion du footer. -->

<?php include 'footer.php'; ?>