<!-- Affichage des données du formulaire transmis. -->


<!-- Création de variables et insertion du header et de la barre de navigation. -->

<?php
    $titre= 'Exercice 3';
    include 'header.php';
    $lastNameGet = $_GET['lastName'] ?? '';
    $firstNameGet = $_GET['firstName'] ?? '';
    $lastNamePost = $_POST['lastName'] ?? '';
    $firstNamePost = $_POST['firstName'] ?? '';
?>


<!-- Affichage des données lastName et firstName avec la méthode GET et POST. -->
<!-- Protection des données transmises via htmlspecialchars et strip_tags : 
https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/913099-transmettez-des-donnees-avec-les-formulaires -->

<p><?php echo trim(htmlspecialchars($lastNameGet)) ;?></p>
<p><?php echo trim(htmlspecialchars($firstNameGet)) ;?></p>
<p><?php echo trim(strip_tags($lastNamePost)) ;?></p>
<p><?php echo trim(strip_tags($firstNamePost)) ;?></p>

<!-- Insertion du footer. -->

<?php include 'footer.php'; ?>