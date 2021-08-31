<?php
ini_set('memory_limit', '32M');
require_once 'conexion.php';
class Usuario {		
	private $idUsuario;
	private $nombreUsuario;
	private $apellidoUsuario;
	private $correoUsuario;
	private $telefonoUsuario;
	private $direccionUsuario;
	private $passwordUsuario;
	private $rolUsuario;
	private $estadoUsuario;

	public function usuarioExistente ($documento,$pass) {
		$conexion = conexion::conectar();
		$consulta = "SELECT * FROM USUARIO WHERE idUsuario = ? AND passwordUsuario = BINARY ? AND estadoUsuario=1";
		$resultado0 = $conexion->prepare($consulta);
		$resultado0->execute([$documento,$pass]);
		if ($resultado0->fetchColumn() > 0) {
			return true;
		} else{
			return false;
		}
		$conexion = null;	
	}

	public function Rol ($documento) {
		$conexion = conexion::conectar();
		$consulta = "SELECT rolUsuario FROM USUARIO WHERE idUsuario = ? ";
		$resultado0 = $conexion->prepare($consulta);
		$resultado0->execute([$documento]);
		$array=$resultado0->fetchAll(PDO::FETCH_COLUMN);
		if ($array[0] == "Medico") {
			return true;
		} elseif ($array[0] == "Paciente"){
			return false;
		}
		$conexion = null;
	}


	public function registrarUsuario ($idUsuario,
		$nombreUsuario, 
		$apellidoUsuario, 
		$correoUsuario, 
		$telefonoUsuario,
		$direccionUsuario,
		$passwordUsuario,
		$rolUsuario, 
		$estadoUsuario
	)
	{
		$con = conexion::conectar();
		$insert = "INSERT INTO USUARIO VALUES ( ?,?,?,?,?,?,?,?,?)";

		$resultInsert = $con->prepare($insert);
		if($resultInsert->execute([
			$idUsuario,
			$nombreUsuario, 
			$apellidoUsuario, 
			$correoUsuario,
			$telefonoUsuario,
			$direccionUsuario,
			$passwordUsuario,
			$rolUsuario,
			$estadoUsuario])){
			return true;
		}else{
			return false;
		}						
		
		$con = null;			
	}
	public function inhabilitarUsuario($id)
	{
		$con = Conexion::conectar();
		$sql = 'CALL inhabilitarUsuario(:id)';
   		$stmt = $con->prepare($sql);
   		$stmt->bindParam(':id', $id);
   		$stmt->execute();
		/*$update = "UPDATE USUARIO SET estadoUsuario = 2 WHERE idUsuario = ?";
		if ($result = $con->prepare($update)->execute([$id])) {
			return true;
		}else{
			return false;
		}*/	
		$con=null;
	}
	public function UpdateUser($idUsuario,
		$nombreUsuario, 
		$apellidoUsuario,
		$correoUsuario,   
		$passwordUsuario,   
		$telefonoUsuario,
		$direccionUsuario,
		$estadoUsuario 
		)
	{
		$con = Conexion::conectar();
		$update = "UPDATE USUARIO SET nombreUsuario = ?, apellidoUsuario = ?, correoUsuario = ?,telefonoUsuario = ?, direccionUsuario = ?, passwordUsuario = ?, estadoUsuario = ? WHERE idUsuario = ?";
		if ($result = $con->prepare($update)->execute([$nombreUsuario, $apellidoUsuario,$correoUsuario, $telefonoUsuario, $direccionUsuario,  $passwordUsuario, $estadoUsuario, $idUsuario])) {
			return true;
		}else{
			return false;
		}	
		$con=null;
	}

	public function mostrar ($correo) {
		$conexion = conexion::conectar();
		$consulta = "SELECT * FROM USUARIO WHERE idUsuario = ? ";
		$resultado0 = $conexion->prepare($consulta);
		$resultado0->execute([$correo]);
		$array=$resultado0->fetchAll(PDO::FETCH_COLUMN);
		$nombreUsuario=$array[1];
		$apellidoUsuario=$array[2];
		$correoUsuario=$array[3];
		$telefonoUsuario=$array[4];
		$direccionUsuario=$array[5];
		$passwordUsuario=$array[6];

		$conexion = null;
	}
}


?>