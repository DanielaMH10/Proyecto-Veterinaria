<?php
include "../Model/conexion.php";
include "../Model/usuario.php";


$obUsuario = new usuario ();
$conexion = conexion::conectar();
//echo "ayuda";
if (isset($_POST['Entrar'])) {
	//echo "entro";
	$inputDocumento=$_POST['documento'];
	$inputPass=$_POST['pass'];
		/*if($_POST['correo'] == "" ||  $_POST['pass']=="") {
			echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'> <h3>¡ERROR!</h3><hr>Debe de llenar todos los campos";
			echo " <button type='button' class='close' data-dismiss='alert' aria-label='Close'>";
			echo " <span aria-hidden='true'>&times;</span></button></div>";
		}*/
	if ($obUsuario->usuarioExistente ($inputDocumento, $inputPass)==true) {
		if ($obUsuario->Rol($inputDocumento)==true) {
		 	header("Location:../View/Medico/menumedico.php");
		} 
		elseif ($obUsuario->Rol($inputDocumento)==false) {
			header("Location:../View/menupaciente.php");
		}
	}
	else {
		header("Location:../index.php");
	} 
}
?>