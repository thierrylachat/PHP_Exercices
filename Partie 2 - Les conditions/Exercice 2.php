<!-- Création de variables et insertion du header et de la barre de navigation. -->

<?php
    $isEasy= true;
    $titre= 'Exercice 2';
    include 'header.php';
?>

<!-- Afficher "C'est facile !!" si c'est vrai. Dans le cas contraire afficher "C'est difficile !!!". -->

<p>
    <?php if ($isEasy == true) {
        echo "C'est facile !!";
    } else {
        echo "C'est difficile !!!";
    }
    ?>
</p>

<p>
    <?php if ($isEasy != true) {
        echo "C'est difficile !!!";
    } else {
        echo "C'est facile !!";
    }
    ?>
</p>

<!-- Deuxième solution. -->


<!-- Insertion du footer. -->

<?php include 'footer.php'; ?>