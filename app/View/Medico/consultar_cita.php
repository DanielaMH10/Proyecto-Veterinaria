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
		<h1> CONSULTAR </h1>
		<p>
			Correo: <input type="e-mail" name="email" maxlength="50" required="" />
		</p>
		<p>
			<input type="submit" value="Buscar" name="Buscar">
			<input type="submit" onclick="location.href='menumedico.php'" value="Regresar" name="Regresar">
		</p>
	</form>
</body>
</html>