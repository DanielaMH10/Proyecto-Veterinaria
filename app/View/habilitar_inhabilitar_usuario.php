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
</head>
<body>
	<form method="POST" action="<?= URL_CONTROLLER?>controller_user.php" class="box">
		<img src="<?= URL_IMG?>vet.jpeg" class="logo" alt="logodevete">
		<h1> HABILITAR/INHABILITAR </h1>
		<p>
			Documento: <input type="number" name="documento" maxlength="50" required="" />
		</p>
		<p>
			<input type="submit" value="Habilitar" name="Habilitar" />
			<input type="submit" value="Inhabilitar" name="Inhabilitar" />
			<input type="submit" onclick="location.href='menumedico.php'" value="Regresar" name="Regresar">
		</p>
	</form>
</body>
</html>