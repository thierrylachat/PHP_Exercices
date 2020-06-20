<!-- Enoncé : avec le tableau de l'exercice 1 et une boucle, afficher toutes les valeurs de ce tableau. -->


<!-- Création de variables et insertion du header et de la barre de navigation. -->

<?php
$titre = 'Exercice 8';
include 'header.php';
?>


<!-- Création du tableau months. -->

<?php
$months = array("Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Aout", "Septembre", "Octobre", "Novembre", "Décembre");
$arrlength = count($months);
?>


<!-- Utilisation d'une boucle For pour affichage du tableau. -->
<?php for ($monthsIndex = 0; $monthsIndex < $arrlength; $monthsIndex++) {
    echo $months[$monthsIndex] . '<br />';
}; ?>

<br>

<!-- Affichage sous la forme d'un tableau. -->


<div class="row">
    <div class="col-md-6">
        <table class="table table-bordered table-striped">
            <thead class="bg-info">
                <tr>
                    <th>N° Mois</th>
                    <th>Nom du mois</th>
                </tr>
            </thead>
            <tbody>

                <?php
                    $limit = count($months);
                    for ($monthsIndex = 0; $monthsIndex < $limit; $monthsIndex++) {?>
                <tr>
                    <td> <?= $monthsIndex + 1 ;?> </td>
                    <td> <?= $months[$monthsIndex] ;?> </td>
                </tr>
                <?php 
                    }; ?>

            </tbody>
        </table>
    </div>
</div>


<!-- Insertion du footer. -->

<?php include 'footer.php';?>