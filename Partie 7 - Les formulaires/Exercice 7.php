<!-- Enoncé :
Au formulaire de l'exercice 5, ajouter un champ d'envoi de fichier. Afficher en plus de ce qui est demandé à l'exercice 6, le nom et l'extension du fichier. -->


<!-- Création de variables et insertion du header et de la barre de navigation. -->

<?php
$titre = 'exercice 7';
include 'header.php';
$lastNamePost = $_POST['lastName'] ?? '';
$firstNamePost = $_POST['firstName'] ?? '';
$civilityPost = $_POST['civility'] ?? '';
$file = $_FILES['pictSending'] ? $_FILES['pictSending']['name'] : '';
var_dump ($file);
?>


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

<?php include 'header.php';

if ((!empty($_POST['civil'])) && (!empty($_POST['prenom'])) && (!empty($_POST['nom'])) && (!empty($_FILES['file']))) {?>
 <p><?= $_POST['civil'].' '.$_POST['prenom'].' '.$_POST['nom'].' vous avez envoyé le fichier '.$_FILES['file']['name']; ?></p>
<?php } else {?>
<form action='exercice 7.php' class="form-inline mt-5" method="POST" enctype="multipart/form-data">
<div class="form-group mb-2 mr-2">
    <select class="custom-select mr-2 ml-2" name="civil" required="required">
    <option value="" disabled = "disabled" selected ="selected" hidden= "hidden">civilité</option>
            <option value="Monsieur" required="required">Mr</option>
      <option value="Madame" required="required">Mme</option>
    </select>
 
  <label class="sr-only" for="inlineFormInputName2">nom</label>
  <input type="text" class="form-control  mr-sm-2" id="inlineFormInputName2" placeholder="Nom" name="nom">

  <label class="sr-only" for="inlineFormInputGroupUsername2">prénom</label>
  <div class="input-group mr-sm-2">
    <div class="input-group-prepend">
      
    </div>
    <input type="text" class="form-control" id="inlineFormInputGroupUsername2" placeholder="Prénom" name="prenom">
  </div>
</div>
<div class="form-group mb-2">
      <label  for="exampleInputFile"></label>
      <input  type="file" class="form-control-file" id="file" name="file">
      <small id="fileHelp" class="form-text text-muted "></small>
    </div>

  <button type="submit" class="btn btn-success mb-2">Envoyer!</button>
</form>
<?php } ?>
<?php include 'footer.php' ?>


<!-- Affichage des inputs du formulaire. -->
<div class="m-4">
    <p><?php echo trim(htmlspecialchars($civilityPost)); ?></p>
    <p><?php echo trim(htmlspecialchars($lastNamePost)); ?></p>
    <p><?php echo trim(htmlspecialchars($firstNamePost)); ?></p>
    <p><?= trim(htmlspecialchars($file)); ?></p>
</div>


<?php include 'footer.php';?>