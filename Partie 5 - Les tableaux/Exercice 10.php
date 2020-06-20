<!-- Enoncé : avec le tableau de l'exercice 5, afficher toutes les valeurs de ce tableau ainsi que les clés associés.
Cela pourra être, par exemple, de la forme : Le département + nom du département + a le numéro + numéro du département  -->


<!-- Création de variables et insertion du header et de la barre de navigation. -->

<?php
$titre = 'Exercice 10';
include 'header.php';
?>


<!-- Création du tableau associatif. -->

<?php $departments = array("80" => "Somme", "60" => "Oise", "02" => "Aisne", "62" => "Pas-De-Calais", "59" => "Nord") ;?>


<!-- Affichage du tableau associatif. -->
<?php foreach ($departments as $departmentNumber => $department) {
    echo "Le département " . $department . " a le numéro " . $departmentNumber . "." . "</br>";
}; ?>

<br>


<!-- Affichage sous la forme d'un tableau. -->

<div class="row">
    <div class="col-md-6">

        <table class="table table-bordered table-striped">
            <thead class="bg-info">
                <tr>
                    <th>Numéro de département</th>
                    <th>Nom du département</th>
                </tr>
            </thead>
            <tbody>

                <?php
                foreach ($departments as $departmentNumber => $department) { ;?>
                <tr>
                    <td> <?=$departmentNumber ;?> </td>
                    <td> <?=$department ;?> </td>
                </tr>
                <?php } ;?>

            </tbody>
        </table>

    </div>
</div>

<!-- Insertion du footer. -->

<?php include 'footer.php';?>