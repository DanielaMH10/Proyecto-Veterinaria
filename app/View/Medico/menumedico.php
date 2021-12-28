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

		<nav>
			<ul>
				<li><a href="<?= URL_VIEW_MEDICO?>GestionarUser.php">Gestionar usuarios</a>
					<!--ul >
						<li><a href="<?=URL_VIEW?>pruebaView.php">Consultar</a></li>
						<li><a href="registrar_usuarios.php">Registrar </a></li>
						<li><a href="actualizar_usuario.php">Actualizar </a></li>
						<li><a href="habilitar_inhabilitar_usuario.php">Habilitar/<br>Inhabilitar</br></a></li>
					</ul-->
				</li>

				<li><a href="">Citas</a>
					<ul>
						<li><a href="Asignar_cita.php">Asignar</a></li>
						<li><a href="consultar_cita.php">Consultar</a></li>
						<li><a href="reAgendar_cita.php">Re-agendar</a></li>
						<li><a href="cancelar_cita.php">Cancelar</a></li>
					</ul>
				</li>
				<li><a href="">Agenda medica</a>
					<ul>
						<li><a href="registro_agenda.php">Registrar</a></li>
						<li><a href="consulta_agenda.php">Consultar</a></li>
						<li><a href="actualizar_agenda.php">Actualizar</a></li>
						<li><a href="habilitar_inhabilitar_agenda.php">Habilitar/<br>Inhabilitar</br></a></li>
					</ul>
				</li>

				<li><a href="">Historia clínica</a>
					<ul>
						<li><a href="apertura_historia.php">Apertura</a></li>
						<li><a href="consulta_historia.php">Consulta</a></li>
					</ul>
				</li>
				<li><a href="">Exámenes</a>
					<ul>
						<li><a href="registro_examen.php">Registrar</a></li>
						<li><a href="consulta_examen.php">Consultar</a></li>
					</ul>
					
				</li>
				<li><a href="<?= URL_PROY?>index.php">Regresar</a></li>
			</ul>
 		</nav>
</body>
</html>