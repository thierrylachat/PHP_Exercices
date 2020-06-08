<!-- Traduire ce code avec des if et des else :  

    <?php
      echo ($age >= 18) ? 'Tu es majeur' : 'Tu n\'es pas majeur';
    ?> -->


<!-- Création de variable et insertion du header et de la barre de navigation. -->

<?php
    $age = 17;
    $titre= 'Exercice 6';
    include 'header.php';

    $age = rand(1,100);
        if ($age < 18)
        {
            $message = "Vous êtes mineur !";
        }
        else
        {
           $message = "Vous êtes majeur !";
        }  
?>

<!-- 1° solution -->
<p><?= $message ?></p>

<!-- 2° solution -->
<?php if ($age >= 18) { ;?>
    <p>Tu es majeur !</p>
<?php } else { ;?>
    <p>Tu n'es pas majeur !</p>
<?php } ;?>


<!-- Insertion du footer. -->

<?php include 'footer.php'; ?>