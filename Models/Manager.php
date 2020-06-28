<?php
abstract class Manager implements IDao{
    protected $pdo;
    protected $tableName;
    protected $className;

    public function getConnexion(){
        $host="mysql-terangawebdevelopment.alwaysdata.net";
        $dbname="terangawebdevelopment_gestion_chambres";
        $user="209373_admin";
        $password="touresow";
        
        if ($this->pdo==null) {
            try {
                $this->pdo = new PDO("mysql:host=$host; dbname=$dbname", $user, $password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
            } catch (Exception $e) {
                die("Erreur de connexion à la base");  
            }
            return $this->pdo;
        }

    }

    public function closeConnexion(){
        if ($this->pdo != null) {
            $this->pdo = null;
        }

    }

    public function create($request, $object){
        $this->getConnexion();
        $response = $this->pdo->prepare($request);
        $response->execute($object);
        $response->closeCursor();
    }

    public function afficher($request){
        $this->getConnexion();
        $response = $this->pdo->query($request);
        $tab=[];
        foreach ($response as $value) {
            $tab[] = $value;
        }
        return $tab;
        $this->closeConnexion();
    }

    public function findByName($request){
        $response = $this->pdo->prepare($request);
        $response->execute($id);
        $response->closeCursor();
    }

    public function getPdo(){
        return $this->pdo;
    }
    public function setPdo(PDO $pdo){
        $this->pdo = $pdo;
    }
}