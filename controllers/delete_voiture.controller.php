<?php
      //Inclusion du fichier voiture.methods.class.php se trouvant dans le repertoire models
      include_once('../models/voiture.methods.class.php');

      //Création d'un objet VoitureMethods stocké dans la variable $voiture_methods 
      $voiture_methods = new VoitureMethods();

      //Recupération de l'id envoyé par URL
      $id = $_GET["id"];

      //Utilisation de la fonction delete_voiture($id) pour supprimer une voiture
      //accessible depuis notre variable $voiture_methods
      $reponse = $voiture_methods ->delete_voiture($id);

      //Redirection vers la liste des voitures
      header("Location:../views/voitures.php");
?>