<?php 
        $oldIndex = 130;
        $newIndex = 98;
        $amount = 100000;

// Calcul d'un montant de frais de notaire.
        $fees = ($amount * 0.02 > 5000) ? $amount * 0.02 : 5000;

//  Calcul d'un index d'électricité avec ternaire.zip!
        $index = ($newIndex) ?? $oldIndex;
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bonus</title>
</head>
<body>

    <p><?= $fees ?></p>
    <p><?= $index ?></p>
    
</body>
</html>