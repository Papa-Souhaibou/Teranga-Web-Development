<?php 
class Chambre implements ICrud, JsonSerializable{

    private $idchambre;
    private $numbatiment;
    private $numchambre;
    private $type;

    public function __construct(array $data){
        $this->hydrate($data);
    }

    public function hydrate($data){
        foreach ($data as $key => $value) {
            $method = "set".ucfirst($key);
            if(method_exists($this,$method)){
                $this->$method($value);
            }
        }
    }

    public function jsonSerialize(){
        return [
            "idchambre" => $this->getIdchambre(),
            "numbatiment" => $this->getNumbatiment(),
            "numchambre" => $this->getNumchambre(),
            "type" => $this->getType()
        ];
    }

    public function getIdchambre(){
        return $this->idchambre;
    }

    public function getNumbatiment(){
        return $this->numbatiment;
    }

    public function getNumchambre(){
        return $this->numchambre;
    }

    public function getType(){
        return $this->type;
    }

    public function setIdchambre($idchambre){
        $this->idchambre=(int)$idchambre;
    }

    public function setNumbatiment($numbatiment){
        $this->numbatiment=$numbatiment;
    }

    public function setNumchambre($numchambre){
        $this->numchambre=$numchambre;
    }

    public function setType($type){
        $this->type=$type;
    }
}