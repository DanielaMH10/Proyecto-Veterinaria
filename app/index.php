<?php
	include "../config.php"; 
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<?php
	include FOLDER_TEMPLATE."head.php";
	?>
	<link rel="stylesheet"  href="<?= URL_CSS?>estilo_login.css">
	<script src="<?= URL_JS?>validacionLogin.js"></script>
</head>
<body>
	<div class="login">
		<img src="<?= URL_IMG?>vet2.jpeg" class="logo" alt="logodevete">
		<center><h1>Bienvenido</h1></center>

		<form action="Controller/validacion.php" method="POST" id="formLogin" class="form">
			<br>
			<label  class="label" for="documento">Documento:</label>
			<!-- input caja de txto -->
			<input id="documento" name="documento" class="type" type="text" placeholder="Introducir documento" maxlength="50" required="">
		</br>
		<br>
		<label class="label" for="Password">Contraseña:</label>
		<input id="pass" name="pass" class="type" type="password" placeholder="Introducir contraseña" maxlength="20" required="">
	</br>
	<br>
	<input id="Entrar" name="Entrar"class="input" type="submit" value=" Entrar" >
</br>
</form>
<form action="../index.php">
	<center><input type="submit" name="Regresar" value="Regresar" class="input"></center>	
</form>
</div>
</body>
</html>