<?php 
    include_once('../controllers/all_voiture.controller.php');
?>
<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title>Crud Voiture</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <h2> Listes des voitures</h2>
    <a href="ajout_voiture.view.php"><button type="button" class="btn rounded-pill btn-primary">Ajouter</button></a>
    <table class="table table-condensed">
        <thead>
            <tr>
                <th>ID</th>
                <th>Numero identifiant</th>
                <th>Numero série</th>
                <th>Modèle</th>
                <th>Marque</th>
                <th>Couleur</th>
                <th>Date achat</th>
                <th style="text-align: center;">Actions</th>
            </tr>
            <?php 
                $numero = 0;
                foreach($voitures as $voiture){
                    $numero += 1;
            ?>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $numero;?></td>
                <td><?php echo $voiture['numero_identifiant']?></td>
                <td><?php echo $voiture['numero_serie']?></td>
                <td><?php echo $voiture['modele']?></td>
                <td><?php echo $voiture['marque']?></td>
                <td><?php echo $voiture['couleur']?></td>
                <td><?php echo $voiture['date_achat']?></td>
                <td style="text-align: center;">
                    <a href="update_voiture.view.php?id=<?=$voiture['id']?>"><button type="button" class="btn rounded-pill btn-warning" >Modifier</button></a>
                    <a href="../controllers/delete_voiture.controller.php?id=<?=$voiture['id']?>"><button type="button" class="btn rounded-pill btn-danger">Supprimer</button></a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
</body>
</html>