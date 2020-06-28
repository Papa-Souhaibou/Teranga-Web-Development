<?php
class EtudiantDao extends Manager{

    public function __construct(){
        $this->className = "Etudiant";
        $this->tableName = "Etudiants";
    }
    public function add($etudiant){
        $this->getConnexion();
        $sql = "INSERT INTO Etudiants(matricule,nom,prenom,email,telephone,datenaissance,typeetudiant,pension,adresse,idchambre)
        VALUES(:matricule,:nom,:prenom,:email,:telephone,:datenaissance,:typeetudiant,:pension,:adresse,:idchambre)";
        $response = $this->pdo->prepare($sql);
        $response->execute($etudiant);
        $response->closeCursor();
       
    }
    public function count() {
        $this->getConnexion();
        $sql = "SELECT count(*) FROM Etudiants";
        // $response = 
    }
    public function update($etudiant){
        $this->getConnexion();
    }
    public function delete($id){
        $this->getConnexion();
    }
    public function afficherListe(){    
        $sql = "SELECT * FROM Etudiants ORDER BY nom ASC";
        return $this->afficher($sql);
    }
    public function findByMatricule($matricule){
        $this->getConnexion();
    }
    public function findByType($type){
        $this->getConnexion();
    }
}