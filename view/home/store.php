<?php

    require_once("C://laragon/www/LoginRegistroPHP/controller/homeController.php");
    $obj = new homeController();
    $correo = $_POST['correo'];
    $contraseña = $_POST['contraseña'];
    $confirmarContraseña = $_POST['confirmarContraseña'];
    $error = "";
    if (empty($correo) || empty($contraseña) || empty($confirmarContraseña)) {
        $error .= "<li>Completa los campos</li>";
        header("Location:singup.php?error=".$error."&&correo=".$correo."&&contraseña=".$contraseña."&&confirmarContraseña=".$confirmarContraseña);
    }elseif ($correo && $contraseña && $confirmarContraseña) {
        if($contraseña == $confirmarContraseña){
            if ($obj->saveUser($correo,$contraseña) == false){
                $error .= "<li>El correo ya esta registrado</li>";
                header("Location:singup.php?error=".$error."&&correo=".$correo."&&contraseña=".$contraseña."&&confirmarContraseña=".$confirmarContraseña);
            }else{
                header("Location:login.php");
            }
        }else {
            $error = "<li>Las contraseñas son diferentes</li>";
            header("Location:singup.php?error=".$error."&&correo=".$correo."&&contraseña=".$contraseña."&&confirmarContraseña=".$confirmarContraseña);
        }
    }



?>