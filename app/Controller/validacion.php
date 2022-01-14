<?php
include "../Model/conexion.php";
include "../Model/usuario.php";


$obUsuario = new usuario ();

if(isset($_POST['Entrar'])) {
    $user = $_POST['documento'];
    $password = $_POST['pass'];

  if($user=="'' or '1'='1'" || $password=="'' or '1'='1'") {
    echo ('<script>Swal.fire(
      "Error!!",
      "Datos inválidos",
      "error"
       )</script>');
  }
  else {
    $correcciones = $obUsuario->usuarioExistente($user,$password);
    if (is_array($correcciones) || is_object($correcciones))
      {foreach($correcciones as $correccion) {
        $datosErroneos=$correccion['Correcto'];
      }
    }else{
      $datosErroneos =="0";
    }
    $existencias = $consultasUsuario->validarExistencia($usuario);
    if (is_array($existencias) || is_object($existencias))
      {foreach($existencias as $existencia) {
        $existenciaU=$existencia['Cantidad'];
      }
    }else{
      $existenciaU ="0";
    }
    $rows = $consultasUsuario->validarLogin2($usuario);
    if (is_array($rows) || is_object($rows))
      {foreach($rows as $row) {
        $Rol=$row['idRolFK'];
      }
    }else{
      $Rol ="0";
    }
    $estado=$consultasUsuario->validarLogin3($usuario);
    if (is_array($estado) || is_object($estado))
      {foreach($estado as $state) {
        $estadoU=$state['estadoUsuario'];
      }
    }else{
      $estadoU ="0";
    }
    $filas = $consultasUsuario->validarLoginUsuario($usuario,$contrasenia,$Rol,$estadoU);
    $resultado=null;
    if (is_array($filas) || is_object($filas))
    {
      foreach($filas as $fila) {
        $resultado=$fila['RESULTADO'];
      }
    }
    $rolRecepcionista = 1;
    if($Rol == '1' && $resultado == "1" ){
      $_SESSION["rolRecepcionista"] = $rolRecepcionista;
      $_SESSION["NumeroIdentificacion"] = $usuario;
      echo "<script>location.href=' inicioRecepcionista.php';</script>";
      die();
    //header('location: inicioRecepcionista.php');
    }
    else if($Rol == '2' && $resultado == "1"){
      $_SESSION["NumeroIdentificacion"] = $usuario;
      $_SESSION['rol'] = $Rol;
      echo "<script>location.href=' inicioInstructor.php';</script>";
      die();
    //header('location: inicioInstructor.php');
    }
    else if($Rol == '3' && $resultado == "1"){
      $_SESSION["NumeroIdentificacion"] = $usuario;
      $_SESSION['rol'] = $Rol;
      echo "<script>location.href=' inicioCliente.php';</script>";
      die();
   // header('location: inicioCliente.php');
    }else if($usuario=="" || $contrasenia==""){
      echo('<script>swal("Error!", "Debe ingresar datos al formulario para iniciar sesión","error")</script>');
    }else if($existenciaU=='0'){
      echo('<script>swal("Error!", "Usuario no registrado en el sistema","error")</script>');
    }else if($resultado!= '1' && $datosErroneos=="0"){
      echo('<script>swal("Error!", "Datos ingresados erroneos, intentelo nuevamente","error")</script>');
    }else if($estadoU=='0' && $datosErroneos=="1"){
      echo '<div class="alert alert-warning"><strong>Usuario Inhabilitado!</strong> Si cree que se trata de un error, por favor comuníquese con Recepción.</div>';
    }
  }
}

