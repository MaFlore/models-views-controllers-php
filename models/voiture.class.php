<?php 
        /*Création de la classe Voiture*/
        class Voiture{

                /*Ajout des différents attributs*/
                private $id;
                private $numero_identifiant;
                private $numero_serie;
                private $modele;
                private $marque;
                private $couleur;
                private $date_achat;

                /*La fonction get pour recupérer l'id*/
                public function getId()
                {
                        return $this->id;
                }

                /*La fonction set pour modifier l'id*/
                public function setId($id)
                {
                        $this->id = $id;

                        return $this;
                }

                /*La fonction get pour recupérer le numero identifiant*/
                public function getNumero_identifiant()
                {
                        return $this->numero_identifiant;
                }

                /*La fonction set pour modifier le numero identifiant*/
                public function setNumero_identifiant($numero_identifiant)
                {
                        $this->numero_identifiant = $numero_identifiant;

                        return $this;
                }

                /*La fonction get pour recupérer le numero série*/
                public function getNumero_serie()
                {
                        return $this->numero_serie;
                }

                /*La fonction set pour modifier le numero serie*/
                public function setNumero_serie($numero_serie)
                {
                        $this->numero_serie = $numero_serie;

                        return $this;
                }

                /*La fonction get pour recupérer le modèle*/
                public function getModele()
                {
                        return $this->modele;
                }

                /*La fonction set pour modifier le modèle*/
                public function setModele($modele)
                {
                        $this->modele = $modele;

                        return $this;
                }

                /*La fonction get pour recupérer la marque*/
                public function getMarque()
                {
                        return $this->marque;
                }

                /*La fonction set pour modifier la marque*/
                public function setMarque($marque)
                {
                        $this->marque = $marque;

                        return $this;
                }

                /*La fonction get pour recupérer la couleur*/
                public function getCouleur()
                {
                        return $this->couleur;
                }

                /*La fonction set pour modifier la couleur*/
                public function setCouleur($couleur)
                {
                        $this->couleur = $couleur;

                        return $this;
                }

                /*La fonction get pour recupérer la date d'achat*/
                public function getDate_achat()
                {
                        return $this->date_achat;
                }

                /*La fonction set pour modifier la date d'achat*/
                public function setDate_achat($date_achat)
                {
                        $this->date_achat = $date_achat;

                        return $this;
                }
        }
?>
