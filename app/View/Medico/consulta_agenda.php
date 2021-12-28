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
		<h1> CONSULTA </h1>
		<table border="0">
			<tr>
				<td width="50%" >Fecha:</td>
				<td width="50%" ><input type="date" name="fecha" maxlength="100" required="" /></td>
			</tr>
			<tr>
				<td width="50%" >Hora:</td>
				<td width="50%"><input type="datetime" name="hora" maxlength="100" required="" /></td>
			</tr>
			<tr>
				<td width="50%" >Consultorio:</td>
				<td width="50%" ><input type="text" name="consultorio" maxlength="10" required="" /></td>
			</tr>
		</table>
		<p>
			<input type="submit" value="Consultar" name="Consultar">
			<input type="submit" onclick="location.href='menumedico.php'" value="Regresar" name="Regresar">
		</p>
	</form>
</body>
</html>