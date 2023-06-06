<?php
      
require "model/Usuario.php";

$usuario = new Usuario();

$n_documento = "123456";
$nombre = "juan";
$apellidos = "perez";
$correo = "correo@dominio.com";
$clave = "123456";

/*if($usuario->RegistrarUsuario($n_documento,$nombre,$apellidos,$correo,$clave)){
    echo "Registro Exitoso";
} else {
    echo "Error D:";
}*/

if($usuario->ValidarUsuario($correo,$clave)){
    echo "Usuario encontrado";
} else {
    echo "No encontrado";
}

?>