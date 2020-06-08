<!-- Initialisation de variables et insertion du header et de la barre de navigation. -->

<?php
    $lastname= 'Guibaud';
    $firstname= 'Hélène';
    $age= 33;
    $titre= 'Exercice 7';
    include 'header.php';
?>

<!-- Affichage du message: Bonjour + lastname + firstname + , tu as + age + ans.-->

<p> <?php echo 'Bonjour '.$lastname.' '.$firstname.', tu as '.$age.' ans.';?> </p>
<p>Bonjour <?= $lastname.' '.$firstname; ?>, tu as <?= $age; ?> ans.</p>

<!-- Insertion du footer. -->

<?php include 'footer.php'; ?>