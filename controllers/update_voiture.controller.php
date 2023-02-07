<?php
    //Inclusion du fichier voiture.methods.class.php se trouvant dans le repertoire models
    include_once('../models/voiture.methods.class.php');

    //Création d'un objet VoitureMethods stocké dans la variable $voiture_methods 
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

        //Création d'un objet Voiture stocké dans la variable $voiture
        $voiture = new Voiture();
        //Modifications des contenus de chaque variables à travers la fonction set
        $voiture->setNumero_identifiant($numero_identifiant);
        $voiture->setNumero_serie($numero_serie);
        $voiture->setModele($modele);
        $voiture->setMarque($marque);
        $voiture->setCouleur($couleur);
        $voiture->setDate_achat($date_achat);
        $voiture->setId($id);

        //Utilisation de la fonction update_voiture($voiture) pour modifier une voiture 
        //accessible depuis notre variable $voiture_methods
        $reponse = $voiture_methods->update_voiture($voiture);

        //Redirection vers la liste des voitures
        header("Location:../views/voitures.php");
    }
?>