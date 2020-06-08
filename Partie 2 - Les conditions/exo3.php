<?php
    $age = rand(1,120);
    $genre = substr(str_shuffle('FH'),0,1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo 3 PHP</title>
</head>
<body>
    <?php if ($age < 18 && $genre == 'F') : ?>
    <p>Vous êtes une femme et vous êtes mineure </p>
    <?php  elseif ($age >= 18 && $genre =='F') : ?>
    <p>Vous êtes une femme et Vous êtes majeure</p>
    <?php  elseif ($age < 18 && $genre == 'H') : ?>
    <p>Vous êtes un homme et vous êtes mineur</p>
    <?php  elseif ($age >= 18 && $genre == 'H') : ?>
    <p>Vous êtes un homme et Vous êtes majeur</p>
    <?php  else : ?> 
    <p>vous êtes de genre inconu</p>
    <?php endif; ?>

    <?php if ($age < 18 && $genre == 'F') : ?>
    <p>Vous êtes une femme et vous êtes mineure</p>
    <?php  elseif ($age < 18) : ?>
    <p>Vous êtes un homme et Vous êtes mineur</p>
    <?php  elseif ($genre == 'F') : ?>
    <p>Vous êtes une femme et vous êtes majeure</p>
    <?php  else : ?>
    <p>Vous êtes un homme et Vous êtes majeur</p>
    <?php endif; ?>

    
</body>
</html>