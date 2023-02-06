<?php
    include_once('../models/voiture.methods.class.php');

    $voiture_methods = new VoitureMethods();

    $id = $_GET["id"];

    $reponse = $voiture_methods ->get_voiture_by_id($id);
    $voiture = $reponse->fetch(PDO::FETCH_OBJ);

?>