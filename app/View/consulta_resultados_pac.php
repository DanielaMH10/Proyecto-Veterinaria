<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Veterinaria Dr. Jairo Rojas</title>
	<link rel="stylesheet"  href="../../assests/CSS/estilo_form.css">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
</head>
<body>
	<form method="POST" action="../Controller/controller_user.php" class="box">
		<img src="../../assests/img/vet.jpeg" class="logo" alt="logodevete">
		<h1> CONSULTA </h1>
		<table border="0">
		<tr>
			<td width="50%" >Nombre:</td> 
			<td width="50%" ><input type="text" name="nombre" maxlength="20" required="" /></td>
		</tr>
		<tr>
			<td width="50%" >Apellido:</td>
				<td width="50%" ><input type="text" name="apellido" maxlength="20" required="" /></td>
		</tr>
		</table>
		<p>
			<input type="submit" value="Consultar" name="Consultar">
			<input type="submit" value="Regresar" name="Regresar">
		</p>
	</form>
</body>
</html>