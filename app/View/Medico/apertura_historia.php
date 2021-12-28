<?php
	include "../../../config.php"; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php
	include FOLDER_TEMPLATE."head.php";
	?>
	<link rel="stylesheet"  href="<?= URL_CSS?>estilo_form.css">
</head>
<body>
	<form method="POST" action="<?= URL_CONTROLLER?>controller_user.php" class="box">
		<img src="<?= URL_IMG?>vet.jpeg" class="logo" alt="logodevete">
		<h1> APERTURA </h1>
		<table border="0">
			<tr>
				<td width="50%" >Nombre:</td> 
				<td width="50%" ><input type="text" name="nombre" maxlength="12" required="" /></td>
			</tr>
			<tr>
				<td width="50%" >Apellido:</td>
				<td width="50%" ><input type="text" name="apellido" maxlength="12" required="" /></td>
			</tr>
			<tr>
				<td width="50%" >Estatura:</td>
				<td width="50%" ><input type="double" name="estatura" maxlength="" required="" /></td>
			</tr>
			<tr>
				<td width="50%" >Peso:</td>
				<td width="50%"><input type="double" name="peso" maxlength="" required="" /></td>
			</tr>
			<tr>
				<td width="50%" >Antecedentes:</td>
				<td width="50%" ><input type="text" name="antecedentes" maxlength="250" required="" /></td>
			</tr>
			<tr>
				<td width="50%" >Alergias:</td>
				<td width="50%" ><input type="text" name="alergias" maxlength="250" required="" /></td>
			</tr>
			<tr>
				<td width="50%" >Enfermedades:</td>
				<td width="50%" ><input type="text" name="enfermedades" maxlength="250" required="" /></td>
			</tr>

		</table>
		<p>
			<input type="submit" value="Actualizar" name="Actualizar">
			<input type="submit" onclick="location.href='menumedico.php'" value="Regresar" name="Regresar">
		</p>
	</form>
</body>
</html>