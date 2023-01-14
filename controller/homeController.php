<?php

    class homeController{
        public $MODEL;
        public function __construct()
        {
            require_once("C://laragon/www/LoginRegistroPHP/model/homeModel.php");
            $this->MODEL = new homeModel();
        }
        public function saveUser($correo, $contraseña){
            $valor = $this->MODEL->addNewUser($this->limpiarCorreo($correo), $this->encriptarContraseña
            ($this->limpiarCadena($contraseña)));
            return $valor;
        }
        public function limpiarCadena($campo){
            $campo = strip_tags($campo);
            $campo = filter_var($campo, FILTER_UNSAFE_RAW);
            $campo = htmlspecialchars($campo);
            return $campo;
        }

        public function limpiarCorreo($campo){
            $campo = strip_tags($campo);
            $campo = filter_var($campo, FILTER_SANITIZE_EMAIL);
            $campo = htmlspecialchars($campo);
            return $campo;
        }

        public function encriptarContraseña($contraseña){
            return password_hash($contraseña, PASSWORD_DEFAULT);
        }

    }

?>