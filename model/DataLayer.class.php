<?php

class DataLayer{

    private $connexion;

    function __construct(){
        try {
            $this->connexion = new PDO("mysql:host=".HOST.";dbname=".DB_NAME,DB_USER,DB_PASSWORD);
            //echo "connexion à la base de données réussie !";
        } catch (PDOException $th) {
            echo $th->getMessage();
        }
    }



}

?>