<?php
    $age = 45;
    $message = '';
    if ($age <= 18) {
        $message = 'Vous êtes mineur.';
    }
    else
    {
        $message = 'Vous êtes majeur.';
    }
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo2-php</title>
</head>

<body>
    <?php if ($age <= 18) { ?>
    <p>Vous êtes mineur.</p>
    <?php } else { ?>
    <p>Vous êtes majeur</p>
    <?php   } ?>
    <p><?= $message; ?></p>
</body>

</html>