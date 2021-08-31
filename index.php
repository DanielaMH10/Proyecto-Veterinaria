<?php
  include "config.php"; 
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<?php
  include FOLDER_TEMPLATE."head.php";
  ?>
	<link rel="stylesheet"  href="<?= URL_CSS?>fontello.css">
	<link rel="stylesheet"  href="<?= URL_CSS?>ESTILOS.CSS">
	<link rel="stylesheet"  href="<?= URL_CSS?>MENU.CSS">
  <link rel="stylesheet"  href="<?= URL_CSS?>BANNER.CSS">
  <link rel="stylesheet"  href="<?= URL_CSS?>BLOG.CSS">
  <link rel="stylesheet"  href="<?= URL_CSS?>INFO.CSS">
  <link rel="stylesheet"  href="<?= URL_CSS?>FOOTER.CSS">
</head>
<body>
  <!-- de movil a dispositivos mas grandes -->
  <!-- header lo uso para hacer el menu -->
  <header>
  	<div class="contenedor">
  		<h1 class="icon-dog">Veterinaria Dr. Rojas</h1>
  		<input type="checkbox" id="menu-bar">
  		<label class="icon-menu" for="menu-bar"></label>
<!-- no use ul y li porque mi menu no es despegable con submenus-->
  		<nav class="menu">
  			<a href="">Inicio</a>
  			<a href="app/index.php">Entrar</a>
  			<a href="">Servicios</a>
  			<a href="">Contactenos</a>
  		</nav>
  	</div>
  </header>
<!-- contenido principal de la web -->
<main> 
<section id="banner">
	<img src="<?= URL_IMG?>banner.jpg">
	<div class="contenedor">
		<h2>URGENCIAS</h2>
		<p>24 Horas</p>
</div>
</section>
<!--BLOG-->
<section id="bienvenidos">
  <center>
  <h2>BIENVENIDOS </h2>
  <p> "Profesionales al servicio de sus animales" </p>
</center>
</section>

<section id="blog">
  <center><h3> BLOG </h3></center>
  <div class="contenedor">
    <article>
      <img src="<?= URL_IMG?>blog1.jpg" >
      <center><h4>LA FIEBRE AFTOSA ALTAMENTE CONTAGIOSA</h4></center>
    </article>
    <article>
      <img src="<?= URL_IMG?>blogg2.jpg" >
      <center><h4> LA FILARIOSIS CANINA </h4></center>
    </article>
    <article>
      <img src="<?= URL_IMG?>blog3.jpg" >
      <center><h4>RABIA BOVINA</h4></center>
    </article>
  </div>
</section>
<!--INFO-->
<section id="info">
  <h3>Para muchos de nosotros las mascotas no son simples compañeros, son miembros de la familia. </h3>
  <div class="contenedor">
    <div class="info-pet">
      <img src="<?= URL_IMG?>pet1.jpg">
      <h4>Bruno</h4>
    </div>
    <div class="info-pet">
      <img src="<?= URL_IMG?>pet3.jpg">
      <h4>Luciana</h4>
    </div>
    <div class="info-pet">
      <img src="<?= URL_IMG?>pet2.jpg">
      <h4>Tom</h4>
    </div>
    <div class="info-pet">
      <img src="<?= URL_IMG?>pet4.jpg">
      <h4>Lola</h4>
    </div>
  </div>
</section>
</main>
<!--FOOTER-->
<!-- fin de la pagina -->
<?php
  include FOLDER_TEMPLATE."footer.php";
  ?>
</body>
</html>