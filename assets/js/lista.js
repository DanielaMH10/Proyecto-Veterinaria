$(document).ready(function(){

  obtener_usuarios("");

  $("#inputRolUpdate").prop('disabled', true);

  $("#btnUpdateUser").click(function(){
    updateUser();
    obtener_usuarios("");
  });
});

function obtener_usuarios(data){

  $.ajax({
    url: "../../Controller/listaUser.php",
    type: "POST",
    data: data
        //dataType: "JSON"
      })
  .done(function (data, textStatus, jqXHR) {

    console.log(data);
    var tabla = JSON.parse(data);

    var html = "";
/*se le coloca i para que me muestrelos valores que tengo en i*/
    for (var i in tabla.data) {
      console.log(tabla.data[i]);
      html += `<tr>
      <td>${tabla.data[i].idUsuario}</td>
      <td>${tabla.data[i].nombreUsuario}</td>
      <td>${tabla.data[i].apellidoUsuario}</td>
      <td>${tabla.data[i].correoUsuario}</td>
      <td>${tabla.data[i].telefonoUsuario}</td>
      <td>${tabla.data[i].direccionUsuario}</td>
      <td>${tabla.data[i].rolUsuario}</td>`;
      if (tabla.data[i].estadoUsuario == 1) {
        html+=`<td>Activo</td>`;
      }else{
        html+=`<td>Inactivo</td>`;
      }
      html+=`<td>
      <button class='btn btn-primary btn-sm' data-toggle="modal" data-target="#ModalUpdateUser" name='btnActualizar' onclick="consultaUsuarioId(${tabla.data[i].idUsuario})">
      <i class='fas fa-user-edit'></i></button>
      <button class='btn btn-danger btn-sm' name='btnEliminar' onclick='eliminar(${tabla.data[i].idUsuario})'>
      <i class='fas fa-trash'></i></button>
      </td>
      </tr>`;
    }
    $('#tbodyUsers').html(html);
  })
  .fail(function (jqXHR, textStatus, errorThrown) {
    alert("La solicitud ha fallado: " + textStatus);
  });
}
function consultaUsuarioId(id) {
  $.ajax({
    url: "../../Controller/consultaUserId.php",
    type: "POST",
    data: {
      id
    }
  })
  .done(function (data, textStatus, jqXHR) {
    console.log(data);
    var tabla = JSON.parse( data );
        //var html = "";
      //console.log(data);
      for (var i in tabla.data) {
        var idUsuario = tabla.data[i].idUsuario;
        var nombreUsuario = tabla.data[i].nombreUsuario;
        var apellidoUsuario = tabla.data[i].apellidoUsuario;
        var correoUsuario = tabla.data[i].correoUsuario;
        var passwordUsuario = tabla.data[i].passwordUsuario;
        var telefonoUsuario = tabla.data[i].telefonoUsuario;
        var direccionUsuario = tabla.data[i].direccionUsuario;
        var rolUsuario = tabla.data[i].rolUsuario;
        var estadoUsuario = tabla.data[i].estadoUsuario;        
      }
      $('#inputIdUpdate').val(idUsuario);
      $('#inputNombreUpdate').val(nombreUsuario);
      $('#inputApellidosUpdate').val(apellidoUsuario);
      $('#inputCorreoUpdate').val(correoUsuario);
      $('#inputPasswordUpdate').val(passwordUsuario);
      $('#inputTelefonoUpdate').val(telefonoUsuario);
      $('#inputDireccionUpdate').val(direccionUsuario);
      $('#inputEstadoUpdate').val(estadoUsuario);
      $('#inputRolUpdate').val(rolUsuario);
    })
  .fail(function (jqXHR, textStatus, errorThrown) {
    alert("La solicitud ha fallado: " + textStatus);
  });
}
function updateUser(){
  var idUsuario = $('#inputIdUpdate').val();
  var correoUsuario = $('#inputCorreoUpdate').val();
  var direccion = $('#inputDireccionUpdate').val();
  var telefono = $('#inputTelefonoUpdate').val();
  var nombreUsuario = $('#inputNombreUpdate').val();
  var apellidoUsuario = $('#inputApellidosUpdate').val();
  var passwordUsuario = $('#inputPasswordUpdate').val();
  var estadoUsuario = $('#inputEstadoUpdate').val();
  var rolUsuario = $('#inputRolUpdate').val();
  var regexCorreo = /\w+@\w+\.+[a-z]/;
  var regexText = /^[A-Z]+$/i;

  if ( correoUsuario == "" || correoUsuario == 0 ||
    direccion == "" || direccion == 0 ||
    telefono == "" || telefono == 0 ||
    nombreUsuario == "" || nombreUsuario == 0 ||
    apellidoUsuario == "" || apellidoUsuario == 0||
    passwordUsuario == "" || passwordUsuario == 0 ||
    estadoUsuario == "" || estadoUsuario == 0 ) {
    var mensaje = `<div class='alert alert-danger alert-dismissible fade show' role='alert'> <h3>¡Aviso!</h3><hr>Debe llenar todos los campos
  <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
  <span aria-hidden='true'>&times;</span></button></div>`;

  $("#mensaje").html(mensaje);
}
else if(nombreUsuario.length>50){
  alert("El nombre es muy largo");
  return false;
}
else if(apellidoUsuario.length>50){
  alert("El apellido es muy largo");
  return false;
}
else if(correoUsuario.length>50){
  alert("El correo es muy largo");
  return false;
}
else if(telefono.length>15){
  alert("El telefono es muy largo");
  return false;
}
else if(direccion.length>50){
  alert("La direccion es muy larga");
  return false;
}
else if(passwordUsuario.length>20){
  alert("La contraseña no puede exceder de 20 caracteres");
  return false;
}
else if(isNaN(telefono)){
  alert("El teléfono ingresado no es un número");
  return false;
}
else if(!regexCorreo.test(correoUsuario)){
  alert("El correo no es valido");
  return false;
}
else if(!regexText.test(nombreUsuario)){
  alert("Un nombre no puede tener números");
  return false;
}
else if(!regexText.test(apellidoUsuario)){
  alert("Un apellido no puede tener números");
  return false;
}
else{
  $.ajax({
    url: "../../Controller/controller_user.php",
    type: "POST",
    data: {
      idUsuario,
      correoUsuario,
      direccion,
      telefono,
      nombreUsuario,
      apellidoUsuario,
      passwordUsuario,
      estadoUsuario,
      rolUsuario
    }
  })
  .done(function (data, textStatus, jqXHR) {
    console.log(data);
                //alert(data);

                $('#mensaje').html(data);
                obtener_usuarios("");

              })
  .fail(function (jqXHR, textStatus, errorThrown) {
    alert("La solicitud ha fallado: " + textStatus);
  });
}
}

function eliminar(id) {
  if (confirm("¿Desea eliminar este usuario?")) {
    //document.location.href= "../Controllers/delete_Usuarios.php?id=" + id;
    $.ajax({
      url: "../../Controller/controller_user.php?id= + id",
      type: "GET",
      dataType: "text",
      data:{
        id
      }
    }).done(function (data, textStatus, jqXHR) {
      console.log(data);
      //$('#mensaje').html(data);
      obtener_usuarios(data);
    })
    .fail(function (jqXHR, textStatus, errorThrown) {
      alert("La solicitud ha fallado: " + textStatus);
    });
  }
}
