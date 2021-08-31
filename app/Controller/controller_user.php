<?php 
include "../Model/conexion.php";
require_once "../Model/usuario.php";
require_once "../Model/medico.php";
require_once "../Model/paciente.php";
include "../../config.php"; 

$obUsuario = new Usuario();
$obMedico = new Medico();
$obPaciente = new Paciente();
		//echo "entro";
if (isset($_POST['Registrar'])){
	$idUsuario=$_POST['documento'];
	$nombre=$_POST['nombre'];
	$apellido=$_POST['apellido'];
	$correo=$_POST['correo'];
	$telefono=$_POST['telefono'];
	$direccion=$_POST['direccion'];
	$password=$_POST['password'];
	$rolUsuario=$_POST['rol'];
	$estadoUsuario=1;
	$fechaNacimiento="2000/*01/*01";
	$tarjetaProfesional=0000;
	$especialidadMedico="Veterinario";
	if ($obUsuario->registrarUsuario($idUsuario,$nombre,$apellido,$correo,$telefono,$direccion,$password,$rolUsuario,$estadoUsuario)==true) {
		if ($rolUsuario=="Medico") {
			if ($obMedico->registrarMedico ($idUsuario,
				$idUsuario, 
				$nombre, 
				$apellido, 
				$telefono,
				$correo,
				$tarjetaProfesional,
				$especialidadMedico,
				$estadoUsuario)==true) {

				echo '<html lang="en">
				<head>';

				include FOLDER_TEMPLATE."head.php";
				echo '
				<link rel="stylesheet"  href="../../assets/CSS/estilo_form.css">
				<link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
				</head>
				<body>
				<form class="box" action="../View/registrar_usuarios.php">
				<img src="../../assets/img/vet.jpeg" class="logo" alt="logodevete">
				<div class="alert alert-primary alert-dismissible fade show" role="alert"><h3>¡Listo!</h3><hr>Usuario registrado <button type="submit"  class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span></button>
				</div>
				</form>
				</html>';
			/*echo "<div class='alert alert-primary alert-dismissible fade show' role='alert'><h3>¡Listo!</h3><hr>Area ";
			echo "registrada correctamente <button type='button' onclick='location.href='registrar_usuarios.php'' class='close' data-dismiss='alert' aria-label='Close'>";
			echo " <span aria-hidden='true'>&times;</span></button></div>";*/
		}else{
			echo '<html lang="en">
			<head>';

			include FOLDER_TEMPLATE."head.php";
			echo '
			<link rel="stylesheet"  href="../../assets/CSS/estilo_form.css">
			<link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
			</head>
			<body>
			<form class="box" action="../View/registrar_usuarios.php">
			<img src="../../assets/img/vet.jpeg" class="logo" alt="logodevete">
			<div class="alert alert-danger alert-dismissible fade show" role="alert"> <h3>¡ERROR!</h3><hr>Debe de llenar todos los campos <button type="submit"  class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span></button>
			</div>
			</form>
			</html>';
		}
	}
	if ($rolUsuario=="Paciente") {
		if ($obPaciente->registrarPaciente ($idUsuario,
			$idUsuario, 
			$nombre, 
			$apellido, 
			$telefono,
			$direccion,
			$correo,
			$fechaNacimiento,
			$estadoUsuario)==true) {
			
			echo '<html lang="en">
			<head>';

			include FOLDER_TEMPLATE."head.php";
			echo '
			<link rel="stylesheet"  href="../../assets/CSS/estilo_form.css">
			<link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
			</head>
			<body>
			<form class="box" action="../View/registrar_usuarios.php">
			<img src="../../assets/img/vet.jpeg" class="logo" alt="logodevete">
			<div class="alert alert-primary alert-dismissible fade show" role="alert"><h3>¡Listo!</h3><hr>Usuario registrado <button type="submit"  class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span></button>
			</div>
			</form>
			</html>';
			/*echo "<div class='alert alert-primary alert-dismissible fade show' role='alert'><h3>¡Listo!</h3><hr>Area ";
			echo "registrada correctamente <button type='button' onclick='location.href='registrar_usuarios.php'' class='close' data-dismiss='alert' aria-label='Close'>";
			echo " <span aria-hidden='true'>&times;</span></button></div>";*/
		}else{
			echo '<html lang="en">
			<head>';

			include FOLDER_TEMPLATE."head.php";
			echo '
			<link rel="stylesheet"  href="../../assets/CSS/estilo_form.css">
			<link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">
			</head>
			<body>
			<form class="box" action="../View/registrar_usuarios.php">
			<img src="../../assets/img/vet.jpeg" class="logo" alt="logodevete">
			<div class="alert alert-danger alert-dismissible fade show" role="alert"> <h3>¡ERROR!</h3><hr>Debe de llenar todos los campos <button type="submit"  class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span></button>
			</div>
			</form>
			</html>';
		}
	}
}
}
if (isset($_POST["correoUsuario"])) {

	$idUsuario = $_POST["idUsuario"];
	$nombreUsuario = $_POST["nombreUsuario"];
	$telefono = $_POST["telefono"];
	$direccion = $_POST["direccion"];
	$apellidoUsuario = $_POST["apellidoUsuario"];
	$correoUsuario = $_POST["correoUsuario"];
	$passwordUsuario = $_POST["passwordUsuario"];
	$estadoUsuario = $_POST["estadoUsuario"];
	$rolUsuario = $_POST["rolUsuario"];

	$user = new Usuario();

	//echo $correoUsuario;
	//echo $user->inhabilitarUsuario($id);
	if($user->UpdateUser($idUsuario,$nombreUsuario, 
		$apellidoUsuario,
		$correoUsuario,
		$passwordUsuario,
		$telefono,
		$direccion,
		$estadoUsuario)){
		if ($rolUsuario=="Paciente") {
			if ($obPaciente->UpdateUser($idUsuario,
				$nombreUsuario,
				$apellidoUsuario,
				$correoUsuario,
				$telefono,
				$direccion,
				$estadoUsuario
			)) {
				echo "<div class='alert alert-primary alert-dismissible fade show' role='alert'><h3>¡Listo!</h3><hr>Usuario ";
				echo "actualizado correctamente <button type='button' class='close' data-dismiss='alert' aria-label='Close'>";
				echo " <span aria-hidden='true'>&times;</span></button></div>";;
			}
		}
		elseif ($rolUsuario=="Medico") {
			if ($obMedico->UpdateUser($idUsuario,
				$nombreUsuario, 
				$apellidoUsuario,
				$correoUsuario,      
				$telefono,
				$estadoUsuario
			)) {
				echo "<div class='alert alert-primary alert-dismissible fade show' role='alert'><h3>¡Listo!</h3><hr>Usuario ";
				echo "actualizado correctamente <button type='button' class='close' data-dismiss='alert' aria-label='Close'>";
				echo " <span aria-hidden='true'>&times;</span></button></div>";;
			}
		}
	}else{
		echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'> <h3>¡ERROR!</h3><hr>Hubo problemas al actualizar el Usuario";
		echo " <button type='button' class='close' data-dismiss='alert' aria-label='Close'>";
		echo " <span aria-hidden='true'>&times;</span></button></div>";
	}
}
/*se llaman las funciones*/
if (isset($_GET["id"])) {
	$user = new Usuario();
	$id = $_GET["id"];
	//echo $id;
	echo $user->inhabilitarUsuario($id);
	echo $obPaciente->inhabilitarPaciente($id);
	echo $obMedico->inhabilitarMedico($id);
}
?>