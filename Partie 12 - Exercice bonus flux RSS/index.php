<?php
// Ouverture des url à distance avec le module php curl // ouverture d'url distante.
// Ouverture de la ressource dont l'adresse est passée en option.
// curl_init initialise une session cURL.
$curl = curl_init();
// Définition ce de que l'on souhaite récupérer.
// curl_setopt définit d'une option de transmission cURL.
curl_setopt($curl, CURLOPT_URL, 'https://rmcsport.bfmtv.com/rss/info/flux-rss/flux-toutes-les-actualites/');
// le contenu sous forme de chaine de caractères et non d'un contenu.
// Sans cette option, le contenu s'affichera directement dans la page.
// CURLOPT_RETURNTRANSFER TRUE pour retourner le transfert en tant que chaîne de caractères de la valeur retournée par curl_exec() au lieu de l'afficher directement.
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
// Résolution du bug lié au problème de certificat SSL.
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
// curl_exec exécute la session curl ouverte.
$content = curl_exec($curl);
// Affichage des erreurs si curl_exec = false.
if ($content === false) {
    throw new Exception(curl_error($curl), curl_errno($curl));
}
// curl_close ferme une session CURL.
curl_close($curl);
// On parse notre contenu xml pour extraire les parties qui nous intéresse.
$xml = new SimpleXMLElement($content);
// echo "<pre>" . print_r($xml, 1) . "</pre>" // affiche l'arbre du DOM XMl.

// 2° méthode pour parser le contenu xml.
// $xml = new SimpleXMLElement('https://rmcsport.bfmtv.com/rss/info/flux-rss/flux-toutes-les-actualites/', NULL, true);

// /!\ tous les flux RSS ne sont pas identiques.

// CRéation de la date en fr.
setlocale(LC_ALL, ['fr_FR.UTF-8', 'fr_FReuro', 'fr_FR', 'french']);
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.5.0/slate/bootstrap.min.css">
    <title>Sport news</title>
</head>

<div class="container-fluid">

    <body>
        <h1>Les dernières infos sport</h1>
        <div class="row">
            <!-- On parcourt le noeud item qui est un tableau contenant les infos d'un post. -->
            <!-- item est un enfant de channel qui est un enfant du noeud racine de notre xml. -->
            <?php foreach ($xml->channel->item as $post) {?>
            <div class="col-md-4 p-2">
                <div class="card h-100">
                    <?php $attributs = $post->enclosure->attributes(); // on récupére les attributs de notre balise enclosure, qui contient la description de l'illustration de l'article dans un tableau php ?>
                    <!-- la colonne url de attribute contient l'url de l'image du post -->
                    <img class="img-fluid img-thumbnail card-img-top" src="<?=$attributs['url']?>" alt="" />
                    <div class="card-body">
                        <a href="<?=$post->link?>">
                            <h2 class="card-title h4">
                                <?=$post->title?>
                            </h2>
                        </a>
                        <p>
                            <!-- Formatage de la date pour l'afficher en français. /!\ ne pas oublier le setlocale().  -->
                            <?=strftime("%A %e %B %Y", strtotime($post->pubDate))?>
                        </p>
                    </div>
                </div>
            </div>
            <?php }?>
        </div>
    </body>
    
</div>


</html>