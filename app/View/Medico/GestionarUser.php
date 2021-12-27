<?php 
include "../../config.php";
?>
<!DOCTYPE html>
<html lang="zxx">
<head>
    <?php include FOLDER_TEMPLATE . 'head.php';?>
    <link rel="stylesheet"  href="<?= URL_CSS?>estilo_form.css"> 
    <?php include FOLDER_TEMPLATE . 'scripts.php' ?>
    <!--====== Javascripts & Jquery ======-->
    <!--?php include FOLDER_TEMPLATE . 'scripts.php' ?-->
    <script src="<?= URL_JS?>lista.js"></script>
</head>
<body>
    <figure><img src="<?= URL_IMG?>vet.jpeg" class="logo" alt="logodevete"></figure>
    <!-- Page Preloder 
    <div id="preloder">
        <div class="loader"></div>
    </div>-->
    <!-- Header section -->
    <!--?php include FOLDER_TEMPLATE . 'menu.php' ?-->
    <!-- Header section end-->
    <!-- Hero section end-->
    <?php include FOLDER_VIEWS.'actualizar_usuario.php' ?>


    <!-- Modal -->
    <div class="modal fade" id="ModalUpdateUser" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalScrollableTitle">Actualizar datos</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
          </button>
      </div>
      <div class="modal-body">
        <form id="formUpdateUser">
            <div class="form-group" type="hide">
                <label>Password</label>
                <div class="input-group">
                    <input type="text" class="form-control" id="inputIdUpdate" name="inputIdUpdate">                   
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Nombres</label>
                    <input type="text" class="form-control" id="inputNombreUpdate" name="inputNombreUpdate" >
                </div>
                <div class="form-group col-md-6">
                    <label>Apellidos</label>
                    <input type="text" class="form-control" id="inputApellidosUpdate" name="inputApellidosUpdate" >
                </div>
            </div>     
            <div class="form-group">
                <label>Correo electronico</label>
                <div class="input-group">
                    <input type="email" class="form-control" id="inputCorreoUpdate" name="inputCorreoUpdate" placeholder="ejemplo123@misena.edu.co">
                    <div class="input-group-prepend" disabled>
                        <div class="input-group-text" id="btnGroupAddon"><i class="fas fa-at icono"></i></div>
                    </div> 
                </div>
            </div>
            <div class="form-group">
                <label>Password</label>
                <div class="input-group">
                    <input type="text" class="form-control" id="inputPasswordUpdate" name="inputPasswordUpdate">                   
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Telefono</label>
                    <input type="number" class="form-control" id="inputTelefonoUpdate" name="inputTelefonoUpdate" min="1" max="10">
                </div>
                <div class="form-group col-md-6">
                    <label>Direccion</label>
                    <input type="text" class="form-control" id="inputDireccionUpdate" name="inputDireccionUpdate" >
                </div>
            </div> 
            <div class="form-group">
                <label>Estado</label>
                <select class="form-control" id="inputEstadoUpdate" name="inputEstadoUpdate">
                    <option value=1>Activo</option>
                    <option value=2 selected>Inactivo</option>
                </select>
            </div>
            <div class="form-group">
                <label>Rol / Cargo</label>
                <select class="form-control" id="inputRolUpdate" name="inputRolUpdate">
                    <option value="Paciente">Paciente</option>
                    <option value="Medico" selected>Medico</option>
                </select>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">cancelar</button>
            <button type="button" class="btn btn-primary" id="btnUpdateUser" name="btnUpdateUser" data-dismiss="modal">Guardar cambios</button>
        </div>
    </form>
</div>
</div>
</div>
<br>
<div class="container">
    <FORM method="POST" id="formUserRegresar" action="../View/registrar_usuarios.php">
      <button class="btn btn-dark" type="submit"id="btnFormRegistrarUsers">
       Registrar Usuario
   </button>
</FORM>
<br>

<div id="mensaje"></div>

<br>

<div class="divClass">
<table class="table table-dark">
    <thead class="thead-dark">
      <tr>
        <th class="col-md-auto">Documento</th>
        <th class="col-md-auto">Nombre</th>
        <th class="col-md-auto">Apellido</th>
        <th class="col-md-auto">Correo</th>
        <th class="col-md-auto">Teléfono</th>
        <th class="col">Dirección</th>
        <th class="col-md-auto">Tipo de Usuario</th>
        <th class="col-md-auto">Estado</th>
    </tr>
</thead>
<tbody id="tbodyUsers">

</tbody>
<tfoot>
    <tr>
        <th colspan="9" class="col">
            <FORM method="POST" action="../View/menumedico.php">
                <button class='btn btn-primary' type='submit' name='btnRegresar' id="btnRegresar">
                    Regresar
                </button>
            </FORM>
        </th>
    </tr>
</tfoot>
</table>
</div>
<!--?php include FOLDER_VIEWS . 'ActualizarDatosModal.php' ?-->



<?php include FOLDER_TEMPLATE . 'footer.php' ?>



<!--====== Javascripts & Jquery ======-->
    <!--script src="bootstrap/js/jquery-3.2.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="bootstrap/js/owl.carousel.min.js"></script>
    <script src="bootstrap/js/main.js"></script-->

    </body>
    </html>