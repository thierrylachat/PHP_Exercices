<!-- Enoncé : 
Faire une page pour enregistrer un futur apprenant. On devra pouvoir saisir les informations suivantes :  
Nom
Prénom
Date de naissance
Pays de naissance
Nationalité
Adresse
E-mail
Téléphone
Diplôme (sans, Bac, Bac+2, Bac+3 ou supérieur)
Numéro pôle emploi
Nombre de badge
Liens codecademy
Si vous étiez un super héros/une super héroïne, qui seriez-vous et pourquoi ?
Racontez-nous un de vos "hacks" (pas forcément technique ou informatique)
Avez vous déjà eu une expérience avec la programmation et/ou l'informatique avant de remplir ce formulaire ?

A la validation de ces informations, il faudra les afficher dans la même page à la place du formulaire. -->


<!-- Création de variables et insertion du header et de la barre de navigation. -->

<?php
    $titre= 'TP1';
    include 'header.php';
?>

<?php 

// Déclaration des REGEX.
// Date : année - mois - jour.
$regexBirthday = '/^[0-9]{4}-[0-9]{2}-[0-9]{2}$/';
// Téléphone : (+33) 06/07... xx xx xx xx
$regexPhone = '/^(\+33|0)[1-79][0-9]{8}$/';
$regexAddress = "/^[A-Z0-9,éèêâôûüï'\- ]+$/i";
$regexPostCode = '/^((2A|2B)|[0-9]{5})$/';
$regexNames = '/^[a-zéèîïêëç]+((?:\-|\s)[a-zéèéîïêëç]+)?$/i';

// Validation du formulaire.
$isSubmitted = false;

// Création des variables.
$civility= ''; $firstName=''; $lastName=''; $birthday='';
$country=''; $nationality=''; $address=''; $postcode=''; $city='';
$email=''; $phone=''; $degrees=''; $jobNumber='';
$badgeNumber=''; $codeAcademyURL=''; $textHero=''; $textHacks=''; $skills='';
$errors = [];

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $isSubmitted = true;
}

// Nettoyage des variables, vérification que les variables sont remplies et qu'elles correspondent aux REGEX.

// Civilité.
$civility= trim(filter_input(INPUT_POST, 'civility', FILTER_SANITIZE_STRING));
if (empty($civility)){
        $errors['civility'] = 'Merci d\'indiquer votre civilité.';
} 

// Prénom.
$firstName = trim(filter_input(INPUT_POST,'firstName', FILTER_SANITIZE_STRING));
if (empty($firstName)) {
    $errors['firstName'] = 'Merci de renseigner votre prénom.';
} elseif (!preg_match($regexNames,$firstName)) {
    $errors['firstName'] = 'Le format attendu n\'est pas respecté';
}

// Nom.
$lastName = trim(filter_input(INPUT_POST,'lastName', FILTER_SANITIZE_STRING));
if (empty($lastName)) {
    $errors['lastName'] = 'Merci de renseigner votre nom.';
} elseif (!preg_match($regexNames,$lastName)) {
    $errors['lastName'] = 'Le format attendu n\'est pas respecté';
}

// Date de naissance.
$birthday= trim(filter_input(INPUT_POST, 'birthday', FILTER_SANITIZE_STRING));
if (empty ($birthday)){
        $errors['birthday'] = 'Merci de renseigner votre date de naissance.';
} elseif (!preg_match($regexBirthday,$birthday)) {
        $errors['birthday'] = 'Le format attendu n\'est pas respecté.';
}

// Pays de naissance.
$country= trim(filter_input(INPUT_POST, 'country', FILTER_SANITIZE_STRING));
if (empty($country)){
        $errors['country'] = 'Merci d\'indiquer votre pays de naissance.';
} 

// Nationalité.
$nationality= trim(filter_input(INPUT_POST, 'nationality', FILTER_SANITIZE_STRING));
if (empty($nationality)){
        $errors['nationality'] = 'Merci d\'indiquer votre nationalité.';
} 

// Numéro de téléphone.
$phone= trim(filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_STRING));
if (empty ($phone)){
        $errors['phone'] = 'Merci de renseigner correctement votre numéro de téléphone.';
} elseif (!preg_match($regexPhone,$phone)) {
        $errors['phone'] = 'Le format attendu n\'est pas respecté.';
}

// Adresse email.
$email= trim(filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING));
if (empty ($mail)){
        $errors['email'] = 'Merci de renseigner correctement votre adresse électronique.';
} elseif (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = 'Le format attendu n\'est pas respecté.';
}

// Adresse.
$address= trim(filter_input(INPUT_POST, 'address', FILTER_SANITIZE_STRING));
if (empty ($address)){
        $errors['address'] = 'Merci de renseigner une adresse.';
} elseif (!preg_match($regexAddress,$address)) {
        $errors['address'] = 'Le format attendu n\'est pas respecté.';
}

// Code postal.
$postcode= trim(filter_input(INPUT_POST, 'postcode', FILTER_SANITIZE_STRING));
if (empty ($postcode)){
        $errors['postcode'] = 'Merci de renseigner votre code postal.';
} elseif (!preg_match($regexPostCode,$postcode)) {
        $errors['postcode'] = 'Le format attendu n\'est pas respecté.';
}

