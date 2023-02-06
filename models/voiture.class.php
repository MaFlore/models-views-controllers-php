<?php 
    class Voiture{

        private $id;
        private $numero_identifiant;
        private $numero_serie;
        private $modele;
        private $marque;
        private $couleur;
        private $date_achat;

        public function getId()
        {
                return $this->id;
        }

        public function setId($id)
        {
                $this->id = $id;

                return $this;
        }

        public function getNumero_identifiant()
        {
                return $this->numero_identifiant;
        }

        public function setNumero_identifiant($numero_identifiant)
        {
                $this->numero_identifiant = $numero_identifiant;

                return $this;
        }

        public function getNumero_serie()
        {
                return $this->numero_serie;
        }

        public function setNumero_serie($numero_serie)
        {
                $this->numero_serie = $numero_serie;

                return $this;
        }

        public function getModele()
        {
                return $this->modele;
        }

        public function setModele($modele)
        {
                $this->modele = $modele;

                return $this;
        }

        public function getMarque()
        {
                return $this->marque;
        }

        public function setMarque($marque)
        {
                $this->marque = $marque;

                return $this;
        }

        public function getCouleur()
        {
                return $this->couleur;
        }

        public function setCouleur($couleur)
        {
                $this->couleur = $couleur;

                return $this;
        }

        public function getDate_achat()
        {
                return $this->date_achat;
        }

        public function setDate_achat($date_achat)
        {
                $this->date_achat = $date_achat;

                return $this;
        }
    }
?>
