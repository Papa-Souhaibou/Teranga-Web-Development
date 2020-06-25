<?php

class Etudiant implements ICrud, JsonSerializable{
    private $idEtu;
    private $matricule;
    private $nom;
    private $prenom;
    private $email;
    private $telephone;
    private $datenaissance;
    private $typeetudiant;
    private $pension;
    private $adresse;

    public function hydrate($row){
        foreach ($row as $key => $value) {
            $method = "set".ucfirst($key);
            if(method_exists($this,$method)){
                $this->$method($value);
            }
        }    
    }

    public function jsonSerialize(){
        return [
            "idEtu" => $this->getIdEtu(),
            "matricule" => $this->getMatricule(),
            "nom" => $this->getNom(),
            "prenom" => $this->getPrenom(),
            "email" => $this->getEmail(),
            "telephone" => $this->getTelephone(),
            "datenaissance" => $this->getDatenaissance(),
            "typeetudiant" => $this->getTypeetudiant(),
            "pension" => $this->getPension(),
            "adresse" => $this->getAdresse()
        ];
    }

    public function getIdEtu(){
        return $this->idEtu;
    }

    public function getMatricule(){
        return $this->matricule;
    }

    public function getNom(){
        return $this->nom;
    }

    public function getPrenom(){
        return $this->prenom;
    }

    public function getEmail(){
        return $this->email;
    }

    public function getTelephone(){
        return $this->telephone;
    }

    public function getDatenaissance(){
        return $this->datenaissance;
    }

    public function getTypeetudiant(){
        return $this->typeetudiant;
    }

    public function getPension(){
        return $this->pension;
    }

    public function getAdresse(){
        return $this->adresse;
    }


    public function setIdEtu(){
        $this->idEtu=(int)$idEtu;
    }

    public function setMatricule(){
        $this->matricule=$matricule;
    }

    public function setNom(){
        $this->nom=$nom;
    }

    public function setPrenom(){
        $this->prenom=$prenom;
    }

    public function setEmail(){
        $this->email=$email;
    }

    public function setTelephone(){
        $this->telephone=$telephone;
    }

    public function setDatenaissance(){
        $this->datenaissance=$datenaissance;
    }

    public function setTypeetudiant(){
        $this->typeetudiant=$typeetudiant;
    }

    public function setPension(){
        $this->pension=$pension;
    }

    public function setAdresse(){
        $this->adresse=$adresse;
    }

}