// Ville.
$city= trim(filter_input(INPUT_POST, 'city', FILTER_SANITIZE_STRING));
    if (empty ($city)){
        $errors['city'] = 'Merci de renseigner votre nom de ville.';
} elseif (!preg_match($regexNames,$city)) {
        $errors['city'] = 'Le format attendu n\'est pas respecté.';
}

// Numéro de Pôle Emploi.
$jobNumber= trim(filter_input(INPUT_POST, 'jobNumber', FILTER_SANITIZE_STRING));
if (empty($jobNumber)){
        $errors['jobNumber'] = 'Merci de renseigner votre identifiant.';
}

// Diplômes.
$degrees= trim(filter_input(INPUT_POST, 'degrees', FILTER_SANITIZE_STRING));
if (empty($degrees)){
        $errors['degrees'] = 'Merci de selectioner votre diplôme.';
}

// Badges.
$badgeNumber= trim(filter_input(INPUT_POST, 'badgeNumber', FILTER_SANITIZE_STRING));
if (empty($badgeNumber)){
        $errors['badgeNumber'] = 'Merci d\'indiquer votre nombre de badges.';
} 

// Code academy.
$codeAcademyURL= trim(filter_input(INPUT_POST, 'codeAcademyURL', FILTER_SANITIZE_STRING));
if (empty($codeAcademyURL)){
        $errors['codeAcademyURL'] = 'Merci d\'indinquer votre lien Codecademy.';
} elseif (!filter_var($codeAcademyURL, FILTER_VALIDATE_URL)) {
        $errors['codeAcademyURL'] = 'Merci d\'indinquer votre lien Codecademy valide.';
}

// Hacks.
$textHacks = trim(filter_input(INPUT_POST, 'textHacks', FILTER_SANITIZE_STRING));

// Héros.
$textHero = trim(filter_input(INPUT_POST, 'textHero', FILTER_SANITIZE_STRING));

// Expérience de programmation.
$skills = trim(filter_input(INPUT_POST, 'skills', FILTER_SANITIZE_STRING));

// Utilisation de isset et non de empty pour les checkbox pour vérifier que la checkbox a été sélectionnée.
if (!isset($skills)){
    $errors['skills'] = 'Merci de cocher un choix.';
}
var_dump($errors);

?>

<!-- Création du titre du formulaire. -->
<h1 class="m-4 p-4 font-weight-bold h3">Formulaire d'enregistrement pour nouvel apprenant</h1>


