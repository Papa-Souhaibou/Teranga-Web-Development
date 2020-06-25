<?php
    require_once("../Models/dao.php");
    require_once("../Models/Autoloader.php");
    Autoloader::register();
    if(isset($_POST["subscribtion"])){
        $etudiantDao = new EtudiantDao();
        $etudiantDao->setPdo($pdo);
        $nom = htmlspecialchars($_POST["nom"]);
        $prenom = htmlspecialchars($_POST["prenom"]);
        $email = htmlspecialchars($_POST["email"]);
        $dateInscription = htmlspecialchars($_POST["dateInscription"]);
        $datenaissance = htmlspecialchars($_POST["datenaissance"]);
        $tel = htmlspecialchars($_POST["tel"]);
        $typeetudiant = htmlspecialchars($_POST["typeetudiant"]);
        $matricule = $_POST["matricule"]; 
        $data = [
            "matricule" => "",
            "nom" => "",
            "prenom" => "",
            "email" => "",
            "telephone" => "",
            "datenaissance" => "",
            "typeetudiant" => "",
            "pension" => null,
            "adresse" => null,
            "idchambre" => null
        ];
        $hasError = false;
        if(empty($nom)){
            $hasError = true;
        }else{
            $data["nom"] = $nom;
        }
        if(empty($prenom)){
            $hasError = true;
        }else{
            $data["prenom"] = $prenom;
        }
        if(empty($email)){
            $hasError = true;
        }else{
            $data["email"] = $email;
        }
        if(empty($datenaissance)){
            $hasError = true;
        }else{
            $data["datenaissance"] = $datenaissance;
        }
        if(empty($tel)){
            $hasError = true;
        }else{
            $data["telephone"] = $tel;
        }
        if(empty($typeetudiant)){
            $hasError = true;
        }else{
            $data["typeetudiant"] = $typeetudiant;
            if($typeetudiant == "boursier logé"){
                $pension = (int) $_POST["pension"];
                $data["pension"] = $pension;
                $idchambre = (int) $_POST["chambre"];
                $data["idchambre"] = $idchambre;
            }else if($typeetudiant == "boursier non logé"){
                $pension = (int) $_POST["pension"];
                $data["pension"] = $pension;
            }elseif ($typeetudiant == "non boursier") {
                $adresse = htmlspecialchars($_POST["adresse"]);
                $data["adresse"] = $adresse;
            }
        }
        if(empty($matricule)){
            $hasError = true;
        }else{
            $data["matricule"] = $matricule;
        }
        if ($hasError) {
            echo json_encode(["erreur" => "erreur"]);
        }else {
            $etudiantDao->add($data);
        }
    }