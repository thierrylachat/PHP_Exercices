<!-- Création de variable et du switch et insertion du header et de la barre de navigation. -->

<?php
    $titre= 'Exercice 4';
    include 'header.php';
    $magnitude= 8;
    switch($magnitude) {
        case '1':
            $message = "Micro-séisme impossible à ressentir."; 
            break;
        case '2':
            $message = "Micro-séisme impossible à ressentir mais enregistrable par les sismomètres."; 
            break;
        case '3':
            $message = "Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti."; 
            break;
        case '4':
            $message = "Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats."; 
            break;
        case '5':
            $message = "Séisme capable d'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes."; 
            break;
        case '6':
            $message = "Fort séisme capable d'engendrer des destructions majeures sur une large distance (180 km) autour de l'épicentre."; 
            break;
        case '7':
            $message = "Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance."; 
            break;
        case '8':
            $message = "Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres."; 
            break;
        case '9':
            $message = "Séisme capable de tout détruire sur une très vaste zone."; 
            break;
        default :
            $message = "Valeur inconue";
    }
?>

<!-- Selon la valeur de magnitude, afficher la phrase correspondante. -->

<p><?= $message ?></p>

<!-- Insertion du footer. -->

<?php include 'footer.php'; ?>