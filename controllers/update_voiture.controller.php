<?php
    include_once('../models/voiture.methods.class.php');

    $voiture_methods = new VoitureMethods();
    if(isset($_POST['Modifier']) && isset($_POST['numero_identifiant']) 
        && isset($_POST['numero_serie']) && isset($_POST['modele']) 
        && isset($_POST['marque']) && isset($_POST['couleur']) 
        && isset($_POST['date_achat'])){

        $id = $_POST['id'];
        $numero_identifiant = $_POST['numero_identifiant'];
        $numero_serie = $_POST['numero_serie'];
        $modele = $_POST['modele'];
        $marque = $_POST['marque'];
        $couleur = $_POST['couleur'];
        $date_achat = $_POST['date_achat'];

        $voiture = new Voiture();
        $voiture->setNumero_identifiant($numero_identifiant);
        $voiture->setNumero_serie($numero_serie);
        $voiture->setModele($modele);
        $voiture->setMarque($marque);
        $voiture->setCouleur($couleur);
        $voiture->setDate_achat($date_achat);
        $voiture->setId($id);

        $reponse = $voiture_methods->insert_voiture($voiture);
        header("Location:../views/index.php");
    }
?>