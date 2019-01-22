<?php
require_once('helper.php');

$bdd = dbConnect();

$request = 'SELECT * FROM immobilier_jean_luc WHERE id = :id';

$response = $bdd->prepare($request);

$logement = $response->execute([
    'id' => $_GET['id']
]);

$logement = $response->fetch();

if (!$logement) {
    
    $_SESSION['list_error'] = true;
    Header('Location: list.php');
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <titre><?= $logement['titre']; ?> (<?= $logement['year_of_prod']; ?>)</titre>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-12">

            <h1><?= $logement['titre']; ?> (<?= $logement['year_of_prod']; ?>)</h1>
            <small>Réalisé par <?= $logement['director']; ?> avec <?= $logement['actors']; ?>. Une production de <?= $logement['producer']; ?>.</small>

            <hr>
            <blockquote class="blockquote">
                <p class="mb-0">
                    Un oeuvre de type <?= $logement['category']; ?>, disponible en langue "<?= $logement['language'] ?>".
                    <br>
                    
                    <strong>Vidéo : </strong> <?= (!empty($logement['photo'])) ? "<a href='".$logement['photo']."' target='_blank'>Cliquer ici</a>" : "Aucune vidéo disponible."; ?>
                </p>
                <footer class="blockquote-footer">
                    <?= $logement['storyline']; ?>
                </footer>
            </blockquote>

                <a href="list.php">Retour à la liste</a>
            </div>
        </div>
    </div>
    
</body>
</html>