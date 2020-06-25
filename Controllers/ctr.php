<?php
    try {
        $db = new PDO("mysql:host=mysql-terangawebdevelopment.alwaysdata.net;dbname=terangawebdevelopment_gestion_chambres;charset=utf8","209373_admin","touresow", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    } catch (PDOException $th) {
        die("Erreur lors de la connexion a la base de donnees");
    }
    if(isset($_POST["hii"])){
        global $db;
        $sql = "SELECT * FROM chambre";
        $rooms = [];
        $response = $db->query($sql);
        while($room = $response->fetch(2)){
            $rooms[] = $room;
        }
        echo json_encode($rooms);
    }