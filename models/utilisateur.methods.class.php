<?php
    include_once('connexionDB.class.php');

    include('utilisateur.class.php');

    class UtilisateurMethods extends ConnexionDB{

        public function create_user(Utilisateur $user)
        {
            $bd = $this->connexion();
            $requete = "INSERT INTO utilisateur(nom, prenom, username, password, email) VALUES(:nom, :prenom, :username, :password,  :email)";
            $reponse =$bd->prepare($requete);
            $reponse->execute(array(
            'nom'=>$user->getNom(),
            'prenom'=>$user->getPrenom(),
            'username'=>$user->getUsername(),
            'password'=>$user->getPassword(),
            'email'=>$user->getEmail(),
                    )
                );
        }

        public function login_user($username , $password)
        {
            $bd = $this->connexion();
            $requete = 'SELECT * FROM utilisateur WHERE username=:username AND password=:password';
            $reponse = $bd->prepare($requete);
            $reponse->execute(
                array(
                    'username'=>$username,
                    'password'=>$password
                )
            );

            return $reponse;
        }

    }
?>