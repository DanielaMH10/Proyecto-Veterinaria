<?php 
include "../Model/conexion.php";

$con = Conexion::conectar();
$consulta = "SELECT idUsuario,nombreUsuario, apellidoUsuario, correoUsuario, telefonoUsuario, direccionUsuario, rolUsuario, estadoUsuario FROM USUARIO";
$stm = $con->prepare($consulta);
$stm->execute();
while ($resultado = $stm->fetch(PDO::FETCH_ASSOC)) {
	$data["data"][] = $resultado;
}
echo json_encode($data);
$con = null;
?>