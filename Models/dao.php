<?php
$host="mysql-terangawebdevelopment.alwaysdata.net";
$dbname="terangawebdevelopment_gestion_chambres";
$user="209373_admin";
$password="touresow";
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8",$user,$password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
} catch (PDOException $th) {
    die("Erreur lors de la connexion a la base de donnees");
}
global $pdo;