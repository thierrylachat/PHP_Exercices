<!-- Enoncé :
Faire une fonction qui permet d'afficher les données des tableaux suivants :

    $portrait1 = array('name'=>'Victor', 'firstname'=>'Hugo', 'portrait'=>'http://upload.wikimedia.org/wikipedia/commons/5/5a/Bonnat_Hugo001z.jpg');
    $portrait2 = array('name'=>'Jean', 'firstname'=>'de La Fontaine', 'portrait'=>'http://upload.wikimedia.org/wikipedia/commons/e/e1/La_Fontaine_par_Rigaud.jpg');
    $portrait3 = array('name'=>'Pierre', 'firstname'=>'Corneille', 'portrait'=>'http://upload.wikimedia.org/wikipedia/commons/2/2a/Pierre_Corneille_2.jpg');
    $portrait4 = array('name'=>'Jean', 'firstname'=>'Racine', 'portrait'=>'http://upload.wikimedia.org/wikipedia/commons/d/d5/Jean_racine.jpg');

Les afficher tous sur une même page. -->


<!-- Création de variables et insertion du header et de la barre de navigation. -->

<?php
$titre = 'TP3';
include 'header.php';
?>

<?php
$portrait1 = array('name' => 'Victor', 'firstname' => 'Hugo', 'portrait' => 'http://upload.wikimedia.org/wikipedia/commons/5/5a/Bonnat_Hugo001z.jpg');
$portrait2 = array('name' => 'Jean', 'firstname' => 'de La Fontaine', 'portrait' => 'http://upload.wikimedia.org/wikipedia/commons/e/e1/La_Fontaine_par_Rigaud.jpg');
$portrait3 = array('name' => 'Pierre', 'firstname' => 'Corneille', 'portrait' => 'http://upload.wikimedia.org/wikipedia/commons/2/2a/Pierre_Corneille_2.jpg');
$portrait4 = array('name' => 'Jean', 'firstname' => 'Racine', 'portrait' => 'http://upload.wikimedia.org/wikipedia/commons/d/d5/Jean_racine.jpg');
?>

<!-- Création de la boucle pour afficher les portraits. -->
<!-- Fonction avec ... pour indiquer un nombre infini de variables. -->
<div class="container">
    <div class="row">
        <?php
        function artistsPortraits(...$portraits) {
        foreach ($portraits as $portrait): ?>
        <div class="col-md-3">
            <div class="card">
                <p>Nom: <?=$portrait['name']?></p>
                <p>Prénom: <?=$portrait['firstname']?></p>
                <p><img class="img-fluid" src="<?=$portrait['portrait']?>" alt="portrait de <?=$portrait['name']?>"></p>
            </div>
        </div>
        <?php
        endforeach;
        }

        artistsPortraits($portrait1, $portrait2, $portrait3, $portrait4);
        ?>
    </div>
</div>

<!-- Insertion du footer. -->

<?php include 'footer.php';?>