//echo "ayuda";
/*if (isset($_POST['Entrar'])) {
	//echo "entro";
	$inputDocumento=$_POST['documento'];
	$inputPass=$_POST['pass'];
		/*if($_POST['correo'] == "" ||  $_POST['pass']=="") {
			echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'> <h3>¡ERROR!</h3><hr>Debe de llenar todos los campos";
			echo " <button type='button' class='close' data-dismiss='alert' aria-label='Close'>";
			echo " <span aria-hidden='true'>&times;</span></button></div>";
		}*/
	/*if ($obUsuario->usuarioExistente ($inputDocumento, $inputPass)==true) {
		if ($obUsuario->Rol($inputDocumento)==true) {
		 	header("Location:../View/Medico/menumedico.php");
		} 
		elseif ($obUsuario->Rol($inputDocumento)==false) {
			header("Location:../View/Paciente/menupaciente.php");
		}
	}
	else {  
		header("Location:../View/sign-in.php");
	} 
}*/
?>



<?php 
if(isset($_POST['Num']) && isset($_POST['Contraseña'])){
  

$usuario = $_POST['Num'];
$contrasenia = $_POST['Contraseña'];
if($usuario=="'' or '1'='1'" || $contrasenia=="'' or '1'='1'"){
  echo('<script>swal("Error!", "Datos inválidos","error")</script>');
}
else{
  $correcciones = $consultasUsuario->validarDatosCorrectos($usuario,$contrasenia);
    if (is_array($correcciones) || is_object($correcciones))
  {foreach($correcciones as $correccion) {
    $datosErroneos=$correccion['Correcto'];
  }
  }else{
    $datosErroneos =="0";
  }
  $existencias = $consultasUsuario->validarExistencia($usuario);
  if (is_array($existencias) || is_object($existencias))
  {foreach($existencias as $existencia) {
    $existenciaU=$existencia['Cantidad'];
  }
  }else{
    $existenciaU ="0";
  }
  $rows = $consultasUsuario->validarLogin2($usuario);
  if (is_array($rows) || is_object($rows))
  {foreach($rows as $row) {
    $Rol=$row['idRolFK'];
  }
  }else{
    $Rol ="0";
  }
  $estado=$consultasUsuario->validarLogin3($usuario);
  if (is_array($estado) || is_object($estado))
  {foreach($estado as $state) {
    $estadoU=$state['estadoUsuario'];
  }
  }else{
    $estadoU ="0";
  }
  $filas = $consultasUsuario->validarLoginUsuario($usuario,$contrasenia,$Rol,$estadoU);
  $resultado=null;
  if (is_array($filas) || is_object($filas))
  {
    foreach($filas as $fila) {
    $resultado=$fila['RESULTADO'];
  }
  }
  $rolRecepcionista = 1;
  if($Rol == '1' && $resultado == "1" ){
    $_SESSION["rolRecepcionista"] = $rolRecepcionista;
    $_SESSION["NumeroIdentificacion"] = $usuario;
    echo "<script>location.href=' inicioRecepcionista.php';</script>";
die();
    //header('location: inicioRecepcionista.php');
  }
  else if($Rol == '2' && $resultado == "1"){
    $_SESSION["NumeroIdentificacion"] = $usuario;
    $_SESSION['rol'] = $Rol;
    echo "<script>location.href=' inicioInstructor.php';</script>";
    die();
    //header('location: inicioInstructor.php');
  }
  else if($Rol == '3' && $resultado == "1"){
    $_SESSION["NumeroIdentificacion"] = $usuario;
    $_SESSION['rol'] = $Rol;
    echo "<script>location.href=' inicioCliente.php';</script>";
    die();
   // header('location: inicioCliente.php');
  }else if($usuario=="" || $contrasenia==""){
    echo('<script>swal("Error!", "Debe ingresar datos al formulario para iniciar sesión","error")</script>');
  }else if($existenciaU=='0'){
    echo('<script>swal("Error!", "Usuario no registrado en el sistema","error")</script>');
  }else if($resultado!= '1' && $datosErroneos=="0"){
    echo('<script>swal("Error!", "Datos ingresados erroneos, intentelo nuevamente","error")</script>');
  }else if($estadoU=='0' && $datosErroneos=="1"){
    echo '<div class="alert alert-warning"><strong>Usuario Inhabilitado!</strong> Si cree que se trata de un error, por favor comuníquese con Recepción.</div>';
  }
}
}



?>