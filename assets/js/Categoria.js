var table;

Init();

//FUNCION QUE SE EJECUTARA AL INICIO
function Init()
{
    LlenarTablaCategoria();
}

function LlenarTablaCategoria()
{
    table = $('#table_categoria').DataTable({
        pageLength: 10,
        responsive: true,
        processing: true,
        ajax: "../controller/CategoriaController.php?operador=listar_categorias"
    });
}