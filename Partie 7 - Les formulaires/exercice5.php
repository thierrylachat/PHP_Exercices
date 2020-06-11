<!-- Enoncé : 
Créer un formulaire sur la page index.php avec :  
Une liste déroulante pour la civilité (Mr ou Mme)
Un champ texte pour le nom
Un champ texte pour le prénom 
Ce formulaire doit rediriger vers la page index.php. 
Vous avez le choix de la méthode.-->

<!-- Création de variables et insertion du header et de la barre de navigation. -->

<?php
    $titre= 'exercice5';
    include 'header.php';
?>


<!-- Création du formulaire avec la civilité, le nom et le prénom et utilisant la méthode post. -->

<div class="m-4 p-4 col-4 border border-secondary">
    <form method="post" action="exercice5.php">
        <p class="font-weight-bold text-center text-uppercase">Formulaire de contact</p>
        <div class="form-group">
            <select class="custom-select" name="civility">
                <option selected="selected">Civilité</option>
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
        <button type="submit" class="btn btn-success">Valider</button>
    </form>
</div>


<!-- Affichage des inputs du formulaire. -->
<div class="m-4">
    <p><?php echo $_POST['civility'] ;?></p>
    <p><?php echo $_POST['lastName'] ;?></p>
    <p><?php echo $_POST['firstName'] ;?></p>
</div>


<!-- Insertion du footer. -->

<?php include 'footer.php'; ?>