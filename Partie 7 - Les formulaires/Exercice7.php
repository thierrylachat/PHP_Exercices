<!-- Enoncé :
Au formulaire de l'exercice 5, ajouter un champ d'envoi de fichier. Afficher en plus de ce qui est demandé à l'exercice 6, le nom et l'extension du fichier. -->


<!-- Création de variables et insertion du header et de la barre de navigation. -->

<?php
$titre = 'exercice 7';
include 'header.php';
?>


<!-- Création du formulaire avec la civilité, le nom, le prénom et l'envoi de fichier et utilisant la méthode post. -->

<?php
if ((!empty($_POST['civility'])) && (!empty($_POST['firstName'])) && (!empty($_POST['lastName'])) && (!empty($_FILES['pictSending']))) {?>
 <p><?= $_POST['civility'].' '.$_POST['firstName'].' '.$_POST['lastName'].', vous avez envoyé le fichier '.$_FILES['pictSending']['name'].'.'; ?></p>
<?php } else {?>

<div class="m-4 p-4 col-4 border border-secondary">
    <!-- Ajout de l'élément enctype="multipart/form-data" pour permettre l'envoi de fichier.-->
    <form method="post" action="Exercice7" enctype="multipart/form-data">
        <p class="font-weight-bold text-center text-uppercase">Formulaire de contact</p>
        <div class="form-group">
            <select class="custom-select" name="civility">
                <option value='' disabled="disabled" selected="selected" hidden="hidden">Civilité</option>
                <option value="Monsieur">Mr</option>
                <option value="Madame">Mme</option>
            </select>
        </div>
        <div class="form-group">
            <label for="lastName">Nom</label>
            <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Dupont">
        </div>
        <div class="form-group">
            <label for="firstName">Prénom</label>
            <input type="text" class="form-control" id="firstName" name="firstName" placeholder="Philippe">
        </div>
        <div class="form-group">
            <label for="pictSending">Charger un fichier</label>
            <!-- Ajout d'un input de type file pour l'envoi de fichiers. -->
            <input type="file" class="pictSending" id="pictSendingId" name="pictSending">
        </div>
        <button type="submit" class="btn btn-success">Valider</button>
    </form>
</div>

<?php } ?>

<?php include 'footer.php';?>