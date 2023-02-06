<?php
  //Inclusion du fichier de Connexion à la base de données
  include_once('connexionDB.class.php');

  //Inclusion du fichier comportant la classe voiture
  include('voiture.class.php');


  //Création de la classe VoitureMethods héritant de la classe ConnexionDB et 
  //comportant toutes les fonctions possibles d'un CRUD
  class VoitureMethods extends ConnexionDB{
    
      //Fonction pour recupérer toutes les voitures
      public function get_all_voiture (){
        //Appel de fonction connexion se trouvant dans le fichier de Connexion à la base de données
        $bd = $this->connexion();
        $requete = "SELECT * FROM voiture";
        $voitures= $bd->query($requete);
        return $voitures;
      }

      //Fonction pour recupérer les détails d'une voiture à partir de l'ID
      public function get_voiture_by_id($id){
        //Appel de fonction connexion se trouvant dans le fichier de Connexion à la base de données
        $bd = $this->connexion();
        $requete = "SELECT * FROM voiture WHERE id = :id";
        $voiture = $bd->prepare($requete);
        $voiture->execute(array(
              'id'=>$id
              )
        );
        return $voiture;
      }

      //Fonction d'ajout d'une voiture dans la base de données
      public function insert_voiture(Voiture $voiture){
        //Appel de fonction connexion se trouvant dans le fichier de Connexion à la base de données
        $bd = $this->connexion();
        $requete = "INSERT INTO voiture(numero_identifiant, numero_serie, modele, marque, couleur, date_achat) VALUES(:numero_identifiant, :numero_serie, :modele, :marque,  :couleur, :date_achat)";
        $reponse =$bd->prepare($requete);
        $reponse->execute(array(
        'numero_identifiant'=>$voiture->getNumero_identifiant(),
        'numero_serie'=>$voiture->getNumero_serie(),
        'modele'=>$voiture->getModele(),
        'marque'=>$voiture->getMarque(),
        'couleur'=>$voiture->getCouleur(),
        'date_achat'=>$voiture->getDate_achat()
        )
        );
      }

      //Fonction de suppression d'une voiture dans la base de données
      public function delete_voiture($id){
        //Appel de fonction connexion se trouvant dans le fichier de Connexion à la base de données
        $bd = $this->connexion();
        $requete = "DELETE FROM voiture WHERE id = :id";
        $reponse = $bd->prepare($requete);
        $reponse->execute(array(
        'id'=>$id
              )
        );
      }

      //Fonction de modification d'une voiture à partir de la base de données
      public function update_voiture(Voiture $voiture){
        //Appel de fonction connexion se trouvant dans le fichier de Connexion à la base de données
        $bd = $this->connexion();
        $requete = "UPDATE voiture SET numero_identifiant=:numero_identifiant, numero_serie=:numero_serie, modele=:modele, marque=:marque, couleur=:couleur, date_achat=:date_achat WHERE id=:id";
        $reponse = $bd->prepare($requete);
        $reponse->execute(array(
        'numero_identifiant'=>$voiture->getNumero_identifiant(),
        'numero_serie'=>$voiture->getNumero_serie(),
        'modele'=>$voiture->getModele(),
        'marque'=>$voiture->getMarque(),
        'couleur'=>$voiture->getCouleur(),
        'date_achat'=>$voiture->getDate_achat(),
        'id'=>$voiture->getId()
        )
        );
      }

  }
?>