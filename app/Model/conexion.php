<?php



class conexion {

	public static function conectar(){


		try{
			$conexion = new PDO ('mysql:host=localhost; dbname=VETERINARIA','root','');
			$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			return $conexion;
		} catch(exception $e){
			//die ("Error".$e->getMessage());
			echo  $e->getMessage();
		}
	}
}
?>