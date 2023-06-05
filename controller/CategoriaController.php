<?php
    
require "../model/Categoria.php";

$cat = new Categoria();

switch($_REQUEST["operador"]){

case "Listar_categorias":

    $datos = $cat->ListarCategorias();
    if($datos){
        for($i=0; $i<count($datos); $i++){
            $list[] = array (
                "op"=>"Aca ira botones",
                "id"=>$datos[$i]['categoria_id'],
                "nombre"=>$datos[$i]['nombre'],
                "descripcion"=>$datos[$i]['descripcion'],
                "estado"=>$datos[$i]['estado']
            );
        }
        $resultados = array(
            "sEcho"=> 1,
            "iTotalRecords"=>count($list),
            "iTotalDisplayRecords"=>count($list),
            "aaData"=> $list
        );
    }
}

break;

?>