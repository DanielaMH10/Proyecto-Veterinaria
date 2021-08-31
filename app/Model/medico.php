<?php

class Medico {
	private $idMedico;
	private $idUsuarioFk;
	private $nombreMedico;
	private $apellidoMedico;
	private $telefonoMedico;
	private $correoMedico;
	private $tarjetaProfesional;
	private $especialidadMedico;
	private $estadoMedico;
public function registrarMedico ($idMedico,
		$idUsuarioFk, 
		$nombreMedico, 
		$apellidoMedico, 
		$telefonoMedico,
		$correoMedico,
		$tarjetaProfesional,
		$especialidadMedico,
		$estadoMedico
	)
	{
		$con = conexion::conectar();
		$insert = "INSERT INTO MEDICO VALUES (?,?,?,?,?,?,?,?,?)";

			$resultInsert = $con->prepare($insert);
			if($resultInsert->execute([
				$idMedico,
				$idUsuarioFk, 
				$nombreMedico, 
				$apellidoMedico, 
				$telefonoMedico,
				$correoMedico,
				$tarjetaProfesional,
				$especialidadMedico, $estadoMedico])){
				return true;
			}else{
				return false;
			}						
		
		$con = null;			
	}
	public function UpdateUser($idMedico,
		$nombreMedico, 
		$apellidoMedico,
		$correoMedico,      
		$telefonoMedico,
		$estadoMedico
		)
	{
		$con = Conexion::conectar();
		$update = "UPDATE MEDICO SET nombreMedico = ?, apellidoMedico = ?, correoMedico = ?,telefonoMedico = ?, estadoMedico = ? WHERE idMedico = ?";
		if ($result = $con->prepare($update)->execute([$nombreMedico, $apellidoMedico,$correoMedico, $telefonoMedico, $estadoMedico, $idMedico])) {
			return true;
		}else{
			return false;
		}	
		$con=null;
	}
	public function inhabilitarMedico($id)
	{
		$con = Conexion::conectar();
		$sql = 'CALL inhabilitarMedico(:id)';
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