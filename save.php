<?php
require_once('helper.php');
/**
 * Je vérifie si mes variables se transmettent bien avec var_dump($_POST);
 */

var_dump($_POST);
/**
 * j'effectue mes validations :
 * - titre, ville, adresse, code_postale, storyline : mini 5 caractères
 * - photo : format d'URL valide
 */

/**
 * Titre
 */
if (empty($_POST['titre'])) {
    echo formError("Le titre ne doit pas être vide.");
}
elseif(strlen($_POST['titre']) < 5) {
    echo formError("Le titre doit faire plus de 5 caractères.");
}
else {
    $titre = $_POST['titre'];
}

if (empty($_POST['adresse'])) {
    echo formError("Le champ adresse ne doit pas être vide.");
}
elseif(strlen($_POST['adresse']) < 5) {
    echo formError("Le champ adresse doit faire plus de 5 caractères.");
}
else {
    $adresse = $_POST['adresse'];
}


if (empty($_POST['ville'])) {
    echo formError("Le champs ville ne doit pas être vide.");
}

else {
    $ville = $_POST['ville'];
}

if (empty($_POST['code_postale'])) {
    echo formError("Le code_postale ne doit pas être vide.");
}
elseif(strlen($_POST['code_postale']) < 5) {
    echo formError("Le code_postale ne doit pas faire plus de 5 caractères.");
}
else {
    $code_postale = $_POST['code_postale'];
}

if (empty($_POST['photo'])) {
    $photo = null;
}

else {
    $photo = $_POST['photo'];
}


if (empty($titre) || empty($adresse) || empty($ville) || empty($code_postale) || empty($surface) || empty($prix) || empty($type) ) {
    echo formError('Les champs titre, adresse, ville, code_postale, surface, prix, type sont obligatoires.');
}
else {
    $bdd = dbConnect();

    $query = "  INSERT INTO immobilier_jean_luc(titre, adresse, ville, code_postale, surface, prix, type )
                VALUES (:titre, :adresse, :ville, :code_postale, :surface, :prix, :type )";

    $response = $bdd->prepare($query);

    $response->execute([
        'titre'     => $titre,
        'adresse'    => $adresse,
        'ville'      => $ville,
        'code_postale'  => $code_postale,
        'surface'   => $surface,
        'prix'       => $prix,
        'type'      => $type,
        
    ]);

    
}



$_FILES['icone']['name']     //Le nom original du fichier, comme sur le disque du visiteur (exemple : mon_icone.png).
$_FILES['icone']['type']     //Le type du fichier. Par exemple, cela peut être « image/png ».
$_FILES['icone']['size']     //La taille du fichier en octets.
$_FILES['icone']['tmp_name'] //L'adresse vers le fichier uploadé dans le répertoire temporaire.
$_FILES['icone']['error']    //Le code d'erreur, qui permet de savoir si le fichier a bien été uploadé.

?>