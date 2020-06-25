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
    public function update($chambre,$id){
        $request = "UPDATE chambre 
        SET numchambre=:numchambre,numbatiment=:numbatiment,type=:type)";
        $response = $this->pdo->prepare($request);
        $response->execute([
            "numchambre" => $chambre->getNumchambre(),
            "numbatiment" => $chambre->getNumbatiment(),
            "type" => $chambre->getType()
        ]);
        $response->closeCursor();
    }
    public function delete($id){

    }
    public function selectRooms(int $limits = null,int $offset = null){
        if ($limits && $offset) {
            $chambres = [];
            $request = "SELECT * FROM chambre ORDER BY(idchambre) LIMIT $limits, $offset";
            $response = $this->pdo->prepare("SELECT idchambre,numchambre,numbatiment,type FROM chambre
                ORDER BY idchambre LIMIT :limits, :offset 
                ");
            $response->bindValue(":limits",$limits,PDO::PARAM_INT);
            $response->bindValue(":offset",$offset,PDO::PARAM_INT);
            $response->execute();
            while($chambre = $response->fetch(PDO::FETCH_ASSOC)){
                $myChambre = new Chambre($chambre);
                $chambres[] = $myChambre;
            }
            $response->closeCursor();
            return $chambres;
        }else{
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
    public function findByMatricule($matricule){

    }
    public function findByType($type){

    }
}