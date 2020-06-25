<?php

abstract class Manager implements IDao{
    protected $pdo;
    protected $tableName;
    protected $className;

    public function closeConnexion(){
        if ($this->pdo != null) {
            $this->pdo = null;
        }

    }
    public function create($request, $object){
        // $response = $this->pdo->prepare($request);
        // $response->execute($object->jsonSerialize());
        // $response->closeCursor();
    }
    // public function update($request, $object){
    //     $response = $this->pdo->prepare($request);
    //     $response->execute($object->jsonSerialize());
    //     $response->closeCursor();
    // }
    // public function delete($request, $id){
    //     $response = $this->pdo->prepare($request);
    //     $response->execute($id);
    //     $response->closeCursor();
    // }
    public function getPdo(){
        return $this->pdo;
    }
    public function setPdo(PDO $pdo){
        $this->pdo = $pdo;
    }
}