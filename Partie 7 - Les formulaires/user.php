<!-- Affichage des données du formulaire transmis. -->


<!-- Création de variables et insertion du header et de la barre de navigation. -->

<?php
    $titre= 'Exercice 3';
    include 'header.php';
    $lastName = $_GET['lastName'] ?? '';
    $firstName = $_GET['firstName'] ?? '';
    $lastNamePost = $_POST['lastName'] ?? '';
    $firstNamePost = $_POST['firstName'] ?? '';
?>


<!-- Affichage des données lastName et firstName avec la méthode GET. -->

<p><?php echo trim(htmlspecialchars($lastName)) ;?></p>
<p><?php echo trim(htmlspecialchars($firstName)) ;?></p>
<p><?php echo trim(strip_tags($lastNamePost)) ;?></p>
<p><?php echo trim(strip_tags($firstNamePost)) ;?></p>

<!-- Insertion du footer. -->

<?php include 'footer.php'; ?>