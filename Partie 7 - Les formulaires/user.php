<!-- Affichage des données du formulaire transmis. -->


<!-- Création de variables et insertion du header et de la barre de navigation. -->

<?php
    $titre= 'Exercice 3';
    include 'header.php';
?>


<!-- Création du formulaire demandant le nom et le prénom. -->

<p><?php echo $_GET['lastName'] ;?></p>
<p><?php echo $_GET['firstName'] ;?></p>


<!-- Insertion du footer. -->

<?php include 'footer.php'; ?>