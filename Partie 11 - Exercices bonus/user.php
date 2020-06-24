<?php 
    $title= 'Cookie data user';
    include 'header.php';

    if (isset($_COOKIE['user'])) {
            // Recréation du tableau serialisé.
            $user = unserialize($_COOKIE['user']);
    ?>
        <div class="card p-3">
        <?php
            foreach ($user as $key => $value) {
                if($key == 'civility') {
                    $value = $value
                } 
                }  
            ?>
        </div>
                <?php
        } 
        else{
    ?>
    <p class="text-danger">Aucun utilisateur n'est inscrit</p>
    <a class="btn btn-dark" href="index.php">Retour à l'accueil</a>
        }

    ?>