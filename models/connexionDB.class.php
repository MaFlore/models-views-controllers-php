<?php
    //Création de la classe ConnexionDB qui se charge de se connecter à notre base de données
    class ConnexionDB{

        //Ajout des différents attributs
        private $db_name = "revision";
        private $password = "";
        private $root = "root";
        private $host = "localhost";

        //Ajout de la fonction de connexion à la base de données
        public function connexion (){
            try {
                $bdd = new PDO('mysql:host='.$this -> host.';dbname='.$this->db_name.';charset=utf8', $this->root, $this->password);
                return $bdd;
            } catch (Exception $e){
                echo 'Connexion échouée';
            }
        }
    }
?>