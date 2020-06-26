<?php
class ChambreDao extends Manager{

    public function __construct(){
    }
    public function add($chambre){
        $request = "INSERT INTO chambre(numchambre,numbatiment,type)
        VALUES(:numchambre,:numbatiment,:type)";
        $response = $this->pdo->prepare($request);
        $response->execute([
            "numchambre" => $chambre->getNumchambre(),
            "numbatiment" => $chambre->getNumbatiment(),
            "type" => $chambre->getType()
        ]);
        $response->closeCursor();
    }
    public function update($data){
        $request = "UPDATE chambre 
        SET type=:type WHERE idchambre=:idchambre";
        $response = $this->pdo->prepare($request);
        $response->execute($data);
        $response->closeCursor();
    }
    public function delete($id){
        $request = "DELETE FROM chambre WHERE idchambre=:idchambre";
        $response = $this->pdo->prepare($request);
        $response->bindValue(":idchambre",$id,PDO::PARAM_INT);
        $response->execute();
        $response->closeCursor();
    }
    public function selectRooms(int $limits = null,int $offset = null){
        if ($limits >= 0 && $offset) {
            $chambres = [];
            $request = "SELECT idchambre,numchambre,numbatiment,type FROM chambre
            ORDER BY idchambre LIMIT :limits, :offset 
            ";
            $response = $this->pdo->prepare($request);
            $response->bindValue(":limits",$limits,PDO::PARAM_INT);
            $response->bindValue(":offset",$offset,PDO::PARAM_INT);
            $response->execute();
            while($chambre = $response->fetch(2)){
                $myChambre = new Chambre($chambre);
                $chambres[] = $myChambre;
            }
            $response->closeCursor();
            return $chambres;
        }
        else{
            $chambres = [];
            $request = "SELECT idchambre, numchambre FROM chambre";
            $response = $this->pdo->query($request);
            while($chambre = $response->fetch(PDO::FETCH_ASSOC)){
                $myChambre = new Chambre($chambre);
                $chambres[] = $myChambre;
            }
            $response->closeCursor();
            return $chambres;
        }
    }
    public function count() {
        $request = "SELECT COUNT(idchambre) number FROM chambre";
        $response = $this->pdo->query($request);
        $number = $response->fetch(2);
        $response->closeCursor();
        return $number;
    }
    public function findByMatricule($matricule){

    }
    public function findByType($type){

    }
}