<div class="m-4 p-4 col-9 border border-secondary">
    <form method="post" action="TP1.php">

        <h2 class="h4 m-3">Identité</h2>
        <div class="row justify-content-around">

            <!-- Affichage de la civilité.  -->
            <div class="form-group m-3 col-3">
                <label for="civility">Civilité</label>
                <select class="custom-select" name="civility">
                    <option value="Monsieur">Mr</option>
                    <option value="Madame">Mme</option>
                </select>
                <p class="error text-danger"><?= $errors['civility'] ?? '' ?></p>
            </div>

            <!-- Affichage du nom.  -->
            <div class="form-group m-3 col-3">
                <label for="lastName">Nom</label>
                <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Dupont">
                <p class="error text-danger"><?= $errors['lastName'] ?? '' ?></p>
            </div>

            <!-- Affichage du prénom.  -->
            <div class="form-group m-3 col-3">
                <label for="firstName">Prénom</label>
                <input type="text" class="form-control" id="firstName" name="firstName" placeholder="Philippe">
                <p class="error text-danger"><?= $errors['firstName'] ?? '' ?></p>
            </div>
        </div>

        <div class="row justify-content-around">
            <!-- Affichage de l'âge.  -->
            <div class="form-group col-3">
                <label for="birthday">Date de naissance</label>
                <input type="date" class="form-control" id="birthday" name="birthday" placeholder="26/01/1967">
                <p class="error text-danger"><?= $errors['birthday'] ?? '' ?></p>
            </div>

            <!-- Affichage du pays de naissance.  -->
            <div class="form-group col-3">
                <label for="country">Pays de naissance</label>
                <select class="custom-select" name="country">
                    <option value="France" selected="selected">France </option>
                    <option value="Afghanistan">Afghanistan </option>
                    <option value="Afrique_Centrale">Afrique Centrale </option>
                    <option value="Afrique_du_sud">Afrique du Sud </option>
                    <option value="Albanie">Albanie </option>
                    <option value="Algerie">Algerie </option>
                    <option value="Allemagne">Allemagne </option>
                    <option value="Andorre">Andorre </option>
                    <option value="Angola">Angola </option>
                    <option value="Anguilla">Anguilla </option>
                    <option value="Arabie_Saoudite">Arabie Saoudite </option>
                    <option value="Argentine">Argentine </option>
                    <option value="Armenie">Armenie </option>
                    <option value="Australie">Australie </option>
                    <option value="Autriche">Autriche </option>
                    <option value="Azerbaidjan">Azerbaidjan </option>
                    <option value="Bahamas">Bahamas </option>
                    <option value="Bangladesh">Bangladesh </option>
                    <option value="Barbade">Barbade </option>
                    <option value="Bahrein">Bahrein </option>
                    <option value="Belgique">Belgique </option>
                    <option value="Belize">Belize </option>
                    <option value="Benin">Benin </option>
                    <option value="Bermudes">Bermudes </option>
                    <option value="Bielorussie">Bielorussie </option>
                    <option value="Bolivie">Bolivie </option>
                    <option value="Botswana">Botswana </option>
                    <option value="Bhoutan">Bhoutan </option>
                    <option value="Boznie_Herzegovine">Boznie Herzegovine </option>
                    <option value="Bresil">Bresil </option>
                    <option value="Brunei">Brunei </option>
                    <option value="Bulgarie">Bulgarie </option>
                    <option value="Burkina_Faso">Burkina Faso </option>
                    <option value="Burundi">Burundi </option>
                    <option value="Caiman">Caiman </option>
                    <option value="Cambodge">Cambodge </option>
                    <option value="Cameroun">Cameroun </option>
                    <option value="Canada">Canada </option>
                    <option value="Canaries">Canaries </option>
                    <option value="Cap_vert">Cap Vert </option>
                    <option value="Chili">Chili </option>
                    <option value="Chine">Chine </option>
                    <option value="Chypre">Chypre </option>
                    <option value="Colombie">Colombie </option>
                    <option value="Comores">Colombie </option>
                    <option value="Congo">Congo </option>
                    <option value="Congo_democratique">Congo démocratique </option>
                    <option value="Cook">Cook </option>
                    <option value="Coree_du_Nord">Corée du Nord </option>
                    <option value="Coree_du_Sud">Corée du Sud </option>
                    <option value="Costa_Rica">Costa_Rica </option>
                    <option value="Cote_d_Ivoire">Côte d'Ivoire </option>
                    <option value="Croatie">Croatie </option>
                    <option value="Cuba">Cuba </option>
                    <option value="Danemark">Danemark </option>
                    <option value="Djibouti">Djibouti </option>
                    <option value="Dominique">Dominique </option>
                    <option value="Egypte">Egypte </option>
                    <option value="Emirats_Arabes_Unis">Emirats Arabes Unis </option>
                    <option value="Equateur">Equateur </option>
                    <option value="Erythree">Erythree </option>
                    <option value="Espagne">Espagne </option>
                    <option value="Estonie">Estonie </option>
                    <option value="Etats_Unis">Etats_Unis </option>
                    <option value="Ethiopie">Ethiopie </option>
                    <option value="Falkland">Falkland </option>
                    <option value="Feroe">Feroe </option>
                    <option value="Fidji">Fidji </option>
                    <option value="Finlande">Finlande </option>
                    <option value="France">France </option>
                    <option value="Gabon">Gabon </option>
                    <option value="Gambie">Gambie </option>
                    <option value="Georgie">Georgie </option>
                    <option value="Ghana">Ghana </option>
                    <option value="Gibraltar">Gibraltar </option>
                    <option value="Grece">Grece </option>
                    <option value="Grenade">Grenade </option>
                    <option value="Groenland">Groenland </option>
                    <option value="Guadeloupe">Guadeloupe </option>
                    <option value="Guam">Guam </option>
                    <option value="Guatemala">Guatemala</option>
                    <option value="Guernesey">Guernesey </option>
                    <option value="Guinee">Guinee </option>
                    <option value="Guinee_Bissau">Guinee_Bissau </option>
                    <option value="Guinee equatoriale">Guinee_Equatoriale </option>
                    <option value="Guyana">Guyana </option>
                    <option value="Guyane_Francaise ">Guyane_Francaise </option>
                    <option value="Haiti">Haiti </option>
                    <option value="Hawaii">Hawaii </option>
                    <option value="Honduras">Honduras </option>
                    <option value="Hong_Kong">Hong_Kong </option>
                    <option value="Hongrie">Hongrie </option>
                    <option value="Inde">Inde </option>
                    <option value="Indonesie">Indonesie </option>
                    <option value="Iran">Iran </option>
                    <option value="Iraq">Iraq </option>
                    <option value="Irlande">Irlande </option>
                    <option value="Islande">Islande </option>
                    <option value="Israel">Israel </option>
                    <option value="Italie">italie </option>
                    <option value="Jamaique">Jamaique </option>
                    <option value="Jan Mayen">Jan Mayen </option>
                    <option value="Japon">Japon </option>
                    <option value="Jersey">Jersey </option>
                    <option value="Jordanie">Jordanie </option>
                    <option value="Kazakhstan">Kazakhstan </option>
                    <option value="Kenya">Kenya </option>
                    <option value="Kirghizstan">Kirghizistan </option>
                    <option value="Kiribati">Kiribati </option>
                    <option value="Koweit">Koweit </option>
                    <option value="Laos">Laos </option>
                    <option value="Lesotho">Lesotho </option>
                    <option value="Lettonie">Lettonie </option>
                    <option value="Liban">Liban </option>
                    <option value="Liberia">Liberia </option>
                    <option value="Liechtenstein">Liechtenstein </option>
                    <option value="Lituanie">Lituanie </option>
                    <option value="Luxembourg">Luxembourg </option>
                    <option value="Lybie">Lybie </option>
                    <option value="Macao">Macao </option>
                    <option value="Macedoine">Macedoine </option>
                    <option value="Madagascar">Madagascar </option>
                    <option value="MadÃ¨re">MadÃ¨re </option>
                    <option value="Malaisie">Malaisie </option>
                    <option value="Malawi">Malawi </option>
                    <option value="Maldives">Maldives </option>
                    <option value="Mali">Mali </option>
                    <option value="Malte">Malte </option>
                    <option value="Man">Man </option>
                    <option value="Mariannes du Nord">Mariannes du Nord </option>
                    <option value="Maroc">Maroc </option>
                    <option value="Marshall">Marshall </option>
                    <option value="Martinique">Martinique </option>
                    <option value="Maurice">Maurice </option>
                    <option value="Mauritanie">Mauritanie </option>
                    <option value="Mayotte">Mayotte </option>
                    <option value="Mexique">Mexique </option>
                    <option value="Micronesie">Micronesie </option>
                    <option value="Midway">Midway </option>
                    <option value="Moldavie">Moldavie </option>
                    <option value="Monaco">Monaco </option>
                    <option value="Mongolie">Mongolie </option>
                    <option value="Montserrat">Montserrat </option>
                    <option value="Mozambique">Mozambique </option>
                    <option value="Namibie">Namibie </option>
                    <option value="Nauru">Nauru </option>
                    <option value="Nepal">Nepal </option>
                    <option value="Nicaragua">Nicaragua </option>
                    <option value="Niger">Niger </option>
                    <option value="Nigeria">Nigeria </option>
                    <option value="Niue">Niue </option>
                    <option value="Norfolk">Norfolk </option>
                    <option value="Norvege">Norvege </option>
                    <option value="Nouvelle_Caledonie">Nouvelle Calédonie </option>
                    <option value="Nouvelle_Zelande">Nouvelle Zélande </option>
                    <option value="Oman">Oman </option>
                    <option value="Ouganda">Ouganda </option>
                    <option value="Ouzbekistan">Ouzbekistan </option>
                    <option value="Pakistan">Pakistan </option>
                    <option value="Palau">Palau </option>
                    <option value="Palestine">Palestine </option>
                    <option value="Panama">Panama </option>
                    <option value="Papouasie_Nouvelle_Guinee">Papouasie Nouvelle Guinée </option>
                    <option value="Paraguay">Paraguay </option>
                    <option value="Pays_Bas">Pays_Bas </option>
                    <option value="Perou">Perou </option>
                    <option value="Philippines">Philippines </option>
                    <option value="Pologne">Pologne </option>
                    <option value="Polynesie">Polynesie </option>
                    <option value="Porto_Rico">Porto_Rico </option>
                    <option value="Portugal">Portugal </option>
                    <option value="Qatar">Qatar </option>
                    <option value="Republique_Dominicaine">Republique_Dominicaine </option>
                    <option value="Republique_Tcheque">Republique_Tcheque </option>
                    <option value="Reunion">Reunion </option>
                    <option value="Roumanie">Roumanie </option>
                    <option value="Royaume_Uni">Royaume_Uni </option>
                    <option value="Russie">Russie </option>
                    <option value="Rwanda">Rwanda </option>
                    <option value="Sahara Occidental">Sahara Occidental </option>
                    <option value="Sainte_Lucie">Sainte_Lucie </option>
                    <option value="Saint_Marin">Saint_Marin </option>
                    <option value="Salomon">Salomon </option>
                    <option value="Salvador">Salvador </option>
                    <option value="Samoa_Occidentales">Samoa_Occidentales</option>
                    <option value="Samoa_Americaine">Samoa_Americaine </option>
                    <option value="Sao_Tome_et_Principe">Sao_Tome_et_Principe </option>
                    <option value="Senegal">Senegal </option>
                    <option value="Seychelles">Seychelles </option>
                    <option value="Sierra Leone">Sierra Leone </option>
                    <option value="Singapour">Singapour </option>
                    <option value="Slovaquie">Slovaquie </option>
                    <option value="Slovenie">Slovenie</option>
                    <option value="Somalie">Somalie </option>
                    <option value="Soudan">Soudan </option>
                    <option value="Sri_Lanka">Sri_Lanka </option>
                    <option value="Suede">Suede </option>
                    <option value="Suisse">Suisse </option>
                    <option value="Surinam">Surinam </option>
                    <option value="Swaziland">Swaziland </option>
                    <option value="Syrie">Syrie </option>
                    <option value="Tadjikistan">Tadjikistan </option>
                    <option value="Taiwan">Taiwan </option>
                    <option value="Tonga">Tonga </option>
                    <option value="Tanzanie">Tanzanie </option>
                    <option value="Tchad">Tchad </option>
                    <option value="Thailande">Thailande </option>
                    <option value="Tibet">Tibet </option>
                    <option value="Timor_Oriental">Timor_Oriental </option>
                    <option value="Togo">Togo </option>
                    <option value="Trinite_et_Tobago">Trinite_et_Tobago </option>
                    <option value="Tristan da cunha">Tristan de cuncha </option>
                    <option value="Tunisie">Tunisie </option>
                    <option value="Turkmenistan">Turmenistan </option>
                    <option value="Turquie">Turquie </option>
                    <option value="Ukraine">Ukraine </option>
                    <option value="Uruguay">Uruguay </option>
                    <option value="Vanuatu">Vanuatu </option>
                    <option value="Vatican">Vatican </option>
                    <option value="Venezuela">Venezuela </option>
                    <option value="Vierges_Americaines">Vierges_Americaines </option>
                    <option value="Vierges_Britanniques">Vierges_Britanniques </option>
                    <option value="Vietnam">Vietnam </option>
                    <option value="Wake">Wake </option>
                    <option value="Wallis et Futuma">Wallis et Futuma </option>
                    <option value="Yemen">Yemen </option>
                    <option value="Yougoslavie">Yougoslavie </option>
                    <option value="Zambie">Zambie </option>
                    <option value="Zimbabwe">Zimbabwe </option>
                </select>
                <p class="error text-danger"><?= $errors['country'] ?? '' ?></p>
            </div>

            <!-- Affichage de la nationalité.  -->
            <div class="form-group col-3">
                <label for="nationality">Nationalité</label>
                <select class="custom-select" name="nationality">
                    <option value="AFG">Afghane (Afghanistan)</option>
                    <option value="ALB">Albanaise (Albanie)</option>
                    <option value="DZA">Algérienne (Algérie)</option>
                    <option value="DEU">Allemande (Allemagne)</option>
                    <option value="USA">Americaine (États-Unis)</option>
                    <option value="AND">Andorrane (Andorre)</option>
                    <option value="AGO">Angolaise (Angola)</option>
                    <option value="ATG">Antiguaise-et-Barbudienne (Antigua-et-Barbuda)</option>
                    <option value="ARG">Argentine (Argentine)</option>
                    <option value="ARM">Armenienne (Arménie)</option>
                    <option value="AUS">Australienne (Australie)</option>
                    <option value="AUT">Autrichienne (Autriche)</option>
                    <option value="AZE">Azerbaïdjanaise (Azerbaïdjan)</option>
                    <option value="BHS">Bahamienne (Bahamas)</option>
                    <option value="BHR">Bahreinienne (Bahreïn)</option>
                    <option value="BGD">Bangladaise (Bangladesh)</option>
                    <option value="BRB">Barbadienne (Barbade)</option>
                    <option value="BEL">Belge (Belgique)</option>
                    <option value="BLZ">Belizienne (Belize)</option>
                    <option value="BEN">Béninoise (Bénin)</option>
                    <option value="BTN">Bhoutanaise (Bhoutan)</option>
                    <option value="BLR">Biélorusse (Biélorussie)</option>
                    <option value="MMR">Birmane (Birmanie)</option>
                    <option value="GNB">Bissau-Guinéenne (Guinée-Bissau)</option>
                    <option value="BOL">Bolivienne (Bolivie)</option>
                    <option value="BIH">Bosnienne (Bosnie-Herzégovine)</option>
                    <option value="BWA">Botswanaise (Botswana)</option>
                    <option value="BRA">Brésilienne (Brésil)</option>
                    <option value="GBR">Britannique (Royaume-Uni)</option>
                    <option value="BRN">Brunéienne (Brunéi)</option>
                    <option value="BGR">Bulgare (Bulgarie)</option>
                    <option value="BFA">Burkinabée (Burkina)</option>
                    <option value="BDI">Burundaise (Burundi)</option>
                    <option value="KHM">Cambodgienne (Cambodge)</option>
                    <option value="CMR">Camerounaise (Cameroun)</option>
                    <option value="CAN">Canadienne (Canada)</option>
                    <option value="CPV">Cap-verdienne (Cap-Vert)</option>
                    <option value="CAF">Centrafricaine (Centrafrique)</option>
                    <option value="CHL">Chilienne (Chili)</option>
                    <option value="CHN">Chinoise (Chine)</option>
                    <option value="CYP">Chypriote (Chypre)</option>
                    <option value="COL">Colombienne (Colombie)</option>
                    <option value="COM">Comorienne (Comores)</option>
                    <option value="COG">Congolaise (Congo-Brazzaville)</option>
                    <option value="COD">Congolaise (Congo-Kinshasa)</option>
                    <option value="COK">Cookienne (Îles Cook)</option>
                    <option value="CRI">Costaricaine (Costa Rica)</option>
                    <option value="HRV">Croate (Croatie)</option>
                    <option value="CUB">Cubaine (Cuba)</option>
                    <option value="DNK">Danoise (Danemark)</option>
                    <option value="DJI">Djiboutienne (Djibouti)</option>
                    <option value="DOM">Dominicaine (République dominicaine)</option>
                    <option value="DMA">Dominiquaise (Dominique)</option>
                    <option value="EGY">Égyptienne (Égypte)</option>
                    <option value="ARE">Émirienne (Émirats arabes unis)</option>
                    <option value="GNQ">Équato-guineenne (Guinée équatoriale)</option>
                    <option value="ECU">Équatorienne (Équateur)</option>
                    <option value="ERI">Érythréenne (Érythrée)</option>
                    <option value="ESP">Espagnole (Espagne)</option>
                    <option value="TLS">Est-timoraise (Timor-Leste)</option>
                    <option value="EST">Estonienne (Estonie)</option>
                    <option value="ETH">Éthiopienne (Éthiopie)</option>
                    <option value="FJI">Fidjienne (Fidji)</option>
                    <option value="FIN">Finlandaise (Finlande)</option>
                    <option value="FRA" selected="selected">Française (France)</option>
                    <option value="GAB">Gabonaise (Gabon)</option>
                    <option value="GMB">Gambienne (Gambie)</option>
                    <option value="GEO">Georgienne (Géorgie)</option>
                    <option value="GHA">Ghanéenne (Ghana)</option>
                    <option value="GRD">Grenadienne (Grenade)</option>
                    <option value="GTM">Guatémaltèque (Guatemala)</option>
                    <option value="GIN">Guinéenne (Guinée)</option>
                    <option value="GUY">Guyanienne (Guyana)</option>
                    <option value="HTI">Haïtienne (Haïti)</option>
                    <option value="GRC">Hellénique (Grèce)</option>
                    <option value="HND">Hondurienne (Honduras)</option>
                    <option value="HUN">Hongroise (Hongrie)</option>
                    <option value="IND">Indienne (Inde)</option>
                    <option value="IDN">Indonésienne (Indonésie)</option>
                    <option value="IRQ">Irakienne (Iraq)</option>
                    <option value="IRN">Iranienne (Iran)</option>
                    <option value="IRL">Irlandaise (Irlande)</option>
                    <option value="ISL">Islandaise (Islande)</option>
                    <option value="ISR">Israélienne (Israël)</option>
                    <option value="ITA">Italienne (Italie)</option>
                    <option value="CIV">Ivoirienne (Côte d'Ivoire)</option>
                    <option value="JAM">Jamaïcaine (Jamaïque)</option>
                    <option value="JPN">Japonaise (Japon)</option>
                    <option value="JOR">Jordanienne (Jordanie)</option>
                    <option value="KAZ">Kazakhstanaise (Kazakhstan)</option>
                    <option value="KEN">Kenyane (Kenya)</option>
                    <option value="KGZ">Kirghize (Kirghizistan)</option>
                    <option value="KIR">Kiribatienne (Kiribati)</option>
                    <option value="KNA">Kittitienne et Névicienne (Saint-Christophe-et-Niévès)</option>
                    <option value="KWT">Koweïtienne (Koweït)</option>
                    <option value="LAO">Laotienne (Laos)</option>
                    <option value="LSO">Lesothane (Lesotho)</option>
                    <option value="LVA">Lettone (Lettonie)</option>
                    <option value="LBN">Libanaise (Liban)</option>
                    <option value="LBR">Libérienne (Libéria)</option>
                    <option value="LBY">Libyenne (Libye)</option>
                    <option value="LIE">Liechtensteinoise (Liechtenstein)</option>
                    <option value="LTU">Lituanienne (Lituanie)</option>
                    <option value="LUX">Luxembourgeoise (Luxembourg)</option>
                    <option value="MKD">Macédonienne (Macédoine)</option>
                    <option value="MYS">Malaisienne (Malaisie)</option>
                    <option value="MWI">Malawienne (Malawi)</option>
                    <option value="MDV">Maldivienne (Maldives)</option>
                    <option value="MDG">Malgache (Madagascar)</option>
                    <option value="MLI">Maliennes (Mali)</option>
                    <option value="MLT">Maltaise (Malte)</option>
                    <option value="MAR">Marocaine (Maroc)</option>
                    <option value="MHL">Marshallaise (Îles Marshall)</option>
                    <option value="MUS">Mauricienne (Maurice)</option>
                    <option value="MRT">Mauritanienne (Mauritanie)</option>
                    <option value="MEX">Mexicaine (Mexique)</option>
                    <option value="FSM">Micronésienne (Micronésie)</option>
                    <option value="MDA">Moldave (Moldovie)</option>
                    <option value="MCO">Monegasque (Monaco)</option>
                    <option value="MNG">Mongole (Mongolie)</option>
                    <option value="MNE">Monténégrine (Monténégro)</option>
                    <option value="MOZ">Mozambicaine (Mozambique)</option>
                    <option value="NAM">Namibienne (Namibie)</option>
                    <option value="NRU">Nauruane (Nauru)</option>
                    <option value="NLD">Néerlandaise (Pays-Bas)</option>
                    <option value="NZL">Néo-Zélandaise (Nouvelle-Zélande)</option>
                    <option value="NPL">Népalaise (Népal)</option>
                    <option value="NIC">Nicaraguayenne (Nicaragua)</option>
                    <option value="NGA">Nigériane (Nigéria)</option>
                    <option value="NER">Nigérienne (Niger)</option>
                    <option value="NIU">Niuéenne (Niue)</option>
                    <option value="PRK">Nord-coréenne (Corée du Nord)</option>
                    <option value="NOR">Norvégienne (Norvège)</option>
                    <option value="OMN">Omanaise (Oman)</option>
                    <option value="UGA">Ougandaise (Ouganda)</option>
                    <option value="UZB">Ouzbéke (Ouzbékistan)</option>
                    <option value="PAK">Pakistanaise (Pakistan)</option>
                    <option value="PLW">Palaosienne (Palaos)</option>
                    <option value="PSE">Palestinienne (Palestine)</option>
                    <option value="PAN">Panaméenne (Panama)</option>
                    <option value="PNG">Papouane-Néo-Guinéenne (Papouasie-Nouvelle-Guinée)</option>
                    <option value="PRY">Paraguayenne (Paraguay)</option>
                    <option value="PER">Péruvienne (Pérou)</option>
                    <option value="PHL">Philippine (Philippines)</option>
                    <option value="POL">Polonaise (Pologne)</option>
                    <option value="PRT">Portugaise (Portugal)</option>
                    <option value="QAT">Qatarienne (Qatar)</option>
                    <option value="ROU">Roumaine (Roumanie)</option>
                    <option value="RUS">Russe (Russie)</option>
                    <option value="RWA">Rwandaise (Rwanda)</option>
                    <option value="LCA">Saint-Lucienne (Sainte-Lucie)</option>
                    <option value="SMR">Saint-Marinaise (Saint-Marin)</option>
                    <option value="VCT">Saint-Vincentaise et Grenadine (Saint-Vincent-et-les Grenadines)</option>
                    <option value="SLB">Salomonaise (Îles Salomon)</option>
                    <option value="SLV">Salvadorienne (Salvador)</option>
                    <option value="WSM">Samoane (Samoa)</option>
                    <option value="STP">Santoméenne (Sao Tomé-et-Principe)</option>
                    <option value="SAU">Saoudienne (Arabie saoudite)</option>
                    <option value="SEN">Sénégalaise (Sénégal)</option>
                    <option value="SRB">Serbe (Serbie)</option>
                    <option value="SYC">Seychelloise (Seychelles)</option>
                    <option value="SLE">Sierra-Léonaise (Sierra Leone)</option>
                    <option value="SGP">Singapourienne (Singapour)</option>
                    <option value="SVK">Slovaque (Slovaquie)</option>
                    <option value="SVN">Slovène (Slovénie)</option>
                    <option value="SOM">Somalienne (Somalie)</option>
                    <option value="SDN">Soudanaise (Soudan)</option>
                    <option value="LKA">Sri-Lankaise (Sri Lanka)</option>
                    <option value="ZAF">Sud-Africaine (Afrique du Sud)</option>
                    <option value="KOR">Sud-Coréenne (Corée du Sud)</option>
                    <option value="SSD">Sud-Soudanaise (Soudan du Sud)</option>
                    <option value="SWE">Suédoise (Suède)</option>
                    <option value="CHE">Suisse (Suisse)</option>
                    <option value="SUR">Surinamaise (Suriname)</option>
                    <option value="SWZ">Swazie (Swaziland)</option>
                    <option value="SYR">Syrienne (Syrie)</option>
                    <option value="TJK">Tadjike (Tadjikistan)</option>
                    <option value="TZA">Tanzanienne (Tanzanie)</option>
                    <option value="TCD">Tchadienne (Tchad)</option>
                    <option value="CZE">Tchèque (Tchéquie)</option>
                    <option value="THA">Thaïlandaise (Thaïlande)</option>
                    <option value="TGO">Togolaise (Togo)</option>
                    <option value="TON">Tonguienne (Tonga)</option>
                    <option value="TTO">Trinidadienne (Trinité-et-Tobago)</option>
                    <option value="TUN">Tunisienne (Tunisie)</option>
                    <option value="TKM">Turkmène (Turkménistan)</option>
                    <option value="TUR">Turque (Turquie)</option>
                    <option value="TUV">Tuvaluane (Tuvalu)</option>
                    <option value="UKR">Ukrainienne (Ukraine)</option>
                    <option value="URY">Uruguayenne (Uruguay)</option>
                    <option value="VUT">Vanuatuane (Vanuatu)</option>
                    <option value="VAT">Vaticane (Vatican)</option>
                    <option value="VEN">Vénézuélienne (Venezuela)</option>
                    <option value="VNM">Vietnamienne (Viêt Nam)</option>
                    <option value="YEM">Yéménite (Yémen)</option>
                    <option value="ZMB">Zambienne (Zambie)</option>
                    <option value="ZWE">Zimbabwéenne (Zimbabwe)</option>
                </select>
                <p class="error text-danger"><?= $errors['nationality'] ?? '' ?></p>
            </div>
        </div>


        <h2 class="h4 m-3">Adresse</h2>

        <div class="row justify-content-around">
            <!-- Affichage de l'adresse.  -->
            <div class="form-group col-3">
                <label for="address">Adresse</label>
                <input type="text" class="form-control" id="address" name="address" placeholder="18 Rue Louis Braille">
                <p class="error text-danger"><?= $errors['address'] ?? '' ?></p>
            </div>

            <!-- Affichage du code postal.  -->
            <div class="form-group col-3">
                <label for="postcode">Code postal</label>
                <input type="number" class="form-control" id="postcode" name="postcode" placeholder="75008">
                <p class="error text-danger"><?= $errors['postcode'] ?? '' ?></p>
            </div>

            <!-- Affichage de la ville.  -->
            <div class="form-group col-3">
                <label for="city">Ville</label>
                <input type="text" class="form-control" id="city" name="city" placeholder="Paris">
                <p class="error text-danger"><?= $errors['city'] ?? '' ?></p>
            </div>

        </div>

        <h2 class="h4 m-3">Contact</h2>
        <div class="row justify-content-around">

            <!-- Affichage de l'adresse mail.  -->
            <div class="form-group col-4">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email"
                    placeholder="philippe.dupont@gmail.com">
                <p class="error text-danger"><?= $errors['email'] ?? '' ?></p>
            </div>

            <!-- Affichage du numéro de téléphone.  -->
            <div class="form-group col-4">
                <label for="phone">Numéro de téléphone</label>
                <input type="tel" class="form-control" id="phone" name="phone" placeholder="06.49.58.74.63">
                <p class="error text-danger"><?= $errors['phone'] ?? '' ?></p>
            </div>
        </div>


        <h2 class="h4 m-3">Diplômes</h2>
        <div class="row justify-content-around">

            <!-- Affichage du niveau de diplôme.  -->
            <div class="form-group col-4">
                <label for="degrees">Niveau de diplôme</label>
                <select class="custom-select" name="degrees">
                    <option value="Sans diplôme" selected="selected">Sans diplôme</option>
                    <option value="Bac">Bac</option>
                    <option value="Bac+2">Bac+2</option>
                    <option value="Bac+3 ou supérieur">Bac+3 ou supérieur</option>
                </select>
                <p class="error text-danger"><?= $errors['degrees'] ?? '' ?></p>
            </div>


            <!-- Affichage du numéro de pôle emploi (7 chiffres suivis d'une lettre)  -->
            <div class="form-group col-4">
                <label for="jobNumber">Numéro pôle emploi</label>
                <input type="text" class="form-control" id="jobNumber" name="jobNumber" placeholder="359945F">
                <p class="error text-danger"><?= $errors['jobNumber'] ?? '' ?></p>
            </div>

        </div>


        <h2 class="h4 m-3">Apprentissage</h2>
        <div class="row justify-content-around">

            <!-- Nombre de badges  -->
            <div class="form-group col-4">
                <label for="badgeNumber">Nombre de badges</label>
                <select class="custom-select" name="badgeNumber">
                    <option value="0" selected="selected">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
                <p class="error text-danger"><?= $errors['badgeNumber'] ?? '' ?></p>
            </div>

            <!-- Affichage du lien code academy  -->
            <div class="form-group col-4">
                <label for="codeAcademyURL">Lien vers Code Academy</label>
                <input type="url" class="form-control" id="codeAcademyURL" name="codeAcademyURL"
                    placeholder="www.codeAcademyURL.fr">
                <p class="error text-danger"><?= $errors['codeAcademyURL'] ?? '' ?></p>
            </div>

        </div>


        <h2 class="h4 m-3">Autres questions...</h2>
        <div class="row justify-content-around">

            <!-- Affichage de la question sur le super héro.  -->
            <div class="form-group col-3 mt-4">
                <label for="textHero">Si vous étiez un super héros/une super héroïne, qui seriez-vous et pourquoi
                    ?</label>
                <textarea name="textHero" id="textHero" cols="50" rows="5"></textarea>
                <p class="error text-danger"><?= $errors['textHero'] ?? '' ?></p>
            </div>

            <!-- Affichage de la question sur le hack.  -->
            <div class="form-group col-3 mt-4">
                <label for="textHacks">Racontez-nous un de vos "hacks" (pas forcément technique ou informatique)</label>
                <textarea name="textHacks" id="textHacks" cols="50" rows="5"></textarea>
                <p class="error text-danger"><?= $errors['textHacks'] ?? '' ?></p>
            </div>

            <!-- Affichage de la question sur l'expérience en programmation.  -->
            <div class="form-group col-3">
                <div class="checkboxContainer">
                    <p>Avez-vous déjà eu une experience avec la programmation et/ou l'informatique avant de remplir ce
                        formulaire?
                    </p>
                    <label for="yes">OUI</label>
                    <input type="radio" id="yes" name="skills" value="yes" <?= $skills == 'yes' ? 'checked' : '' ?>>
                    <label for="no">NON</label>
                    <input type="radio" id="no" name="skills" value="no" <?= $skills == 'no' ? 'checked' : '' ?>>
                    <span class="error text-danger"><?= $errors['skills'] ?? '' ?></span>
                </div>
            </div>

        </div>

        <div class="row m-4 justify-content-around">
            <button type="submit" class="btn btn-success btn-lg col-4">Valider</button>
        </div>

    </form>
</div>


<!-- Insertion du footer. -->

<?php include 'footer.php'; ?>