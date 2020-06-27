<!-- Enoncé :
Faire une page qui va pouvoir modifier le contenu du cookie de l'exercice 3. -->


<!-- Création du cookie à mettre AVANT le HTML impérativement. -->
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // Vérification des données pour les cookies.
    $login = $_POST['login'];
    $password = $_POST['password'];

    // Stockage des données dans les cookies.
    // setcookie envoie un cookie et sa synthaxe est setcookie(name, value, expire, path, domain, secure, httponly).
    // Le / indique une portée générale pour le cookie.
    setcookie('login', $login, time() + 365 * 24 * 3600, '/', '', false, false);
    setcookie('password', $password, time() + 365 * 24 * 3600, '/', '', false, false);

}
?>


<!-- Création de variables et insertion du header et de la barre de navigation. -->

<?php
$titre = 'Exercice 5';
include 'header.php';
?>


<!-- Création du formulaire demandant le login et le mot de passe avec la méthode post. -->

<div class="m-4 p-4 col-4 border border-secondary">
    <form method="post" action="">
        <p class="font-weight-bold text-center text-uppercase">Formulaire d'identification</p>
        <div class="form-group">
            <label for="login">Login</label>
            <input type="text" class="form-control" id="login" name="login" placeholder="M@teo21">
        </div>
        <div class="form-group">
            <label for="password">Mot de passe</label>
            <input type="text" class="form-control" id="password" name="password" placeholder="password">
        </div>
        <button type="submit" class="btn btn-success">Valider</button>
    </form>
</div>


<!-- Affichage des données du cookie. -->

<?php var_dump($_COOKIE);?>


<!-- Insertion du footer. -->

<?php include 'footer.php';?>