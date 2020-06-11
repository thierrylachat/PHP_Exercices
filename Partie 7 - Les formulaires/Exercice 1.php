<!-- Enoncé : créer un formulaire demandant le nom et le prénom. 
Ce formulaire doit rediriger vers la page user.php avec la méthode GET. -->


<!-- Création de variables et insertion du header et de la barre de navigation. -->

<?php
    $titre= 'Exercice 1';
    include 'header.php';
?>


<!-- Création du formulaire demandant le nom et le prénom. -->

<div class="m-4 p-4 col-4 border border-secondary">
    <form method="get" action="user.php">
        <p class="font-weight-bold text-center text-uppercase">Formulaire de contact</p>
        <div class="form-group">
            <label for="formGroupExampleInput">Nom</label>
            <input type="text" class="form-control" id="formGroupExampleInput" name="lastName" placeholder="Dupont">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">Prénom</label>
            <input type="text" class="form-control" id="formGroupExampleInput2" name="firstName" placeholder="Philippe">
        </div>
        <button type="submit" class="btn btn-success">Submit</button>
    </form>
</div>


<!-- Insertion du footer. -->

<?php include 'footer.php'; ?>