<!-- Enoncé : 
Faire un formulaire qui permet de récupérer le login et le mot de passe de l'utilisateur. 
A la validation du formulaire, stocker les informations dans un cookie. -->


<!-- Création du cookie à mettre avant le HTML impérativement. -->
<?php 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // Vérification des données pour les cookies.
    $login = $_POST['login'];
    $passWord = $POST['passWord'];

    // Stockage des données dans les cookies.
    // Le / indique une portée générale pour le cookie. 
    setcookie('login', $login, time() + 365*24*3600, '/', '', false, false) ;
    setcookie('passWord', $passWord, time() + 365*24*3600, '/', '', false, false) ;

}
var_dump($_COOKIE);

?>


<!-- Création de variables et insertion du header et de la barre de navigation. -->

<?php
    $titre= 'Exercice 3';
    include 'header.php';
?>

<!-- Création du formulaire demandant le login et le mot de passe avec la méthode post. -->

<div class="m-4 p-4 col-4 border border-secondary">
    <form method="post" action="">
        <p class="font-weight-bold text-center text-uppercase">Formulaire d'identification</p>
        <div class="form-group">
            <label for="formGroupExampleInput">Login</label>
            <input type="text" class="form-control" id="formGroupExampleInput" name="login" placeholder="M@teo21">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">Mot de passe</label>
            <input type="text" class="form-control" id="formGroupExampleInput2" name="passWord" placeholder="passWord">
        </div>
        <button type="submit" class="btn btn-success">Valider</button>
    </form>
</div>

<!-- Insertion du footer. -->

<?php include 'footer.php'; ?>