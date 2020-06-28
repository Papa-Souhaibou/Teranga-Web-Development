<?php
    require_once("../Models/Autoloader.php");
    Autoloader::register();
    $chambreDao = new ChambreDao();
    if(isset($_POST["getRoom"])){
        $offset = (int) $_POST["offset"];
        $limit = (int) $_POST["limit"];
        echo json_encode($chambreDao->selectRooms($limit,$offset));
    }elseif(isset($_POST["allRooms"])){
        echo json_encode($chambreDao->selectRooms());
    }elseif(isset($_POST["delete"])){
        $idchambre = (int)$_POST["idchambre"];
        $chambreDao->delete($idchambre);
        echo json_encode(array_push($chambreDao->count()));
    }elseif (isset($_POST["modify"])) {
        $data = [
            "type" => htmlspecialchars($_POST["type"]),
            "idchambre" => (int)$_POST["idchambre"]
        ];
        $chambreDao->update($data);
    }elseif (isset($_POST["count"])) {
        echo json_encode($chambreDao->count());
    }else if (isset($_POST['ajouter'])) {
        $request1=mt_rand(0, 9999);
        $nbbat = $_POST['numBatiment'];
        $type = $_POST['type'];
        if ($request1<=9) {
            $count = "000".$request1;
        }
        else if ($request1<=99) {
            $count = "00".$request1;
        }
        else if ($request1<=999) {
            $count = "0".$request1;
        }
        else{
            $count = $request1;
        } 

        $nbChambre = "0".$nbbat.$count;
        $_POST['numChambre'] = $nbChambre;

        $insert_array=array(
            'numbatiment' => $nbbat,
            'numchambre' => $nbChambre,
            'type' => $type
        );
        $con= $chambreDao->add($insert_array); 
    }