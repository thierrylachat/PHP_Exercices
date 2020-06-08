<!-- Création de variable et insertion du header et de la barre de navigation. -->

<?php
    $isOk = true;
    $titre= 'Exercice 7';
    include 'header.php';
?>

<!-- Traduire ce code avec des if et des else :  

    <?php
      echo ($isOk == false) ? 'c\'est pas bon !!!' : 'c\'est ok !!';
    ?> -->


<!-- Méthode optimisée. -->
<?php if ($isOk == false) { ;?>
<p>Ce n'est pas bon !</p>
<?php } else { ;?>
<p>C'est bon !</p>
<?php } ;?>


<!-- Insertion du footer. -->

<?php include 'footer.php'; ?>