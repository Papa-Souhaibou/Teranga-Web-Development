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
    }