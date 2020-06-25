<?php

class EtudiantDao extends Manager{

    public function __construct(){
        $this->className = "Etudiant";
        $this->tableName = "Etudiants";
    }
    public function add($etudiant){
       $sql = "INSERT INTO Etudiants(matricule,nom,prenom,email,telephone,datenaissance,typeetudiant,pension,adresse,idchambre)
       VALUES(:matricule,:nom,:prenom,:email,:telephone,:datenaissance,:typeetudiant,:pension,:adresse,:idchambre)";
       $response = $this->pdo->prepare($sql);
       $response->execute($etudiant);
        $response->closeCursor();
       
    }
    public function count() {
        $sql = "SELECT count(*) FROM Etudiants";
        // $response = 
    }
    public function update($etudiant){
        
    }
    public function delete($id){

    }
    public function findByMatricule($matricule){

    }
    public function findByType($type){

    }
}