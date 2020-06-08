<?php
    $isEasy = false;
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo2 PHP</title>
</head>
<body>
    <?php if (!$isEasy) { ?>
    <p>C'est difficile !!!.</p>
    <?php } else { ?>
    <p>C'est facile !!</p>
    <?php } ?>

    <?php if ($isEasy) { ?>
    <p>C'est facile !!</p>
    <?php } else { ?>
    <p>C'est difficile !!!.</p>
    <?php } ?>

</body>
</html>