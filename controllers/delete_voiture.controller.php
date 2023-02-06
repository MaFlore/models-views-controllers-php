<?php
      include_once('../models/voiture.methods.class.php');

      $voiture_methods = new VoitureMethods();

      $id = $_GET["id"];
      $reponse = $voiture_methods ->delete_voiture($id);

      header("Location:../views/index.php");
?>