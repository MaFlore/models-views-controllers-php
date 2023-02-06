<?php
      class ConnexionDB{

            private $db_name = "revision";
            private $password = "";
            private $root = "root";
            private $host = "localhost";

            public function connexion (){
                try {
                    $bdd = new PDO('mysql:host='.$this -> host.';dbname='.$this->db_name.';charset=utf8', $this->root, $this->password);
                    return $bdd;
                } catch (Exception $e){
                    echo 'Echec de connexion';
                }
            }
      }
?>