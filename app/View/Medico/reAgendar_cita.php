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
		<h1> RE-AGENDAR </h1>
		<table border="0">
			<tr>
				<td width="50%" >Nombre:</td> 
				<td width="50%" ><input type="text" name="nombre" maxlength="50" required="" /></td>
			</tr>
			<tr>
				<td width="50%" >Apellido:</td>
				<td width="50%" ><input type="text" name="apellido" maxlength="50" required="" /></td>
			</tr>
			<tr>
				<td width="50%" >Hora:</td>
				<td width="50%" left="50px"><input type="datetime" name="datetime" maxlength="100" required="" /></td>
			</tr>
			<tr>
				<td width="50%" >Motivo:</td>
				<td width="50%" ><input type="text" name="motivo" maxlength="10" required="" /></td>
			</tr>
		</table>
		<p>
			<input type="submit" value="Agendar" name="Agendar">
			<input type="submit" onclick="location.href='menumedico.php'" value="Regresar" name="Regresar">
		</p>
	</form>
</body>
</html>