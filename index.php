<?php
	include "config.php"; 
?>
<!doctype html>
<html lang="en">
    <head>
    <?php
	include FOLDER_TEMPLATE."head.php";
	?>
        <link rel="stylesheet" href="<?=URL_CSS ?>slick.css"/>
        <link rel="stylesheet" href="<?=URL_CSS ?>bootstrap-icons.css">
        <?php include FOLDER_TEMPLATE . 'scripts.php' ?>

    </head>
    
    <body>

        <section class="preloader">
            <div class="spinner">
                <span class="sk-inner-circle"></span>
            </div>
        </section>
    
        <main>

        <?php include FOLDER_TEMPLATE . 'nav.php' ?>

            <section class="slick-slideshow">   
                <div class="slick-custom">
                    <img src="<?= URL_IMG?>slideshow/banner.jpg" class="img-fluid" alt="">

                    <div class="slick-bottom">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6 col-10">
                                    <h1 class="slick-title">Urgencias 24 horas </h1>

                                    <p class="lead text-white mt-lg-3 mb-lg-5">Profesionales al servicio de sus animales. </p>

                                    <a href="<?=URL_VIEW ?>contact.php" class="btn custom-btn">Contactenos</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="slick-custom">
                    <img src="<?= URL_IMG?>/slideshow/banner2.jpg" class="img-fluid" alt="">

                    <div class="slick-bottom">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6 col-10">
                                    <h1 class="slick-title">Urgencias 24 horas</h1>

                                    <p class="lead text-white mt-lg-3 mb-lg-5">Profesionales al servicio de sus animales. </p>

                                    <a href="<?=URL_VIEW ?>product.php" class="btn custom-btn">Explore nuestros servicios</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="slick-custom">
                    <img src="<?= URL_IMG?>/slideshow/banner3.jpg" class="img-fluid" alt="">

                    <div class="slick-bottom">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6 col-10">
                                    <h1 class="slick-title">Urgencias 24 horas</h1>

                                    <p class="lead text-white mt-lg-3 mb-lg-5">Profesionales al servicio de sus animales. </p>

                                    <a href="<?=URL_VIEW ?>about.php" class="btn custom-btn">Lea más sobre nosotros</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </section>

            <section class="about section-padding">
                <div class="container">
                    <div class="row">

                        <div class="col-12 text-center">
                            <h2 class="mb-5">Bienvenido  <span>usuario</span></h2>
                        </div>

                        <div class="col-lg-2 col-12 mt-auto mb-auto">
                            <ul class="nav nav-pills mb-5 mx-auto justify-content-center align-items-center" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="pills-youtube-tab" data-bs-toggle="pill" data-bs-target="#pills-youtube" type="button" role="tab" aria-controls="pills-youtube" aria-selected="true">Nuestro trabajo</button>
                                </li>

                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Doctor</button>
                                </li>

                            </ul>
                        </div>

                        <div class="col-lg-10 col-12">
                            <div class="tab-content mt-2" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">

                                    <div class="row">
                                        <div class="col-lg-7 col-12">
                                            <img src="images/pim-chu-z6NZ76_UTDI-unsplash.jpeg" class="img-fluid" alt="">
                                        </div>

                                        <div class="col-lg-5 col-12">
                                            <div class="d-flex flex-column h-100 ms-lg-4 mt-lg-0 mt-5">
                                                <h4 class="mb-3">Doctor <span>Jairo Ivan Rojas </span></h4>

                                                <p><img src="<?= URL_IMG?>doctor.jpg" class="img-fluid" alt="">Él es el doctor Jairo Ivan Rojas Hernandez, quien esta acargo de la veterinaria y esta dispuesto atender cualquier caso medico veterinario.</p>

                                                <p>Cuenta con una titulación y su especializacion en zootecnia.</p>

                                                <div class="mt-2 mt-lg-auto">
                                                    <a href="<?=URL_VIEW ?>about.php" class="custom-link mb-2">
                                                        Leer más sobre nosotros
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="pills-youtube" role="tabpanel" aria-labelledby="pills-youtube-tab">

                                    <div class="row">
                                        <div class="col-lg-7 col-12">
                                            <div class="ratio ratio-16x9">
                                                <iframe src="https://www.youtube-nocookie.com/embed/f_7JqPDWhfw?controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                            </div>
                                        </div>

                                        <div class="col-lg-5 col-12">
                                            <div class="d-flex flex-column h-100 ms-lg-4 mt-lg-0 mt-5">
                                                <h4 class="mb-3">Trabajo en campo</h4>

                                                <p>Podemos observaren el video una inseminación que se llevo acabo en el campo</p>

                                                <p>Un poco del trabajo que se realiza día a día en la veterinaria. </p>

                                                <div class="mt-2 mt-lg-auto">
                                                    <a href="<?=URL_VIEW ?>contact.php" class="custom-link mb-2">
                                                        Trabaja con nosotros!
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <section class="featured-product section-padding">
                <div class="container">
                    <div class="row">
                        
                        <div class="col-12 text-center">
                            <h2 class="mb-5">Nuestros Servicios</h2>
                        </div>

                        <div class="col-lg-4 col-12 mb-3">
                            <div class="product-thumb">
                                <a href="<?=URL_VIEW ?>product-detail.php">
                                    <img src="images/product/evan-mcdougall-qnh1odlqOmk-unsplash.jpeg" class="img-fluid product-image" alt="">
                                </a>

                                <div class="product-top d-flex">
                                    <span class="product-alert me-auto">1</span>

                                    <a href="#" class="bi-heart-fill product-icon"></a>
                                </div>

                                <div class="product-info d-flex">
                                    <div>
                                        <h5 class="product-title mb-0">
                                            <a href="<?=URL_VIEW ?>product-detail.php" class="product-title-link">Consulta presencial</a>
                                        </h5>

                                        <p class="product-p"></p>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-12 mb-3">
                            <div class="product-thumb">
                                <a href="<?=URL_VIEW ?>product-detail.php">
                                    <img src="images/product/jordan-nix-CkCUvwMXAac-unsplash.jpeg" class="img-fluid product-image" alt="">
                                </a>

                                <div class="product-top d-flex">
                                    <span class="product-alert">2</span>

                                    <a href="#" class="bi-heart-fill product-icon ms-auto"></a>
                                </div>

                                <div class="product-info d-flex">
                                    <div>
                                        <h5 class="product-title mb-0">
                                            <a href="<?=URL_VIEW ?>product-detail.php" class="product-title-link">Teleconsulta</a>
                                        </h5>

                                        <p class="product-p"></p>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-12">
                            <div class="product-thumb">
                                <a href="<?=URL_VIEW ?>product-detail.php">
                                    <img src="images/product/nature-zen-3Dn1BZZv3m8-unsplash.jpeg" class="img-fluid product-image" alt="">
                                </a>

                                <div class="product-top d-flex">
                                <span class="product-alert">3</span>
                                    <a href="#" class="bi-heart-fill product-icon ms-auto"></a>
                                </div>

                                <div class="product-info d-flex">
                                    <div>
                                        <h5 class="product-title mb-0">
                                            <a href="<?=URL_VIEW ?>product-detail.php" class="product-title-link">Cirugías básicas </a>
                                        </h5>

                                        <p class="product-p"></p>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="col-12 text-center">
                            <a href="<?=URL_VIEW ?>products.php" class="view-all">Ver Servicios...</a>
                        </div>

                    </div>
                </div>
            </section>

        </main>

        <?php include FOLDER_TEMPLATE . 'footer.php' ?>
    </body>
</html>
