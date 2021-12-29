<?php
	include "../../../config.php"; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php
	include FOLDER_TEMPLATE."head.php";
	?>
	<link rel="stylesheet"  href="<?= URL_CSS?>estilo_menumedico.css">
</head>
<body>
	<img src="<?= URL_IMG?>vet.jpeg" class="logo" alt="logodevete">
	<header>
		<nav class="navegacion">
			<ul class="menu">
				<li><a href="">Citas</a>
					<ul class="submenu">
						
						<li><a href="<?= URL_VIEW_PACIENTE?>agendar_cita_paciente.php">Agendar </a></li>
						<li><a href="<?= URL_VIEW_PACIENTE?>consultar_cita_paciente.php">Consultar </a></li>
						<li><a href="<?= URL_VIEW_PACIENTE?>cancelar_cita_paciente.php">Cancelar </a></li>
					</ul>
				</li>

				<li><a href="">Historia clínica</a>
					<ul class="submenu">
						<li><a href="<?= URL_VIEW_PACIENTE?>consulta_historia_paciente.php">Consultar</a></li>
					</ul>
				</li>

				<li><a href="">Laboratorio</a>
					<ul class="submenu">
						<li><a href="<?= URL_VIEW_PACIENTE?>consulta_resultados_pac.php">Consultar resultados</a></li>
					</ul>
				</li>
				<li><a href="<?= URL_PROY?>index.php">Regresar</a></li>
			</ul>
		</nav>
	</header>
</body>
</html>