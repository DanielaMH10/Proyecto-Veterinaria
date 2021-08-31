window.addEventListener("load", function() {  
  formLogin.documento.addEventListener("keypress", soloNumeros, false);   
});
//Solo permite introducir numeros.
function soloNumeros(e){
  var key = window.event ? e.which : e.keyCode;
  if (key < 48 || key > 57) {
    e.preventDefault();
  }
}