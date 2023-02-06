<?php
    include_once('../models/voiture.methods.class.php');
    $voiture_methods = new VoitureMethods();

    $reponse = $voiture_methods ->get_all_voiture();
    $voitures = $reponse ->fetchAll();
?>