<?php

class Paciente {
	private $idPaciente;
	private $idUsuarioFk;
	private $nombrePaciente;
	private $apellidoPaciente;
	private $telefonoPaciente;
	private $direccionPaciente;
	private $correoPaciente;
	private $fechaNacimiento;
	private $estadoMedico;
	public function registrarPaciente ($idPaciente,
		$idUsuarioFk, 
		$nombrePaciente, 
		$apellidoPaciente, 
		$telefonoPaciente,
		$direccionPaciente,
		$correoPaciente,
		$fechaNacimiento,
		$estadoPaciente
	)
	{
		$con = conexion::conectar();
		$insert = "INSERT INTO PACIENTE VALUES (?,?,?,?,?,?,?,?,?)";

		$resultInsert = $con->prepare($insert);
		if($resultInsert->execute([
			$idPaciente,
			$idUsuarioFk, 
			$nombrePaciente, 
			$apellidoPaciente,
			$direccionPaciente, 
			$telefonoPaciente,
			$correoPaciente,
			$fechaNacimiento,
			$estadoPaciente])){
			return true;
		}else{
			return false;
		}						
		
		$con = null;			
	}
	public function UpdateUser($idPaciente,
		$nombrePaciente, 
		$apellidoPaciente,
		$correoPaciente,      
		$telefonoPaciente,
		$direccionPaciente,
		$estadoPaciente
		)
	{
		$con = Conexion::conectar();
		$update = "UPDATE PACIENTE SET nombrePaciente = ?, apellidoPaciente = ?, correoPaciente = ?,telefonoPaciente = ?, direccionPaciente = ?, estadoPaciente = ? WHERE idPaciente = ?";
		if ($result = $con->prepare($update)->execute([$nombrePaciente, $apellidoPaciente,$correoPaciente, $telefonoPaciente, $direccionPaciente, $estadoPaciente, $idPaciente])) {
			return true;
		}else{
			return false;
		}	
		$con=null;
	}
	public function inhabilitarPaciente($id)
	{
		$con = Conexion::conectar();
		$sql = 'CALL inhabilitarPaciente(:id)';
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
}
?>
