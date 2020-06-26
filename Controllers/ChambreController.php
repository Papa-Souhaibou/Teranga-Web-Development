<?php
    require_once("../Models/dao.php");
    require_once("../Models/Autoloader.php");
    Autoloader::register();
    $chambreDao = new ChambreDao();
    $chambreDao->setPdo($pdo);
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
    }