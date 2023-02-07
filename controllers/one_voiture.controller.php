<?php
    //Inclusion du fichier voiture.methods.class.php se trouvant dans le repertoire models
    include_once('../models/voiture.methods.class.php');

    //Création d'un objet VoitureMethods stocké dans la variable $voiture_methods 
    $voiture_methods = new VoitureMethods();

    //Recupération de l'id envoyé par URL
    $id = $_GET["id"];

    //Utilisation de la fonction get_voiture_by_id($id) pour voir les détails 
    //d'une une voiture à travers l'id
    //accessible depuis notre variable $voiture_methods
    $reponse = $voiture_methods ->get_voiture_by_id($id);

    //Utilisation de la fonction fetch(PDO::FETCH_OBJ) pour renvoyer
    //chaque ligne en tant qu'objet avec noms de propriétés 
    //correspondant aux noms de colonne dans la base de données.
    $voiture = $reponse->fetch(PDO::FETCH_OBJ);

?>