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
		<h1> REGISTRO </h1>
		<br></br>
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
				<td width="50%" >Valor:</td>
				<td width="50%" ><input type="text" name="valor" maxlength="50" required="" /></td>
			</tr>
			<tr>
				<td width="50%" >Fecha:</td>
				<td width="50%" ><input type="date" name="fecha" maxlength="12" required="" /></td>
			</tr>
			<tr>
				<td width="50%" >Tipo:</td>
				<td width="50%" ><input type="text" name="tipo" maxlength="100" required="" /></td>
			</tr>
		</table>
		<p>
			<input type="submit" value="Registrar" name="Registrar">
			<input type="submit" onclick="location.href='menumedico.php'" value="Regresar" name="Regresar">
		</p>
	</form>
</body>
</html>