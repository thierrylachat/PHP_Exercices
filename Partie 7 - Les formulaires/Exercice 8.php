<!-- Enoncé : 
Sur le formulaire de l'exercice 6, en plus de ce qui est demandé sur les exercices précédents, vérifier que le fichier transmis est bien un fichier pdf. -->


<!-- Création de variables et insertion du header et de la barre de navigation. -->

<?php
    $titre= 'exercice8';
    include 'header.php';
    $lastNamePost = $_POST['lastName'] ?? '';
    $firstNamePost = $_POST['firstName'] ?? '';
    $civilityPost = $_POST['civility'] ?? '';
    $message = '';
    /*var_dump ($file);*/
if (isset($_FILES['fileSending']) && $_FILES['fileSending']['error'] === 0) {
    $fileInfos = pathinfo($_FILES['fileSending']['name']);
    if (strtolower($fileInfos['extension']) == 'pdf') {
        $message = 'Ceci est bien un fichier PDF.';
    } else {
        $message = 'Le fichier n\'est pas du type attendu.'; 
    }
}; ?>


<!-- Création du formulaire avec la civilité, le nom et le prénom et utilisant la méthode post. -->

<div class="m-4 p-4 col-4 border border-secondary">
    <form method="post" action="" enctype="multipart/form-data">
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
            <input type="file" class="pictSending" id="pictSendingId" name="pictSending">
        </div>
        <button type="submit" class="btn btn-success">Valider</button>
    </form>
</div>


<!-- Affichage des inputs du formulaire. -->
<div class="m-4">
    <p><?php echo trim(htmlspecialchars($civilityPost)) ;?></p>
    <p><?php echo trim(htmlspecialchars($lastNamePost)) ;?></p>
    <p><?php echo trim(htmlspecialchars($firstNamePost)) ;?></p>
    <p><?= trim(htmlspecialchars($message)); ?></p>
</div>


<?php include'footer.php';?>