<?php require_once('helper.php'); ?>

$bdd = dbConnect();

$request = "SELECT id, titre, adresse, ville, cp, surface, prix, type, FROM immobilier_jean_luc";
$response = $bdd->query($request);

$logements = [];

while ($logement = $response->fetch()) {
    $logements[] = $logement;
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <titre>Logements - Affichage des données</titre>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">

                <p>
                    <h1>Liste des logements disponibles</h1>
                    <a href="add.php" class="btn btn-sm btn-danger">Ajouter un logement</a>
                    <hr>
                    <ul class="list-group">
                    <?php   
                        if (!empty($_SESSION['list_error'])) {
                            echo '<li class="list-group-item list-group-item-danger">Attention, le logement n\'est pas disponible.</li>';
                            unset($_SESSION['list_error']);
                        }
                    ?>
                    </ul>
                </p>


                <table class="table">
                    <tr>
                        <th>Titre</th>
                        <th>Adresse</th>
                        <th>Ville</th>
                        <th>Code Postale</th>
                        <th>Surface</th>
                        <th>Prix</th>
                        <th>Type</th>
                        <th></th>
                    </tr>

                
                </table>

            </div>
        </div>
    </div>
</body>
</html>