<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title>Ajout voiture</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <h2>Ajout d'une voiture</h2>
    <a href="index.php"><button type="button" class="btn rounded-pill btn-success">Retour</button></a>
    <form class="form-horizontal" method="post" action="../controllers/insert_voiture.controller.php">
        <div class=" form-group ">
            <label class="control-label col-sm-2 " for="numero_identifiant">Numero identifiant :</label>
            <div class="col-sm-10 ">
                <input type="text" class="form-control " id="numero_identifiant" name="numero_identifiant" placeholder="Le numero identifiant" required>
            </div>
        </div>
        <div class="form-group ">
            <label class="control-label col-sm-2 " for="numero_serie">Numero série :</label>
            <div class="col-sm-10 ">
                <input type="text" class="form-control " id="numero_serie" name="numero_serie" placeholder="Le numero série" required>
            </div>
        </div>
        <div class="form-group ">
            <label class="control-label col-sm-2 " for="modele">Modèle :</label>
            <div class="col-sm-10 ">
                <input type="text" class="form-control " id="modele" name="modele" placeholder="Le modèle de la voiture" required>
            </div>
        </div>
        <div class="form-group ">
            <label class="control-label col-sm-2 " for="marque">Marque :</label>
            <div class="col-sm-10 ">
                <input type="text" class="form-control " id="marque" name="marque" placeholder="La marque de la voiture" required>
            </div>
        </div>
        <div class="form-group ">
            <label class="control-label col-sm-2 " for="couleur">Couleur :</label>
            <div class="col-sm-10 ">
                <input type="text" class="form-control " id="couleur" name="couleur" placeholder="La couleur de la voiture" required>
            </div>
        </div>
        <div class="form-group ">
            <label class="control-label col-sm-2 " for="date_achat">Date achat :</label>
            <div class="col-sm-10 ">
                <input type="date" class="form-control " id="date_achat" name="date_achat" required>
            </div>
        </div>
        <div class="form-group button">
            <div class="col-sm-offset-2 col-sm-10 ">
                <button type="submit" name="Ajouter" class="btn btn-primary">Ajouter</button>
            </div>
        </div>
    </form>
</div>
</body>
</html>