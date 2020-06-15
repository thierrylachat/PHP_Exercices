<!-- Enoncé : avec le formulaire de l'exercice 5, si des données sont passées en POST ou en GET, le formulaire ne doit pas être affiché. Par contre les données transmises doivent l'être. Dans le cas contraire, c'est l'inverse.  
N'utiliser qu'une seule page. -->

<?php
    $titre= 'Exercice6';
    include 'header.php';
    $message;
?>


<!-- Création de la condition d'affichage des données. -->

<?php if (!empty($_POST['civility']) && !empty($_POST['lastName']) && !empty($_POST['firstName'] && !empty($_POST['age']))) { ?>
    <p>Les données du formulaire sont : <?php echo ($_POST['civility']) ;?>; <?php echo ($_POST['lastName']) ;?>; <?php echo ($_POST['firstName']) ;?>; </p>
<?php } else { ?>
    <div class="m-4 p-4 col-4 border border-secondary">
    <form method="post" action="exercice6.php">
        <p class="font-weight-bold text-center text-uppercase">Formulaire de contact</p>
        <div class="form-group">
            <select class="custom-select" name="civility">
                <option value='' disabled="disabled" selected="selected" hidden="hidden">Civilité</option>
                <option value="Monsieur">Mr</option>
                <option value="Madame">Mme</option>
            </select>
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput">Nom</label>
            <input type="text" class="form-control" id="formGroupExampleInput" name="lastName" placeholder="Dupont">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">Prénom</label>
            <input type="text" class="form-control" id="formGroupExampleInput2" name="firstName" placeholder="Philippe">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">Age</label>
            <input type="text" class="form-control" id="formGroupExampleInput2" name="age" placeholder="33">
        </div>
        <button type="submit" class="btn btn-success">Valider</button>
    </form>
</div>
<?php } ?>


<!-- Insertion du footer. -->

<?php include 'footer.php'; ?>