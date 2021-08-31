<?php 
require_once "../Model/conexion.php";

$id = $_POST['id'];
$con = Conexion::conectar();
$consulta = "SELECT idUsuario,nombreUsuario, apellidoUsuario, correoUsuario, passwordUsuario, telefonoUsuario, direccionUsuario, rolUsuario, estadoUsuario FROM USUARIO WHERE idUsuario = ?";
$stm = $con->prepare($consulta);
$stm->execute([$id]);

while ($resultado = $stm->fetch(PDO::FETCH_ASSOC)) {
	$data["data"][] = $resultado;
}

echo json_encode($data);

$con = null;



 ?>