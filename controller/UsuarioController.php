<?php
    
require "../model/Usuario.php";

$usu = new Usuario();

switch($_REQUEST["operador"]){

    case "validar_usuario":
        if(isset($_POST["correo"],$_POST["clave"])
         && !empty($_POST["correo"]) 
         && !empty($_POST["clave"])){

            if($usu->ValidarUsuario($_POST["correo"],$_POST["clave"])){
                $response = "success";
            } else {
                $response = "not found";
            }

        } else {
            $response = "requerid";
        }

        echo $response;

        break;
}

?>