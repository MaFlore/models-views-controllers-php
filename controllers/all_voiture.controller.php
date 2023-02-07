<?php
    //Inclusion du fichier voiture.methods.class.php se trouvant dans le repertoire models
    include_once('../models/voiture.methods.class.php');

    //Création d'un objet VoitureMethods stocké dans la variable $voiture_methods 
    $voiture_methods = new VoitureMethods();

    //Utilisation de la fonction get_all_voitue() pour recupérer la liste des voitures 
    //accessible depuis notre variable $voiture_methods
    $reponse = $voiture_methods ->get_all_voiture();

    //Utilisation de la fonction fetchAll() pour transformer les objets en tableau
    $voitures = $reponse ->fetchAll();
?>