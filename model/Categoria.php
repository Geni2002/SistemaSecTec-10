<?php
    
require "../config/Conexion.php";

class Categoria {

    public $cnx;

    function __construct()
    {
        $this->cnx = Conexion::ConectarDB();
    }

    //FUNCION PARA LISTAR LOS DATOS DE LAS CATEGORIAS

    function ListarCategorias()
    {
        $query = "SELECT * FROM categoria";
        $result = $this->cnx->prepare($query);
        if($result->execute())
        {
            if($result->rowCount()> 0){
                while($fila = $result->fetch(PDO::FETCH_ASSOC)){
                    $datos[] = $fila;
                }
                return $datos;
            }
        }
        return false;
    }
}

?>