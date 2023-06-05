function ValidarUsuario(){
  correo = $('#user_correo').val();
  clave = $('#user_clave').val();
  parametros = {
    "correo":correo,"clave":clave
  }
   $.ajax({
    data:parametros,
    type:'POST',
    url:'controller/UsuarioController?operador=validar_usuario',
    beforeSend:function(){},
    success:function(response){
      if(response == "success"){
        location.href="pages/welcome";
      } else if (response == "not found"){
       msg = '<div class="alert alert-danger mb-2" role="alert"><strong> oh no ! </strong>' +
       'Las credenciales no son correctas.</div>';
      } else if (response == "requerid"){
        msg = '<div class="alert alert-danger mb-2" role="alert"><strong> oh no ! </strong>' +
       'Parece que no has completado los campos.</div>';
      }
      $('#status_login').html(msg);
      LimpiarController()
      }
   });
}

   function LimpiarController(){
    $('#user_correo').val("");
    $('#user_clave').val("");
   }
