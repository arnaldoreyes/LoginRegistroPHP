<?php

    class homeModel{
        private $PDO;
        public function __construct()
        {
            require_once("C://laragon/www/LoginRegistroPHP/config/db.php");
            $pdo = new db();
            $this->PDO = $pdo->conexion();
        }
        public function addNewUser($correo, $password){
            $statement = $this->PDO->prepare("INSERT INTO usuarios values(null,:correo,:password)");
            $statement->bindParam(":correo",$correo);
            $statement->bindParam(":password",$password);
            try{
                $statement->execute();
                return true;
            } catch (PDOException $e) {
                return false;
            }
        }
    }

?>