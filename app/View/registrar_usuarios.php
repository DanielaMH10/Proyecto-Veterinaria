<?php
include "../../config.php"; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php
	include FOLDER_TEMPLATE."head.php";
	?>
	<link rel="stylesheet"  href="<?= URL_CSS?>estilo_form.css">
	<!--script src="<?= URL_JS?>Validacion_Registro.js"></script-->
	<?php include FOLDER_TEMPLATE . 'scripts.php' ?>
    <!--====== Javascripts & Jquery ======-->
    <!--?php include FOLDER_TEMPLATE . 'scripts.php' ?-->
    <script src="<?= URL_JS?>validacionRegister.js"></script>
</head>
<body>
	<form method="POST" action="<?= URL_CONTROLLER?>controller_user.php" class="box" id="formRegister">
		<img src="<?= URL_IMG?>vet.jpeg" class="logo" alt="logodevete">
		<h1> REGISTRO</h1>
		<div id="mensaje"></div>
		<table border="0">
			<tr>
				<td width="50%">Documento:</td>
				<td width="50%"><input type="number" id="documento" name="documento" maxlength="20" required="" /></td>
			</tr>
			<tr>
				<td width="50%">Nombre:</td>
				<td width="50%"><input type="text"  id="nombre" name="nombre" maxlength="50" required="" /></td>
			</tr>
			<tr>
				<td width="50%">Apellido: </td>
				<td width="50%"><input type="text"  id="apellido" name="apellido" maxlength="50" required="" /></td>
			</tr>
			<tr>
				<td width="50%">Correo:</td> 
				<td width="50%"><input type="e-mail" id="correo"  name="correo" maxlength="100" onkeyup="validarEmail(this)" required="" /></td>
			</tr>
			<tr>
				<td width="50%">Teléfono:</td> 
				<td width="50%"><input type="text"  id="telefono" name="telefono" maxlength="10" 
				required="" /></td>
			</tr>
			<tr>
				<td width="50%">Dirección: </td>
				<td width="50%"><input type="text" id="direccion" name="direccion" maxlength="50" required="" /></td>
			</tr>
			<tr>
				<td width="50%"> Contraseña:</td>
				<td width="50%"><input type="password" id="password" name="password" maxlength="20" required="" /></td>
			</tr> 
			<tr>
				<td width="50%">Rol</td>
				<td width="50%">
					<select name="rol" id="rol" class="custom-select">
						<option value="Medico">Médico</option> 
						<option value="Paciente">Paciente</option>
					</select>
				</td>
			</tr>
		</table>
		<br>
		<p>
			<input type="submit" class="btn btn-light" value="Registrar" id="Registrar" name="Registrar">
			<input type="submit" class="btn btn-primary" onclick="location.href='GestionarUser.php'" value="Regresar" name="Regresar">
		</p>
	</form>
	</html>
</body>