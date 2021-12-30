<?php
	include "../../config.php"; 
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

            <section class="sign-in-form section-padding">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-8 mx-auto col-12">

                            <h1 class="hero-title text-center mb-5">Iniciar Sesión</h1>

                            <div class="row">
                                <div class="col-lg-8 col-11 mx-auto">
                                    <form role="form" method="post">

                                        <div class="form-floating mb-4 p-0">
                                            <input type="number" name="email" id="email"  class="form-control" placeholder="1111" required>

                                            <label for="email">Documento</label>
                                        </div>

                                        <div class="form-floating p-0">
                                            <input type="password" name="password" id="password" class="form-control" placeholder="****" required>

                                            <label for="password">Contraseña</label>
                                        </div>

                                        <button type="submit" class="btn custom-btn form-control mt-4 mb-3">
                                            Ingresar
                                        </button>
                                    </form>
                                    <!--<button type="submit"  onclick="index.html" class="btn custom-btn form-control mt-4 mb-3" style="color: black;background-color: white; border: 2px solid #0e0f0e;">
                                        Regresar
                                    </button>-->
                                </div>
                            </div>
                            
                        </div>

                    </div>
                </div>
            </section>

        </main>

        <?php include FOLDER_TEMPLATE . 'footer.php' ?>

    </body>
</html>
