document.addEventListener("DOMContentLoaded", function() {
  document.getElementById("formRegister").addEventListener('submit', validarFormulario); 
});

function validarFormulario() {
  if ( documento === "" || documento === 0 ||
    direccion === "" || direccion === 0 ||
    telefono === "" || telefono === 0 ||
    nombre === "" || nombre === 0 ||
    apellido === "" || apellido === 0||
    password === "" || password === 0 ||
    rol === "" || rol === 0) {
      /*var mensaje = `<div class='alert alert-danger alert-dismissible fade show' role='alert'> <h3>¡Aviso!</h3><hr>Debe llenar todos los campos
      <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
      <span aria-hidden='true'>&times;</span></button></div>`;
      $("#mensaje").html(mensaje);*/alert("Debe diligenciar todos los campos");
      return false;
    }
    else if(documento.length>20){
      alert("El documento es muy largo");
      return false;
    }
    else if(nombre.length>50){
      alert("El nombre es muy largo");
      return false;
    }
    else if(apellido.length>50){
      alert("El apellido es muy largo");
      return false;
    }
    else if(correo.length>50){
      alert("El correo es muy largo");
      return false;
    }
    else if(telefono.length>20){
      alert("El telefono es muy largo");
      return false;
    }
    else if(direccion.length>50){
      alert("La direccion es muy larga");
      return false;
    }
    else if(password.length>20){
      alert("La contraseña es muy larga");
      return false;
    }
}

window.addEventListener("load", function() {
  formRegister.documento.addEventListener("keypress", soloNumeros, false);      
  formRegister.telefono.addEventListener("keypress", soloNumeros, false);      
  formRegister.nombre.addEventListener("keypress", soloLetras, false);      
  formRegister.apellido.addEventListener("keypress", soloLetras, false);    
});
//Solo permite introducir numeros.
function soloNumeros(e){
  var key = window.event ? e.which : e.keyCode;
  if (key < 48 || key > 57) {
    e.preventDefault();
  }
}

function soloLetras(e) {
  var key = "which" in e ? e.which : e.keyCode,
  char = String.fromCharCode(key),
  regex = /[a-z\u00C0-\u017F\s]/i;      
  if(!regex.test(char)) e.preventDefault(); return false;
}

function validarEmail(elemento){

  var key = document.getElementById(elemento.id).value;
      /*var key = window.event ? e.length : e.key;
      valueForm=key.value;*/
      //var char = String.fromCharCode(key);
      var regex = /^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;
      
      if (!regex.test(key)) {
        var data = "<div class='alert alert-danger alert-dismissible fade show' role='alert'><h3>¡Error!</h3><hr>"+
        "Debe digitar una direccion de correo electronico valida <button type='button' class='close' data-dismiss='alert' aria-label='Close'>" +
        " <span aria-hidden='true'>&times;</span></button></div>";
        $('#mensaje').html(data);
      } else {
        var data = "<div class='alert alert-primary alert-dismissible fade show' role='alert'><h3>¡Listo!</h3>"+
        "<hr>Correo valido <button type='button' class='close' data-dismiss='alert' aria-label='Close'>"+
        "<span aria-hidden='true'>&times;</span></button></div>";
        $('#mensaje').html(data);
      }

    }