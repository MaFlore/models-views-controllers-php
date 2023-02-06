<?php
  include_once('connexion.class.php');
  include('voiture.class.php');

  class VoitureMethods extends ConnexionDB{
    
      public function get_all_voiture (){
        $bd = $this->connexion();
        $requete = "SELECT * FROM voiture";
        $voitures= $bd->query($requete);
        return $voitures;
      }

      public function get_voiture_by_id($id){
        $bd = $this->connexion();
        $requete = "SELECT * FROM voiture WHERE id = :id";
        $voiture = $bd->prepare($requete);
        $voiture->execute(array(
              'id'=>$id
              )
        );
        return $voiture;
      }

      public function insert_voiture(Voiture $voiture){
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

      public function delete_voiture($id){
        $bd = $this->connexion();
        $requete = "DELETE FROM voiture WHERE id = :id";
        $reponse = $bd->prepare($requete);
        $reponse->execute(array(
        'id'=>$id
              )
        );
      }

      public function update_voiture(Voiture $voiture){
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