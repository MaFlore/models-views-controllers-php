<?php
    session_start();
    include_once('../models/utilisateur.methods.class.php');

    $user_methods = new UtilisateurMethods();

    if (isset($_POST['authentifier'])) {

        $username = $_POST['username'];
        $password = $_POST['password'];
        $statement = $user_methods->login_user($username, $password);

        $reponse = $statement->fetch(PDO::FETCH_OBJ);
        $count = $statement->rowCount();
        if ($count > 0) {

            $_SESSION['nom'] = $reponse->nom;
            $_SESSION['prenom'] = $reponse->prenom;

            header("Location: ../views/voitures.php");

        } else {

            header('Location: ../views/index.php');

        }
    } 
?>