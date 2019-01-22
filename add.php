<?php require_once('helper.php'); ?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <titre>logement</titre>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12">

                <p class="lead">
                    <h1>Logement</h1>
                    <a href ="list.php" class="btn btn-sm btn-danger">< retour </a>
                    <br>
                    Les champs avec une astérisque * sont obligatoires.
                    
                    
                    
                </p>

                <form action="save.php" method="post">
                        <label for="titre">Titre* :</label>
                        <input type="text" name="titre" /><br />

                        <label for="adresse">Adresse* :</label>
                        <input type="text" name="adresse" /><br />

                        <label for="ville">Ville* :</label>
                        <input type="text" name="ville" /><br />

                        <label for="code_postale">Code Postale* :</label>
                        <input type="text" name="code_postale" /><br />

                        <label for="surface">Surface* :</label>
                        <input type="text" name="surface" /><br />

                        <label for="type">Type* :</label>
                        <input type="text" name="type" /><br />

                        <label for="prix">Prix*:</label>
                        <input type="number" name="type" /><br />
                        
                                        
                   

                    <label for="type">Type*</label>
                    <select id="type" class="form-control" name="type">
                        <option value="location">location</option>          
                        <option value="vente">vente</option>
                        
                    </select>

                    <label for="">Surface*</label>
                    <input id="surface" class="form-control" name="surface">
                           
                     
                   

                    <hr>
                    
                    <button class="btn btn-primary float-right" type="submit">Enregistrer</button>
                </form>

            </div>
        </div>
    </div>
</body>
</html>


